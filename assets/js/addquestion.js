function check_question(){
	question = document.getElementById('question').value;
	if(question.length == 0) {
		return false;
	} else {
		return true;
	}
}

function check_choice1() {
	choice1 = document.getElementById('choice1').value;
	if(choice1.length == 0) {
		return false;
	} else {
		return true;
	}
}

function check_choice2() {
	choice2 = document.getElementById('choice2').value;
	if(choice2.length == 0) {
		return false;
	} else {
		return true;
	}
}

function check_choice3() {
	choice3 = document.getElementById('choice3').value;
	if(choice3.length == 0) {
		return false;
	} else {
		return true;
	}
}

function check_choice4() {
	choice4 = document.getElementById('choice4').value;
	if(choice4.length == 0) {
		return false;
	} else {
		return true;
	}
}

function check_answer() {
	answer = document.getElementById('answer').value;
	if(answer.length == 0) {
		return false;
	} else {
		return true;
	}
}

function validate() {
	if(check_question() && check_choice1 && check_choice2 && check_choice3 && check_choice4 && check_answer()) {
		// alert('Success.');
		return true;
	} else {
		// alert('Something must be wrong.');
		return false;
	}
}