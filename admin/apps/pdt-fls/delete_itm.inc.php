<?php
require_once("apps/functions/functions.php");
testing_loggin();

 	if (isset($_GET['ItemID'])) {
	
		// Sanitize and validate the data passed in
		$in_id = filter_input(INPUT_GET, 'ItemID', FILTER_SANITIZE_STRING);
		$activity = 0;
	
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_item_l SET activity=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('is', $activity, $in_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	   header('Location: ' . $_SERVER['HTTP_REFERER'].'');
	  

 		}

?>