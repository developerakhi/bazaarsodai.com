<?php
ob_start();
  require_once("functions.php"); 
	frst_session_start(); 
	
	
 	if (isset($_POST['id'])) {
		
	
	// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
		$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
		$delivery_address = filter_input(INPUT_POST, 'delivery_address', FILTER_SANITIZE_STRING);
		 
		 
	   
	   	global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_client SET mobile=?, address=?, delivery_address=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sssi', $mobile, $address, $delivery_address, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	   
	   
	   header('Location: ../myaccount_address.php?action=success');
 	}
	
?>