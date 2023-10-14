<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();
					
	
				
 	if (isset($_POST['coupon_code'])) {
		
		// Sanitize and validate the data passed in
		$coupon_code = filter_input(INPUT_POST, 'coupon_code', FILTER_SANITIZE_STRING);
		$discount = filter_input(INPUT_POST, 'discount', FILTER_SANITIZE_STRING);
		$minimum_amount = filter_input(INPUT_POST, 'minimum_amount', FILTER_SANITIZE_STRING);
		$end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING);
	
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO coupon (coupon_code, discount, minimum_amount, end_date) VALUES (?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssss', $coupon_code, $discount, $minimum_amount, $end_date);
            $insert_stmt->execute();
       }
	   
	   
	  header('Location: ../../add_new_coupon/521478/success');
 	}
	
?>