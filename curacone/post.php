<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="ページの説明">
  <title>Cura&nbsp;Cone｜作品投稿</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Asap:400,700|M+PLUS+1p:400,700" rel="stylesheet">
</head>
<body>
  <?php include("menu.php") ?>
  <main class="deco post main-column">
    <div class="title">
      <h2 class="title__head"><span>あなたの作品を投稿しよう</span><br>Posting&nbsp;Your&nbsp;Works</h2>
    </div>

    <div class="post-inner">
      <form action="" class="post-form">
        <dl class="form-item">
          <dt class="post-form__head form-item__name">作品名<span>*</span></dt>
          <dd class="post-form__column"><p><input type="text" placeholder="投稿する作品の名前を入力"></p></dd>

          <dt class="post-form__head form-item__url">作品URL</dt>
          <dd class="post-form__column"><p><input type="text" placeholder="投稿する作品のURLを入力"></p></dd>

          <dt class="post-form__head form-item__img">作品画像<span>*</span></dt>
          <dd class="post-form__column">
            <div class="img-area">ここにファイルをドロップ<br>または
              <p class="img-area__select">
                <label for="img-select" class="btn">ファイルを選択</label>
                <input type="file" id="img-select">
              </p>
            </div>
          </dd>

          <dt class="post-form__head form-item__text">説明文<span>*</span></dt>
          <dd class="post-form__column"><textarea name="" id="" cols="51" rows="10" placeholder="投稿する作品の説明を入力"></textarea></dd>
        </dl>
        <button class="btn post-form__btn btn--blue btn-post">作品を投稿</button>
      </form>

      <div class="post__deco"><img src="img/deco-post.svg" alt=""></div>
    </div>
    
  </main>
  <?php include("footer.php") ?>
</body>
</html>