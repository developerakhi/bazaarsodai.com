<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['coupon_code'])) {
		
		// Sanitize and validate the data passed in
		
		$coupon_code = filter_input(INPUT_POST, 'coupon_code', FILTER_SANITIZE_STRING);
		$discount = filter_input(INPUT_POST, 'discount', FILTER_SANITIZE_STRING);
		$minimum_amount = filter_input(INPUT_POST, 'minimum_amount', FILTER_SANITIZE_STRING);
		$end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);



		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE coupon SET coupon_code=?, discount=?, minimum_amount=?, end_date=? WHERE id = ? LIMIT 1")){
    		$insert_stmt->bind_param('ssssi', $coupon_code, $discount, $minimum_amount, $end_date, $id);
            $insert_stmt->execute();
        
       }
		  header('Location: ../../update_coupon/'.$id.'/success');
 		
	}	
?>



