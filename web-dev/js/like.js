console.log("js connected");

var likeButton = document.getElementById('like');
likeButton.addEventListener("click",likeFunction,false);
function likeFunction(){
  var myRequest = new XMLHttpRequest;
	myRequest.onreadystatechange = function(){
  if(myRequest.readyState === 4){
    //var responseObj = JSON.parse(myRequest.responseText);
    //console.log(myRequest.responseText);
    }
  };

  var letterID = document.getElementById("letterID").value;
  var likes = document.getElementById("likes").value;
  //console.log(letterID);
  myRequest.open("POST", "like.php", true); //true means it is asynchronous // Send urls through the url
  myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  myRequest.send("letterID="+letterID+"&likes="+likes);

  var like = document.getElementById("like");
  var numLikes = document.getElementById("numLikes").innerHTML;
  //console.log(like.src);
  like.src = "image/like2.svg";
  numLikes = likes;
  console.log(numLikes);

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
  //console.log(letterID);
  myRequest.open("POST", "poop.php", true); //true means it is asynchronous // Send urls through the url
  myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  myRequest.send("letterID="+letterID+"&poops="+poops);

  var poop = document.getElementById("poop");
  var numPoops = document.getElementById("numPoops");

  poop.src = "image/poop2.svg";
  numPoops = numPoops;
}
