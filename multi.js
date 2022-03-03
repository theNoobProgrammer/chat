const msgs = document.querySelector(`#msgs`);
const msg = document.querySelector(`#msg`);
const send = document.querySelector(`#send`);

let name = prompt("Add meg a felhasználóneved");

setInterval(function getFunc(){
	const xhr = new XMLHttpRequest();

    xhr.onload = function(){
        msgs.innerHTML = this.responseText;
    };
    
    xhr.open("POST", "getmsg.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	let nm = "name=".concat(name);
	xhr.send(nm);
    /*let myMsg = "name=".concat(name).concat("&msg=").concat(msg.value).concat("\n\n");
    xhr.send(myMsg);
	console.log(myMsg);
	msg.value = "";*/
}, 1000);

function sendFunc(){
    const xhr = new XMLHttpRequest();

    xhr.onload = function(){
        msgs.innerHTML += this.responseText;
    };
    
    xhr.open("POST", "multi.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let myMsg = "name=".concat(name).concat("&msg=").concat(msg.value).concat("\n\n");
    xhr.send(myMsg);
	console.log(myMsg);
	msg.value = "";
}

send.addEventListener('click', sendFunc)
//document.addEventListener('mouseover', getFunc)