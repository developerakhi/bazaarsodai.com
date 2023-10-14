<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['code'])) {
	
		// Sanitize and validate the data passed in
		$code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
		$value = filter_input(INPUT_POST, 'value', FILTER_SANITIZE_STRING);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		$activity = 1;

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO  sd_coupon (code, value, date, activity) VALUES (?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssss', $code, $value, $date, $activity);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		  header('Location: ../../add_coupon/8457459/success');
       }
 	}
	
?>