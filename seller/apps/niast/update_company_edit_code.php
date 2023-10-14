<?php
require_once("../functions/functions.php");
testing_loggin();

 	if (isset($_POST['company_name'], $_POST['id'])) {
	
		// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$company_name = filter_input(INPUT_POST, 'company_name', FILTER_SANITIZE_STRING);
		$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
		$last_up = filter_input(INPUT_POST, 'up_date', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_settings SET company=?, mobile=?, email=?, address=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssssi', $company_name, $mobile, $email, $address, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../change_company_details/854223DF9/success');
 		}
	
	
?>