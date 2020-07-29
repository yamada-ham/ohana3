$(function(){
  scrollLink();
  drwer();
  onScrollShowHeader();
});

function scrollLink(){
  $(function(){
    $('a[href^="#"]').click(function(){
      var speed = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      return false;
    });
  });
}

function drwer(){
  var menu = $('ul.in_menu_box');
	var btn = $('#menubtn');
	btn.on('click',function(){
    menu.slideToggle(250);
	});
}

function onScrollShowHeader(){
  var nav = $('div.in_nav_box');
  $(window).scroll(function() {
    if(nav.offset().top > 0){
      if(nav.hasClass('scroll')){return;}
      nav.addClass('scroll');
    }else{
      nav.removeClass('scroll');
    }
  });
}
