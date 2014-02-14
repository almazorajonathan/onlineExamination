<?php 
	include_once('../config.php');
	include_once('examDAO.php');
	include_once('examHandler.php');

	$id = $_POST['edit_id'];
	$question = isset($_POST['question']) ? $_POST['question'] : false;
	$choice1 = isset($_POST['choice1']) ? $_POST['choice1'] : false;
	$choice2 = isset($_POST['choice2']) ? $_POST['choice2'] : false;
	$choice3 = isset($_POST['choice3']) ? $_POST['choice3'] : false;
	$choice4 = isset($_POST['choice4']) ? $_POST['choice4'] : false;
	$answer = isset($_POST['answer']) ? $_POST['answer'] : false;

	if($question && $choice1 && $choice2 && $choice3 && $choice4 && $answer) {
		$edit = new examHandler();
		$result = $edit->saveChanges($id, $question, $choice1, $choice2, $choice3, $choice4, $answer);
		if($result) {
			echo "<script>alert('Succesfully edited.');window.location.href='question.php'</script>";
			// header('location:question.php');
		} else {
			echo "<script>alert('Failed.');window.locatin.href='editQuestion.php'</script>";
		}
	} else {
		echo "<script>alert('Failed to reload.');window.locatin.href='question.php'</script>";
	}
 ?>