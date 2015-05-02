var num_questions = 25;
var num_answered = 0;
var num_correct = 0;
var quiz_id = 342;

var results = new Array(num_questions);
var answered = new Array(num_questions);

function check_answer(correct_answer, input_answer, index) {
  if (!answered[index]) {
  	num_answered++;
  	answered[index] = true;
  }

  if (correct_answer === input_answer)
  {
	results[index] = true; 
	num_correct++;
  } 
  else
	results[index] = false;
}

function calculate_grade() {
  return num_correct / num_questions;
}

function draw_symbols() {
  var questions = document.getElementsByClassName('symbols');

  console.log(questions.length);

  for (var i = 0; i < questions.length; i++) {
  	if (results[i])
  	  questions[i].innerHTML = "<img src='/japanese/images/green-check.png'>";
  	else
  	  questions[i].innerHTML = "<img src='/japanese/images/red-x.png'>";
  }
}

function check_answers() {
  draw_symbols();
  document.getElementById('score').innerHTML = "Your score: " + calculate_grade() * 100 + "%";
}
