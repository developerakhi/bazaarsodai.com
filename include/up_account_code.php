<?php
ob_start();
  require_once("functions.php"); 
	frst_session_start(); 
	
	
 	if (isset($_POST['id'])) {
		
	
	// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
  		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
  		$last_up = date('Y-m-d');
		 
		 
	   
	   	global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_client SET  name=?, mobile=?, email=?, address=?, date=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sssssi',  $name, $mobile, $email, $address, $last_up, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	   
	   
	   header('Location: ../myaccount_account_details.php?action=success');
 	}
	
?>