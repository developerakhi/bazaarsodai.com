<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['offer_name'])) {
		
		$offer_name = filter_input(INPUT_POST, 'offer_name', FILTER_SANITIZE_STRING);
		$sub_title = filter_input(INPUT_POST, 'sub_title', FILTER_SANITIZE_STRING);
		$start_date = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_STRING);
		$end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING);
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		

		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE flash_deals SET offer_name=?, sub_title=?, start_date=?, end_date=? WHERE id = ? LIMIT 1")){
    		$insert_stmt->bind_param('ssssi', $offer_name, $sub_title, $start_date, $end_date, $id);
            $insert_stmt->execute();
        
        }
		  header('Location: ../../update_flash_deals/'.$id.'/success');
 		
	}
	
	
	if (isset($_POST['product_id'])) {
	    
	    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_SANITIZE_STRING);
		$flash_id = filter_input(INPUT_POST, 'flash_id', FILTER_SANITIZE_STRING);
	
		
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO flash_deals_item (flush_deals_id, product_id) VALUES (?,?)")) {
            $insert_stmt->bind_param('ss', $flash_id, $product_id);
            $insert_stmt->execute();
        }
        
 		header('Location: ../../update_flash_deals/'.$flash_id.'/success');
	}
	
	
	
?>



