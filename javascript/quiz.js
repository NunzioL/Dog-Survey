var question = 1;
var asked = ["How active are you?", "What is your prefered shedding levels?", "Which size do you prefer?", "How intelligent do you want your dog to be?",
			"How big of a space can you provide?", "How often will the dogs interact with children?"];
var choices1 = ["Not very", "A little", "So-so", "Active", "Athlete"];
var choices2 = ["Minimum", "A little", "Some hair", "Fur is okay", "Fur tornado"];
var choices3 = ["Tiny", "Small", "Medium", "Large", "Humongous"];
var choices4 = ["Brain empty", "A bit smart", "Moderately", "Smart enough", "Very smart"];
var choices5 = ["Apartment", "Apartment with park", "Park area", "House with small yard", "House with big yard"];
var choices6 = ["Not at all", "A little bit", "Sometimes", "Often", "All the time"];

var q1 = 0;
var q2 = 0;
var q3 = 0;
var q4 = 0;
var q5 = 0;
var q6 = 0;

function start(){
	if (typeof(Storage) !== "undefined") {
		if (sessionStorage.score) {
			sessionStorage.score = Number(sessionStorage.score);
		} else {
			sessionStorage.score = 0;
		}
	}
	document.getElementById("score").innerHTML = sessionStorage.score;

	setQuestion();
	selectChoice();
	setAns();
	setImg();
	var nextBtn = document.getElementById("nextBtn");
	//document.getElementById("nextBtn").disabled = true;
	
	nextBtn.addEventListener("click", next, false);
}

//next button
function final(){
	window.location.href = "final-pg.html";
}

function reload(){
	window.location.reload();
}


function selectChoice(){
	//diables the clicked button
	document.getElementById("ch1").onclick = function(){
		document.getElementById("ch1").disabled = true;
		document.getElementById("ch2").disabled = false;
		document.getElementById("ch3").disabled = false;
		document.getElementById("ch4").disabled = false;
		document.getElementById("ch5").disabled = false;
		
		document.getElementById("nextBtn").disabled = false;
	}
	
	document.getElementById("ch2").onclick = function(){
		document.getElementById("ch1").disabled = false;
		document.getElementById("ch2").disabled = true;
		document.getElementById("ch3").disabled = false;
		document.getElementById("ch4").disabled = false;
		document.getElementById("ch5").disabled = false;

		document.getElementById("nextBtn").disabled = false;

	}
	
	document.getElementById("ch3").onclick = function(){
		document.getElementById("ch1").disabled = false;
		document.getElementById("ch2").disabled = false;
		document.getElementById("ch3").disabled = true;
		document.getElementById("ch4").disabled = false;
		document.getElementById("ch5").disabled = false;

		document.getElementById("nextBtn").disabled = false;
	}
	
	document.getElementById("ch4").onclick = function(){
		document.getElementById("ch1").disabled = false;
		document.getElementById("ch2").disabled = false;
		document.getElementById("ch3").disabled = false;
		document.getElementById("ch4").disabled = true;
		document.getElementById("ch5").disabled = false;
		
		document.getElementById("nextBtn").disabled = false;
	}
	
	document.getElementById("ch5").onclick = function(){
		document.getElementById("ch1").disabled = false;
		document.getElementById("ch2").disabled = false;
		document.getElementById("ch3").disabled = false;
		document.getElementById("ch4").disabled = false;
		document.getElementById("ch5").disabled = true;

		document.getElementById("nextBtn").disabled = false;
	}
	
	//resets buttons when next is clicked
	document.getElementById("nextBtn").onclick = function(){
		document.getElementById("ch1").disabled = false;
		document.getElementById("ch2").disabled = false;
		document.getElementById("ch3").disabled = false;
		document.getElementById("ch4").disabled = false;
		document.getElementById("ch5").disabled = false;
		document.getElementById("nextBtn").disabled = true;
		
		window.location.reload();
	}
}

function quest() {
	if (quest >= 6) {
		window.location.href = "final-pg.html";
	}
}

function updateScore() {
	if (typeof(Storage) !== "undefined") {
		if (sessionStorage.score) {
			sessionStorage.score = Number(sessionStorage.score)+1;
		} else {
			sessionStorage.score = 0;
		}
	}
	if (sessionStorage.score == 6) {
		sessionStorage.score = 0;
	}
	
	document.getElementById("score").innerHTML = sessionStorage.score;
}

function clear() {
	if (sessionStorage.score) {
		sessionStorage.score = 0;
	}
	else
		sessionStorage.score = 0;
}

window.addEventListener("load", start, false);