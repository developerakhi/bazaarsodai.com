<?php
include_once '../functions/functions.php'; 
testing_loggin();
	
		// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		$img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
		$url = filter_input(INPUT_POST, 'ads_url', FILTER_SANITIZE_STRING);
		$adsence = filter_input(INPUT_POST, 'adsence');
		$p_1 = filter_input(INPUT_POST, 'home_1', FILTER_SANITIZE_STRING);
		$p_2 = filter_input(INPUT_POST, 'home_2', FILTER_SANITIZE_STRING);
		$p_3 = filter_input(INPUT_POST, 'home_3', FILTER_SANITIZE_STRING);
		$p_4 = filter_input(INPUT_POST, 'home_4', FILTER_SANITIZE_STRING);
		$p_5 = filter_input(INPUT_POST, 'cat_1', FILTER_SANITIZE_STRING);
		$p_6 = filter_input(INPUT_POST, 'cat_2', FILTER_SANITIZE_STRING);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);


		// Prepare the statement:
		global $mysqli;  
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_ads SET image=?, url=?, p_1=?, p_2=?, p_3=?, p_4=?, p_5=?, p_6=?, adsence=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sssssssssi', $img, $url, $p_1, $p_2, $p_3, $p_4, $p_5, $p_6, $adsence, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../update_ads/'.$id.'/success');
 	
	
	
?>