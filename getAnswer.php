<?php 
	require_once('config.php');
	include_once('examDAO.php');

	$question_id = $_GET['question_id'];
	$answer = $_GET['answer'];

	$correctAnswer = examDAO::getAnswer($question_id, $answer);

	echo json_encode(
		array(
			'correctAnswer' => $correctAnswer
		)
	);
 ?>