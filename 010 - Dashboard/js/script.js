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


//TO-DO LIST

var myList = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myList.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myList[i].appendChild(span);
}

var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);


function addFunction() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("taskText").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("Please add a task.");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("taskText").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}