console.log("js connected");

var liked = false;
var pooped = false;

var likeButton = document.getElementById('like');
likeButton.addEventListener("click",likeFunction,false);
function likeFunction(e){
  // console.log(e);
  // var id = document.getElementById('letter-stats').dataset.id;
  // console.log(id);
  pressed = true;
  var myRequest = new XMLHttpRequest;
	myRequest.onreadystatechange = function(){
  if(myRequest.readyState === 4){
    //var responseObj = JSON.parse(myRequest.responseText);
    //console.log(myRequest.responseText);
    }
  };

  var letterID = document.getElementById("letterID").value;
  var likes = document.getElementById("likes").value;
  console.log(letterID);
  myRequest.open("POST", "like.php", true); //true means it is asynchronous // Send urls through the url
  myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  myRequest.send("letterID="+letterID+"&likes="+likes);

  var like = document.getElementById("like");
  like.src = "image/like2.svg";
  document.getElementById("numLikes").innerHTML = parseInt(likes)+1;
}

var poopButton = document.getElementById('poop');
poopButton.addEventListener("click",poopFunction,false);
function poopFunction(){
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

  var poop = document.getElementById("poop");
  poop.src = "image/poop2.svg";
  document.getElementById("numPoops").innerHTML = parseInt(poops)+1;
}
