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
  <?php include("read/menu.php") ?>
  <main class="main-column">
    <div class="profile-wrap">
      <div class="profile">
        <div class="profile-inner">
          <div class="prof-info">
            <p class="prof-info__icon"><img src="img/icon-prof.png" alt=""></p>
            <div class="prof-text-wrap">
              <p class="prof-info__name"><input type="text" value="三木 ケンケン" readonly></p>
              <p class="prof-info__text"><textarea cols="20" rows="3" readonly>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</textarea></p>
            </div>
          </div>
          <div class="prof-edit">
            <button class="btn prof-edit__change btn-edit"><img src="img/icon-edit.svg" alt="">プロフィールを編集</button>
            <div class="prof-edit__event">
              <button class="btn prof-edit__btn btn-cancel">キャンセル</button>
              <button class="btn prof-edit__btn btn-preser btn--blue">変更を保存</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-wrap">
      <button class="btn-modal-close"></button>
    </div>
    
    <div class="mypage-head">
      <h2 class="mypage-head__title">あなたの作品集</h2>
      <button class="btn-delete mypage-head__btn">作品を削除</button>
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