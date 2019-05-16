$(function(){

  // メニュー表示/非表示
  $(".btn-humb").on("click",function(){
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
      }
      
    })
    
  })
  $(".btn-modal-close").on("click",function(){
    $(".modal-wrap").removeClass("on");
    $(".foot").removeClass("no");
  })

  // footer常に下に
  let mainHei = "";
  if ($("main").height() < $(window).height()){
    
    if ($(".head-simple").height() == undefined){
      mainHei = $(window).height() - $(".foot").height();
    }
    else{
      mainHei = $(window).height() - $(".foot").height() - $(".head-simple").innerHeight();
    }
    $("main").height(mainHei);
  }

  // マイページ編集
  $(".btn-edit").on("click",function(){
    $(".prof-info").addClass("edit");
    $(".prof-edit__event").addClass("edit");
    $(".prof-info__name input").removeAttr("readonly");
    $(".prof-info__text textarea").removeAttr("readonly");
  })
  $(".btn-cancel,.btn-preser").on("click",function(){
    $(".prof-info").removeClass("edit");
    $(".prof-edit__event").removeClass("edit");
    $(".prof-info__name input").attr("readonly",true);
    $(".prof-info__text textarea").attr("readonly", true);
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
  


  
});