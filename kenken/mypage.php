<pre>
<?php
// 定数ファイルの読み込み
require_once __DIR__ . "/define.php";
session_start();
if( isset($_SESSION["login"] ) && $_SESSION["login"]!=="" ){
    // ログインされた方のユーザーid
    $user = $_SESSION[ "login" ];
    // print_r($user);
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
    <h1>Mypage</h1>
    <a href="logout.php">ログアウト</a>
    <div class="myuser">
    <h1>個人情報</h1>
    <p><img src="<?= $user["user_icon"] ?>" alt=""></p>
    <p>名前:<?= $user["user_name"] ?></p>
    <p>問題:<?= $user["question"] ?></p>
    <p>答え:<?= $user["answer"] ?></p>
    <p>メールアドレス:<?= $user["user_mail"] ?></p>
    <p><a href="user_edit.php?id=<?= $user["id"] ?>">パスワード編集</a></p>
    </div>
</body>
</html>