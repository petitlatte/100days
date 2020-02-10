"use strict"

const url = "http://api.openweathermap.org/data/2.5/weather?q=Rotorua&APPID=9df7d4a633727b399316e1afbd7f3b3c";

$.ajax ({
 url: url,
 success:  function (result){

 	//LOCATION DATA 
 	let displayCity = `${result.name}`;
 	$("#location").html(displayCity);

 	//TEMPERATURE DATA
 	 let D = Math.round(result.main.temp - 273.15); //degrees
 	let displayTemp = `Temperature: ${D}&#176;C`;
 	$("#temperature").html(displayTemp);

 	//WIND SPEED DATA 

 	let windSpeed = Math.round(result.wind.speed/.44704);
 	let displayWind = `Wind: ${windSpeed} mph`
 	$("#wind").text(displayWind);

 	//SKY WEATHER DATA 
 	let displaySky = `Sky Conditions: ${result.weather[0].description}`;
 	 	$("#sky").html(displaySky);

 	 //ICON 
 	 var iconcode = a.weather[0].icon;

 }

})