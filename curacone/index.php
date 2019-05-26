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