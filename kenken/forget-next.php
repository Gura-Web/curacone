<pre>
<?php
// 定数ファイル読み込み
require_once __DIR__ . "/define.php";
$errorMsg="";
$errorFlg=false;
session_start();
if( isset($_SESSION["next"] ) && $_SESSION["next"]!=="" ){
    $user = $_SESSION[ "next" ];
    print_r($user);
    if(isset($_POST["next_password"])){   
        $answer=filter_input(INPUT_POST,"answer"); 
        if($answer===$user["answer"]){
            session_start();
            $_SESSION["next_password"]=$user;

            header("Location:forget-password.php");
        }else{
            $errorMsg="答え間違いました";
            $errorFlg=true;
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
    <p style="color:red"><?php print $errorMsg;?></p>
    <form action="" method="post" enctype="multipart/form-data">
    <p><?= $user["question"] ?></p>
    <p>答え:<input type="text" name="answer" value=""></p>
    <button type="submit" name="next_password">完成</button>
    </form>
</body>
</html>