<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['category_name'])) {
	
		// Sanitize and validate the data passed in
		$title = filter_input(INPUT_POST, 'category_name', FILTER_SANITIZE_STRING);
		$url = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO  sd_headline (title, link) VALUES (?, ?)")) {
            $insert_stmt->bind_param('ss', $title, $url);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
		  header('Location: ../../add_headline/654125/success');
 	}
	
?>