<!DOCTYPE html>
<?php require_once "connect.php"?>
<html lang = "en">
	<head>
		<title>RD HOTELS</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<marquee style="font-family: cursive; font-size: 25px; margin-top: 15px; background-color: lightblue; font-weight: bold; margin-bottom: 15px;">RD Hotels Admin Panel</marquee>
	<div class = "container">
		<br />
		<br />
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					<h4>Administrator</h4>
				</div>
				<div class = "panel-body">
					<form method = "POST">
						<div class = "form-group">
							<label>Username</label>
							<input type = "text" name = "username" class = "form-control" required = "required" />
						</div>
						<div class = "form-group">
							<label>Password</label>
							<input type = "password" name = "password" class = "form-control" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "login" class = "form-control btn btn-primary"><i class = "glyphicon glyphicon-log-in"> Login</i></button>
						</div>
					</form>
					<?php require_once 'login.php'?>
				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>	
	<br />
	<br />
	<div style = "text-align:center; margin-right:10px; color: red;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright RDHOTELS 2023<br> Made with ❤ by <a href="https://raguladhithya.in" target="_blank">Ragul Adhithya M</a> and  <a href="https://www.instagram.com/deepakraj_007" target="_blank"> Deepak </a></label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>