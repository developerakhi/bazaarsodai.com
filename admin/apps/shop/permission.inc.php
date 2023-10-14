<?php
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_GET['shop_id'])) {
	
		// Sanitize and validate the data passed in
		$shop_id = filter_input(INPUT_GET, 'shop_id', FILTER_SANITIZE_STRING);
		$activity = filter_input(INPUT_GET, 'activity', FILTER_SANITIZE_STRING);
	
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_merchant SET activity=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('is', $activity, $shop_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	   
	
	  header('Location: ' . $_SERVER['HTTP_REFERER'].'');
	
	  

 		}

?>