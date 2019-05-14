$(function(){

  // メニュー表示/非表示
  $(".btn-humb").on("click",function(){
    console.log("aaa");
    $(".menu").addClass("on");
  })

  $(".btn-menu-close").on("click",function(){
    $(".menu").removeClass("on");
  })

  // モーダル表示/非表示
  $.each($(".work"),function(){
    $(this).on("click",function(){
      if (!$(".btn-erasure").hasClass("on")){
        $(".modal-wrap").addClass("on");
        $(".foot").addClass("no");
        console.log($(this))
      }
      
    })
    
  })
  $(".btn-modal-close").on("click",function(){
    $(".modal-wrap").removeClass("on");
    $(".foot").removeClass("no");
  })

  // footer常に下に
  if ($("main").height() < $(window).height()){
    
    if ($(".head-simple").height() == undefined){
      var mainHei = $(window).height() - $(".foot").height();
    }
    else{
      var mainHei = $(window).height() - $(".foot").height() - $(".head-simple").innerHeight();
    }
    $("main").height(mainHei);
  }

  // マイページ編集
  $(".btn-edit").on("click",function(){
    $(".prof-info").addClass("edit");
    $(".prof-edit__event").addClass("edit");
  })

  $(".btn-cancel,.btn-preser").on("click",function(){
    $(".prof-info").removeClass("edit");
    $(".prof-edit__event").removeClass("edit");
  })

  // 投稿作品削除
  $(".btn-delete").on("click",function(){
    $(".btn-erasure").toggleClass("on");
  })
  console.log($(".btn-erasure"))

  $(".btn-erasure").on("click",function(){
    $(this).parent("li").css("display","none");
    console.log($(this))
  })
});