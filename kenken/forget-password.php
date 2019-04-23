<pre>
<?php
// 定数ファイル読み込み
require_once __DIR__ . "/define.php";
$errorMsg=[];
$errorFlg=false;
session_start();
if( isset($_SESSION["next_password"] ) && $_SESSION["next_password"]!=="" ){
    $user = $_SESSION[ "next_password" ];
    $id=$user["id"];
    // print_r($id);
    if(isset($_POST["update"])){
        $inputPassword=[
            "password" => filter_input( INPUT_POST, "password" ),
            "repassword" => filter_input( INPUT_POST, "repassword" )
        ];
        
        if( $inputPassword[ "password" ] === "" ){
            $errorMsg[]="パスワードを入力してください";
            $errorFlg=true;
        }

        if( ! preg_match( "/^[a-zA-Z0-9]{8,12}$/", $inputPassword[ "password" ] ) ){
            $errorMsg[] = "パスワードには8文字以上・12文字以内で半角英数のみ使用できます。";
            $errorFlg = true;
        }

        if($inputPassword["password"] === $inputPassword["repassword"]){
            // 同じ場合はパスワードハッシュ化
            $hashSalt=hash(HASH_ALG,HASH_SALT);
            $hashPassword=hash(HASH_ALG,$inputPassword[ "password" ] . $hashSalt);
        }
        else{
            $errorMsg[]="入力されたパスワードとパスワードの確認が同じではありません";
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
                    password='{$hashPassword}', 
                    created_at=now()
                    WHERE id={$id}
                ";

                header("Location:login.php");
            }
            if(!$instance->query($sql)){
                print $sql;
    
            }
            $instance->close();
        }    
        else{
            print "データベースの接続に失敗しました";
            header("Location:new.php");
            exit;
        }

    }   
}
else{
    header("Location:forget.php");
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
    <p>パスワード:<input type="password" name="password" value="" maxlength='12'></p>
    <p>パスワード確認:<input type="password" name="repassword" value="" maxlength='12'></p>
    <button type="submit" name="update">完成</button>
    </form>
</body>
</html>