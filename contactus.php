<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link to css, bootstrap and fontawesome and font-family-->
    <link rel="stylesheet" href="css/contact.css" media="screen">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" media="screen">
    <link rel="shortcut icon" type="image/jpg" href="favicon.jpg"/>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>RD Hotels</title>
</head>
<body oncontextmenu="return false" onload="btn()">

        <!--start of header tag-->
        <header class="container-fluid">

            <!--start of hamburger button on small screen size-->
            <div class="collapse-btn d-md-none">
                <span class="collapse-btn__burger"></span>
            </div>
            <!--end of burger div on small screen size-->
            
            <!--start of logo-->
            <h1 id="logo">RD Hotels</sub></h1>
            <!--end of logo-->
    
            <!--start of navigation bar-->
            <nav class="nav">        
                <ul class="menu-nav">
                    <li class="menu-nav__item"><a href="index.php" class="menu-nav__link" accesskey="h"><i class="fas fa-home d-md-none mr-2"></i>Home</a></li>
	                <li class="menu-nav__item"><a href="aboutus.php" class="menu-nav__link" accesskey="a"><i class="fas fa-hotel d-md-none mr-2"></i>About us</a></li>
	                <li class="menu-nav__item"><a href="rooms.php" class="menu-nav__link" accesskey="r"><i class="fas fa-key d-md-none mr-2"></i>Rooms</a></li>               
	                <li class="menu-nav__item"><a href="contactus.php" class="menu-nav__link active" accesskey="c"><i class="fas fa-phone d-md-none mr-2"></i>Contact us</a></li>
	                <li class="menu-nav__item"><a href="rulesandregulation.php" class="menu-nav__link" accesskey="c"><i class="fas fa-phone d-md-none mr-2"></i>Rules</a></li>
	                <li class="menu-nav__item" id="unique-li"><a href="reservation.php" id="unique__link" accesskey="b">Book now</a></li>
            </nav>
            <!--end of navigation bar-->
    
        </header>
        <!--end of header tag-->

        <!--start of contact section-->
            <section class="section5 container-fluid" id="contact">
                <div class="contact-div1 row">
                        
                    <div class="container col-lg-6">

                        <div class="head text-capitalize font-weight-bold text-center">Get in touch with us</div>
                
                        <form class="form" action="https://formspree.io/f/xnqygvek" method="POST">
                
                            <div class="control">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="Name" placeholder="Enter Your Name Here">
                                <i class="fas fa-check-circle check"></i>
                                <i class="fas fa-exclamation-circle exclame"></i>
                                <small>
                                    <sup>*</sup>Preferably Your full name
                                </small>
                            </div>
                
                            <div class="control">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="Email ID" placeholder="Input Your Email-Address">
                                <i class="fas fa-check-circle check"></i>
                                <i class="fas fa-exclamation-circle exclame"></i>
                                <small>
                                    <sup>*</sup>To get a quick reply to your message
                                </small>
                            </div>

                            <div class="control">
                                <label for="message">Message</label>
                                <textarea id="message" name="Message"></textarea>
                                <i class="fas fa-check-circle check"></i>
                                <i class="fas fa-exclamation-circle exclame"></i>
                                <small>
                                    <sup>*</sup>Enter Your Message Here
                                </small>
                            </div>
                
                            <button class="btn btn-outline-primary" type="submit">Submit</button>
                        </form>
                    </div>

                    <script type="text/javascript">
                        function btn() {
                            document.getElementById('form').reset();
                        }
                        
                    </script>
                </div>
            </section>
        <!--end of contact section-->

        <!--start of information section-->
            <section class="container-fluid info">
                <div class="container py-3 my-5">
                    <h5 class="text-capitalize font-weight-bolder">Contact details</h5>
                    <h6>Reach out to us and we are always happy to hear from you</h6><br>
                    <div class="row">
                        <div class="col-md-7 col-lg-4 ads d-flex font-weight-bolder">
                            <i class="fas fa-map-marker-alt fa-2x text-primary mr-3"></i>
                            <address>
                                2/31 B Poonthottam 2nd street
                                <br>
                                Ganapathy, Cooimbatore
                            </address>
                        </div>
                    
                        <div class="col-md-5 col-lg-4 text-center font-weight-bolder">
                            <p>(+91)8668113739</p>
                        </div>
                        <div class="col-md-12 col-lg-4 email text-center font-weight-bolder">
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="mailto:mra20031006@gmail.com">mra20031006@@gmail.com</a>
                        </div>
                    </div>
                </div>
            </section>
        <!--end of information section-->
    

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
        </section>        <!--end of footer section-->

            <!--link to js and jquery, popper and font awesome-->
    <script src="js/index.js"></script>
    <script src="js/all.js"></script>
    <script defer src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>