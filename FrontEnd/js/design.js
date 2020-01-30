$(document).ready(function(){
  $("#myBtn").on("click",function(event){
    $("html, body").animate({scrollTop:'0'},480);
  });

  //middle About Us
  $('.About_set_left').eq(0).hover(function(){
    $('.About_set_right span').eq(0).toggleClass('changed');    
  },function(){
    $('.About_set_right span').eq(0).removeClass('changed');
  });
  $('.About_set_left').eq(1).hover(function(){
    $('.About_set_right span').eq(1).toggleClass('changed');  
  },function(){
    $('.About_set_right span').eq(1).removeClass('changed');
  });
  $('.About_set_left').eq(2).hover(function(){
    $('.About_set_right span').eq(2).addClass('changed');  
  },function(){
    $('.About_set_right span').eq(2).removeClass('changed');  
  });
});

