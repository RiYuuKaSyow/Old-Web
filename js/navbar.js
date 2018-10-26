$( function() {


  //下拉選單
  $("#dropbtn").click(function(){
    $("#dropmenu").toggle();
  });
  $("#dropbtn").mouseover(function(){
    $("#dropmenu").show();
  });
  $("#dropbtn").mouseleave(function(){
    $("#dropmenu").hide();
  });
  $("#dropmenu").mouseover(function(){
    $("#dropmenu").show();
  });
  $("#dropmenu").mouseleave(function(){
    $("#dropmenu").hide();
  });
  $("#outbtn").mouseover(function(){
    $("#outbtn").css("background-color","red");
  });
  $("#outbtn").mouseleave(function(){
    $("#outbtn").css("background-color","#00000000");
  });
  $("div a:nth(1)").mouseover(function(){
    $("div a:nth(1)").css("background-color","blue");
  });
  $("div a:nth(1)").mouseleave(function(){
    $("div a:nth(1)").css("background-color","#00000000");
  });
  $("div a:nth(2)").mouseover(function(){
    $("div a:nth(2)").css("background-color","#a5ffb0");
  });
  $("div a:nth(2)").mouseleave(function(){
    $("div a:nth(2)").css("background-color","#00000000");
  });
  $("div a:nth(3)").mouseover(function(){
    $("div a:nth(3)").css("background-color","orange");
  });
  $("div a:nth(3)").mouseleave(function(){
    $("div a:nth(3)").css("background-color","#00000000");
  });
  //登出
  $("#outbtn").click(function(){
    $("#logout").show();
  });
  //取消
  $("#outcan").click(function(){
    $("#logout").hide();
  });

});
