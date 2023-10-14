<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['name'])) {
	
		// Sanitize and validate the data passed in
		$title = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$value = filter_input(INPUT_POST, 'value', FILTER_SANITIZE_STRING);
		$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO  sd_payments (name, value, position) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('sss', $title, $value, $type);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		  header('Location: ../../add_new_payment_mathod/8457459/success');
       }
 	}
	
?>