<?php 
	include_once('../config.php');
	include_once('examDAO.php');
 ?>


<html>
<head>
	<title>Add Question</title>
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

				<form method ='POST' action='insertQuestion.php'>

					<h2>Question</h2>
					<input type='text' class='inputs' style='width:951px' name='question' id='question' onblur='check_question();'>

					<h3>Choices</h3>
					<div class='span6'>
						<font size='4'><b>A. </b></font><input type='text' class='inputs' style='width:430px' name='choice1' id='choice1' onblur='check_choice1();'>
						<font size='4'><b>C. </b></font><input type='text' class='inputs' style='width:430px' name='choice3' id='choice3' onblur='check_choice3();'>
					</div>

					<div class='span6'>
						<font size='4'><b>B. </b></font><input type='text' class='inputs' style='width:430px' name='choice2' id='choice2' onblur='check_choice2();'>
						<font size='4'><b>D. </b></font><input type='text' class='inputs' style='width:430px' name='choice4' id='choice4' onblur='check_choice4();'>
						<div class='pull-right'>
							<font size='4'><b>Answer </b></font><input type='text' class='inputs' style='width:40px' name='answer' id='answer' onblur='check_answer();'>
						</div>
					</div>
					<button class='btn btn-primary pull-right button' type='submit' onclick='return validate();'>Add Question</button>
				</form>
			</div>
		</div>

 	<script src="../assets/js/jquery-1.7.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/admin.min.js"></script>
	<script src="../assets/js/addquestion.js"></script>
</body>
</html>