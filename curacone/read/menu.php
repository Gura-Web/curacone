<header class="head-sp">
  <?php include("logo.html") ?>
  <div class="head-sp__humb btn-humb">
    <span></span>
    <span></span>
    <span></span>
  </div>
</header>
<div class="menu">
  <button class="btn-menu-close"></button>
  <?php include("logo.html") ?>

  <!-- ログイン済み -->
  <!-- <div class="login">
        <a href="mypage.html" class="login__icon">
          <p class="icon"><img src="img/icon-sample.png" alt="自分のプロフィールアイコン"></p>
          <div class="login__prof">
            <p>三木 ケンケン</p>
            <span>ログイン中</span>
          </div>
        </a>
      </div> -->

  <!-- ログインしてない -->
  <div class="guest">
    <p><a href="sign.php?type=in" class="btn btn--blue">ログイン</a></p>
    <p><a href="sign.php?type=up" class="btn btn--yellow">会員登録</a></p>
  </div>

  <nav class="menu__glnav">
    <ul>
      <li class="menu-glnav__list on">
        <a href="index.php">
          <?php include("icon-home.html"); ?>
          <span>HOME</span>
        </a>
      </li>
      <li class="menu-glnav__list">
        <a href="mypage.php">
          <?php include("icon-mypage.html"); ?>
          <span>MyPage</span>
        </a>
      </li>
      <li class="menu-glnav__list">
        <a href="contact.php">
          <?php include("icon-contact.html"); ?>
          <span>Contact</span>
        </a>
      </li>
      <li class="menu-glnav__list">
        <a href="setting.php">
          <?php include("icon-setting.html"); ?>
          <span>Setting</span>
        </a>
      </li>
    </ul>
  </nav>
  <button class="btn menu__logout">
    <img src="img/icon-logout.svg" alt="">ログアウト
  </button>
</div>