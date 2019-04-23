<pre>
<?php 
// 定数ファイル読み込み
require_once __DIR__ . "/define.php";
$errorMsg="";
$errorFlg=false;
if(isset($_POST["next"])){
    $user_mail=filter_input(INPUT_POST,"user_mail");
    if($instance=new mysqli( DB_HOST, DB_USER, DB_PASS, DB_NAME )){
        $instance->set_charset("utf8");
        $sql="SELECT * FROM curacone_user WHERE user_mail='{$user_mail}'";
            if($result=$instance->query($sql)){
                // SQLの結果を取り出す
                $userAuth = $result->fetch_assoc(); 
            }
            if($user_mail===$userAuth["user_mail"]){
                session_start();
                $_SESSION["next"]=$userAuth;
                header("Location:forget-next.php");
            }
        else{
            $errorMsg="メールアドレス存在しない";
            $errorFlg=true;
        }
    }
    else{
        print "エラー発生しました";
    }
}
?>
</pre>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta Ωname="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>パスワード忘れた方</h1>
    <p style="color:red"><?php print $errorMsg;?></p>
    <form action="" method="post" enctype="multipart/form-data">
    <p>メールアドレス入力してください</p>
    <input type="text" name="user_mail" value="">
    <button type="submit" name="next">次へ</button>
    </form>
</body>
</html>
