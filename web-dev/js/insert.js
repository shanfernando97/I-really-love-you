console.log("js connected");

var insertBtn = document.getElementById("insertBtn");
insertBtn.addEventListener("click",insertFunction,false);
function insertFunction(e){
  var myRequest = new XMLHttpRequest;
	myRequest.onreadystatechange = function(){
  if(myRequest.readyState === 4){
    //var responseObj = JSON.parse(myRequest.responseText);
    console.log(myRequest.responseText);
    }
  };

    var nameInput = document.getElementById("name").value;
    var conInput = document.getElementById("content").value;

    console.log(nameInput);
    console.log(conInput);

    myRequest.open("POST", "insertLetter.php", true); //true means it is asynchronous // Send urls through the url
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("name="+nameInput+"&content="+conInput);

    document.body.removeChild(document.getElementById('letter'));
    var ty = document.createElement("p");
    ty.innerHTML = "Your love letter has been posted."
    document.body.appendChild(ty);
};
