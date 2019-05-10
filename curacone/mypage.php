<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="ページの説明">
  <title>Cura&nbsp;Cone｜Mypage</title>
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
          <li class="menu-glnav__list on">
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

    <main>
      <div class="profile-wrap">
        <div class="profile">
          <div class="prof-info edit">
            <p class="prof-info__icon"><img src="img/icon-prof.png" alt=""></p>
            <div>
              <p class="prof-info__name">三木 ケンケン</p>
              <p class="prof-info__text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
            </div>
          </div>
          <div class="prof-edit">
            <button class="btn prof-edit__btn btn-edit"><img src="img/icon-edit.svg" alt="">プロフィールを編集</button>
            <div class="edit">
              <button class="btn prof-edit__btn btn-cancel">キャンセル</button>
              <button class="btn prof-edit__btn btn-preser btn--blue">変更を保存</button>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="modal-wrap">
        <button class="btn-modal-close"></button>
        <div class="modal">
          <p class="modal__thumb"><img src="img/img-modal.png" alt=""></p>
          <div class="modal__info">
            <div class="work">
              <h4 class="work__title">タイポグラフィアート</h4>
              <p class="work__url"><a href="">https://dribbble.com/shots/6355293-Travel-Page-Animation</a></p>
              <p class="work__text">
                この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
              </p>
            </div>
            <div class="creator">
              <div class="creator-in">
                <div class="creator-in__title">
                  <span>制作者</span>
                  <p>Creator</p>
                </div>
                <div class="creator-in__prof">
                  <p class=""><img src="img/icon-sample.png" alt=""></p>
                  <p class="prof__name">三木　ケンケン</p>
                  <p class="prof__text">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。</p>
                </div>
                <button class="btn btn--blue creator-in__btn">プロフィールを見る</button>
              </div>
            </div>
          </div>
          <div class="modal__comment">
            <h4>みんなのコメント</h4>
            <ul class="comment">
              <li class="comment__list">
                <p class="comment-list__icon"><img src="img/icon-sample.png" alt=""><span>砂糖 大地</span></p>
                <p class="comment-list__text">聖書第１章、 はじめに神は天と地とを創造された。 2 地は形なく、むなしく、やみが淵のおもてにあり、神の霊が水のおもてをおおっていた。</p>
              </li>
              <li class="comment__list">
                <p class="comment-list__icon"><img src="img/icon-sample.png" alt=""><span>砂糖 大地</span></p>
                <p class="comment-list__text">聖書第１章、 はじめに神は天と地とを創造された。 2 地は形なく、むなしく、やみが淵のおもてにあり、神の霊が水のおもてをおおっていた。</p>
                <ul class="reply">
                  <li class="reply__list">
                    <p class="comment-list__icon"><img src="img/icon-sample.png" alt=""><span>砂糖 大地</span></p>
                    <p class="comment-list__text">聖書第１章、 はじめに神は天と地とを創造された。 2 地は形なく、むなしく、やみが淵のおもてにあり、神の霊が水のおもてをおおっていた。</p>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="comment-submit">
              <h5 class="comment-submit__title">コメントをしてみよう！</h5>
              <p class="comment-submit__bar"><img src="img/icon-sample.png" alt=""><input type="text" placeholder="作品に対しての感想など..."></p>
            </div>
          </div>
        </div>
      </div> -->
      <div class="mypage-head">
        <h2 class="mypage-head__title">あなたの作品集</h2>
        <button class="btn-delete mypage-head__btn">作品を削除</button>
      </div>
      
      <ul class="workList">
        <li class="work">
          <button class="work__btn btn-erasure"></button>
          <p class="work__thumb"><img src="img/img-sample.png" alt="作品のサムネイル"></p>
          <h3 class="work__title">タイポグラフィアートの作品</h3>
          <div class="work__info">
            <a class="work-info__prof" href="mypage.html">
              <p class="icon icon-mini"><img src="img/icon-sample.png" alt="投稿者のアイコン"></p>
              <span>前田 大地</span>
            </a>
            <p class="work-info__comment">2</p>
          </div>
        </li>
        <li class="work">
          <button class="work__btn btn-erasure"></button>
          <p class="work__thumb"><img src="img/img-sample.png" alt="作品のサムネイル"></p>
          <h3 class="work__title">タイポグラフィアートの作品</h3>
          <div class="work__info">
            <a class="work-info__prof" href="mypage.html">
              <p class="icon icon-mini"><img src="img/icon-sample.png" alt="投稿者のアイコン"></p>
              <span>前田 大地</span>
            </a>
            <p class="work-info__comment">2</p>
          </div>
        </li>
        <li class="work">
          <button class="work__btn btn-erasure"></button>
          <p class="work__thumb"><img src="img/img-sample.png" alt="作品のサムネイル"></p>
          <h3 class="work__title">タイポグラフィアートの作品</h3>
          <div class="work__info">
            <a class="work-info__prof" href="mypage.html">
              <p class="icon icon-mini"><img src="img/icon-sample.png" alt="投稿者のアイコン"></p>
              <span>前田 大地</span>
            </a>
            <p class="work-info__comment">2</p>
          </div>
        </li>
        <li class="work">
          <button class="work__btn btn-erasure"></button>
          <p class="work__thumb"><img src="img/img-sample.png" alt="作品のサムネイル"></p>
          <h3 class="work__title">タイポグラフィアートの作品</h3>
          <div class="work__info">
            <a class="work-info__prof" href="mypage.html">
              <p class="icon icon-mini"><img src="img/icon-sample.png" alt="投稿者のアイコン"></p>
              <span>前田 大地</span>
            </a>
            <p class="work-info__comment">2</p>
          </div>
        </li>
        <li class="work">
          <button class="work__btn btn-erasure"></button>
          <p class="work__thumb"><img src="img/img-sample.png" alt="作品のサムネイル"></p>
          <h3 class="work__title">タイポグラフィアートの作品</h3>
          <div class="work__info">
            <a class="work-info__prof" href="mypage.html">
              <p class="icon icon-mini"><img src="img/icon-sample.png" alt="投稿者のアイコン"></p>
              <span>前田 大地</span>
            </a>
            <p class="work-info__comment">2</p>
          </div>
        </li>
        <li class="work">
          <button class="work__btn btn-erasure"></button>
          <p class="work__thumb"><img src="img/img-sample.png" alt="作品のサムネイル"></p>
          <h3 class="work__title">タイポグラフィアートの作品</h3>
          <div class="work__info">
            <a class="work-info__prof" href="mypage.html">
              <p class="icon icon-mini"><img src="img/icon-sample.png" alt="投稿者のアイコン"></p>
              <span>前田 大地</span>
            </a>
            <p class="work-info__comment">2</p>
          </div>
        </li>
      </ul>
      <button class="btn btn-view">viermore</button>
      <div class="btn-add">
        <a href="post.php">
          <div class="btn-add__deco">
            <span></span>
            <span></span>
          </div>
          <span class="btn-add__txt">作品を投稿する</span>
        </a>
      </div>
    </main>
  <footer class="foot">
    &copy; 2019 curacone.
  </footer>
  
</body>
</html>