<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="ページの説明">
  <title>Cura&nbsp;Cone｜会員登録/ログイン</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Asap:400,700|M+PLUS+1p:400,700" rel="stylesheet">
</head>
<body>
  <?php include("read/header.php") ?>
  <main class="sign-wrap">
    <div class="sign">
      <div class="sign__change">
        <p><a href="sign.php?type=in" class="btn-signIn changeFlg on"><span>SIGN</span>&nbsp;IN</a></p>
        <p><a href="sign.php?type=up" class="btn-signup changeFlg"><span>SIGN</span>&nbsp;UP</a></p>
      </div>

      <form action="" class="sign__form">
        <div class="form-content"><p>Mail</p><input type="text" placeholder="yamadataro@gmail.com"></div>
        <div class="form-content form-content--pass"><p>Password</p><input type="text" placeholder="yamadataro@gmail.com"></div>
        <button class="btn btn--blue form-content__btn">ログイン</button>
        <p class="form-content__forget"><a href="">パスワードを忘れた？</a></p>
      </form>

      <!-- <form action="" class="sign__form">
        <div class="form-content"><p>Mail</p><input type="text" placeholder="yamadataro@gmail.com"></div>
        <div class="form-content form-content--pass"><p>Password</p><input type="text" placeholder="yamadataro@gmail.com"></div>
        <button class="btn btn--yellow form-content__btn">ログイン</button>
      </form> -->

    </div>
    <div class="sign-deco">
      <img src="img/deco-sign.svg" alt="">
    </div>
  </main>
  <footer class="foot foot-sign">&copy; 2019 curacone.</footer>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/works.js"></script>
  <script src="js/event.js"></script>

</body>
</html>