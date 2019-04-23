<pre>
<?php 
// 定数ファイル読み込み
require_once __DIR__ . "/define.php";
$errorMsg=[];
$errorFlg=false;
// ログインのsubmit送信された時
if(isset($_POST["login"])){
    $inputAccount=filter_input(INPUT_POST,"user_mail");
    $inputPassword=filter_input(INPUT_POST,"user_password");
    // mailの未入力チェック
    if($inputAccount===""){
        $errorMsg[]="メールを入力してください";
        $errorFlg=true;
    }
    // passswordの未入力チェック
    if( $inputPassword === "" ){
        $errorMsg[]="パスワードを入力してください";
        $errorFlg=true;
    }
    if( $instance = new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME )){
        $instance->set_charset("utf8");
        $sql="SELECT * FROM curacone_user WHERE user_mail='{$inputAccount}'";
        if(!$r=$instance->query($sql)){
            print $sql;
            exit;
        }
        if($r->num_rows){
            if($result=$instance->query($sql)){
                // SQLの結果を取り出す
                $userAuth = $result->fetch_assoc(); 
            }
           
            // 入力したパスワードハッシュ化
            $hashPassword = hash( HASH_ALG ,$inputPassword.hash( HASH_ALG , HASH_SALT));
            // 入力したパスワードチェック
            if($hashPassword===$userAuth["password"]){
                session_start();
                $_SESSION["login"]=$userAuth;

                // ログインできました
                header("Location:index.php");
            }
            else{
                $errorMsg[]="パスワード間違いました";
                $errorFlg=true;
    
            }       
        }
        else{
            $errorMsg[]="このメール存在してない";
            $errorFlg=true;
        }
        $instance->close();
    }
    else{
        print "データベースエラー";
    }
}
?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>ログイン</h1>
<!-- エラーメッセージを出す -->
<?php foreach($errorMsg as$v):?>
<p style="color:red"><?= $v ?></p>
<?php endforeach;?>
<form action="" method="post" enctype="multipart/form-data">
<p>メールアドレス</p>
<p><input type="text" name="user_mail" value=""></p>
<p>パスワード</p>
<p><input type="password" name="user_password" value></p>
<p><button type="sumbit" name="login">ログイン</button></p>
<a href="forget.php">パスワード忘れた方こちら</a>
</form>
    
</body>
</html>