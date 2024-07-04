$(".thumbs p").on("click",function(){
  var t_img = $(this).children('img').attr("src");
  $(".main-img").animate({opacity:0}, 500);
  setTimeout(function(){
    $(".main-img").children('img').attr("src",t_img);
  },500);
  $(".main-img").delay(300).animate({opacity:1}, 500);
});
