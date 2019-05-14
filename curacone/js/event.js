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
      $(".modal-wrap").addClass("on");
      $(".foot").addClass("no");
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
});