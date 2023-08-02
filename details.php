<!DOCTYPE html>
<html lang="en">
<?php
// $connect = mysqli_connect("localhost", "root", "", "pigmedb");
// if ($connect == false) {
// 	die("ERROR: Could not connect. " . mysqli_connect_error());
// }
?>

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
        <a href="index.php" class="logo"><img src="images/PigmeLogoH.png"></a>
        <ul class="nav">
            <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li><a class="cta" href="ordernow.php"><button>Order Now</button></a></li>
            <a class="cta-1 active" href="cart.php"><button class="shopping-cart">Cart <i class="fa fa-shopping-basket fa-lg" style="display: inline-block;"></i></button></a>
        </ul>
    </nav>
    <!--End Nav-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center">
                <div class="col-md-9 text-center mb-4">
                    <h1 class="mb-2 bread">Customer Details </h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="cart.php">My Cart ></a>
                        </span>
                        <span>Details ></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="parallax-form" data-parallax="scroll" data-z-index="1" style="background-image: url(images/3.jpg);">
        <section class="ftco-details-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form action="index.php" method="POST" id="formID" class="checkout-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="contactnumber" placeholder="Contact Number" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Province" value="Province (Metro Manila)" readonly="">
                            </div>

                            <div class="form-group">
                                <select name="city" class="form-control" placeholder="Select" required="">
                                    <option value="">Select City</option>
                                    <option value="Caloocan">Caloocan</option>
                                    <option value="Las Piñas">Las Piñas</option>
                                    <option value="Makati">Makati</option>
                                    <option value="Malabon">Malabon</option>
                                    <option value="Mandaluyong">Mandaluyong</option>
                                    <option value="Manila">Manila</option>
                                    <option value="Marikina">Marikina</option>
                                    <option value="Muntinlupa">Muntinlupa</option>
                                    <option value="Navotas">Navotas</option>
                                    <option value="Parañaque">Parañaque</option>
                                    <option value="Pasay">Pasay</option>
                                    <option value="Pasig">Pasig</option>
                                    <option value="Pateros Municipality">Pateros Municipality</option>
                                    <option value="Quezon City">Quezon City</option>
                                    <option value="San Juan">San Juan</option>
                                    <option value="Taguig">Taguig</option>
                                    <option value="Valenzuela">Valenzuela</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="barangay" placeholder="Barangay" required="">
                            </div>

                    </div>

                    <div class="col-md-6 ftco-animate fadeInUp ftco-animated">

                        <div class="form_wrap">
                            <div class="input_wrap">
                                <label style="font-size: 18px;">Deliver Schedule</label>
                                <ul class="list-unstyled mb-1">
                                    <li>
                                        <label class="radio_wrap">
                                            <input type="radio" id="r1" name="sched" value="now" class="input_radio" checked="" onclick="hideSched(0)">
                                            <span>Now</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="radio_wrap">
                                            <input type="radio" id="r2" name="sched" value="later" class="input_radio" onclick="hideSched(1)">
                                            <span>Later</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div id="laterDiv" class="input_grp" style="display: none;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input_wrap datepicker">
                                            <label for="date">Date</label>
                                            <input type="date" id="sdate" class="form-control" name="resDate1" value="<?php echo gmdate('Y-m-d'); ?>" min="<?php echo gmdate('Y-m-d'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input_wrap clockpicker">
                                            <label for="lname">Time</label>
                                            <input type="time" id="stime" class="form-control" name="" min="<?php echo gmdate('H:i'); ?>" max="00:00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Special Instructions"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary py-3 px-5" name="placeorderbtn">
                                &nbspPlace Order&nbsp
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    </form>
    <script type="text/javascript">
        function hideSched(x) {
            if (x == 1) {
                document.getElementById('laterDiv').style.display = "block";
            } else {
                document.getElementById('laterDiv').style.display = "none";
            }
        }
    </script>

    <!--End of Form-->

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