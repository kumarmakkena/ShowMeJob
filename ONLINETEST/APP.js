
function populate() {
	
	if (ONLINETEST.isEnded()) {
		
		 showScores();
	}
	
	else {
		
		// show question
		
		var element = document.getElementById("question");
		element.innerHTML = ONLINETEST.getQuestionIndex().text;
		
		// show choices
		
		var choices = ONLINETEST.getQuestionIndex().choices;
		for (var i=0; i< choices.length; i++) {
			
			var element = document.getElementById("choice" + i);
			element.innerHTML = choices[i];
			guess("btn" + i, choices[i]);
			
		}
		
			showProgress();
	}

};

	
function guess(id, guess) {
	
	var button = document.getElementById(id);
	button.onclick = function() {
		
		ONLINETEST.guess(guess);
		populate();
		
	}
		
};

function showProgress() {
	
	var currentQuestionNumber = ONLINETEST.QuestionIndex + 1;
	var element = document.getElementById("progress");
	element.innerHTML = "Question " + currentQuestionNumber + "of " + ONLINETEST.Questions.length; 
	
}

function showScores() {
	
	var gameOverHtml = "<h1>RESULT</h1>";
		gameOverHtml += "<h2 id = 'score'> Your scores: " + ONLINETEST.score + "</h2>";
	var element=document.getElementById("ONLINETEST");
	element.innerHTML = gameOverHtml;
};

var Questions = [

new Question ("which one is not an object oriented programming language?", ["Java", "C#", "C++", "C"], "C"),
new Question ("which Language is used for styling web pages?", ["HTML", "JQuery", "CSS", "XML"], "CSS"),
new Question ("There are ------ main components of object oriented programming.", ["1", "6", "2", "4"], "4"),
new Question ("which language is used for web apps?", ["PHP", "Python", "Javascript", "All"], "All"),
new Question ("MVC is a -------.", ["Language", "Library", "Framework", "All"], "Framework"),
new Question ("Inside which HTML element do we put the JavaScript?", ["<scripting>", "<script>", "<javascript>", "<js>"], "<script>")


];

var ONLINETEST = new ONLINETEST(Questions);

populate ();

