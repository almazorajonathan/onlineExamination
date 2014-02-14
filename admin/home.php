<?php 
	include_once('../config.php');
 ?>

<html>
<head>
	<title>Home</title>
	<link rel='stylesheet' href='../assets/css/global.css' type='text/css'>
	<link rel='stylesheet' href='../assets/css/style.css' type='text/css'>
</head>
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

		<div class='container' style='margin-top:100px'>
			<div class='row'>
				<div class='span4'>
					<h3>Users</h3>
					<a href='#'><img src='../assets/img/picture.jpg' style='height:250px;width:200px' class='thumbnail' id='img'></a>
				</div>

				<div class='span4'>
					<h3>Question</h3>
					<a href='question.php'><img src="../assets/img/question.png" style='height:250px;width:200px' class='thumbnail' id='img'><br></a>
				</div>

				<div class='span4'>
					<h3>Results</h3>
					<a href='#'><img src="../assets/img/exam.jpg" style='height:250px;width:200px' class='thumbnail' id='img'></a>
				</div>
			</div>
		</div>

	<script src="../assets/js/jquery-1.7.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/admin.min.js"></script>
</body>
</html>