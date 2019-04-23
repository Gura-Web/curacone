<?php
// セッション開始
session_start();
if( isset( $_SESSION[ "login" ] ) && $_SESSION[ "login" ] !== "" ){
    // セッションのログイン情報を削除
    session_destroy();
    // ログインページへ移動
}
header("Location:login.php");
exit;
?>