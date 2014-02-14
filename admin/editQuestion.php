<?php 
	include_once('../config.php');
	include_once('examDAO.php');

	$id = isset($_GET['id']) ? $_GET['id'] : false;
	$edit = examDAO::editQuestion($id);

 ?>

 <html>
 <head>
 	<title>Edit Question</title>
 	<link rel='stylesheet' href='../assets/css/global.css' type='text/css'>
 	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
 </head>
 <body style='background-color:D3D8E8'>
 <div class='navbar navbar-fixed-top'>
 		<div class='navbar-inner'>
 			<div class='container'><font face = 'tahoma'>
 				<a href='#' class='brand'>Examination</a>
 				<ul class='nav pull-right'>
 					<li><a href='home.php'><b>Home</b></a></li>
 					<li class="dropdown">
 						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></b> <b class="caret"></b></a>
 						<ul class="dropdown-menu">
 							<li style='hover:blue'>
 							  	<a href="logout.php">Logout</a>
 							</li>
 						</ul>
 					</li>
 				</ul>
 			</div>
 		</div>
 	</div>

 	<div class='container' style='margin-top:100px'>
 		<div class='row'>
 			<a href="question.php" class='pull-right'><font size='3'>Back</font></a>

 			<form method ='POST' action='savechanges.php'>
 				<input type='hidden' value='<?=$id?>' name='edit_id'>

 				<h2>Question</h2>
 				<input type='text' class='inputs' value='<?=$edit["question"]?>' style='width:951px' name='question'>

 				<h3>Choices</h3>
 				<div class='span6'>
 					<font size='4'><b>A. </b></font><input type='text' class='inputs' value='<?=$edit["choice1"]?>' style='width:430px' name='choice1'>
 					<font size='4'><b>C. </b></font><input type='text' class='inputs' value='<?=$edit["choice3"]?>' style='width:430px' name='choice3'>
 				</div>

 				<div class='span6'>
 					<font size='4'><b>B. </b></font><input type='text' class='inputs' value='<?=$edit["choice2"]?>' style='width:430px' name='choice2'>
 					<font size='4'><b>D. </b></font><input type='text' class='inputs' value='<?=$edit["choide4"]?>' style='width:430px' name='choice4'>
 					<div class='pull-right'>
 						<font size='4'><b>Answer </b></font><input type='text' class='inputs' value='<?=$edit["answer"]?>' style='width:40px' name='answer'>
 					</div>
 				</div>
 				<button class='btn btn-primary pull-right button' type='submit'>Save Changes</button>
 			</form>
 		</div>
 	</div>

 	<script src="../assets/js/jquery-1.7.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/admin.min.js"></script>
 </body>
 </html>