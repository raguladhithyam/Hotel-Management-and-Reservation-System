<!-- <!DOCTYPE html>
<html lang = "en">
	<head>
		<title>RD Hotels</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<marquee style="font-family: cursive; font-size: 25px; margin-top: 15px; background-color: lightblue; font-weight: bold; margin-bottom: 15px;">RD Hotels</marquee>	
	<ul id = "menu">
		<li><a href = "index.php">Home</a></li> |
		<li><a href = "aboutus.php">About us</a></li> |
		<li><a href = "contactus.php">Contact us</a></li> |
		<li><a href = "gallery.php">Gallery</a></li> |
		<li><a href = "dineandlounge.php">Dine and Lounge</a></li> |			
		<li><a href = "reservation.php">Make a reservation</a></li> |
		<li><a href = "rulesandregulation.php">Rules and Regulation</a></li>
	</ul>
	<div style = "margin-left:10;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: ₹ ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:center; margin-right:10px; color: red;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright RDHOTELS 2023<br> Made with ❤ by <a href="https://raguladhithya.in" target="_blank">Ragul Adhithya M</a> and  <a href="https://www.instagram.com/deepakraj_007" target="_blank"> Deepak </a></label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html> -->

<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>RD HOTELS</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    	<link rel="stylesheet" href="css/index.css" media="screen">
   		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" media="screen">
		<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	</head>
<body oncontextmenu="return false">
    <header class="container-fluid">
        <div class="collapse-btn d-md-none">
            <span class="collapse-btn__burger"></span>
        </div>
        <h1 id="logo">Ragul Hotels<sub></sub></h1>
        <nav class="nav">        
            <ul class="menu-nav">
                <li class="menu-nav__item"><a href="index.php" class="menu-nav__link" accesskey="h"><i class="fas fa-home d-md-none mr-2"></i>Home</a></li>
                <li class="menu-nav__item"><a href="aboutus.php" class="menu-nav__link" accesskey="a"><i class="fas fa-hotel d-md-none mr-2"></i>About us</a></li>
                <li class="menu-nav__item"><a href="rooms.php" class="menu-nav__link" accesskey="r"><i class="fas fa-key d-md-none mr-2"></i>Rooms</a></li>               
                <li class="menu-nav__item"><a href="contactus.php" class="menu-nav__link" accesskey="c"><i class="fas fa-phone d-md-none mr-2"></i>Contact us</a></li>
                <li class="menu-nav__item"><a href="rulesandregulation.php" class="menu-nav__link" accesskey="c"><i class="fas fa-phone d-md-none mr-2"></i>Rules</a></li>
                <li class="menu-nav__item" id="unique-li"><a href="reservation.php" id="unique__link" accesskey="b">Book now</a></li>
            </ul>
        </nav>
    </header>

    
    <!--end of heading for facilities part-->

    <!--start of flex style for facility part-->
    <div class="section2__flex">
		<div class = "panel panel-default">
			<div class = "panel-body"><br>
    <br><br>
    <br><br>


				<strong><h2>MAKE A RESERVATION</h2></strong>
    <br><br>

				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: ₹ ".$fetch['price'].".00"?></h4>
							<br /><br /><br /><br /><br /><br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
        </div>
    </section>
<!--end of facilities section-->




    <!--start of footer section-->
        <section class="section6 bg-dark container-fluid">
            <div class="footer__div1 py-5 row">

                <div class="text-capitalize div2 col-md-6 col-lg-3">
                    <ul class="ul1 d-flex">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="reservation.php">Reservations</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                    </ul>
                </div>

                <div class="text-capitalize div2 d-none d-md-block col-md-6 col-lg-3">
                    
                </div>

                <div class="div4 col-lg-6">
                	<p>&copy; Copyright RDHOTELS 2023<br> Made with ❤ by <a href="https://raguladhithya.in" target="_blank" style="color: white;"><u>Ragul Adhithya M</u></a> and  <a href="https://www.instagram.com/deepakraj_007" target="_blank" style="color: white;"><u>Deepak</u></a></p>
                    <div class="my-3 font-div">
                            <a href="https://twitter.com/RagulAdhithyaM" target="_blank" rel="noreferrer"><i class="fab fa-twitter text-white fa-2x"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100071622905499" target="_blank" rel="noreferrer"><i class="fab fa-facebook text-white fa-2x mx-5"></i></a>
                            <a href="https://www.instagram.com/ragul_2003" target="_blank" rel="noreferrer"><i class="fab fa-instagram text-white fa-2x"></i></a>
                    </div>           
                </div>
                
            </div>
        </section>
    <!--end of footer section-->

    <!--link to js and jquery, popper and font awesome-->
    <script src="js/index.js"></script>
    <script src="js/all.js"></script>
    <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/scripts.js"></script>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>