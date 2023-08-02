<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pig Me Samgyupsal Restaurant</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/images/PigMeLogoH.ico" type="image/x-icon">
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
<style type="text/css">
    .form-invalid {
        outline: 1px solid red !important;
    }

    h2,
    h4 {
        align-content: center;
    }
</style>
<?php
// $message_sent = false;
// if (isset($_POST['email']) && $_POST['email'] != '') {
// 	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

// 		$userName = $_POST['name'];
// 		$userEmail = $_POST['email'];
// 		$messageSubject = $_POST['subject'];
// 		$message = $_POST['message'];

// 		$to = "pigmesamgyupsal@gmail.com";
// 		$body = "";

// 		$body .= "From: " . $userName . "\r\n";
// 		$body .= "Email: " . $userEmail . "\r\n";
// 		$body .= "Message: " . $message . "\r\n";

// 		mail($to, $messageSubject, $body);
// 		$message_sent = true;
// 	} else {
// 		$invalid_class_name = "form-invalid";
// 	}
// }
?>

<body>
    <!--NAV BAR-->
    <nav>
        <a href="index.php" class="logo"><img src="images/PigmeLogoH.png"></a>
        <ul class="nav">
            <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
            <li><a class="cta" href="ordernow.php"><button>Order Now</button></a></li>
            <a class="cta-1" href="cart.php"><button>Cart <i class="fa fa-shopping-basket fa-lg" style="display: inline-block;"></i></button></a>
        </ul>
    </nav>
    <!--End Nav-->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center">
                <div class="col-md-9 text-center mb-4">
                    <h1 class="mb-2 bread">Contact </h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="index.php">Home ><i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>Contact >
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Parallax-->
    <div class="parallax" data-parallax="scroll" data-z-index="1" style="background-image: url(images/3.jpg);">
        <section class="ftco-section-3 contact-section">
            <div class="container">
                <div class="row block-9">
                    <?php
                    // if ($message_sent) :
                    // 
                    ?>

                    <!-- <h3 style="padding-right: 220px"> Thank you for sending us an email. We'll get back to you soon.
                    </h3> -->

                    <?php
                    // else :
                    ?>

                    <div class="col-md-5">
                        <div class="row mb-4">

                            <h2 class="mb-1" style="text-align: left; margin-left: 30px;">Contact Information</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p>
                                <span>Address:</span>
                                <a href="https://vymaps.com/PH/Pig-Me-Samgyupsal-Atbp-By-JRAMS-117948989607918/" style="color: #e77e4e;"> 10 R. Jabson Street, Pateros, Metro Manila</a>
                            </p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p>
                                <span>Phone:</span>
                                <a href="tel:+639171080421" style="color: #e77e4e;">(+63)917 108 0421</a>
                            </p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p>
                                <span>Email:</span>
                                <a href="mailto:jramsresto@yahoo.com" style="color: #e77e4e;">jramsresto@yahoo.com</a>
                            </p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p>
                                <span>Page:</span>
                                <a href="https://www.facebook.com/pigsamgyup" style="color: #e77e4e;">https://www.facebook.com/pigsamgyup</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-5 ftco-animate fadeInUp ftco-animated">
                        <form method="POST" action="#" class="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" Your Name" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control <?= $invalid_class_name ?? "" ?>" placeholder=" Your Email" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder=" Subject" name="subject" id="subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder=" Message" required style="resize: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center"><br>
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>

                    <?php
                    // endif;
                    ?>
                </div>
            </div>
        </section>
    </div>

    <!--End of Parallax-->


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
                            <a href="https://www.instagram.com/explore/locations/117948986274585/pig-me-samgyupsal-atbp-by-jrams/?hl=en"><i class="fa fa-instagram"></i></a>
                            <a href="https://vymaps.com/PH/Pig-Me-Samgyupsal-Atbp-By-JRAMS-117948989607918/"><i class="fa fa-google"></i></a>
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
                                <li><i class="fa fa-envelope"></i> <a href="mailto:jramsresto@yahoo.com"><span class="text"> jramsresto@yahoo.com</span></a></li>
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