<!DOCTYPE html>
<html lang="en">

<?php
$connect = mysqli_connect("localhost", "root", "", "pigmedb");  
		if($connect == false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	
	$result = mysqli_query($connect, "SELECT * FROM pigme_cart");
	$rows = mysqli_num_rows($result);
	$query = "SELECT * FROM pigme_cart";
	if (isset($_POST['lname']) && isset($_POST['fname']) && isset($_POST['contactnumber']) && isset($_POST['barangay']) && isset($_POST['city'])){
		$custname = $_POST['lname'].", ". $_POST['fname'];
		$contactnumber = $_POST['contactnumber'];
		$custaddress = "Brgy. ".$_POST['barangay']." ".$_POST['city'].", Metro Manila";
	}
	$colOrder = "";
	$colOrderQty = "";
	$colOrderPr = "";
	$ordername = "";
	$orderqty = "";
	$orderprice = "";
	$ordertotal = 60; //60 because of shipping fee
	$nu = 1; 
	if (isset($_POST['placeorderbtn'])){ //when the confirm order is pressed
		if ($result = $connect->query($query)) {				
			while ($row = $result->fetch_assoc()) { //this loop will isa isa the rows of the table
				$foodname = $row["foodname"]; //order name
				$quantity = $row["quantity"]; //quantity of the order
				$pricesubtotal = $row["pricesubtotal"];
				$ordertotal +=	$pricesubtotal;		
				if($nu==$rows){ //when the looping reaches the final row of the table
					$colOrder .= "order$nu"; 
					$colOrderQty .= "quantity$nu"; 
					$colOrderPr .= "subtotal$nu"; 
					$ordername .= "'$foodname'";
					$orderqty .= "'$quantity'";
					$orderprice .= "'$pricesubtotal'";
				}
				else {
					$colOrder .= "order$nu, "; //will concatinate the column order names of the table
					$colOrderQty .= "quantity$nu, "; //will concatinate the column quantity names of the table
					$colOrderPr .= "subtotal$nu, "; //will concatinate the column price names of the table
					$ordername .= "'$foodname', "; //will concatinate the order names
					$orderqty .= "'$quantity', "; //will concatinate the order quantities
					$orderprice .= "'$pricesubtotal', "; //will concatinate the order prices
				}
				$nu++;
			}	
						
		}
		if(mysqli_query($connect, "INSERT INTO pigme_confirmed_orders(customername, contactnumber, customeraddress, $colOrder, $colOrderQty, $colOrderPr, total) VALUES ('$custname','$contactnumber','$custaddress',$ordername,$orderqty,$orderprice,'$ordertotal')")){
			mysqli_query($connect, "TRUNCATE TABLE pigme_cart");
			echo '<script>alert("order confirmed")</script>';  
			echo '<script>window.location="receipt.php"</script>';
		}
		else {
			echo '<script>alert("error confirming the order")</script>';  
			echo '<script>window.location="receipt.php"</script>';
		}
		
		mysqli_close($connect);
	}
	mysqli_real_query($connect, "SELECT * FROM pigme_confirmed_orders ORDER BY id DESC LIMIT 1"); //to find the last row aka the latest transaction bubu
?>     
<head>
	<title>Pig Me Samgyupsal Restaurant</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/path/to/parallax.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	 <script type="text/javascript">
    	$(window).on('scroll' , function(){
    		if ($(window).scrollTop()) {
    			$('nav').addClass('nav2');
    		}
    		else {
    			$('nav').removeClass('nav2');
    		}
    	})
    </script> 
</head>
<style>
body {
    background-color: #eee
}

.fs-12 {
    font-size: 12px
}

.fs-15 {
    font-size: 15px
}

.name {
    margin-bottom: -2px
}

.product-details {
    margin-top: 13px
}		
</style>
<body>
		<!--NAV BAR-->
	<nav>
		<a href="menu.php" class="logo"><img src="images/PigmeLogoH.png"></a>
			<ul class="nav">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
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
		            <h1 class="mb-2 bread">Order Receipt </h1>
		            <p class="breadcrumbs">
		            	<span class="mr-2">
		            		<a href="index.php">Home ><i class="ion-ios-arrow-forward"></i></a>
		            	</span> 
		            	<span class="mr-2">
		            		<a href="ordernow.php">Order Now ><i class="ion-ios-arrow-forward"></i></a>
		            	</span> 
		            	<span class="mr-2">
		            		<a href="details.php">Billing Details ><i class="ion-ios-arrow-forward"></i></a>
		            	</span> 
		            	<span>Order Receipt</span></p>
		          </div>
		        </div>
	    	</div>
    	</section>
    <!---->	
    	
  <section class="ftco-section-1">
    	<div class="container">
		    	<div class="row justify-content-center mb-5">
		          <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
		            <h1 class="mb-4" style="font-size: 100px">Thank You!</h1>
		          </div>
		        </div>

            <div class="receipt bg-white p-3 rounded"><img src="images/PigmeLogoH.png" width="150">
                <h4 class="mt-2 mb-3">Your order is confirmed!</h4>
                <h6 class="name">Hello <?php 
				$iname=0;
				$timestamp = time()+date("Z");
				$foreachaddress="";
				if (mysqli_field_count($connect)) {
						/* this was a select/show or describe query */
						$resultcolname = mysqli_store_result($connect);

						/* process resultset */
						$colname = mysqli_fetch_row($resultcolname);
							foreach($colname as $customername){
							$iname++;
								if	($iname == 2 && !empty($customername)){
									echo $customername;
								}
								if	($iname == 4 && !empty($customername)){
									$foreachaddress = $customername;
								}
							}
				}
				
				?></h6><span class="fs-12 text-black-50">Please prepare your payment and wait for the call of our rider.</span>
                <hr>
                <div class="d-flex flex-row justify-content-between align-items-center order-details">
                    <div><span class="d-block fs-12">Order date</span><span class="font-weight-bold"><?php echo gmdate('d M Y', $timestamp); ?></span></div>
                    <div><span class="d-block fs-12">Payment method</span><span class="font-weight-bold">COD</span></div>
                    <div><span class="d-block fs-12">Shipping Address</span><span class="font-weight-bold text-success"><?php echo $foreachaddress; ?></span></div>
                </div>
                <hr>
				
				<!--Start of Receipt-->
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
						<th>Quantity</th>
						<th>Sub Total</th>
						<th>&nbsp;</th>
					</tr>
					</thead>
					<form method = "POST" onChange="getQuantity">
					<?php
					$order = array();
					$orderquant = array();
					$ordersub = array();
					$i=0;
					$total = 0;
					mysqli_real_query($connect, "SELECT * FROM pigme_confirmed_orders ORDER BY id DESC LIMIT 1");
					//ordnames = 5-14	
					//qty = 15-24
					//subtotal = 25-34
					if (mysqli_field_count($connect)) {
						/* this was a select/show or describe query */
						$resultcolorder = mysqli_store_result($connect);

						/* process resultset */
						$colorder = mysqli_fetch_row($resultcolorder);
							foreach($colorder as $val){
								$i++;
								if ($i>=5 && $i<=14 && !empty($val)){
									$order[] = $val;
								}
								if ($i>=15 && $i<=24 && $val != 0){
									$orderquant[] = $val;
								}
								if ($i>=25 && $i<=34 && $val != 0){
									$total += $val;
									$ordersub[] = $val;
								}
							}
						/* free resultset */
						 mysqli_free_result($resultcolorder);
					}
						mysqli_close($connect);
					
							for ($i = 0; $i < count($order); $i++) {
							//foreach(array_combine($order, $orderquant) as $orderval => $orderquantval){	
									?>
										<tbody>
											<tr class="alert" role="alert">
												<td>
												</td>
												<td>
												<div class="img" style="background-image:url()"></div>
												</td>
												<td>
													<div class="email">
														<span><?php echo "{$order[$i]}";?></span>
													</div>
												</td>
												<td><?php echo "{$orderquant[$i]}"; ?></td>
											
												<td>₱<?php echo "{$ordersub[$i]}"; ?></td>
												
									</tbody>
										
									<?php 
							}
					?>
				</table>
				</div>
				</div>
				</form>
			</div>
		</section>
    		

    	<!--End of Receipt-->
				
				<br><br>
                <div class="mt-5 amount row">
                    <div class="d-flex justify-content-center col-md-6"></div>
                    <div class="col-md-6">
                        <div class="billing">
                            <div class="d-flex justify-content-between"><span>Subtotal</span><span class="font-weight-bold">Php <?php echo $total; ?></span></div>
                            <div class="d-flex justify-content-between mt-2"><span>Shipping fee</span><span class="font-weight-bold">Php 60</span></div>
                            <hr>
                            <div class="d-flex justify-content-between mt-1"><span class="font-weight-bold">Total</span><span class="font-weight-bold text-success">Php <?php echo $total + 60; ?></span></div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center footer">
                    <div class="thanks"><span class="d-block font-weight-bold">Thanks for shopping</span><span>PigMe Samgyupsal team</span></div>
                    <div class="d-flex flex-column justify-content-end align-items-end"><span class="d-block font-weight-bold">Need Help?</span><span>Call (+63)917 108 0421</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>








</div>
    <div class="parallax" data-parallax="scroll" data-z-index="1" style="height: 300px; background-image: url(images/bg1.jpg);">
</div>

    	
<!--Footer-->
	<footer class="ftco-footer ftco-bg-light">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3">
					<div class="ftco-footer-widget mb-4">
		              	<h2 class="ftco-heading-2">PigMe Samgyupsal</h2>
		              	<p>UNLI SAMGYUPSAL PORK, BEEF, CHICKEN, CHEESE UNLI CRAB, FLAVORED CHICKEN WINGS & SHRIMP WITH COMPLETE UNLI SIDE DISHES, SOUP, RICE & ICE CREAM atbp.</p>
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
									<li><i class="fa fa-location-arrow"></i><span class="text"> 10 R. Jabson Street, Pateros, Metro Manila</span></li>
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