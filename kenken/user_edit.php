<pre>
<?php
// 定数ファイルの読み込み
require_once __DIR__ . "/define.php";
$errorMsg[]="";
$errorFlg=false;
session_start();
if( isset($_SESSION["login"] ) && $_SESSION["login"]!=="" ){
    // ログインされた方のユーザーid
    $user = $_SESSION[ "login" ];
    $id=$user["id"];
    print_r($id);
    if(isset($_POST["completed"])){
        $inputPassword=[
            "password" => filter_input( INPUT_POST, "password" ),
            "newpassword" => filter_input( INPUT_POST, "newpassword" ),
            "repassword" => filter_input( INPUT_POST, "repassword" )
        ];
        //未入力確認
        if( $inputPassword[ "password" ] === "" ){
            $errorMsg[]="パスワードを入力してください";
            $errorFlg=true;
        }
        if( $inputPassword[ "newpassword" ] === "" ){
            $errorMsg[]="newパスワードを入力してください";
            $errorFlg=true;
        }
        if( $inputPassword[ "repassword" ] === "" ){
            $errorMsg[]="確認パスワードを入力してください";
            $errorFlg=true;
        }
        if( ! preg_match( "/^[a-zA-Z0-9]{8,12}$/", $inputPassword[ "newpassword" ] ) ){
            $errorMsg[] = "パスワードには8文字以上・12文字以内で半角英数のみ使用できます。";
            $errorFlg = true;
        }
        $hashSalt=hash(HASH_ALG,HASH_SALT);
        $hashPassword = hash( HASH_ALG ,$inputPassword["password"].hash( HASH_ALG , HASH_SALT));
        if($hashPassword===$user["password"]){

        }
        else{
            $errorMsg[]="パスワード間違いました";
            $errorFlg=true;
        }
        if($inputPassword["newpassword"] === $inputPassword["repassword"]){
            $hashSalt=hash(HASH_ALG,HASH_SALT);
            $newhashPassword=hash(HASH_ALG,$inputPassword[ "newpassword" ] . $hashSalt);
            
        }
        else{
            $errorMsg[]="入力されたnewパスワードとパスワードの確認が同じではありません";
            $errorFlg-true; 
        }
        if($instance=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME )){
            $instance->set_charset("utf8");
            $sql="SELECT * FROM curacone_user where id=$id";
            if(!$r=$instance->query($sql)){
                print $sql;
                exit;
            } 
            if($r->num_rows){
                $sql="
                UPDATE curacone_user SET 
                password='{$newhashPassword}', 
                created_at=now()
                WHERE id={$id}
                "; 
            }
            if(!$instance->query($sql)){
                print $sql;
    
            }
            $instance->close();
        }
        else{
            print "データベースの接続に失敗しました";
            header("Location:user_edit.php");
            exit;      
        }


    }
    session_destroy();
}
else{
    header("Location:login.php");
    exit;
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
    <h1>パスワード編集</h1>
        <?php foreach($errorMsg as$v):?>
        <p style="color:red"><?= $v ?></p>
        <?php endforeach;?>
        <form action="" method="post" enctype="multipart/form-data">
        <p>パスワード:<input type="password" name="password" value="" maxlength='12'></p>
        <p>newパスワード:<input type="password" name="newpassword" value="" maxlength='12'></p>
        <p>パスワード確認:<input type="password" name="repassword" value="" maxlength='12'></p>
        <button type="sumbit" name="completed">完成</button>
        </form>   

</body>
</html>