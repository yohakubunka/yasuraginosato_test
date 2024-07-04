$(".pagetop a").click(function(){
  $("html,body").animate({scrollTop:0}, 1000);
  return false;
});
$("a[href^='#']").click(function(){
  var target = $(this).attr("href");
  var sp = $(target).offset().top - 50;
  $("html,body").animate({scrollTop:sp},1000);
  return false;
});

$(window).scroll(function(){
  var st = $(this).scrollTop();
  var wh = $("header.index").height() + 150;
  if(st >= wh){
    $(".index-nav-wrap").addClass('nav-fix');
  }else{
    $(".index-nav-wrap").removeClass('nav-fix');
  }
});

$(window).on("load resize",function(){
  var ww = $(this).width();
  if(ww >= 1200){
    $(".t-button").removeClass('t-button-act');
    $(".sp-nav-wrap").removeClass('sp-nav-wrap-act');
  }
});
$(".t-button").click(function(){
  $(".t-button").toggleClass('t-button-act');
  $(".sp-nav-wrap").toggleClass('sp-nav-wrap-act');
});


//appends an "active" class to .popup and .popup-content when the "Open" button is clicked
$(".open").on("click", function(){
  $(".popup-overlay, .popup-content").addClass("active");
});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked
$(".close, .popup-overlay").on("click", function(){
  $(".popup-overlay, .popup-content").removeClass("active");
});



$(function(){
  function timer_func(){
    $('.reserved-icon').css('opacity','0.2');
  }
  var time_limit=3000; //制限時間
  var timer_id=setTimeout(timer_func, time_limit);

  //拾うイベントは追加・調整もできます
  $(window).scroll(function() {
    clearTimeout(timer_id);
    timer_id=setTimeout(timer_func, time_limit);
    $('.reserved-icon').css('opacity','1');
  });
});
