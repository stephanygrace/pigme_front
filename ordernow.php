<!DOCTYPE html>
<html lang="en">
<?php
$connect = mysqli_connect("localhost", "root", "", "pigmedb");  
		if($connect == false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
?>
<head>
	<title>Pig Me Samgyupsal Restaurant</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="ordernow.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

<body>
	<!--NAV BAR-->
	<nav>
		<a href="menu.php" class="logo"><img src="images/PigmeLogoH.png"></a>
			<ul class="nav">
				<li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				<li><a class="cta active" href="ordernow.php"><button>Order Now</button></a></li>
				<a class="cta-1" href="cart.php"><button>Cart <i class="fa fa-shopping-basket fa-lg" style="display: inline-block;" ></i></button></a>
			</ul>
	</nav>		
	<!--End Nav-->

	


		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg');" data-stellar-background-ratio="0.5">
	     	<div class="overlay"></div>
		      <div class="container">
		        <div class="row no-gutters slider-text justify-content-center">
		          <div class="col-md-9 text-center mb-4">
		            <h1 class="mb-2 bread">Order Now </h1>
		            <p class="breadcrumbs">
		            	<span class="mr-2">
		            		<a href="index.php">Home ><i class="ion-ios-arrow-forward"></i></a>
		            	</span> 
		            	<span>Order Now >
		            		<i class="ion-ios-arrow-forward"></i>
		            	</span></p>
		          </div>
		        </div>
	    	</div>
    	</section>
    	<form id="orderid">
	<section class="ftco-order">
		<div class="container">
			<div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
		        <h1 class="mb-5">Samgyupsal Set</h1>
			</div>
			<div class="row no-gutters mb-5">
				<div class="col-6 d-flex">
					<div class="menus d-flex">
						<img class="menu-image" src="images/bundle_beef.jpg">
						<div class="menu-text ">
							<div>
								<div class="row">
									<div class="col-md-6">
										<div class="one-half">
											<h3>BEEF</h3>
										</div>
									</div>
									<div class="col-md-6">
										<div class="one-forth">
											<span class="price">₱399</span>
										</div>
									</div>	
								</div>
								<p><br>Your choice of 1 marinade: </p>
									<input class="chkb1" type="checkbox" name="choice1" value="Bulgogi">&nbsp Bulgogi<br>
									<input class="chkb1" type="checkbox" name="choice1" value="Galbi">&nbsp Galbi<br>
									<input class="chkb1" type="checkbox" name="choice1" value="Gochujang">&nbsp Gochujang<br>
									<input class="chkb1" type="checkbox" name="choice1" value="JRAMS Special">&nbsp JRAMS Special
										<button class="cart-button" type="button" onclick="onBeefbtn()" id ="beefbtn" name="beefbtn">
											<span class="add-to-cart">Add to Cart</span> 
											<span class="added">Added</span>
											<i class="fas fa-shopping-cart"></i>
											<i class="fas fa-box"></i>
										</button>
									
							</div>
						</div>
					</div>
				</div>

				<div class="col-6 d-flex">
					<div class="menus d-flex">
						<img class="menu-image" src="images/bundle_beefandchicken.jpg">
						<div class="menu-text">
							<div>
								<div class="d-flex">
									<div class="one-half">
										<h3>BEEF AND CHICKEN</h3>
									</div>
									<div class="one-forth">
										<span class="price">₱449</span>
									</div>	
								</div>
								<p>Your choice of 1 marinade: </p>
									<input class="chkb1" type="checkbox" name="choice2" value="Bulgogi">&nbsp Bulgogi<br>
									<input class="chkb1" type="checkbox" name="choice2" value="Galbi">&nbsp Galbi<br>
									<input class="chkb1" type="checkbox" name="choice2" value="Gochujang">&nbsp Gochujang<br>
									<input class="chkb1" type="checkbox" name="choice2" value="JRAMS Special">&nbsp JRAMS Special
									<button class="cart-button" type="button" name="beefchickbtn" id="beefchickbtn" onclick="onBeefChickbtn()">
										<span class="add-to-cart">Add to Cart</span> 
										<span class="added">Added</span>
										<i class="fas fa-shopping-cart"></i>
										<i class="fas fa-box"></i>
									</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6 d-flex">
					<div class="menus d-flex">
						<img class="menu-image" src="images/bundle_pork.jpg">
						<div class="menu-text">
							<div>
								<div class="d-flex">
									<div class="one-half">
										<h3>PORK</h3>
									</div>
									<div class="one-forth">
										<span class="price">₱349</span>
									</div>	
								</div>
								<p><br>Your choice of 1 marinade: </p>
									<input class="chkb1" type="checkbox" name="choice3" value="Bulgogi">&nbsp Bulgogi<br>
									<input class="chkb1" type="checkbox" name="choice3" value="Galbi">&nbsp Galbi<br>
									<input class="chkb1" type="checkbox" name="choice3" value="Gochujang">&nbsp Gochujang<br>
									<input class="chkb1" type="checkbox" name="choice3" value="JRAMS Special">&nbsp JRAMS Special
									<button class="cart-button" name="porkbtn" id="porkbtn" type="button" onclick="onPorkbtn()">
										<span class="add-to-cart">Add to Cart</span> 
										<span class="added">Added</span>
										<i class="fas fa-shopping-cart"></i>
										<i class="fas fa-box"></i>
									</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 d-flex">
					<div class="menus d-flex">
						<img class="menu-image" src="images/bundle_porkandbeef.jpg">
						<div class="menu-text">
							<div>
								<div class="d-flex">
									<div class="one-half">
										<h3>PORK AND BEEF</h3>
									</div>
									<div class="one-forth">
										<span class="price">₱449</span>
									</div>	
								</div>
								<p>Your choice of 1 marinade:</p>
								<input class="chkb1" type="checkbox" name="choice4" value="Bulgogi">&nbsp Bulgogi<br>
								<input class="chkb1" type="checkbox" name="choice4" value="Galbi">&nbsp Galbi<br>
								<input class="chkb1" type="checkbox" name="choice4" value="Gochujang">&nbsp Gochujang<br>
								<input class="chkb1" type="checkbox" name="choice4" value="JRAMS Special">&nbsp JRAMS Special
								<button class="cart-button" name="porkbeefbtn" id="porkbeefbtn" type="button" onclick="onPorkBeefbtn()">
									<span class="add-to-cart">Add to Cart</span> 
									<span class="added">Added</span>
									<i class="fas fa-shopping-cart"></i>
									<i class="fas fa-box"></i>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6 d-flex">
					<div class="menus d-flex">
						<img class="menu-image" src="images/bundle_porkandchicken.jpg">
						<div class="menu-text">
							<div>
								<div class="d-flex">
									<div class="one-half">
										<h3>PORK AND CHICKEN</h3>
									</div>
									<div class="one-forth">
										<span class="price">₱399</span>
									</div>	
								</div>
								<p>Your choice of 1 marinade: </p>
									<input class="chkb1" type="checkbox" name="choice5" value="Bulgogi">&nbsp Bulgogi<br>
									<input class="chkb1" type="checkbox" name="choice5" value="Galbi">&nbsp Galbi<br>
									<input class="chkb1" type="checkbox" name="choice5" value="Gochujang">&nbsp Gochujang<br>
									<input class="chkb1" type="checkbox" name="choice5" value="JRAMS Special">&nbsp JRAMS Special
									<button class="cart-button" name="porkchickbtn" id="porkchickbtn" type="button" onclick="onPorkChickbtn()">
										<span class="add-to-cart">Add to Cart</span> 
										<span class="added">Added</span>
										<i class="fas fa-shopping-cart"></i>
										<i class="fas fa-box"></i>
									</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6 d-flex">
					<div class="menus d-flex">
						<img class="menu-image" src="images/bundle_5pax.jpg">
						<div class="menu-text">
							<div>
								<div class="d-flex">
									<div class="one-half">
										<h3>4-5 PAX</h3>
									</div>
									<div class="one-forth">
										<span class="price">₱1,349</span>
									</div>	
								</div>
								<p><br>Your choice of 2 marinade: </p>
									<input class="chkb2" type="checkbox" name="choice6[]" value="Bulgogi" >&nbsp Bulgogi<br>
									<input class="chkb2" type="checkbox" name="choice6[]" value="Galbi" >&nbsp Galbi<br>
									<input class="chkb2" type="checkbox" name="choice6[]" value="Gochujang" >&nbsp Gochujang<br>
									<input class="chkb2" type="checkbox" name="choice6[]" value="JRAMS Special" >&nbsp JRAMS Special
										<button class="cart-button" name="fourfivepax" id="fourfivepax" type="button" onclick="onFourFivePaxbtn()">
											<span class="add-to-cart">Add to Cart</span> 
											<span class="added">Added</span>
											<i class="fas fa-shopping-cart"></i>
											<i class="fas fa-box"></i>
										</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6 d-flex">
					<div class="menus d-flex">
						<img class="menu-image" src="images/bundle_10pax.jpg">
						<div class="menu-text">
							<div>
								<div class="d-flex">
									<div class="one-half">
										<h3>8-10 PAX</h3>
									</div>
									<div class="one-forth">
										<span class="price">₱2,299</span>
									</div>	
								</div>
								<p><br>Your choice of 2 marinade: </p>
									<input class="chkb2" type="checkbox" name="choice7[]" value="Bulgogi" >&nbsp Bulgogi<br>
									<input class="chkb2" type="checkbox" name="choice7[]" value="Galbi" >&nbsp Galbi<br>
									<input class="chkb2" type="checkbox" name="choice7[]" value="Gochujang" >&nbsp Gochujang<br>
									<input class="chkb2" type="checkbox" name="choice7[]" value="JRAMS Special">&nbsp JRAMS Special
									<button class="cart-button" name="eighttenpax" id="eighttenpax" type="button" onclick="onEightTenPaxbtn()">
										<span class="add-to-cart">Add to Cart</span> 
										<span class="added">Added</span>
										<i class="fas fa-shopping-cart"></i>
										<i class="fas fa-box"></i>
									</button>
							</div>
						</div>
					</div>
				</div>
			<!-- Validation Checkbox -->
			<script type="text/javascript">

				var limit2 = 2;
					$('input.chkb2').on('change', function(evt) {
	  				if($(this).siblings(':checked').length >= limit2) {
	       			this.checked = false;
	   				}
				});
				var limit1 = 1;
					$('input.chkb1').on('change', function(evt) {
	  				if($(this).siblings(':checked').length >= limit1) {
	       			this.checked = false;
	   				}
				});
			</script>
			</div>
			<hr>

			<!-- Start of A la Carte -->
	<div class="container mb-5 mt-5">
		<div class="row justify-content-center mb-5">
		    <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
		        <h1 class="mb-4">À la Carte</h1>
		    </div>
		</div>
		<div class="row mb-4">
	    	<div class="col-md-4">
	    		<img src="images/ala_chapchae.jpg" class="zoom mb-4" style="width:100%;">
					<button class="cart-button" name="chapchaebtn" id="chapchaebtn" type="button" onclick="onChapChaebtn()">
						<span class="add-to-cart">Add to Cart</span> 
						<span class="added">Added</span>
						<i class="fas fa-shopping-cart"></i>
						<i class="fas fa-box"></i>
					</button>
	    	</div>
	    	<div class="col-md-4">
	    		<img src="images/ala_kimchi.jpg" class="zoom mb-4" style="width:100%;">
					<button class="cart-button" name="kimchibtn" id="kimchibtn" type="button" onclick="onKimchibtn()">
						<span class="add-to-cart">Add to Cart</span> 
						<span class="added">Added</span>
						<i class="fas fa-shopping-cart"></i>
						<i class="fas fa-box"></i>
					</button>
	    	</div>
	    	<div class="col-md-4">
	    		<img src="images/ala_fishcake.jpg" class="zoom mb-4" style="width:100%">
					<button class="cart-button" name="fishcakebtn" id="fishcakebtn" type="button" onclick="onFishCakebtn()">
						<span class="add-to-cart">Add to Cart</span> 
						<span class="added">Added</span>
						<i class="fas fa-shopping-cart"></i>
						<i class="fas fa-box"></i>
					</button>
	    	</div>
    	</div>
    	<div class="row">
	    	<div class="col-md-4">
	    		<img src="images/ala_potato.jpg" class="zoom mb-4" style="width:100%;">
					<button class="cart-button" name="potatobtn" id="potatobtn" type="button" onclick="onPotatobtn()">
						<span class="add-to-cart">Add to Cart</span> 
						<span class="added">Added</span>
						<i class="fas fa-shopping-cart"></i>
						<i class="fas fa-box"></i>
					</button>
	    	</div>
	    	<div class="col-md-4">
	    		<img src="images/ala_ricecake.jpg" class="zoom mb-4" style="width:100%;">
					<button class="cart-button" name="ricecakebtn" id="ricecakebtn" type="button" onclick="onRiceCakebtn()">
						<span class="add-to-cart">Add to Cart</span> 
						<span class="added">Added</span>
						<i class="fas fa-shopping-cart"></i>
						<i class="fas fa-box"></i>
						</button>
	    	</div>
	    	<div class="col-md-4">
	    		<img src="images/ala_lettuce.jpg" class="zoom mb-4" style="width:100%;">
					<button class="cart-button" name="lettucebtn" id="lettucebtn" type="button" onclick="onLettucebtn()">
						<span class="add-to-cart">Add to Cart</span> 
						<span class="added">Added</span>
						<i class="fas fa-shopping-cart"></i>
						<i class="fas fa-box"></i>
					</button>
	    	</div>
    	</div>
    </div>
	<!-- End of A la Carte -->		
    <hr>

	<!-- Start of Meat -->
	<div class="container mb-5">
		<div class="row justify-content-center mb-5">
		        <div class="col-md-12 text-center heading-section ftco-animate fadeInUp ftco-animated">
		            <h1 class="mb-4 mt-5">Meat</h1>
		        </div>
		    </div>
		    <div class="row">
	    		<div class="col-md-4">
	    			<img src="images/ala_beef.jpg" class="zoom mb-4" style="width:100%;">
	    			<div class="text-center">
	    				<input type="radio" name="type1" value="plain" onclick="hideBeef(0)" checked="true"> Thinly Sliced Plain &nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" name="type1" value="marinated" onclick="hideBeef(1)"> Marinated<br><br>
	    			</div>
  						<div id="hide1" style="display: none;">
  							<p class="show">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your choice of 1 marinade: </p>
		  						<div style="margin-left: 104px;">
									<input class="chkb1" type="checkbox" name="choice8" value="Bulgogi">&nbsp Bulgogi<br>
									<input class="chkb1" type="checkbox" name="choice8" value="Galbi">&nbsp Galbi<br>
									<input class="chkb1" type="checkbox" name="choice8" value="Gochujang">&nbsp Gochujang<br>
									<input class="chkb1" type="checkbox" name="choice8" value="JRAMS Special">&nbsp JRAMS Special<br><br>
								</div>
						</div>
						<div class="text-center">
							<button class="cart-button"  name="beefmeatbtn" id="beefmeatbtn" type="button" onclick="onBeefMeatbtn()">
								<span class="add-to-cart">Add to Cart</span> 
								<span class="added">Added</span>
								<i class="fas fa-shopping-cart"></i>
								<i class="fas fa-box"></i>
							</button>
						</div>
					</div>

	    			<div class="col-md-4">
	    				<img src="images/ala_pork.jpg" class="zoom mb-4" style="width:100%;">
							<div class="text-center mb-4">
								<input type="radio" name="type2" value="plain" onclick="hidePork(0)" checked="true"> Thinly Sliced Plain &nbsp&nbsp&nbsp&nbsp&nbsp
	  							<input type="radio" name="type2" value="marinated" onclick="hidePork(1)"> Marinated
							</div>
  						<div id="hide2" style="display: none;">
  							<p class="show">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your choice of 1 marinade: </p>
		  						<div style="margin-left: 104px;">
									<input class="chkb1" type="checkbox" name="choice9" value="Bulgogi">&nbsp Bulgogi<br>
									<input class="chkb1" type="checkbox" name="choice9" value="Galbi">&nbsp Galbi<br>
									<input class="chkb1" type="checkbox" name="choice9" value="Gochujang">&nbsp Gochujang<br>
									<input class="chkb1" type="checkbox" name="choice9" value="JRAMS Special">&nbsp JRAMS Special<br><br>
								</div>
						</div>
						<div class="text-center">
							<button class="cart-button "  name="porkmeatbtn" id="porkmeatbtn" type="button" onclick="onPorkMeatbtn()">
								<span class="add-to-cart">Add to Cart</span> 
								<span class="added">Added</span>
								<i class="fas fa-shopping-cart"></i>
								<i class="fas fa-box"></i>
							</button>
						</div>
	    			</div>

	    			<div class="col-md-4">
	    				<img src="images/ala_chicken.jpg" class="zoom mb-4" style="width:100%;">
							<div class="text-center mb-4">
								<input type="radio" name="type3" value="plain" onclick="hideChick(0)" checked="true"> Thinly Sliced Plain &nbsp&nbsp&nbsp&nbsp&nbsp
	  							<input type="radio" name="type3" value="marinated" onclick="hideChick(1)"> Marinated
							</div>
	  						<div id="hide3" style="display: none;">
	  							<p class="show">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Your choice of 1 marinade: </p>
		  						<div style="margin-left: 104px;">
									<input class="chkb1" type="checkbox" name="choice10" value="Bulgogi">&nbsp Bulgogi<br>
									<input class="chkb1" type="checkbox" name="choice10" value="Galbi">&nbsp Galbi<br>
									<input class="chkb1" type="checkbox" name="choice10" value="Gochujang">&nbsp Gochujang<br>
									<input class="chkb1" type="checkbox" name="choice10" value="JRAMS Special">&nbsp JRAMS Special<br><br>
								</div>
							</div>
  						<div class="text-center">
	  						<button class="cart-button"  name="chickmeatbtn" id="chickmeatbtn" type="button" onclick="onChickMeatbtn()">
								<span class="add-to-cart">Add to Cart</span> 
								<span class="added">Added</span>
								<i class="fas fa-shopping-cart"></i>
								<i class="fas fa-box"></i> 
							</button> 
  						</div>
	    			</div>
	    		</div>
	    	</div>

		</div>
	</section>

</form>

	

	    	 <!--Validation of checkbox -->
	    	<script>

	    		var limit1 = 1;
				$('input.chkb1').on('change', function(evt) {
  				if($(this).siblings(':checked').length >= limit1) {
       			this.checked = false;
   				}
			});
			function hideBeef(x){
				if (x == 1){
					document.getElementById('hide1').style.display="block";
				}else{
					document.getElementById('hide1').style.display="none";
				}
			}
			function hidePork(y){
				if (y == 1){
					document.getElementById('hide2').style.display="block";
				}else{
					document.getElementById('hide2').style.display="none";
				}
			}
			function hideChick(z){
				if (z == 1){
					document.getElementById('hide3').style.display="block";
				}else{
					document.getElementById('hide3').style.display="none";
				}
			}
			
			</script>
	</section>
	<!--End of Meat -->

	<script>
	const cartButtons = document.querySelectorAll('.cart-button');

	cartButtons.forEach(button => {
		button.addEventListener('click', cartClick);
	});

	function cartClick() {
		let button = this;
		button.classList.add('clicked');
	}
	</script>

    	
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
<script type='text/javascript'>
				function onBeefbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&beefbtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onBeefChickbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&beefchickbtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onPorkbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&porkbtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onPorkBeefbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&porkbeefbtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onPorkChickbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&porkchickbtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onFourFivePaxbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&fourfivepax=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onEightTenPaxbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&eighttenpax=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onChapChaebtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&chapchaebtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onKimchibtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&kimchibtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onFishCakebtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&fishcakebtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onPotatobtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&potatobtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onRiceCakebtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&ricecakebtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onLettucebtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&lettucebtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onBeefMeatbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&beefmeatbtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onPorkMeatbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&porkmeatbtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
				
				function onChickMeatbtn(){
					$.ajax({
					 url:'inserttocart.php',
					 method: 'post',
					 data: $("#orderid").serialize() + '&chickmeatbtn=1',
					 success: function(response){
						alert(response);
					 },
					 error: function(XMLHttpRequest, textStatus, errorThrown) { 
						alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					}   
				  });
				$('input[type="checkbox"]').prop('checked',false)
				}
		</script>