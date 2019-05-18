$(function () {
  $.ajax({
    url: "read/works.php",
    method: "get",
    cache: false,
    dataType: "json",
    timeout: 10000
  })
  .done(function(data){
    console.log(data)

    
  $.each(data,function(i,e){
    let item = `<li class="work" >
      <p class="work__thumb"><img src="img/img-sample.png" alt="作品のサムネイル"></p>
        <h3 class="work__title">${data[i].workname}</h3>
        <div class="work__info">
          <a class="work-info__prof" href="mypage.html">
            <p class="icon icon-mini"><img src="img/icon-sample.png" alt="投稿者のアイコン"></p>
              <span>前田 大地</span>
          </a>
            <p class="work-info__comment">2</p>
        </div>
      </li>`

    $(".workList").append(item);
  })

    let mainHei = "";
    if ($(".head-simple").height() == undefined) {
      mainHei = $(window).height() - $(".foot").height();
    }
    else {
      mainHei = $(window).height() - $(".foot").height() - $(".head-simple").innerHeight();
    }
    $("main").height(mainHei);
    
  })
  .fail(function(){
    console.log("error")
  })
});