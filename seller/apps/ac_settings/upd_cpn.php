<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['id'])) {
	
		// Sanitize and validate the data passed in
		$menu_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		$hotline = filter_input(INPUT_POST, 'hotline', FILTER_SANITIZE_STRING);
		$email_id = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$copyright = filter_input(INPUT_POST, 'copy', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_page_setup SET copyright=?, top_no=?, email=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssss', $copyright, $hotline, $email_id, $menu_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../company_details/'.$menu_id.'/success');
 	}
	
	
?>