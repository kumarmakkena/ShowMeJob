function ONLINETEST (Questions) {
	
	this.score = 0;
	this.Questions = Questions;
	this.QusetionIndex = 0;
	
}

ONLINETEST.prototype.getQuestionIndex = function() {
	
	return this.Questions[this.QusetionIndex];
	
}

ONLINETEST.prototype.isEnded = function() {
	
	return this.Questions.length === this.QusetionIndex;
	
}

ONLINETEST.prototype.guess = function(answer) {
	
	
	if( this.getQuestionIndex().correctAnswer(answer)) {
		
		this.score ++;
		
	}
	
	this.QusetionIndex ++;
}