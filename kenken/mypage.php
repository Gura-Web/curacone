<pre>
<?php
// 定数ファイルの読み込み
require_once __DIR__ . "/define.php";
session_start();
if( isset($_SESSION["login"] ) && $_SESSION["login"]!=="" ){
    // ログインされた方のユーザーid
    $user = $_SESSION[ "login" ];
    $id=$user["id"];
    if($instance=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME )){
        $instance->set_charset("utf8");
        $sql="SELECT*FROM curacone_user WHERE id={$id}";
        if(isset($_POST["icon_send"])){
            $user_icon=filter_input(INPUT_POST,"thumb");
            if(!$r=$instance->query($sql)){
                print $sql;
                exit;
            }
            if($r->num_rows){
                $sql="
                UPDATE curacone_user SET 
                user_icon='{$user_icon}', 
                created_at=now()
                WHERE id={$id}
                "; 
            }
            $instance -> query( $sql );
            if(!$instance -> query( $sql )){
                print "Query ERROR<hr>";
                print $sql;
            }
        }

        $sql="SELECT*FROM curacone_user WHERE id={$id}";
        if($result=$instance->query($sql)){
            $rows=[];
            while($row=$result->fetch_assoc()){
                $rows[]=$row;
            }
            $user=$rows[0];

        }
        $instance->close();
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
    <h1>Mypage</h1>
    <a href="logout.php">ログアウト</a>
    <div class="myuser">
    <h1>個人情報</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX-FILE-SIZE" value="2000000">
    <input type="hidden" name="thumb" value="">
    <div class="fileBox">
        <input type="hidden" name="up_file_base64[0]" value="">
        <div class="file-area">
            <div class="file-wrap">
                <figure><img src="<?= $user["user_icon"] ?>" alt="" class="thumb_file"></figure>
                <p>自分のアイコン</p>
                <input type="file" name="logoFile" value="" data-index="0">
            </div>
        </div>
    </div>
    <button type="sumbit" name="icon_send">写真登録</button>
    </form>
    <p>名前:<?= $user["user_name"] ?></p>
    <p>問題:<?= $user["question"] ?></p>
    <p>答え:<?= $user["answer"] ?></p>
    <p>メールアドレス:<?= $user["user_mail"] ?></p>
    <p><a href="user_password_edit.php">パスワード編集</a></p>
    </div>
</body>
<script src="js/jquery.js"></script>
<script>
$(function(){
    // user_icon
    $( document ).on( "change", "[type=file]", function(){
        console.log(this);
        var wrap = $(this).parents('.file-wrap');
        var file = this.files[0];
        // ファイルの読み込み
        var reader = new FileReader();
        reader.readAsDataURL(file);
        $(reader).on("load",function(){
            var imgBase64Data = this.result;
            $( ".thumb_file",wrap ).attr( "src", imgBase64Data );
            $("[name='thumb']").val(imgBase64Data);

        });
    });
 
});
</script>
</html>