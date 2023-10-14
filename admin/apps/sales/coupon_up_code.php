<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['id'])) {
	
		// Sanitize and validate the data passed in
		
		$coupon_code = filter_input(INPUT_POST, 'coupon_code', FILTER_SANITIZE_STRING);
		$discount = filter_input(INPUT_POST, 'discount', FILTER_SANITIZE_STRING);
		$minimum_amount = filter_input(INPUT_POST, 'minimum_amount', FILTER_SANITIZE_STRING);
		$end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        
		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE coupon SET coupon_code=?, discount=?, minimum_amount=?, end_date=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sssss', $coupon_code, $discount, $minimum_amount, $end_date, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../update_coupon/'.$id.'/success');
 	}
	
	
?>