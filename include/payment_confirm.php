<?php
ob_start();
include_once 'db_connect.php';
 	if (isset($_POST['invoiceid'] , $_POST['transid'])) {
	
		// Sanitize and validate the data passed in
		$invoiceid = filter_input(INPUT_POST, 'invoiceid', FILTER_SANITIZE_STRING);
		$transid = filter_input(INPUT_POST, 'transid', FILTER_SANITIZE_STRING);
		$amount = filter_input(INPUT_POST, 'amount', FILTER_SANITIZE_STRING);
		$account = filter_input(INPUT_POST, 'account', FILTER_SANITIZE_STRING);
		$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
		$activity = 1;
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		
 

        // Insert the new user into the database 
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_payment (invoiceid, transid, amount, account, mobile, activity, date) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssssss', $invoiceid, $transid, $amount, $account, $mobile, $activity, $date);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }

    		   header('Location: ../payment.php?payment=success');
	    	}
	
?>