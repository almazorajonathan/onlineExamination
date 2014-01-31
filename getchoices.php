<?php 
	require_once('config.php');
	include_once('examDAO.php');

	$getquestion_id = $_GET['choice_id'];

	$choice = examDAO::getChoices($getquestion_id);
	$a = $choice['choice1'];
	$b = $choice['choice2'];
	$c = $choice['choice3'];
	$d = $choice['choide4'];

	echo json_encode(
			array(
				'choice1' => $a,
				'choice2' => $b,
				'choice3' => $c,
				'choice4' => $d
			)
		);

 ?>