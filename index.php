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
        <h1 id="logo">RD Hotels<sub></sub></h1>
        <nav class="nav">        
            <ul class="menu-nav">
                <li class="menu-nav__item"><a href="index.php" class="menu-nav__link active" accesskey="h"><i class="fas fa-home d-md-none mr-2"></i>Home</a></li>
                <li class="menu-nav__item"><a href="aboutus.php" class="menu-nav__link" accesskey="a"><i class="fas fa-hotel d-md-none mr-2"></i>About us</a></li>
                <li class="menu-nav__item"><a href="rooms.php" class="menu-nav__link" accesskey="r"><i class="fas fa-key d-md-none mr-2"></i>Rooms</a></li>               
                <li class="menu-nav__item"><a href="contactus.php" class="menu-nav__link" accesskey="c"><i class="fas fa-phone d-md-none mr-2"></i>Contact us</a></li>
                <li class="menu-nav__item"><a href="rulesandregulation.php" class="menu-nav__link" accesskey="c"><i class=""></i>Rules</a></li>
                <li class="menu-nav__item" id="unique-li"><a href="reservation.php" id="unique__link" accesskey="b">Book now</a></li>
            </ul>
        </nav>
    </header>
    <section class="section1" id="home">
        <div class="d-md-none carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/ni/1.jpg" alt="First Image" class="d-block w-100 first-img">
                    <div class="carousel-caption embedded-text">
                        <h2 data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">Welcome to RD Hotels</h2>
                        <p data-aos="flip-left" data-aos-delay="1000" data-aos-duration="1000">Experience a magical stay & make the most beautiful memories with your loved ones at the resort</p>
                        <div class="text-center text-capitalize btn-div small-btn" data-aos="zoom-out" data-aos-delay="1000" data-aos-duration="1000">
                            <a href="reservation.php" class="text-white">
                                <svg><rect></rect></svg>
                                Book now 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end of showing on small screen-->

        <!--start of carousel showing on larger screens-->
        <div id="indicator" class="d-none d-md-block carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#indicator" data-slide-to="0" class="active"></li>
                <li data-target="#indicator" data-slide-to="1"></li>
                <li data-target="#indicator" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/ni/1.jpg" alt="First Image" class="d-block w-100 first-img">
                    <div class="carousel-caption d-none d-md-block embedded-text">
                        <h2>Welcome to RD Hotels</h2>
                        <p>Experience a magical stay & make the most beautiful memories with your loved ones at the resort</p>
                        <div class="text-center text-capitalize btn-div">
                            <a href="reservation.php" class="text-white">
                                <svg><rect></rect></svg>
                                Book now 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/ni/2.jpg" alt="Second Image" class="d-block w-100 first-img">
                    <div class="carousel-caption d-none d-md-block embedded-text">
                        <h2>Welcome to RD Hotels</h2>
                        <p>Experience a magical stay & make the most beautiful memories with your loved ones at the resort</p>
                        <div class="text-center text-capitalize btn-div">
                            <a href="reservation.php" class="text-white">
                                <svg><rect></rect></svg>
                                Book now 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/ni/3.jpg" alt="Third Image" class="d-block w-100 first-img">
                    <div class="carousel-caption embedded-text">
                        <h2>Welcome to RD Hotels</h2>
                        <p>Experience a magical stay & make the most beautiful memories with your loved ones at the resort</p>
                        <div class="text-center text-capitalize btn-div">
                            <a href="reservation.php" class="text-white">
                                <svg><rect></rect></svg>
                                Book now 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#indicator" role="button" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#indicator" role="button" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--end of showing on larger screens-->
    
    </section>
    <!--end of carousel section-->

    <!--start of facilities section-->
<section class="section3 container-fluid" id="facilities">
    <!--start of heading for facility part-->
    <div class="section2__head">
        <h3 class="text-capitalize">Facilities & Services<hr class="bg-primary second-hr"></h3>
        
    </div>
    <!--end of heading for facilities part-->

    <!--start of flex style for facility part-->
    <div class="section2__flex">
        <div class="row">
            <div class="mt-4 col-md-6 col-lg-4">
                <figure>
                    <img class="second-img" src="images/ni/4.jpg" alt="My Suite">
                    <figcaption>
                        <h4 class="mt-3 text-capitalize">Meeting room</h4>
                        <h5 class="text-capitalize">Refreshing conference rooms</h5>
                        <button class="btn btn-outline-primary text-capitalize" data-toggle="modal" data-target="#read1">
                            <a href="#facilities" class="first-a">Read more</a>
                        </button>
                    </figcaption>
                </figure>

                <!-- Modal -->
                <div class="modal fade" id="read1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-white">
                        <div class="modal-header">
                          <h6 class="modal-title" id="exampleModalLongTitle">MEETING ROOM</h6>
                          <button type="button" class="close modal-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Our Conference room is quiet,cool and nice for handling for your various business meetings.</p>
                        </div>
                      </div>
                    </div>
                </div>
                <!--end of modal-->
            </div>

            <div class="mt-4 col-md-6 col-lg-4">
                <figure>
                    <img class="second-img" src="images/ni/3.jpg" alt="My Suite">
                    <figcaption>
                        <h4 class="mt-3 text-capitalize">Recreation</h4>
                        <h5 class="text-capitalize">Olympic sized swimming pool</h5>
                        <button class="btn btn-outline-primary text-capitalize" data-toggle="modal" data-target="#read2">
                            <a href="#facilities" class="first-a">Read more</a>
                        </button>
                    </figcaption>
                </figure>

                <!-- Modal -->
                <div class="modal fade" id="read2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-white">
                        <div class="modal-header">
                          <h6 class="modal-title" id="exampleModalLongTitle">RECREATION</h6>
                          <button type="button" class="close modal-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Our Recreation area is one of the coolest place and is the best when talking about comfortability</p>
                        </div>
                      </div>
                    </div>
                </div>
                <!--end of modal-->
            </div>

            <div class="mt-4 col-md-6 col-lg-4">
                <figure>
                    <img class="second-img" src="images/ni/5.jpg" alt="My Suite">
                    <figcaption>
                        <h4 class="mt-3 text-capitalize">Resting area</h4>
                        <h5 class="text-capitalize">Relaxation and entertainment</h5>
                        <button class="btn btn-outline-primary text-capitalize" data-toggle="modal" data-target="#read3">
                            <a href="#facilities" class="first-a">Read more</a>
                        </button>
                    </figcaption>
                </figure>

                <!-- Modal -->
                <div class="modal fade" id="read3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-white">
                        <div class="modal-header">
                          <h6 class="modal-title" id="exampleModalLongTitle">RESTING AREA</h6>
                          <button type="button" class="close modal-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Our Resting area is the best when talking about comfortability.</p>
                        </div>
                      </div>
                    </div>
                </div>
                <!--end of modal-->
            </div>

            <div class="mt-4 col-md-6 col-lg-4">
                <figure>
                    <img class="second-img" src="images/ni/6.jpg" alt="My Suite">
                    <figcaption>
                        <h4 class="mt-3 text-capitalize">Dining</h4>
                        <h5 class="text-capitalize">Dining section</h5>
                        <button class="btn btn-outline-primary text-capitalize" data-toggle="modal" data-target="#read4">
                            <a href="#facilities" class="first-a">Read more</a>
                        </button>
                    </figcaption>
                </figure>

                <!-- Modal -->
            <div class="modal fade" id="read4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content bg-white">
                    <div class="modal-header">
                      <h6 class="modal-title" id="exampleModalLongTitle">DINING AREA</h6>
                      <button type="button" class="close modal-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Our Dining section serves and offer you all kind of cusine.</p>
                    </div>
                  </div>
                </div>
            </div>
                <!--end of modal-->
            </div>

            <div class="mt-4 col-md-6 col-lg-4">
                <figure>
                    <img class="second-img" src="images/ni/7.jpg" alt="My Suite">
                    <figcaption>
                        <h4 class="mt-3 text-capitalize">Lobby</h4>
                        <h5 class="text-capitalize">Lobby area</h5>
                        <button class="btn btn-outline-primary text-capitalize" data-toggle="modal" data-target="#read5">
                            <a href="#facilities" class="first-a">Read more</a>
                        </button>
                    </figcaption>
                </figure>

                <!-- Modal -->
                <div class="modal fade" id="read5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-white">
                        <div class="modal-header">
                          <h6 class="modal-title" id="exampleModalLongTitle">LOBBY</h6>
                          <button type="button" class="close modal-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Our lobby are is readily available for your relaxing and welcomin our guest visitors</p>
                        </div>
                      </div>
                    </div>
                </div>
               <!--end of modal-->
            </div>

            <div class="mt-4 col-md-6 col-lg-4">
                <figure>
                    <img class="second-img" src="images/ni/8.jpg" alt="My Suite">
                    <figcaption>
                        <h4 class="mt-3 text-capitalize">Gym room</h4>
                        <h5 class="text-capitalize">Fitness and building room</h5>
                        <button class="btn btn-outline-primary text-capitalize" data-toggle="modal" data-target="#read6">
                            <a href="#facilities" class="first-a">Read more</a>
                        </button>
                    </figcaption>
                </figure>

                <!-- Modal -->
                <div class="modal fade" id="read6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content bg-white">
                        <div class="modal-header">
                          <h6 class="modal-title" id="exampleModalLongTitle">GYM AREA</h6>
                          <button type="button" class="close modal-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Our Gym section is readily available for your body building</p>
                        </div>
                      </div>
                    </div>
                </div>
                <!--end of modal-->
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