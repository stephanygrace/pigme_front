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
        <a href="menu.php" class="logo"><img src="images/PigmeLogoH.png"></a>
        <ul class="nav">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li><a class="cta" href="ordernow.php"><button>Order Now</button></a></li>
            <a class="cta-1" href="cart.php"><button>Cart <i class="fa fa-shopping-basket fa-lg"
                        style="display: inline-block;"></i></button></a>
        </ul>
    </nav>
    <!--End Nav-->

    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <!--Slide 1-->
            <div class="carousel-item active">
                <div class="overlay"></div>
                <img src="images/bg2.jpg" class="d-block w-100" alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>PigMe Samgyupsal </h1>
                    <h3>Best Korean Restaurant in Town</h3>
                </div>
            </div>
            <!--Slide 2-->
            <div class="carousel-item">
                <img src="images/bg1.jpg" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>PigMe Samgyupsal </h1>
                    <h3>BY JRAMS</h3>
                </div>
            </div>
            <!--Slide 3-->
            <div class="carousel-item">
                <img src="images/bg5.jpg" class="d-block w-100" alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>PigMe Samgyupsal </h1>
                    <h3>UNLIMITED</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--End of carousel-->

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
                        <p style="margin-left: 20px; font-size: 14px;margin-top: 5px;">10 R. Jabson Street, Pateros,
                            Metro Manila</p>
                    </div>
                    <div class="col-sm-4">
                        <i class="fa fa-clock-o fa-lg" style="display: inline-block;"></i>&nbsp&nbsp&nbspOpen
                        Monday-Sunday
                        <p style="margin-left: 30px; font-size: 14px; margin-top: 5px;">11:00 AM - 10:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="column-right">
                <div class="row">
                    <div class="col-sm-4">
                        <!--Facebook-->
                        <a href="https://www.facebook.com/pigsamgyup/" target="_blank"><i
                                class="fa fa-facebook"></i></a>
                    </div>
                    <div class="col-sm-4">
                        <!--Google-->
                        <a href="https://vymaps.com/PH/Pig-Me-Samgyupsal-Atbp-By-JRAMS-117948989607918/"
                            target="_blank"><i class="fa fa-google"></i></a>
                    </div>
                    <div class="col-sm-4">
                        <!--Instagram-->
                        <a href="https://www.instagram.com/explore/locations/117948986274585/pig-me-samgyupsal-atbp-by-jrams/?hl=en"
                            target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!--End of Container-fluid 1-->

    <!--About section-->
    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url('images/bg4.jpg');">
        </div>
        <div class="one-half ftco-animate fadeInUp ftco-animated">
            <div class="heading-section ftco-animate fadeInUp ftco-animated">
                <h2 class="mb-4" style="color:black;">Welcome to PigMe Restaurant</h2>
            </div>
            <div>
                <p style="color:black;">PigMe is an authentic Samgyupsal Restaurant located at the heart of the Balut
                    Capital of the
                    Philippines , the Municipality of Pateros. The Restaurant was established way back 2016 headed by
                    the loving couple Mr. and Mrs. Lorente. The Samgyupsal Restaurant was very popular on that year
                    since a lot of Korean Foods was also emerging in our country. And also the fact that Filipino loves
                    the Korean Country, they want to try their delicacies and one of this is the samgyupsal. The lovely
                    couple decided to start a restaurant business that serves the best Samgyupsal Experience in the
                    Municipality of Pateros and created PigMe. It serves the best tasting and most affordable unlimited
                    Samgyupsal experience for everyone. </p>
                <p class="mb-0">Come and Visit us at #32 Almeda st., Pateros, Metro Manila.</p>
            </div>
        </div>
    </section>
    <!--End of about section-->

    <!-- Gallery-->
    <section class="ftco-section-1">
        <div class="container-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
                    <h1 class="mb-4">Happy Customers</h1>
                </div>
            </div>
            <div class="row no-gutters ">
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c3.jpg" style="width:100%">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c2.jpg" style="width:100%">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c4.jpg" style="width:100%">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c5.jpg" style="width:100%">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c6.jpg" style="width:100%">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c1.jpg" style="width:100%; height: 100%;">
                    </div>
                </div>
            </div>
            <div class="row no-gutters mb-">
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c1.jpg" style="width:100%">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c6.jpg" style="width:100%">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c7.jpg" style="width:100%; ">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c8.jpg" style="width:100%;">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c11.jpg" style="width:100%;">
                    </div>
                </div>
                <div class="col-2 ">
                    <div class="img-hover-zoom img-hover-zoom--basic">
                        <img src="images/c13.jpg" style="width:100%;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Gallery-->


    <section class="ftco-services" style="background-color:white;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center fadeInUp ftco-animated"
                    style="color:black">
                    <h2 style="color:black">OUR SERVICES</h2>
                    <p style="color:black">UNLI SAMGYUPSAL PORK, BEEF, CHICKEN FILLET, CRAB, SHRIMPS, SALMON BELLY
                        STRIPS, SQUID RINGS,
                        SCALLOPS W/ COMPLETE UNLI SIDE DISHES, RICE</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="media d-block text-center block-6 services">
                        <div class="d-flex justify-content-center align-items-center mb-5">
                            <span><img src="images/food.png" style="width: 20%; "></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Unli Korean Foods</h3>
                            <p style="color:black">Even the all-powerful Pointing has no control about the blind texts
                                it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="media d-block text-center block-6 services">
                        <div class="d-flex justify-content-center align-items-center mb-5">
                            <span><img src="images/delivery-man.png" style="width: 20%; "></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Fastest Delivery</h3>
                            <p style="color:black">Even the all-powerful Pointing has no control about the blind texts
                                it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
                    <div class="media d-block text-center block-6 services">
                        <div class="d-flex justify-content-center align-items-center mb-5">
                            <span><img src="images/recipe.png" style="width: 20%; "></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">JRAMS Recipes</h3>
                            <p style="color:black">Even the all-powerful Pointing has no control about the blind texts
                                it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="ftco-section img"
        style="background-image: url('images/bg1.jpg'); background-position: 50% ; height: 500px;"
        data-stellar-background-ratio="0.2">
    </section>

    <footer class="ftco-footer ftco-bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">PigMe Samgyupsal</h2>
                        <p>UNLI SAMGYUPSAL PORK, BEEF, CHICKEN, CHEESE UNLI CRAB, FLAVORED CHICKEN WINGS & SHRIMP WITH
                            COMPLETE UNLI SIDE DISHES, SOUP, RICE & ICE CREAM atbp.</p>
                        <div class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <a href="https://www.facebook.com/pigsamgyup/" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
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