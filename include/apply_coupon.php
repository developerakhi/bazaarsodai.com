<?php
ob_start();
  require_once("functions.php"); 
	frst_session_start(); 
 	if (isset($_POST['cart'])) {

	// Sanitize and validate the data passed in
		$cart = filter_input(INPUT_POST, 'cart');
		$code = filter_input(INPUT_POST, 'code');
		$activity = 2 ;
  		
	   
	   	global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_coupon SET cart=?, activity=? WHERE code = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sss',  $cart, $activity, $code);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	   
	  header('Location: ../shopping_cart?coupon='.$code.'');
 	}
	
?>