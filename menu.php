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
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
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
		            <h1 class="mb-2 bread">Menu </h1>
		            <p class="breadcrumbs">
		            	<span class="mr-2">
		            		<a href="index.html">Home ></a>
		            	</span> 
		            	<span>Menu ></span>
		            </p>
		          </div>
		        </div>
	    	</div>
    	</section>

    <!--Nav Pills-->
    <section class="ftco-menu">    
	    <div class="container justify-content-center">
	    	<div class="row">
	    		<div class="nav nav-pills nav-justified">
	    			<a href="#dinein" data-toggle="tab" class="nav-link active" aria-selected="true">DINE IN</a>
					<a href="#takeout" class="nav-link" data-toggle="tab" aria-selected="false">TAKE OUT</a>
					<a href="#alacarte" class="nav-link" data-toggle="tab" aria-selected="false">ALA CARTE</a>
					<a href="#meat" class="nav-link" data-toggle="tab" aria-selected="false">MEAT</a>
	    		</div>		    			
				<div class="tab-content">
					<div class="tab-pane fade active show dine-tab" id="dinein" role="tabpanel">
						<div class="row mb-4">
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/B1.png"  style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/B2.png" style="width: 100%; ">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/B3.png" style="width: 100%;">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/B4.png" style="width: 100%; ">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="takeout" role="tabpanel">
						<div class="row mb-4">
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/bundle_5pax.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/bundle_10pax.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/bundle_beef.jpg" style="width: 100%;">
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/bundle_beefandchicken.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/bundle_pork.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/bundle_porkandbeef.jpg" style="width: 100%;">
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/bundle_porkandchicken.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="" style="width: 100%;">
							</div>
						</div>
					</div>
					<div class="tab-pane fade " id="alacarte" role="tabpanel">
						<div class="row mb-4">
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_lettuce.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_chapchae.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_kimchi.jpg" style="width: 100%;">
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_fishcake.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_potato.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_ricecake.jpg" style="width: 100%;">
							</div>
						</div>	
					</div>
					<div class="tab-pane fade" id="meat" role="tabpanel">
						<div class="row">
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_beef.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_pork.jpg" style="width: 100%;">
							</div>
							<div class="col-md-4 img-hover-zoom img-hover-zoom--basic">
								<img src="images/ala_chicken.jpg" style="width: 100%;">
							</div>
						</div>	
					</div>
				</div>
	    	</div>
	    
	    </div>
    </section>

    <!--End of Nav-pills-->
	    

    <!--Menu-->
  	
    <!--End of Menu-->	

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