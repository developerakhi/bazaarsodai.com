<?php
require_once("apps/functions/functions.php");
testing_loggin();

 	if (isset($_GET['ItemID'])) {
	
		// Sanitize and validate the data passed in
		$in_id = filter_input(INPUT_GET, 'ItemID', FILTER_SANITIZE_STRING);
		$activity = 1;
		
		
		global $mysqli;
		if ($stmt = $mysqli->prepare("SELECT g_total, customerID
				FROM sd_order_more
		 		  WHERE order_id = ?
			LIMIT 1")) {
			$stmt->bind_param('s', $in_id);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			$stmt->store_result();
 			// get variables from result.
			$stmt->bind_result($g_total, $customerID);
			$stmt->fetch();
		}
		
		$refrnc_commi = $g_total / 100 * 10;	
 
 		global $mysqli;
		if ($stmt = $mysqli->prepare("SELECT ref
				FROM sd_client
		 		  WHERE id = ?
			LIMIT 1")) {
			$stmt->bind_param('s', $customerID);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			$stmt->store_result();
 			// get variables from result.
			$stmt->bind_result($ref_number);
			$stmt->fetch();
		}
		
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_order_list SET activity=? WHERE orderID = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('is', $activity, $in_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
 	   
	   
	   
	   // Dealer Expenses 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_point_count (in_id, customerID, total_order, amount) VALUES (?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssss', $in_id, $ref_number, $g_total, $refrnc_commi);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }  
		
		
	   
	  header('Location: ../view_invoice_retail/'.$_GET['ItemID'].'/success');
	  

 		}

?>