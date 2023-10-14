<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['size'])) {
	
		// Sanitize and validate the data passed in
		$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
			
		$type = 2 ;

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_color (size, type) VALUES (?, ?)")) {
            $insert_stmt->bind_param('ss', $size, $type);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		  header('Location: ../../add_new_size/8457459/success');
       }
 	}
	
?>