<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['id'])) {
	
		// Sanitize and validate the data passed in
		$menu_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		$hotline = filter_input(INPUT_POST, 'hotline', FILTER_SANITIZE_STRING);
		$email_id = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$copyright = filter_input(INPUT_POST, 'copy', FILTER_SANITIZE_STRING);
		$hotline1 = filter_input(INPUT_POST, 'hotline1', FILTER_SANITIZE_STRING);
		$hotline2 = filter_input(INPUT_POST, 'hotline2', FILTER_SANITIZE_STRING);
		$hotline3 = filter_input(INPUT_POST, 'hotline3', FILTER_SANITIZE_STRING);
		$bkash = filter_input(INPUT_POST, 'bkash', FILTER_SANITIZE_STRING);
		$header_color = filter_input(INPUT_POST, 'header_color', FILTER_SANITIZE_STRING);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_page_setup SET copyright=?, top_no=?, email=?, hotline1=?, hotline2=?, hotline3=?, bkash=?, header_color=?, date=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssssssssss', $copyright, $hotline, $email_id, $hotline1, $hotline2, $hotline3, $bkash, $header_color, $date, $menu_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../company_details/'.$menu_id.'/success');
 	}
	
	
?>