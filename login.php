<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/icon.png">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font awesome local -->
		<link rel="stylesheet" href="font/fontawesome/css/all.css">
		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.css">

		<style>
			body{
				background-image: url('images/back-login.jpg');
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
				height: 100vh;
			}
			.form-login{
				width: 90%;
				max-width: 500px;
				background-color: white;
				padding: 20px 15px;
				border: 1px solid gray;
				border-top: 3px solid #007BFF;
				margin: 50px auto;
				/*position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);*/
				box-shadow: 5px 5px 15px gray;
				animation: bounceInDown 1s;
			}
			.form-login h2{margin:0px;}
			.btn-close{float:right; position: relative; right: -5px; top:-10px;}
			.btn-login-sosmed{margin-bottom: 10px;}
		</style>

	</head>
	<body>

		<div class="form-login">
			<a href="index.html" class="btn btn-light btn-close">X</a>
			<h2>LOGIN</h2>
			<p>Please enter user and password..!</p>
			<form action="loginaction.php" method="post">
				<div class="form-group">
					<label>Username / Email :</label>
					<input type="email" class="form-control" name="txtEmail" required="required">
				</div>
				<div class="form-group">
					<label>Password :</label>
					<input type="password" class="form-control" name="txtPassword" required="required">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" name="chkRemember">
					<label>Remember Password</label>
				</div>
				<div class="form-group">
					<a href="admin/index.php" class="btn btn-primary btn-block">LOGIN</a>
					<button type="button" class="btn btn-link btn-block">Forgot Password ?</button>
				</div>
			</form>
			<p style="text-align: center;color: gray;">- or continue using -<p>
			<div class="row">
				<div class="col">
					<button class="btn btn-block btn-info btn-login-sosmed" style="background-color:#3C5A98;"><i class="fab fa-facebook-f"></i> Facebook Login</button>
				</div>
				<div class="col">
					<button class="btn btn-block btn-danger btn-login-sosmed"><i class="fab fa-google-plus-g"></i> Google Login</button>
				</div>
			</div>
		</div>

		<script src="lib/jquery-3.3.1.slim.min.js"></script>
		<script src="lib/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>