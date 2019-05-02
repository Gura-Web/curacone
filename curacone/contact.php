<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="ページの説明">
  <title>Cura&nbsp;Cone｜お問い合わせ</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Asap:400,700|M+PLUS+1p:400,700" rel="stylesheet">
</head>
<body>
<!-- <header> 
    <h1><img src="img/logo.png" alt="CuraCone"></h1>
  </header> -->
    <div class="menu">
      <h1 class="logo"><a href="index.html"><img src="img/logo.png" alt="CuraCone"></a></h1>

      <!-- ログイン済み -->
      <div class="login">
        <a href="mypage.html" class="login__icon">
          <p class="icon"><img src="img/icon-sample.png" alt="自分のプロフィールアイコン"></p>
          <div class="login__prof">
            <p>三木 ケンケン</p>
            <span>ログイン中</span>
          </div>
        </a>
      </div>

      <!-- ログインしてない -->
      <!-- <div class="guest">
        <button class="btn btn--blue">ログイン</button>
        <button class="btn btn--yellow">会員登録</button>
      </div> -->

      <nav class="menu__glnav">
        <ul>
          <li class="menu-glnav__list">
            <a href="index.php">
              <?php include("read/icon-home.html"); ?>
              <span>HOME</span>
            </a>
          </li>
          <li class="menu-glnav__list">
            <a href="mypage.php">
              <?php include("read/icon-mypage.html"); ?>
              <span>MyPage</span>
            </a>
          </li>
          <li class="menu-glnav__list on">
            <a href="contact.php">
              <?php include("read/icon-contact.html"); ?>
              <span>Contact</span>
            </a>
          </li>
          <li class="menu-glnav__list"> 
            <a href="setting.php">
              <?php include("read/icon-setting.html"); ?>
              <span>Setting</span>
            </a>
          </li>
        </ul>
      </nav>
      <button class="btn menu__logout">
        <img src="img/icon-logout.svg" alt="">
        ログアウト
      </button>
    </div><!-- .side -->

    <main class="deco">
      <div class="title">
        <h2 class="title__head"><span>お問い合わせ</span><br>Contact&nbsp;us</h2>
      </div>

      <div class="contact">
        <div class="contact-mail">
          <h3 class="contact-mail__head">メールアドレス</h3>
          <div class="contact-mail__box">
            <p>samplesamplesample@gmail.com</p>
            <button class="btn-copy"><img src="img/icon-copy.svg" alt="メールアドレスコピーボタン"></button>
          </div>
        </div>

        <div class="contact-twitter">
          <h3 class="contact-twitter__head">Twitter</h3>
          <p class="contact-twitter__box">
            <a href="">
              <img src="img/icon-twitter.svg" alt="ツイッターボタン">
            </a>
          </p>
        </div>
      </div>
      
    </main>
  <footer class="foot">
    &copy; 2019 curacone.
  </footer>
  
</body>
</html>