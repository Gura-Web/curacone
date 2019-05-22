<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="ページの説明">
  <title>Cura&nbsp;Cone｜作品一覧</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Asap:400,700|M+PLUS+1p:400,700" rel="stylesheet">
</head>
<body>
  <?php include("read/menu.php"); ?>
    <main class="deco main-column">
      <div class="title bg">
        <h2 class="title__head"><span>みんなの作品</span><br>All&nbsp;Works</h2>
        <div class="work-search">
          <p class="work-search__bar">
            <img src="img/icon-search.svg" alt="">
            <input type="text" placeholder="検索したいキーワードを入力"></p>
          <img class="work-search__img" src="img/deco-search.svg" alt="">
        </div>
      </div>

      <div class="modal-wrap">
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
                <p class="comment-list__text"><span>聖書第１章、 はじめに神は天と地とを創造された。 2 地は形なく、むなしく、やみが淵のおもてにあり、神の霊が水のおもてをおおっていた。</span></p>
              </li>
              <li class="comment__list">
                <p class="comment-list__icon"><img src="img/icon-sample.png" alt=""><span>砂糖 大地</span></p>
                <p class="comment-list__text repOn"><span>聖書第１章、 はじめに神は天と地とを創造された。 2 地は形なく、むなしく、やみが淵のおもてにあり、神の霊が水のおもてをおおっていた。</span></p>
                <ul class="reply">
                  <li class="reply__list">
                    <p class="comment-list__icon"><img src="img/icon-sample.png" alt=""><span>砂糖 大地</span></p>
                    <p class="comment-list__text">聖書第１章、 はじめに神は天と地とを創造された。 2 地は形なく、むなしく、やみが淵のおもてにあり、神の霊が水のおもてをおおっていた。</p>
                  </li>
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
      </div>
      
      <ul class="workList"></ul>
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

  <?php include("read/footer.php") ?>
  
</body>
</html>