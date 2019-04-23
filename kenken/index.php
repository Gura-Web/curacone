<pre>
<?php
// 定数ファイルの読み込み
require_once __DIR__ . "/define.php";
session_start();
if( isset($_SESSION["login"] ) && $_SESSION["login"]!=="" ){
    // ログインされた方のユーザーid
    $user=$_SESSION[ "login" ];
    $id =$user["id"];

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
    <h1>indexページ</h1>
    <a href="mypage.php?id=<?= $id ?>"><img src="<?= $user["user_icon"] ?>" alt=""></a>
    <p>こんにちは<?= $user["user_name"] ?></p>
    <a href="logout.php">ログアウト</a>
</body>
</html>