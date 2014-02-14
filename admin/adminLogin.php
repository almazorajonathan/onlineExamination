<html>
<head>
	<title>Admin Login</title>
	<link rel='stylesheet' href='../assets/css/global.css' type='text/css'>
	<link rel='stylesheet' href='../assets/css/style.css' type'text/css'>
</head>
<body style='background-color:D3D8E8'>
	<div class='navbar navbar-fixed-top'>
		<div class='navbar-inner'>
			<div class='container'><font face = 'tahoma'>
				<a href='#' class='brand'>Examination</a>
			</div>
		</div>
	</div>

			<div class='container' style='margin-top:100px'>
				<div class='row'>
					<h1 style='text-shadow: 10px 5px 5px white'>One Account, Login Access</h1>

					<center><button class='btn btn-primary button'href='#myModal' data-toggle='modal'>Login</button></center>
				</div>
			</div>

			<!--modal-->
			  <div class='modal hide fade' id='myModal' aria-hidden='true'>
			    <div class='modal-header'>
				  <div class='row' >
				    <div style='margin-left:20px'>
					  <h2>Administrator Login</h2>
					</div>
				  </div>
				</div>
				
				<div class='modal-body'>
				  <div class='well' style='background:#E5E4E2'>
					  <div>
					  	<form method='POST' action='loginvalidate.php'>
					    <input type='text' class='inputs' onblur='loginEmail();' id='_email' name='login_email' placeholder='Email Address'>
					    <input type='password' class='inputs' onblur='loginPassword();' id='_password' name='login_password' placeholder='Password'>
					  	<button class='btn btn-primary pull-right' style='margin-left:5px;margin-top:-9px' type='submit'onclick='return loginAuthenticator();'>Log In</button>
					  	<br>
					  	</form>
					  </div>
				  </div>
				</div>
				
				<div class='modal-footer'>
				  <button class='btn btn-default' data-dismiss='modal' aria-hidden='true'>Close</button>
				</div>
			  </div>
			<!--end modal-->

	
	<script src="../assets/js/jquery-1.7.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/admin.min.js"></script>
	<script src='../assets/js/validate.js'></script>
</body>
</html>