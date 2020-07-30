$(function(){
  scrollLink();
  drwer();
  onScrollShowHeader();
  clickActive();
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
