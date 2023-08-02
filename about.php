<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pig Me Samgyupsal Restaurant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript">
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('nav2');
        } else {
            $('nav').removeClass('nav2');
        }
    })
    </script>
</head>

<body>
    <!--NAV BAR-->
    <nav>
        <a href="index.html" class="logo"><img src="images/PigmeLogoH.png"></a>
        <ul class="nav">
            <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li><a class="cta" href="ordernow.php"><button>Order Now</button></a></li>
            <a class="cta-1" href="cart.php"><button>Cart <i class="fa fa-shopping-basket fa-lg"
                        style="display: inline-block;"></i></button></a>
        </ul>
    </nav>
    <!--End Nav-->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center">
                <div class="col-md-9 text-center mb-4">
                    <h1 class="mb-2 bread">About </h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="index.html">Home >
                                <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>About >
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Container Fluid 1-->
    <div class="container-fluid">
        <div class="row">
            <div class="column-left">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-phone fa-lg" style="display: inline-block;"></i>&nbsp&nbsp&nbspCall Now
                        <p style="margin-left: 20px; font-size: 14px;margin-top: 5px;">(+63)917 108 0421 <br>(+63)999
                            223 5950</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-map-pin fa-lg" style="display: inline-block;"></i>&nbsp&nbsp&nbspLocation
                        <p style="margin-left: 20px; font-size: 14px;margin-top: 5px; ">10 R. Jabson Street, Pateros,
                            Metro Manila</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-clock-o fa-lg" style="display: inline-block;"></i>&nbsp&nbsp&nbspOpen
                        Monday-Sunday
                        <p style="margin-left: 30px; font-size: 14px; margin-top: 5px; ">11:00 AM - 9:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="column-right">
                <div class="row">
                    <div class="col-sm-4">
                        <!--Facebook-->
                        <a href="#" class="fa fa-facebook"></a>
                    </div>
                    <div class="col-sm-4">
                        <!--Google-->
                        <a href="#" class="fa fa-google"></a>
                    </div>
                    <div class="col-sm-4">
                        <!--Instagram-->
                        <a href="#" class="fa fa-instagram"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--About section-->
    <div class="parallax-about" data-parallax="scroll" data-z-index="1" style="background-image: url(images/3.jpg);">
        <section class="ftco-about d-md-flex">
            <div class="one-half img" style="background-image: url('images/bg4.jpg');"></div>
            <div class="one-half ftco-animate fadeInUp ftco-animated">
                <div class="heading-section ftco-animate fadeInUp ftco-animated">
                    <h2 class="mb-4">Welcome to PigMe Restaurant</h2>
                </div>
                <div>
                    <p>PigMe is an authentic Samgyupsal Restaurant located at the heart of the Balut Capital of the
                        Philippines , the Municipality of Pateros. The Restaurant was established way back 2016 headed
                        by the loving couple Mr. and Mrs. Lorente. The Samgyupsal Restaurant was very popular on that
                        year since a lot of Korean Foods was also emerging in our country. And also the fact that
                        Filipino loves the Korean Country, they want to try their delicacies and one of this is the
                        samgyupsal. The lovely couple decided to start a restaurant business that serves the best
                        Samgyupsal Experience in the Municipality of Pateros and created PigMe. It serves the best
                        tasting and most affordable unlimited Samgyupsal experience for everyone. </p>
                    <p class="mb-0">Come and Visit us at #32 Almeda st., Pateros, Metro Manila.</p>
                </div>
            </div>
        </section>
    </div>
    <!--End of about section-->


    <!--Footer-->
    <footer class="ftco-footer ftco-bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">PigMe Samgyupsal</h2>
                        <p>UNLI SAMGYUPSAL PORK, BEEF, CHICKEN, CHEESE UNLI CRAB, FLAVORED CHICKEN WINGS & SHRIMP WITH
                            COMPLETE UNLI SIDE DISHES, SOUP, RICE & ICE CREAM atbp.</p>
                        <div class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <a href="https://www.facebook.com/pigsamgyup/"><i class="fa fa-facebook"></i></a>
                            <a
                                href="https://www.instagram.com/explore/locations/117948986274585/pig-me-samgyupsal-atbp-by-jrams/?hl=en"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="https://vymaps.com/PH/Pig-Me-Samgyupsal-Atbp-By-JRAMS-117948989607918/"><i
                                    class="fa fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Open Hours</h2>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Monday</span><span>11:00 - 22:00</span></li>
                            <li class="d-flex"><span>Tuesday</span><span>11:00 - 22:00</span></li>
                            <li class="d-flex"><span>Wednesday</span><span>11:00 - 22:00</span></li>
                            <li class="d-flex"><span>Thursday</span><span>11:00 - 22:00</span></li>
                            <li class="d-flex"><span>Friday</span><span>11:00 - 22:00</span></li>
                            <li class="d-flex"><span>Saturday</span><span>11:00 - 22:00</span></li>
                            <li class="d-flex"><span>Sunday</span><span> 11:00 - 22:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customers</h2>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/c1.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/c2.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/c3.jpg);">
                            </a>
                        </div>
                        <div class="thumb d-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/c4.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/c5.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/c6.jpg);">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><i class="fa fa-location-arrow"></i><span class="text"> 10 R. Jabson Street,
                                        Pateros, Metro Manila</span></li>
                                <li><i class="fa fa-phone"></i><span class="text"> (+63)917 108 0421</span></a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:jramsresto@yahoo.com"><span
                                            class="text"> jramsresto@yahoo.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->




</body>

</html>