$(document).on("click",".button",function(){
  $(this).next(".inner").toggleClass('inner-in');
});
$(document).ready(function(){
  var num = $(".hide").text();
  $("input[name='c-number']").attr("value",num);
});
