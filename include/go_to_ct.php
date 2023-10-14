<?php
ob_start();
include_once 'db_connect.php';
 	if (isset($_POST['sessionID'] , $_POST['price'])) {
	
		// Sanitize and validate the data passed in
		$sessionID = filter_input(INPUT_POST, 'sessionID', FILTER_SANITIZE_STRING);
		$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
		$pro_id = filter_input(INPUT_POST, 'proID', FILTER_SANITIZE_STRING);
		$unit = filter_input(INPUT_POST, 'unit', FILTER_SANITIZE_STRING);
		$qty = filter_input(INPUT_POST, 'qty', FILTER_SANITIZE_STRING);
		$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
		$color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
		$ttl_price = $price * $qty;
		
		
		
		
			if ($stmt_m = $mysqli->prepare("SELECT id, color_code, color_name from sd_color
						   WHERE type = 1 AND id = ? ")){
					$stmt_m->bind_param('s', $color);  // Bind "$email" to parameter.
					$stmt_m->execute();    // Execute the prepared query.
									// get variables from result.
					$stmt_m->bind_result($clr_id, $color_code, $color_name);
					$stmt_m->store_result();
					$stmt_m->fetch();
					$stmt_m->close();
				 }
		

        // Insert the new user into the database 
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_cart (session_d, pro_id,  unit, qty, price, t_price, color, clr_name, size) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssssssss', $sessionID, $pro_id, $unit, $qty, $price, $ttl_price, $color_code, $color_name, $size);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
       header('Location: ../shopping_cart');
	    	}
	
?> 