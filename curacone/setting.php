<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="ページの説明">
  <title>Cura&nbsp;Cone｜設定</title>
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
          <li class="menu-glnav__list">
            <a href="contact.php">
              <?php include("read/icon-contact.html"); ?>
              <span>Contact</span>
            </a>
          </li>
          <li class="menu-glnav__list on"> 
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

    <main class="deco all"><!-- .all今だけ -->  
      <div class="title">
        <h2 class="title__head"><span>設定</span><br>Setting</h2>
      </div>

      <p class="set-pass">パスワードを忘れた方は<a href="">コチラ</a></p>
      
    </main>
  <footer class="foot">
    &copy; 2019 curacone.
  </footer>
  
</body>
</html>