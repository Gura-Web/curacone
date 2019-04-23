<pre>
<?php 
// 定数ファイル読み込み
require_once __DIR__ . "/define.php";
// エラーmessige
$errorMsg=[];
$errorFlg=false;
// 登録ボタン押された時
if(isset($_POST["send"])){
    // inputのvalue値を取る
    $user_name=filter_input(INPUT_POST,"name");
    $user_mail=filter_input(INPUT_POST,"mail");
    $user_icon=filter_input(INPUT_POST,"thumb");
    $question=filter_input(INPUT_POST,"question");
    $answer=filter_input(INPUT_POST,"answer");
    $inputPassword=[
        "password" => filter_input( INPUT_POST, "password" ),
        "repassword" => filter_input( INPUT_POST, "repassword" )
    ];

    // 名前の未入力チェック
    if($user_name===""){
        $errorMsg[]="名前が入力してください";
        $errorFlg=true;
    }
    // mailの未入力チェック
    if($user_mail===""){
        $errorMsg[]="メールを入力してください";
        $errorFlg=true;
    }
    // passswordの未入力チェック
    if( $inputPassword[ "password" ] === "" ){
        $errorMsg[]="パスワードを入力してください";
        $errorFlg=true;
    }
    // 質問未入力のチェック
    if($question===""){
        $errorMsg[]="質問を入力してください";
        $errorFlg=true;
    }
    // 答え未入力のチェック
    if($answer===""){
        $errorMsg[]="答えを入力してください";
        $errorFlg=true;
    }
    // passwordの入力の半角英数と数字のみチェック
    // パスワードに8文字以上・12文字以下
    if( ! preg_match( "/^[a-zA-Z0-9]{8,12}$/", $inputPassword[ "password" ] ) ){
        $errorMsg[] = "パスワードには8文字以上・12文字以内で半角英数のみ使用できます。";
        $errorFlg = true;
      }
    // 入力したパスワードとパスワード確認内容同じの確認
    if($inputPassword["password"] === $inputPassword["repassword"]){
        // 同じ場合はパスワードハッシュ化
        $hashSalt=hash(HASH_ALG,HASH_SALT);
        $hashPassword=hash(HASH_ALG,$inputPassword[ "password" ] . $hashSalt);
    }
    else{
        $errorMsg[]="入力されたパスワードとパスワードの確認が同じではありません";
        $errorFlg-true;
    }
    // 保存された情報データベースに送信
    if($instance=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME )){
        $instance->set_charset("utf8");
        $sql="SELECT * FROM curacone_user where user_mail='{$user_mail}'";
        if(!$r=$instance->query($sql)){
            print $sql;
            exit;
        }
        if(!$r->num_rows){
            $sql="INSERT INTO curacone_user(
                user_name,
                user_mail,
                password, 
                user_icon, 
                question, 
                answer, 
                created_at
            )VALUES(
                '{$user_name}',
                '{$user_mail}',
                '{$hashPassword}',
                '{$user_icon}',
                '{$question}',
                '{$answer}', 
                now()
            )";
            header("Location:login.php");
           
        }
        else{
            $errorMsg[]="このメール存在しています";
            $errorFlg=true;

        }
        if(!$instance->query($sql)){
            print $sql;

        }
        $instance->close();
    }else{
        print "データベースの接続に失敗しました";
        header("Location:new.php");
        exit;

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
    <title>新規登録</title>
</head>
<body>
<h1>新規会員登録</h1>
<!-- エラーメッセージを出す -->
<?php foreach($errorMsg as$v):?>
<p style="color:red"><?= $v ?></p>
<?php endforeach;?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX-FILE-SIZE" value="2000000">
<input type="hidden" name="thumb" value="">
<p>名前:<input type="text" name="name" value="" maxlength='16'></p>
<p>mail:<input type="text" name="mail" value="" maxlength='16'></p>
<p>パスワード:<input type="password" name="password" value="" maxlength='12'></p>
<p>パスワード確認:<input type="password" name="repassword" value="" maxlength='12'></p>
<div class="fileBox">
    <input type="hidden" name="up_file_base64[0]" value="">
    <div class="file-area">
        <div class="file-wrap">
            <figure><img src="" alt="" class="thumb_file"></figure>
            <p>自分のアイコン</p>
            <input type="file" name="logoFile" value="" data-index="0">
            </label>
        </div>
    </div>
</div>
<p>この質問はパスワード忘れた時使う</p>
<p>質問:<input type="text" name="question" value="" maxlength='8'></p>
<p><input type="text" name="answer" value="" maxlength='8'></p>
<button type="sumbit" name="send">登録</button>
</form>
    
</body>
<script src="js/jquery.js">
</script>
<script src="js/new.js">
</script>
</html>