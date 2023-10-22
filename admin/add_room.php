<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
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
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li>			
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / Room / Add Room</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Room Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Hill - Top Suite">Hill - Top Suite</option>
								<option value = "Sea View Suite">Sea View Suite</option>
								<option value = "The Main Suite">The Main Suite</option>
								<option value = "Legend Suite">Legend Suite</option>
								<option value = "Master Suite">Master Suite</option>
							</select>
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" class = "form-control" name = "price" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "lbl">[Photo]</center>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "add_room" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_room.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:center; margin-right:10px; color: red;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright RDHOTELS 2023<br> Made with ❤ by <a href="https://raguladhithya.in" target="_blank">Ragul Adhithya M</a> and  <a href="https://www.instagram.com/deepakraj_007" target="_blank"> Deepak </a></label>
	</div>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>