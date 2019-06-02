$(function(){

  // メニュー表示/非表示
  $(".btn-humb").on("click",function(){
    $(".menu").addClass("on");
  })

  $(".btn-menu-close").on("click",function(){
    $(".menu").removeClass("on");
  })

  // モーダル表示/非表示
  $.each($(".work"),function(i,e){
    $(document).on("click",".work",function(){
      if (!$(".btn-erasure").hasClass("on")){
        $(".modal-wrap").addClass("on");
        $(".foot").addClass("no");
        $(".workList").addClass("no");
      }
    })
  })
  $(document).on("click",".btn-modal-close",function(){
    $(".modal-wrap").removeClass("on");
    $(".foot").removeClass("no");
    $(".workList").removeClass("no");
  })


  

  // マイページ編集
  $(".btn-edit").on("click",function(){
    $(".prof-info").addClass("edit");
    $(".prof-edit__event").addClass("edit");
    $(".prof-info__name input").removeAttr("readonly");
    $(".prof-info__text textarea").removeAttr("readonly");
    $("body").addClass("edit");
    if($(window).width() <= 960){
      $(this).css("opacity","0");
    }
  })
  $(".btn-cancel,.btn-preser").on("click",function(){
    $(".prof-info").removeClass("edit");
    $(".prof-edit__event").removeClass("edit");
    $(".prof-info__name input").attr("readonly",true);
    $(".prof-info__text textarea").attr("readonly", true);
    $("body").removeClass("edit");
    $(".btn-edit").css("opacity", "1");
  })

  // 投稿作品削除
  $(".btn-delete").on("click",function(){
    $(".btn-erasure").toggleClass("on");
  })

  $(".btn-erasure").on("click",function(){
    $(this).parent("li").css("display","none");
  })


  // URLでナビ変更
  let url = location.pathname;
  let page = url.split("/")[3].split(".")[0];
  const pages = ["index","mypage","contact","setting"];
  $.each(pages,function(i){
    if (page == pages[i]) {
      $(".menu-glnav__list").eq(i).addClass("on");
    }
  })
  

  // ドラッグ&ドロップでファイル送信
  // 対応の確認 操作ができるかどうかを見る
  if (!window.File || !window.FileReader || !window.FileList || !window.Blob) {
    return;
  }

  // イベントのキャンセル関数
  const cancelEvent = function (event) {
    event.preventDefault();
    event.stopPropagation();
  };

  // ファイルを読み込む関数
  const dropFileEvent = function (event) {

    cancelEvent(event);

    // ファイル一覧の取得
    let files = event.originalEvent.dataTransfer.files;

    // 各ファイルに対して処理を実施
    for (let i = 0; i < files.length; i++) {

      // ファイルの取得・読み取り
      let f = files[i];
      const reader = new FileReader();

      // 読み込み完了時の関数を登録
      reader.onload = function (e) {
        // Data URL形式のデータを取り出す(base64)
        let text = e.target.result;

        // outputに表示
        $(".img-area").text("");
        let img = $("<img>");
        img.attr("src", text);
        $(".img-area").append(img);
      };

      // 読み込んだファイルをDataURL形式で読み取る
      reader.readAsDataURL(f);
    }
  };

  // イベントの設定
  // dragenter,dragover,dragleave => 通常のイベントをキャンセルする関数を実行
  // drop => ファイルドロップ時の処理の関数を実行
  $(".img-area").on({
    "dragenter": cancelEvent,
    "dragover": cancelEvent,
    "dragleave": cancelEvent,
    "drop": dropFileEvent
  });


  // コピー
  $(".btn-copy").on('click', function () {
    var copyArea = $('.copy-area');
    copyArea.select();
    document.execCommand('copy');
  });

  
});