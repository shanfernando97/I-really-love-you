console.log("js connected");

$('document').ready(function () {

  $('.like').on('click',function (e) {
    console.log(e);
    var target = e.currentTarget;
    var id = target.dataset.id;
    //var id = document.getElementById('letterID').dataset.id;
    //console.log(id);
    pressed = true;
    var myRequest = new XMLHttpRequest;
  	myRequest.onreadystatechange = function(){
    if(myRequest.readyState === 4){
      //var responseObj = JSON.parse(myRequest.responseText);
      //console.log(myRequest.responseText);
      }
    };

    //var letterID = document.getElementById("letterID").value;
    //var likes = document.getElementById("likes").value;
    var likes = target.nextElementSibling.innerHTML;
    //var likes = parseInt(likes);
    console.log(likes);
    //console.log(letterID);
    myRequest.open("POST", "like.php", true); //true means it is asynchronous // Send urls through the url
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("letterID="+id+"&likes="+likes);


     //var like = document.getElementById("letterID");
    //console.log(likeIcon);
    //$('.like').attr("src","image/like2.svg");
    var numLikes = target.nextElementSibling.innerHTML = parseInt(likes)+1;
    //var numLikes = parseInt(likes)+1;
    //$('.numLikes').attr("innerHTML",parseInt(likes)+1);
    var likeIcon = target.attributes[4].value = "image/like2.svg";
  })

  $('.poop').on('click',function (e) {
    var myRequest = new XMLHttpRequest;
  	myRequest.onreadystatechange = function(){
    if(myRequest.readyState === 4){
      //var responseObj = JSON.parse(myRequest.responseText);
      //console.log(myRequest.responseText);
      }
    };

    var letterID = document.getElementById("letterID").value;
    var poops = document.getElementById("poops").value;
    console.log(letterID);
    myRequest.open("POST", "poop.php", true); //true means it is asynchronous // Send urls through the url
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("letterID="+letterID+"&poops="+poops);

    var poop = document.getElementsByClassName("poop");
    poop.src = "image/poop2.svg";
    document.getElementById("numPoops").innerHTML = parseInt(poops)+1;
  })
});
