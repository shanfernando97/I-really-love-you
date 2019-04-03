console.log("js connected");

var insertBtn = document.getElementById("insertBtn");
insertBtn.addEventListener("click",insertFunction,false);
function insertFunction(e){
    // e.preventDefault();
    var myRequest = new XMLHttpRequest;

	myRequest.onreadystatechange = function(){
        if(myRequest.readyState === 4){
            console.log(myRequest.responseText);
            // var process = JSON.parse(myRequest.responseText);
        }
    };
    var insertValue = document.getElementById("nameInput");
    var letterValue = document.getElementById("letterInput");

    console.log(insertValue);
    console.log(letterValue);

    myRequest.open("POST", "insertLetter.php", true); //true means it is asynchronous // Send urls through the url
    //myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("name="+insertValue.value+
                   "&content="+letterValue.value);
};
