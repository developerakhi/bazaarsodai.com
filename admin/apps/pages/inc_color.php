<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['color_name'])) {
	
		// Sanitize and validate the data passed in
		$color_code = filter_input(INPUT_POST, 'color_code', FILTER_SANITIZE_STRING);
		$color_name = filter_input(INPUT_POST, 'color_name', FILTER_SANITIZE_STRING);
		
		$type = 1 ;

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_color (color_code, color_name, type) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('sss', $color_code, $color_name, $type);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		  header('Location: ../../add_new_color/8457459/success');
       }
 	}
	
?>