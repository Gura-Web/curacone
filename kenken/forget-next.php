<pre>
<?php
// 定数ファイルの読み込み
require_once __DIR__ . "/define.php";
$errorMsg[]="";
$errorFlg=false;
session_start();
if( isset($_SESSION["next"] ) && $_SESSION["next"]!=="" ){
    // ログインされた方のユーザーid
    $user = $_SESSION[ "next" ];
    $id=$user["id"];
    $useranswer=$user["answer"];
    if(isset($_POST["completed"])){
        $answer=filter_input(INPUT_POST,"useranswer");
        $inputPassword=[
            "newpassword" => filter_input( INPUT_POST, "newpassword" ),
            "repassword" => filter_input( INPUT_POST, "repassword" )
        ]; 
        if($answer===""){
            $errorMsg[]="答えを入力してください";
            $errorFlg=true;
        }
        else if($answer === $useranswer){
        }
        else{
            $errorMsg[]="答えを間違いました";
            $errorFlg=true;
        }
        //未入力確認
        if( $inputPassword[ "newpassword" ] === "" ){
            $errorMsg[]="newパスワードを入力してください";
            $errorFlg=true;
        }
        if( ! preg_match( "/^[a-zA-Z0-9]{8,12}$/", $inputPassword[ "newpassword" ] ) ){
            $errorMsg[] = "パスワードには8文字以上・12文字以内で半角英数のみ使用できます。";
            $errorFlg = true;
        }
        if($inputPassword["newpassword"] === $inputPassword["repassword"]){
            $hashSalt=hash(HASH_ALG,HASH_SALT);
            $newhashPassword=hash(HASH_ALG,$inputPassword[ "newpassword" ] . $hashSalt);
  
        }
        else{
            $errorMsg[]="入力されたnewパスワードとパスワードの確認が同じではありません";
            $errorFlg=true; 
        }
        if(!$errorFlg){
            $instance=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME );
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
            header("Location:url.php");  
        }

    }
    
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
    <?php foreach($errorMsg as$v):?>
    <p style="color:red"><?= $v ?></p>
    <?php endforeach;?>
    <form action="" method="post" enctype="multipart/form-data">
    <p><?= $user["question"] ?></p>
    <p>答え:<input type="text" name="useranswer" value=""></p>
    <p>パスワード:<input type="password" name="newpassword" value="" maxlength='12'></p>
    <p>パスワード確認:<input type="password" name="repassword" value="" maxlength='12'></p>
    <button type="submit" name="completed">完成</button>
    </form>
</body>
</html>