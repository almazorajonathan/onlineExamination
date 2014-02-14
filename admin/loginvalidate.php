<?php 
	include_once('../config.php');
	include_once('loginHandler.php');
	include_once('loginDAO.php');

	$login_email = isset($_POST['login_email']) ? $_POST['login_email'] : false;
	$login_password = isset($_POST['login_password']) ? $_POST['login_password'] : false;

	if($login_email && $login_password) {
		$login = new loginHandler();
		$result = $login->login($login_email, $login_password);
		if($result) {
			header('location:home.php');
			// echo "<script>alert('Succesfully Login.');window.location.href='home.php'</script>";
		} else {
			echo "<script>alert('Invalid Username or Password.');window.location.href='adminLogin.php'</script>";
		}
	} else {
		echo "<script>alert('No Username or Password.');window.location.href='adminLogin.php'</script>";
	}
 ?>




<script src='../assets/js/validate.js'></script>