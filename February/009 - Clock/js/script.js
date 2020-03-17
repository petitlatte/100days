var time = document.getElementById("currentTime");
var greeting = document.getElementById("greetingText");
function timeFunction(){
	var d = new Date();
	var s = d.getSeconds();
	var m = d.getMinutes();
	var h = d.getHours();
	m = checkTime(m);
	s = checkTime(s);
	time.textContent = h + ":" + m + ":" + s;
}

setInterval(timeFunction, 1000);


//adds 0 before numbers below 10
function checkTime(i){
	if (i< 10) {i = "0" + i};
	return i;
}

//GREETINGS

if(currentTime < 12){
	greeting.textContent = "Good Morning!";
}

else{
	greeting.textContent = "Good Evening";
}