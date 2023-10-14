<?php
ob_start();
  require_once("functions.php"); 
	frst_session_start(); 
	
	
 	if (isset($_POST['id'])) {
		
	
	// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$name = filter_input(INPUT_POST, 'f_name', FILTER_SANITIZE_STRING);
		$ref = filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_STRING);
		$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
  		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
  		$last_up = date('Y-m-d');
		 
		 
	   
	   	global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_client SET  name=?, ref=?, email=?, address=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssssi',  $name, $ref, $email, $address, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	   
	   
	   header('Location: ../my_details.php?action=success');
 	}
	
?>