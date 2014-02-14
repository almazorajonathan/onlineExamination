<?php 
	include_once('../config.php');
	include_once('examDAO.php');

	$result = examDAO::getQuestion();

 ?>

 <html>
 <head>
 	<title>Question</title>
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
 				<font size='4' class='pull-right'><a href="addQuestion.php" style='text-decoration:none'><b>Add Question</b><b class='icon-plus' style='margin-top:6px'></b></a></font>
 			</div>
 		</div>
 		<div class='container' style='margin-top:10px;padding-bottom:50px'>
 			<div class='row'>
 				<?php foreach($result as $results) { ?>
 				<div class='well' id='well2'>
 					<div class='row'>
 						<div class='span1'>
 							<b><?=$results['id']?></b>
 						</div>
 						<div class='span10'>
 							<font size='5' color='333388'><b>Question: <?=$results['question']?></b></font>
 							<font size='3' color='41454e'><b><u>Answer: <?=$results['answer']?></u></b></font>
 							<br><br>
 							<font size='4'><b>Choices</b></font><br>
 							<div class='span4' style='font-size:15px'>
 								<b>A. <?=$results['choice1']?></b><br>
 								<b>C. <?=$results['choice3']?></b>
 							</div>

 							<div class='span4' style='font-size:15px'>
 								<b>B. <?=$results['choice2']?></b><br>
 								<b>D. <?=$results['choide4']?></b>
 							</div>
 						</div>
 					</div>
 					<div style='margin-left:800'>
 						<a class='btn btn-primary' href="editQuestion.php?id=<?=$results["id"]?>">Edit</a>
 						<a class='btn btn-danger' href="deleteQuestion.php?id=<?=$results["id"]?>">Delete</a>
 					</div>
 				</div>
 				<?php } ?>
 			</div>
 		</div>

 	<script src="../assets/js/jquery-1.7.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/admin.min.js"></script>
 </body>
 </html>