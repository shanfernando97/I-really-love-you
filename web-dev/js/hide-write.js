
$(document).ready(function(){

  // $(".insertBtn").click(function(){
  //   $("#letter").hide();
  //   $(".boy-image").hide();
  // });

  // $(".arrowbutton").click(function(){
  //   $("#letter").show();
  //   $(".boy-image").show();
  // });
  var pressed = false;

  $(".arrowbutton").click(function(){
    console.log(pressed);
    if(pressed==false){
      pressed=true;
    } else {
      pressed=false;
    }
      if (pressed==true) {
        $("#letter").hide();
  			$(".boy-image").hide();
        $('.arrowbutton').attr('src',"image/arrowup.svg");
      } else {
        $("#letter").show();
  			$(".boy-image").show();
        $('.arrowbutton').attr('src',"image/arrowdown.svg");
      }

		});





});
