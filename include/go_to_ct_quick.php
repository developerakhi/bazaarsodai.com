<?php
ob_start();
include_once 'db_connect.php';
 	if (isset($_POST['sessionID'] , $_POST['price'])) {
	
		// Sanitize and validate the data passed in
		$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_SANITIZE_STRING);
		$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
		$pro_iid = filter_input(INPUT_POST, 'proID', FILTER_SANITIZE_STRING);
		$unit = filter_input(INPUT_POST, 'unit', FILTER_SANITIZE_STRING);
		$qty = filter_input(INPUT_POST, 'qty', FILTER_SANITIZE_STRING);
		$ttl_price = $price * $qty;
 

        // Insert the new user into the database 
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_cart (session_d, pro_id, unit, qty, price, t_price) VALUES (?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssss', $sessionID, $pro_iid, $unit, $qty, $price, $ttl_price);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }

    		  header('Location: ' . $_SERVER['HTTP_REFERER'].'#'.$pro_iid.'');
	    	}
	
?>