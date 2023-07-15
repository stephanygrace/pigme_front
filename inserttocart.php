<?php
$connect = mysqli_connect("localhost", "root", "", "pigmedb");  
		if($connect == false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		$checkexist = 0;
		$marinade = "Please select a marinade.";
		$samset = "Please push the add to cart button";
		$price = "0.00";
		$pricesubtotal = "";
		//setting the marinade, foodname etc.
		if (isset($_POST['beefbtn'])){
			if(!empty($_POST['choice1'])) {
				$marinade = ($_POST['choice1']);
				$samset = "Beef Set";
				$price = "399";
				$pricesubtotal = "399";
				$checkexist = 1;
			}	
		}
		elseif (isset($_POST['beefchickbtn'])){
			if(!empty($_POST['choice2'])) {
				$marinade = ($_POST['choice2']);
				$samset = "Beef and Chicken Set";
				$price = "449";
				$pricesubtotal = "449";
				$checkexist = 1;
			}
		}
		elseif (isset($_POST['porkbtn'])){
			if(!empty($_POST['choice3'])) {
				$marinade = ($_POST['choice3']);
				$samset = "Pork Set";
				$price = "349";
				$pricesubtotal = "349";
				$checkexist = 1;
			}	
		}
		elseif (isset($_POST['porkbeefbtn'])){
			if(!empty($_POST['choice4'])) {
				$marinade = ($_POST['choice4']);
				$samset = "Pork and Beef Set";
				$price = "449";
				$pricesubtotal = "449";
				$checkexist = 1;
			}	
		}
		elseif (isset($_POST['porkchickbtn'])){
			if(!empty($_POST['choice5'])) {
				$marinade = ($_POST['choice5']);
				$samset = "Pork and Chicken Set";
				$price = "399";
				$pricesubtotal = "399";
				$checkexist = 1;
			}	
		}
		//items with 2 checkboxed required
		elseif (isset($_POST['fourfivepax'])){
			$marinade1 = "";
			$marinade2 = "";
			$count= 1;
			if(!empty($_POST['choice6'])) {
				foreach($_POST['choice6'] as $marinade) {
					if ($count == 1){
						$marinade1 = $marinade;
					}
					if ($count == 2){	
						$marinade2 = $marinade;	
					}
					$count++;
				}
				$samset = "Samgyupsal Set for 4-5 pax";
				$price = "1349";
				$pricesubtotal = "1349";
				$checkexist = 2;
			}	
		}
		elseif (isset($_POST['eighttenpax'])){
			$marinade1 = "";
			$marinade2 = "";
			$count= 1;
			if(!empty($_POST['choice7'])) {
				foreach($_POST['choice7'] as $marinade) {
					if ($count == 1){
						$marinade1 = $marinade;
					}
					if ($count == 2){	
						$marinade2 = $marinade;	
					}
					$count++;
				}
				$samset = "Samgyupsal Set for 8-10 pax";
				$price = "2299";
				$pricesubtotal = "2299";
				$checkexist = 2;
			}
			//end of items with 2 checkboxed required
		}
		
			// ala carte add to cart
		elseif (isset($_POST['chapchaebtn'])){
			$samset = "Chapchae";
			$price = "120";
			$pricesubtotal = "120";
			
			$checkexist = 3;
		}
		elseif (isset($_POST['kimchibtn'])){
			$samset = "Kimchi";
			$price = "130";
			$pricesubtotal = "130";
			
			$checkexist = 3;
		}
		elseif (isset($_POST['fishcakebtn'])){
			$samset = "Fishcake";
			$price = "120";
			$pricesubtotal = "120";
			
			$checkexist = 3;
		}
		elseif (isset($_POST['potatobtn'])){
			$samset = "Braised Baby Potato";
			$price = "100";
			$pricesubtotal = "100";
			
			$checkexist = 3;
		}
		elseif (isset($_POST['ricecakebtn'])){
			$samset = "Ricecake";
			$price = "120";
			$pricesubtotal = "120";
			
			$checkexist = 3;
		}
		elseif (isset($_POST['lettucebtn'])){
			$samset = "Lettuce";
			$price = "160";
			$pricesubtotal = "160";
			
			$checkexist = 3;
		}
		//meat add to cart
		elseif (isset($_POST['beefmeatbtn'])){
			if ($_POST['type1'] == "plain"){
				$samset = "Beef(Thinly Sliced Plain)";
				$price = "360";
				$pricesubtotal = "360";
				$type = "plain";
				$checkexist = 4;
			}
			elseif ($_POST['type1'] == "marinated" && !empty($_POST['choice8'])){
				$marinade = $_POST['choice8'];
				$samset = "Beef";
				$price = "360";
				$pricesubtotal = "360";
				$type = "marinated";
				$checkexist = 4;
			}	
		}
		elseif (isset($_POST['porkmeatbtn'])){
			if ($_POST['type2'] == "plain"){
				$samset = "Pork(Thinly Sliced Plain)";
				$price = "280";
				$pricesubtotal = "280";
				$type = "plain";
				$checkexist = 4;
			}
			elseif ($_POST['type2'] == "marinated" && !empty($_POST['choice9'])){
				$marinade = $_POST['choice9'];
				$samset = "Pork";
				$price = "280";
				$pricesubtotal = "280";
				$type = "marinated";
				$checkexist = 4;
			}
			
		}
		elseif (isset($_POST['chickmeatbtn'])){
			if ($_POST['type3'] == "plain"){
				$samset = "Chicken(Thinly Sliced Plain)";
				$price = "250";
				$pricesubtotal = "250";
				$type = "plain";
				$checkexist = 4;
			}
			elseif ($_POST['type3'] == "marinated" && !empty($_POST['choice10'])){
				$marinade = $_POST['choice10'];
				$samset = "Chicken";
				$price = "250";
				$pricesubtotal = "250";
				$type = "marinated";
				$checkexist = 4;
			}
			
		}
		
					
		//end of setting the marinade, foodname etc.
		
			//checking if the item is already added
			if ($checkexist == 1){ //samgyup set with 1 marinade
				$sqlresult = "SELECT foodname FROM pigme_cart WHERE foodname='$samset ($marinade Marinated)'";	
				$checkexist = 0;
			}
			elseif ($checkexist == 2){ //samgyup set with 2 marinades
				$sqlresult = "SELECT foodname FROM pigme_cart WHERE foodname='$samset ($marinade1 and $marinade2 Marinated)'";
				$checkexist = 0;
			}
			elseif ($checkexist == 3){ //ala carte
				$sqlresult = "SELECT foodname FROM pigme_cart WHERE foodname='$samset'";
				$checkexist = 0;
			}
			elseif ($checkexist == 4){ //meat
				if ($type == "plain"){
					$sqlresult = "SELECT foodname FROM pigme_cart WHERE foodname='$samset'";
				}
				elseif ($type == "marinated"){
					$sqlresult = "SELECT foodname FROM pigme_cart WHERE foodname='$samset ($marinade Marinated)'";
				}
				$checkexist = 0;
			}
			
				if(!empty($sqlresult)){
				$result = mysqli_query($connect, $sqlresult);
				
					if(mysqli_num_rows($result) > 0)
					{
						// item exists
						echo "Item Already Added";  
					
						mysqli_close($connect);
										
					}
					// end of checking if item is already added
					else{
					//adding the item
							//add samgyupsal set 1 marinade
						if(!empty($_POST['choice1']) || !empty($_POST['choice2']) || !empty($_POST['choice3']) || !empty($_POST['choice4']) || !empty($_POST['choice5'])) {
							if (isset($_POST['beefbtn']) || isset($_POST['beefchickbtn']) || isset($_POST['porkbtn']) || isset($_POST['porkbeefbtn']) || isset($_POST['porkchickbtn'])){
								$sql = "INSERT INTO pigme_cart(foodname, quantity, price, pricesubtotal) VALUES ('$samset ($marinade Marinated)', '1', '$price', '$pricesubtotal')";
							} 
						}
						//add samgyupsal set 2 marinades
						if(!empty($_POST['choice6']) || !empty($_POST['choice7'])) {
							if (isset($_POST['fourfivepax']) || isset($_POST['eighttenpax'])){
								if (!empty($marinade1 && $marinade2)){
									$sql = "INSERT INTO pigme_cart(foodname, quantity, price, pricesubtotal) VALUES ('$samset ($marinade1 and $marinade2 Marinated)', '1', '$price', '$pricesubtotal')";
								} 
								else {
									echo "Only 1(one) or less marinade was chosen, please select 2(two)";
								}
							}
						}
						 //add alacarte
						if (isset($_POST['chapchaebtn']) || isset($_POST['kimchibtn']) || isset($_POST['fishcakebtn']) || isset($_POST['potatobtn']) || isset($_POST['ricecakebtn']) || isset($_POST['lettucebtn'])){
							$sql = "INSERT INTO pigme_cart(foodname, quantity, price, pricesubtotal) VALUES ('$samset', '1', '$price', '$pricesubtotal')";
						}
						
						//add meat
						if (isset($_POST['beefmeatbtn']) || isset($_POST['porkmeatbtn']) || isset($_POST['chickmeatbtn'])){
							if($type == "plain"){
								$sql = "INSERT INTO pigme_cart(foodname, quantity, price, pricesubtotal) VALUES ('$samset', '1', '$price', '$pricesubtotal')";
							}
							elseif($type == "marinated" || !empty($_POST['choice8']) || !empty($_POST['choice9']) || !empty($_POST['choice10'])){
								$sql = "INSERT INTO pigme_cart(foodname, quantity, price, pricesubtotal) VALUES ('$samset ($marinade Marinated)', '1', '$price', '$pricesubtotal')";
							}
						} 
						
						if(!empty($sql)){
							if(mysqli_query($connect, $sql)){
								echo "Added to Cart";			
							} 
					//end of adding the item
							else{
								echo "ERROR: Could not able to execute $sql. ". mysqli_error($connect);
							}
							mysqli_close($connect);
						}
					}
				}
				else{ //if there's no marinade selected
					echo "Please select a marinade!"; 
					
				}
			

?>