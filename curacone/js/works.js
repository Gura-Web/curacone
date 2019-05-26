$(function () {

  //
  // 一覧表示
  //
  let works = [
    {
      id: 1,
      work_title: "作品1",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 2,
      work_title: "作品2",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 3,
      work_title: "作品3",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 4,
      work_title: "作品4",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 5,
      work_title: "作品5",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 6,
      work_title: "作品6",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 7,
      work_title: "作品7",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 8,
      work_title: "作品8",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 9,
      work_title: "作品9",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 10,
      work_title: "作品10",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 11,
      work_title: "作品11",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    },
    {
      id: 12,
      work_title: "作品12",
      work_thumb: "img/img-modal.png",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      comment: 2
    }
  ];


  //
  // モーダル表示 データベース使う時(本番)は、クリックする時にajax通信を行って、一件だけを取得して表示する。
  //
  let work_detail = [
    {
      id: 1,
      work_title: "作品1",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品1へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品1へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 2,
      work_title: "作品2",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品2へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品2へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 3,
      work_title: "作品3",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品3へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品3へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 4,
      work_title: "作品4",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品4へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品4へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 5,
      work_title: "作品5",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品5へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品5へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 6,
      work_title: "作品6",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品6へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品6へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 7,
      work_title: "作品7",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品7へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品7へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 8,
      work_title: "作品8",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品8へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品8へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 9,
      work_title: "作品9",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品9へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品9へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 10,
      work_title: "作品10",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品10へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品10へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 11,
      work_title: "作品11",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品11へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品11へのコメント2",
          reply: []
        }
      ]
    },
    {
      id: 12,
      work_title: "作品12",
      work_text: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです<br><br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです",
      work_thumb: "img/img-modal.png",
      work_url: "https://dribbble.com/shots/6355293-Travel-Page-Animation",
      user_name: "前田大地",
      user_icon: "img/icon-sample.png",
      user_prof: "この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。",
      comment: [
        {
          write_name: "砂糖大地",
          write_text: "作品12へのコメント1",
          reply: [
            {
              write_name: "おぐら",
              write_text: "コメント1への返信1"
            },
            {
              write_name: "砂糖大地",
              write_text: "コメント1への返信2"
            }
          ]
        },
        {
          write_name: "みき",
          write_text: "作品12へのコメント2",
          reply: []
        }
      ]
    }
  ]


  // $.ajax({
  //   url: "read/works.php",
  //   method: "get",
  //   cache: false,
  //   dataType: "json",
  //   timeout: 10000
  // })
  // .done(function(data){
  //   console.log(data)


  $.each(works,function(i,e){

    let item = `<li class="work" data-work-id="${works[i].id}">
      <p class="work__thumb"><img src="${works[i].work_thumb}" alt="作品のサムネイル"></p>
        <h3 class="work__title">${works[i].work_title}</h3>
        <div class="work__info">
          <a class="work-info__prof" href="mypage/${works[i].id}.html">
            <p class="icon icon-mini"><img src="${works[i].user_icon}" alt="投稿者のアイコン"></p>
              <span>${works[i].user_name}</span>
          </a>
            <p class="work-info__comment">${works[i].comment}</p>
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

  $(".work").on("click",function(){
    $(".modal").remove();
    let workId = $(this).attr("data-work-id");
    let work;

    $.each(work_detail,function(i,e){
      
      if (e.id == workId){
        work = e;
      }
    })

    let item = `
        <div class="modal">
          <p class="modal__thumb"><img src="${work.work_thumb}" alt=""></p>
          <div class="modal__info">
            <div class="work">
              <h4 class="work__title">${work.work_title}</h4>
                <p class="work__url"><a href="${work.work_url}">${work.work_url}</a></p>
                <p class="work__text">
                  ${work.work_text}
                </p>
            </div>
            <div class="creator">
              <div class="creator-in">
                <div class="creator-in__title">
                  <span>制作者</span>
                  <p>Creator</p>
                </div>
                <div class="creator-in__prof">
                  <p class=""><img src="${work.user_icon}" alt=""></p>
                    <p class="prof__name">${work.user_name}</p>
                    <p class="prof__text">${work.user_prof}</p>
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
    `;
    $(".modal-wrap").append(item);
  })

    
  // })
  // .fail(function(){
  //   console.log("error")
  // })
});