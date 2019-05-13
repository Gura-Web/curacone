$(function(){
  $(".btn-humb").on("click",function(){
    console.log("aaa");
    $(".menu").addClass("on");
  })

  $(".btn-menu-close").on("click",function(){
    $(".menu").removeClass("on");
  })
});