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
	document.getElementById("questNum").innerHTML = "Question " + question;
	setQuestion();
	selectChoice();
	setAns();
	setImg();
	var nextBtn = document.getElementById("nextBtn");
	document.getElementById("nextBtn").disabled = true;
	
	nextBtn.addEventListener("click", next, false);
}

//next button
function next(){
	var len = asked.length;
	if (question == len){
		//document.getElementById("demo").innerHTML = q1 + "." + q2 + "." + q3 + "." + q4 + "." + q5;
		document.getElementById("nextBtn").onclick = window.location.href = "final-pg.html";
	}
	else{
		updateQuestion();
		setQuestion();
		setAns();
		setImg();
	}
}

function setQuestion(){
	document.getElementById("questLoc").innerHTML = asked[question-1];
}

function updateQuestion(){
	question++;
	document.getElementById("questNum").innerHTML = "Question " + question;
}


function selectChoice(){
	var a = false;
	var b = false;
	var c = false;
	var d = false;
	var e = false;
	
	//diables the clicked button
	document.getElementById("c1").onclick = function(){
		document.getElementById("c1").disabled = true;
		document.getElementById("c2").disabled = false;
		document.getElementById("c3").disabled = false;
		document.getElementById("c4").disabled = false;
		document.getElementById("c5").disabled = false;
		
		a = true;
		b = false;
		c = false;
		d = false;
		e = false;
		
		document.getElementById("nextBtn").disabled = false;
	}
	
	document.getElementById("c2").onclick = function(){
		document.getElementById("c1").disabled = false;
		document.getElementById("c2").disabled = true;
		document.getElementById("c3").disabled = false;
		document.getElementById("c4").disabled = false;
		document.getElementById("c5").disabled = false;
		
		a = false;
		b = true;
		c = false;
		d = false;
		e = false;
		
		document.getElementById("nextBtn").disabled = false;

	}
	
	document.getElementById("c3").onclick = function(){
		document.getElementById("c1").disabled = false;
		document.getElementById("c2").disabled = false;
		document.getElementById("c3").disabled = true;
		document.getElementById("c4").disabled = false;
		document.getElementById("c5").disabled = false;
		
		a = false;
		b = false;
		c = true;
		d = false;
		e = false;
		
		document.getElementById("nextBtn").disabled = false;
	}
	
	document.getElementById("c4").onclick = function(){
		document.getElementById("c1").disabled = false;
		document.getElementById("c2").disabled = false;
		document.getElementById("c3").disabled = false;
		document.getElementById("c4").disabled = true;
		document.getElementById("c5").disabled = false;
		
		a = false;
		b = false;
		c = false;
		d = true;
		e = false;

		document.getElementById("nextBtn").disabled = false;
	}
	
	document.getElementById("c5").onclick = function(){
		document.getElementById("c1").disabled = false;
		document.getElementById("c2").disabled = false;
		document.getElementById("c3").disabled = false;
		document.getElementById("c4").disabled = false;
		document.getElementById("c5").disabled = true;
		
		a = false;
		b = false;
		c = false;
		d = false;
		e = true;

		document.getElementById("nextBtn").disabled = false;
	}
	
	//resets buttons when next is clicked
	document.getElementById("nextBtn").onclick = function(){
		
		if (a == true) {
			if (question == 1){
				q1 = 1;
			}
			if (question == 2){
				q2 = 1;
			}
			if (question == 3){
				q3 = 1;
			}
			if (question == 4){
				q4 = 1;
			}
			if (question == 5){
				q5 = 1;
			}
			if (question == 6){
				q6 = 1;
			}
		}
		if (b == true) {
			if (question == 1){
				q1 = 2;
			}
			if (question == 2){
				q2 = 2;
			}
			if (question == 3){
				q3 = 2;
			}
			if (question == 4){
				q4 = 2;
			}
			if (question == 5){
				q5 = 2;
			}
			if (question == 6){
				q6 = 2;
			}
		}
		if (c == true) {
			if (question == 1){
				q1 = 3;
			}
			if (question == 2){
				q2 = 3;
			}
			if (question == 3){
				q3 = 3;
			}
			if (question == 4){
				q4 = 3;
			}
			if (question == 5){
				q5 = 3;
			}
			if (question == 6){
				q6 = 3;
			}
		}
		if (d == true) {
			if (question == 1){
				q1 = 4;
			}
			if (question == 2){
				q2 = 4;
			}
			if (question == 3){
				q3 = 4;
			}
			if (question == 4){
				q4 = 4;
			}
			if (question == 5){
				q5 = 4;
			}
			if (question == 6){
				q6 = 4;
			}
		}
		if (e == true) {
			if (question == 1){
				q1 = 5;
			}
			if (question == 2){
				q2 = 5;
			}
			if (question == 3){
				q3 = 5;
			}
			if (question == 4){
				q4 = 5;
			}
			if (question == 5){
				q5 = 5;
			}
			if (question == 6){
				q6 = 5;
			}
		}
		
		document.getElementById("c1").disabled = false;
		document.getElementById("c2").disabled = false;
		document.getElementById("c3").disabled = false;
		document.getElementById("c4").disabled = false;
		document.getElementById("c5").disabled = false;
		document.getElementById("nextBtn").disabled = true;

	}
}

function setAns(){
	if (question == 1){
		c1.setAttribute("value", choices1[0]);
		c2.setAttribute("value", choices1[1]);
		c3.setAttribute("value", choices1[2]);
		c4.setAttribute("value", choices1[3]);
		c5.setAttribute("value", choices1[4]);
	}
	
	if (question == 2){
		c1.setAttribute("value", choices2[0]);
		c2.setAttribute("value", choices2[1]);
		c3.setAttribute("value", choices2[2]);
		c4.setAttribute("value", choices2[3]);
		c5.setAttribute("value", choices2[4]);
	}
	
	if (question == 3){
		c1.setAttribute("value", choices3[0]);
		c2.setAttribute("value", choices3[1]);
		c3.setAttribute("value", choices3[2]);
		c4.setAttribute("value", choices3[3]);
		c5.setAttribute("value", choices3[4]);
	}
	
	if (question == 4){
		c1.setAttribute("value", choices4[0]);
		c2.setAttribute("value", choices4[1]);
		c3.setAttribute("value", choices4[2]);
		c4.setAttribute("value", choices4[3]);
		c5.setAttribute("value", choices4[4]);
	}
	
	if (question == 5){
		c1.setAttribute("value", choices5[0]);
		c2.setAttribute("value", choices5[1]);
		c3.setAttribute("value", choices5[2]);
		c4.setAttribute("value", choices5[3]);
		c5.setAttribute("value", choices5[4]);
	}
	
	if (question == 6){
		c1.setAttribute("value", choices6[0]);
		c2.setAttribute("value", choices6[1]);
		c3.setAttribute("value", choices6[2]);
		c4.setAttribute("value", choices6[3]);
		c5.setAttribute("value", choices6[4]);
	}
}

function setImg(){
	if (question == 1) {
		image.setAttribute("src","images/activity.png");
		image.setAttribute("alt","activity levels");
	}
	
	if (question == 2) {
		image.setAttribute("src","images/fur.png");
		image.setAttribute("alt","shedding levels");
	}
	
	if (question == 3) {
		image.setAttribute("src","images/size.png");
		image.setAttribute("alt","size of dogs");
	}
	
	if (question == 4) {
		image.setAttribute("src","images/int.png");
		image.setAttribute("alt","intelligence levels");
	}
	
	if (question == 5) {
		image.setAttribute("src","images/space.png");
		image.setAttribute("alt","amount of space");
	}
	
	if (question == 6) {
		image.setAttribute("src","images/children.png");
		image.setAttribute("alt","amount of children");
	}
}

window.addEventListener("load", start, false);