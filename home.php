<link rel='stylesheet' href='assets/css/global.css' type='text/css'>
<link rel='stylesheet' href='assets/css/style.css' type'text/css'>

<?php
	DEFINE('QUESTION_NUMBER' , 10);

	include_once('config.php');
	include_once('examDAO.php');

	$question_num = (isset($_POST['question_num'])) ? $_POST['question_num'] + 1 : 1;
	$answer = (isset($_POST['answer'])) ? $_POST['answer'] : '';
	$answers = (isset($_POST['answers'])) ? $_POST['answers'] : '';
	$answer .= $answers; 

	if ($question_num > 10) {
		$_SESSION['answer'] = $answer;

		header('location: Result.php');
	}

	$q = examDAO::getQuestion($question_num);
	$question = $q['question'];
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

	<!--test Proper code-->
		<div hidden id='testExam'>
			<h1 class='pull-right' id='countdown'></h1>
			<h2 id='asdf'></h2>
			<div class='container2' style='width:100px;margin-left:24px'>
				<div class='row'>
					<div class='well' id='well' style='margin-top:50px'>
						<div hidden id='ques'>
							<form method='POST' action='<?=$_SERVER['PHP_SELF'];?>'>
								<input type='hidden' name='question_num' value='<?= $question_num?>'>
								<input type='hidden' name='answer' value='<?= $answer?>'>
								<h1><?= $question?></h1>

								<div style='margin:50 0 0 50'>
									<input type='radio' name='answers' value='a' id='radio1' style='height:15px;width:15px'><font style='font-size:20px'><b><?= $q['choice1']; ?></b></font><br>
									<input type='radio' name='answers' value='b' id='radio2' style='height:15px;width:15px'><font style='font-size:20px'><b><?= $q['choice2']; ?></b></font><br>
									<input type='radio' name='answers' value='c' id='radio3' style='height:15px;width:15px'><font style='font-size:20px'><b><?= $q['choice3']; ?></b></font><br>
									<input type='radio' name='answers' value='d' id='radio4' style='height:15px;width:15px'><font style='font-size:20px'><b><?= $q['choide4']; ?></b></font><br>
								</div>

								<div>
									<button type='submit' name='next' class='btn btn-primary nextPage pull-right' id='NEXTPAGE'>Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- END test Proper code-->

	</div>
</body>

<script src='assets/js/javascript.js'></script>
<script src="assets/js/jquery-1.7.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/admin.min.js"></script>
<script src='assets/js/design.js'></script>