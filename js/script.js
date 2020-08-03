$(function(){
  scrollLink();
  drwer();
  onScrollShowHeader();
  clickActive();
  scrollMenu();
});

function scrollLink(){
    $('a[href^="#"]').click(function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      $('a[href^="#"]').parent().removeClass('active');
      $('a[href^="'+ href +'"]').parent().addClass('active');
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
}

function drwer(){
  var menu = $('ul.in_menu_box');
	var btn = $('#menubtn');
	btn.on('click',function(){
    menu.slideToggle(250);
	});
  $('a[href^="#"]').click(()=>{
    if($(this).width() < 768){
      menu.slideToggle(250);
    }
  });
}

function clickActive(){
  $('a[href^="#"]').click(()=>{
    var href= $(this).attr("href");
  });
}

function onScrollShowHeader(){
  var nav = $('div.in_nav_box');
  $(window).scroll(function() {
    if(nav.offset().top > 0){
      if(nav.hasClass('scroll')){return;}
      nav.addClass('scroll');
      setTimeout(()=>{

      },1000);
    }else{
      nav.removeClass('scroll');
    }
  });
}

/**
 * 現在スクロール位置によるグローバルナビのアクティブ表示
 */
function scrollMenu() {
  // 配列宣言
  // ここにスクロールで点灯させる箇所のidを記述する
  // 数値は全て0でOK
  var array = {
    '#page-top': 0,
    '#about': 0,
    '#menu': 0,
    '#download': 0,
    '#schedule': 0,
    '#contact': 0
  };

  var $globalNavi = new Array();

  // 各要素のスクロール値を保存
  for (var key in array) {
    if ($(key).offset()) {
      array[key] = $(key).offset().top - 10; // 数値丁度だとずれるので10px余裕を作る
      $globalNavi[key] = $('.menu_box ul li a[href="' + key + '"]');
    }
  }

  // スクロールイベントで判定
  $(window).scroll(function () {
    for (var key in array) {
      if ($(window).scrollTop() > array[key] - 50) {
        $('.menu_box ul li a').each(function() {
          $(this).parent().removeClass('active');
        });
        $globalNavi[key].parent().addClass('active');
      }
    }
  });
}
