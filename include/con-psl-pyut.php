<?php
ob_start();
  require_once("functions.php"); 
	frst_session_start(); 

 	if (isset($_POST['amount'], $_POST['mathod'])) {

		 
		// Sanitize and validate the data passed in
		$getID = $_SESSION['user_id'];
 		$prev_due = filter_input(INPUT_POST, 'p_due', FILTER_SANITIZE_STRING);
		$received_amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING);
 		$current_due = filter_input(INPUT_POST, 'current_due', FILTER_SANITIZE_STRING);
		$mobile_mathod = filter_input(INPUT_POST, 'mobile_mathod', FILTER_SANITIZE_STRING);
 
 		$mathod = filter_input(INPUT_POST, 'mathod', FILTER_SANITIZE_STRING);
 		$date = date('Y-m-d');
 		$date_type = 1;
		$activity = 1;
		 
 		 
			   
				if ($stmt_m = $mysqli->prepare("SELECT  mobile from sd_client
						   WHERE id = ? ")){
					$stmt_m->bind_param('s', $getID);  // Bind "$email" to parameter.
					$stmt_m->execute();    // Execute the prepared query.
									// get variables from result.
					$stmt_m->bind_result($send_from);
					$stmt_m->store_result();
					$stmt_m->fetch();
					$stmt_m->close();
				 }	
						 
				// Insert the new user into the database 
				global $mysqli;
				if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_payout (send_from, mathod, mbl_number, prev_due, amount, c_due, date, activity, data_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
					$insert_stmt->bind_param('sssssssss', $getID, $mathod, $mobile_mathod, $prev_due, $received_amount, $current_due, $date, $activity, $date_type);
					// Execute the prepared query.
					if (!$insert_stmt->execute()) {
						header('Location: ../error.php?err=Registration failure: INSERT');
				   }
			   }
		    
				   
				   header('Location:  ../new_payout.php?actionID=success');  
				   

	  
	 	 
 	}
	
?>