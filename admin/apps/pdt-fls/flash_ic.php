<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();
					
	
				
 	if (isset($_POST['offer_name'])) {
		
		// Sanitize and validate the data passed in
		$offer_name = filter_input(INPUT_POST, 'offer_name', FILTER_SANITIZE_STRING);
		$sub_title = filter_input(INPUT_POST, 'sub_title', FILTER_SANITIZE_STRING);
		$start_date = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_STRING);
		$end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING);
	
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO flash_deals (offer_name, sub_title, start_date, end_date) VALUES (?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssss', $offer_name, $sub_title, $start_date, $end_date);
            $insert_stmt->execute();
       }
	   
	   
	    $last_id = $mysqli->insert_id;
		
		foreach($_POST['product_id'] as $row=>$Act)
			{
			$product_id = $Act; 

			global $mysqli;
			$query = "INSERT INTO flash_deals_item (flush_deals_id, product_id) VALUES (?, ?)";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param("ss", $last_id, $product_id);
			$stmt->execute();
			$stmt->close();
			
		}

	   
	  header('Location: ../../add_new_flash_deals/521478/success');
 	}
	
?>