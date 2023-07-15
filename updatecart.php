<?php
$connect = mysqli_connect("localhost", "root", "", "pigmedb");  
		if($connect == false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		if (isset($_POST['updatecart'])){
			mysqli_query($connect, "UPDATE pigme_cart SET quantity='$quantvalue' WHERE foodname = '$foodname'");
		}

?>