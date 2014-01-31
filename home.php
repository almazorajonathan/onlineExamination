<link rel='stylesheet' href='assets/css/global.css' type='text/css'>
<link rel='stylesheet' href='assets/css/style.css' type'text/css'>

<?php 
	require_once('config.php');
	require_once('examDAO.php');

	$question = examDAO::getQuestion(1);
	$choices = examDAO::getChoices(1);
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



	<div class='container' style='margin-top:100px'>
		<div id='takeExam'>
			<h1>Are you READY to take your Exam</h1>
			<h3>This is good for 30 Minutes</h3>
			<button id='yesExam' class='btn btn-success'>Take my Exam NOW</button>
			<button id='noExam' class='btn'>Not Now</button>
		</div>


	<!--test Proper code-->
		<div hidden id='testExam'>
			<h1 class='pull-right' id='countdown'></h1>
			<h2 id='asdf'></h2>
			<div class='container2' style='width:100px;margin-left:24px'>
				<div class='row'>
					<div class='well' id='well' style='margin-top:50px'>
						<div hidden id='ques'>
							<font size='6'><b>Question #</b></font><font size='6' id='quesNum' style='font-weight:bold'>1</font>
							<div style='margin-top:50px'>
								<h2 id='Question'><?= $question;?></h2>
							</div>

							<div style='margin:50 0 0 50'>
								<div hidden id='choices'>
									<div id='choice1'><input type='radio' id='radio1' name='radio' value='a'><font size='3'><b><?= $choices['choice1']; ?></b></font></div>
									<div id='choice2'><input type='radio' id='radio2' name='radio' value='b'><font size='3'><b><?= $choices['choice2']; ?></b></font></div>
									<div id='choice3'><input type='radio' id='radio3' name='radio' value='c'><font size='3'><b><?= $choices['choice3']; ?></b></font></div>
									<div id='choice4'><input type='radio' id='radio4' name='radio' value='d'><font size='3'><b><?= $choices['choide4']; ?></b></font></div>
								</div>
							</div>

							<div>
								<button class='btn btn-primary nextPage pull-right' id='nextPage'>Next Page</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- END test Proper code-->

	<!--result-->
		<div hidden id='testresult'>
			<div class='container'>
				<div class='row'>
					<div class='well'>
						<h1>Test Result</h1><br><br>
						<font size='4'><b>Your Score</b></font> <font id='score' size='4'><b></b></font>
					</div>
				</div>
			</div>
		</div>

	<!--end result-->

	<!--exit code-->

		<div hidden id='exitTest'>
			<div class='container'>
				<div class='row'>
						<h1 color='red'>Are you sure. You want to EXIT</h1>
						<button id='exitYes' class='btn btn-primary'>Yes</button>
						<button id='exitNo' class='btn'>No</button>
				</div>
			</div>
		</div>

	<!--end exit code-->

	</div>
</body>

<script src='assets/js/javascript.js'></script>
<script src="assets/js/jquery-1.7.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/admin.min.js"></script>
<script src='assets/js/design.js'></script>