<?php 
	require_once('config.php');
	include_once('examDAO.php');

	$getquestion_id = $_GET['question_id'];

	$quesNum = examDAO::getQuestion($getquestion_id);

	echo json_encode(
			array(
				'quesNum' => $quesNum
			)
		);

 ?>