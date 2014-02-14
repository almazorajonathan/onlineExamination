<?php 
	include_once('../config.php');
	include_once('examDAO.php');
	include_once('examHandler.php');

	$id = isset($_GET['id']) ? $_GET['id'] : false;

	
	if($id) {
		$delete = new examHandler();
		$result = $delete->deleteQuestion($id);
		if($result) {
			echo "<script>alert('Succesfully Deleted.');window.location.href='question.php'</script>";
		} else {
			echo "<script>alert('Failed to reload.');window.location.href='question.php'</script>";
		}
	} else {
		echo "<script>alert('Failed to reload.');window.location.href='question.php'</script>";
	}

 ?>