<link rel='stylesheet' href='assets/css/global.css' type='text/css'>
<link rel='stylesheet' href='assets/css/style.css' type'text/css'>


<?php 
	include_once('config.php');
	include_once('examDAO.php');

	$answer =  $_SESSION['answer'];
	$score = examDAO::getScore($answer);
	$average = examDAO::Average($score);
 ?>

 <body style='background-color:D3D8E8'>
 	<div class='navbar navbar-fixed-top'>
 			<div class='navbar-inner'>
 				<div class='container'><font face = 'tahoma'>
 					<a href='#' class='brand'>Examination</a>
 					<ul class='nav pull-right'>
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

 		<div style='margin-top:100px' hide id='result'>
 			<div class='container'>
 				<div class='row'>
 					<div class='well'>
 						<h1>Your Score: <?php echo $score ?> </h1>
 						<div style='margin-top:50px'>
 							<font style='font-size:100px;font-family:elephant;line-height:1'> <?php echo $average ?></h1>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>	

 </body>

 <script src='assets/js/javascript.js'></script>
 <script src="assets/js/jquery-1.7.1.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/admin.min.js"></script>
 <script src='assets/js/design.js'></script>