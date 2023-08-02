<!DOCTYPE html>
<html lang="en">
<?php
// $connect = mysqli_connect("localhost", "root", "", "pigmedb");
// if ($connect === false) {
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
            <a class="cta-1 active" href="cart.php"><button>Cart <i class="fa fa-shopping-basket fa-lg" style="display: inline-block;"></i></button></a>
        </ul>
    </nav>
    <!--End Nav-->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center">
                <div class="col-md-9 text-center mb-4">
                    <h1 class="mb-2 bread">Cart </h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="index.php">Home ><i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>Cart >
                            <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Start of Cart-->
    <section class="ftco-section-5">
        <div class="container">
            <div class="row">
                <div class="table-wrap">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <form method="POST" onChange="getQuantity">
                            <?php
                            // $i = 1;


                            // $result = mysqli_query($connect, "SELECT * FROM pigme_cart");
                            // $rows = mysqli_num_rows($result);

                            // $query = "SELECT * FROM pigme_cart";
                            // $foodname = "";
                            // $quantity = 0;
                            // $price = 0;
                            // $pricesubtotal = 0;
                            // $subtotal = 0;
                            // $deliverfee = 60;

                            // if ($result = $connect->query($query)) {

                            // 	while ($i <= $rows) {

                            // 		while ($row = $result->fetch_assoc()) {
                            // 			$foodname = $row["foodname"];
                            // 			$quantity = $row["quantity"];
                            // 			$price = $row["price"];
                            // 			$pricesubtotal = $row["pricesubtotal"];
                            // 			$subtotal += $pricesubtotal;
                            ?>
                            <tbody>
                                <tr class="alert" role="alert">
                                    <td>
                                        <label class="checkbox-wrap checkbox-primary">
                                            <input type="checkbox" checked="">
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="img" style="background-image:url()"></div>
                                    </td>
                                    <td>
                                        <div class="email">
                                            <span> Samgyupsal Set A for 4-5 pax</span>
                                        </div>
                                    </td>
                                    <td>₱ 365.00</td>

                                    <td class="item-count">
                                        <div class="count-input">
                                            <!--  <button class="btn btn-default" onclick=" down('1')" type="button" data-action="decrease"><span class="fa fa-minus"></span></button>-->
                                            <input type="text" name="quantitycart" id="quantitycart" value="2">
                                            <!-- <button class="btn btn-default" onclick="up('5')" type="button" data-action="increase"><span class="fa fa-plus"></span></button>-->
                                        </div>
                                    </td>


                                    <td>₱ 730.00</td>

                                    <td>
                                        <button id="delitem" name="delitem" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-close"></i></span>
                                        </button>

                                    </td>
                                </tr>
                            </tbody>

                            <?php
                            // 			$i++;
                            // 		}
                            // 	}
                            // }


                            ?>

                            <!-- <td> <button name="updatecart" class="btn btn-primary py-3 px-4"> Update cart </button>
							</td> -->

                    </table>
                </div>
            </div>

            <div class="row">
                <div class="mt-5 cart-wrap" style="width: 100%;">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>₱ 730.00
                                <!-- <?php echo $subtotal; ?> -->
                            </span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery</span>
                            <span>₱ 40.00
                                <!-- <?php echo $deliverfee; ?>-->
                            </span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span>₱ 0</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>₱ 770.00
                                <!-- <?php echo $subtotal + $deliverfee; ?> -->
                            </span>
                        </p>
                    </div>
                    <p class="justify-content-end"><a href="details.php" class="btn btn-primary py-3 px-4">Proceed to
                            Checkout</a></p>
                </div>
            </div>
            </form>
            <script>
                function up(max) {
                    document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) + 1;
                    if (document.getElementById("quantity").value >= parseInt(max)) {
                        document.getElementById("quantity").value = max;
                    }
                }

                function down(min) {
                    document.getElementById("quantity").value = parseInt(document.getElementById("quantity").value) - 1;
                    if (document.getElementById("quantity").value <= parseInt(min)) {
                        document.getElementById("quantity").value = min;
                    }
                }
            </script>
        </div>
    </section>


    <!--End of Cart-->

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
                        <h2 class="ftco-heading-2">Have Questions?</h2>
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

<script type="text/javascript">
    $('#quantitycart').keyUp(function() {
        $('.quant').text($(this).val());
    });
</script>