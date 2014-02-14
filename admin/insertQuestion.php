<?php 
	include_once('../config.php');
	include_once('examHandler.php');
	include_once('examDAO.php');

	$question = isset($_POST['question']) ? $_POST['question'] : false;
	$choice1 = isset($_POST['choice1']) ? $_POST['choice1'] : false;
	$choice2 = isset($_POST['choice2']) ? $_POST['choice2'] : false;
	$choice3 = isset($_POST['choice3']) ? $_POST['choice3'] : false;
	$choice4 = isset($_POST['choice4']) ? $_POST['choice4'] : false;
	$answer = isset($_POST['answer']) ? $_POST['answer'] : false;

	if($question && $choice1 && $choice2 && $choice3 && $choice4 && $answer) {
		$add = new examHandler();
		$result = $add->addQuestion($question, $choice1, $choice2, $choice3, $choice4, $answer);
		if($result) {
			echo "<script>alert('You have Successfully add a new Question.');window.location.href='question.php'</script>";
			// header('location:question.php');
		} else {
			echo "<script>alert('Error Occured.');window.location.href='addQuestion.php'</script>";
		}
	} else {
		echo "<script>alert('Error Occured.');window.location.href='question.php'</script>";
	}
 ?>