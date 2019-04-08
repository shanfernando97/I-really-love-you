console.log("js connected");

var insertBtn = document.getElementById('insert')
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
    var fromNameInput = document.getElementById("fromName").value;

    console.log(nameInput);
    console.log(conInput);
    console.log(fromNameInput);

    myRequest.open("POST", "insertLetter.php", true); //true means it is asynchronous // Send urls through the url
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("name="+nameInput+"&content="+conInput+"&fromName="+fromNameInput);

    // document.body.removeChild(document.getElementById('letter'));
    // var ty = document.createElement("p");
    // ty.innerHTML = "Your love letter has been posted."
    // document.body.appendChild(ty);
    console.log("SENT");
};
