<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The landing page of Ragul Hotels website">
    <!--link to css, bootstrap and fontawesome and font-family-->
    <link rel="stylesheet" href="css/reservation.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" media="screen">
    <link rel="shortcut icon" type="image/jpg" href="favicon.jpg"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <title>RD HOTELS</title>
</head>
<body oncontextmenu="return false">

    <!--start of header tag-->
    <header class="container-fluid">

        <!--start of hamburger button on small screen size-->
        <div class="collapse-btn d-md-none">
            <span class="collapse-btn__burger"></span>
        </div>
        <!--end of burger div on small screen size-->
        
        <!--start of logo-->
        <h1 id="logo">RD HOTELS<sub></sub></h1>
        <!--end of logo-->

        <!--start of navigation bar-->
        <nav class="nav">        
            <ul class="menu-nav">
                <li class="menu-nav__item"><a href="index.php" class="menu-nav__link" accesskey="h"><i class="fas fa-home d-md-none mr-2"></i>Home</a></li>
                <li class="menu-nav__item"><a href="aboutus.php" class="menu-nav__link" accesskey="a"><i class="fas fa-hotel d-md-none mr-2"></i>About us</a></li>
                <li class="menu-nav__item"><a href="rooms.php" class="menu-nav__link active" accesskey="r"><i class="fas fa-key d-md-none mr-2"></i>Rooms</a></li>
                
                <li class="menu-nav__item"><a href="contactus.php" class="menu-nav__link" accesskey="c"><i class="fas fa-phone d-md-none mr-2"></i>Contact us</a></li>
                <li class="menu-nav__item"><a href="rulesandregulation.php" class="menu-nav__link" accesskey="c"><i class="fas fa-phone d-md-none mr-2"></i>Rules</a></li>
                <li class="menu-nav__item" id="unique-li"><a href="reservation.php" id="unique__link" accesskey="b">Book now</a></li>
            </ul>
        </nav>
        <!--end of navigation bar-->

    </header>
    <!--end of header tag-->

    <!--start of suite section-->
    <section class="section2 container-fluid" id="reservations">
        <!--start of heading for suite part-->
        <div class="section2__head" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <h3 class="text-capitalize">Our suites & Rates<hr  class="bg-primary second-hr"></h3>
        </div>
        <!--end of heading for suite part-->

        <!--start of flex style for suite part-->
        <div class="section2__flex">
            <div class="row" data-aos="zoom-out" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <div class="mt-4 col-md-6 col-lg-4">
                        <figure>
                            <img class="second-img" src="images/9.jpeg" alt="My Suite">
                            <figcaption>
                                <h4 class="mt-3 text-capitalize">Hill-Top Suite</h4>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                <h5 class="my-2">Rs.5,000 per day</h5>
                                <button class="btn btn-outline-primary text-capitalize">
                                    <a href="reservation.php" class="first-a">Book now</a>
                                </button>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="mt-4 col-md-6 col-lg-4">
                        <figure>
                            <img class="second-img" src="images/10.jpg" alt="My Suite">
                            <figcaption>
                                <h4 class="mt-3 text-capitalize">Sea-View suite</h4>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                <h5 class="my-2">Rs.10,000 per day</h5>
                                <button class="btn btn-outline-primary text-capitalize">
                                    <a href="reservation.php" class="first-a">Book now</a>
                                </button>
                            </figcaption>
                    </div>
                    <div class="mt-4 col-md-6 col-lg-4">
                        <figure>
                            <img class="second-img" src="images/10.jpg" alt="My Suite">
                            <figcaption>
                                <h4 class="mt-3 text-capitalize">The Main Suite</h4>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                <h5 class="my-2">Rs.15,000 per day</h5>
                                <button class="btn btn-outline-primary text-capitalize">
                                    <a href="reservation.php" class="first-a">Book now</a>
                                </button>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="mt-4 col-md-6 col-lg-4">
                        <figure>
                            <img class="second-img" src="images/11.jpg" alt="My Suite">
                            <figcaption>
                                <h4 class="mt-3 text-capitalize">Legend-Side suite</h4>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                <h5 class="my-2">Rs.17,000 per day</h5>
                                <button class="btn btn-outline-primary text-capitalize">
                                    <a href="reservation.php" class="first-a">book now</a>
                                </button>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="mt-4 col-md-6 col-lg-4">
                        <!-- <figure>
                            <img class="second-img" src="images/12.jpeg" alt="My Suite">
                            <figcaption>
                                <h4 class="mt-3 text-capitalize">Master-Top suite</h4>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                <h5 class="my-2">Rs.20,000 per night</h5>
                                <button class="btn btn-outline-primary text-capitalize">
                                    <a href="contact.html" class="first-a">Book now</a>
                                </button>
                            </figcaption>
                        </figure> -->
                    </div>
                    <div class="mt-4 col-md-6 col-lg-4">
                        <figure>
                            <img class="second-img" src="images/12.jpeg" alt="My Suite">
                            <figcaption>
                                <h4 class="mt-3 text-capitalize">Master-Top suite</h4>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                    <i class="fas fa-star text-primary fa-2x"></i>
                                <h5 class="my-2">Rs.20,000 per day</h5>
                                <button class="btn btn-outline-primary text-capitalize">
                                    <a href="reservation.php" class="first-a">Book now</a>
                                </button>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
</section>
<!--end of suite section-->

<!--start of facilities section-->

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
    <script src="js/index.js"></script>
    <script src="js/all.js"></script>
    <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>