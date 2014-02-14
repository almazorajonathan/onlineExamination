<?php 
	include_once('config.php');
	include_once('userDAO.php');
	include_once('userHANDLER.php');


	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
		$createUsers = new userHANDLER();
		$createUsers->createUser($fname, $lname, $email, $password);
		if($createUsers) {
			echo "<script>alert('You have successfully Create a Account.');window.location.href='exam.php'</script>";

			// header('location:exam.php');
		}
	} else {
		echo "<script>alert('Complete the following information first.');window.location.href='exam.php'</script>";
	}

?>