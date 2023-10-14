<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['brand_name'])) {
	
		// Sanitize and validate the data passed in
		$title = filter_input(INPUT_POST, 'brand_name', FILTER_SANITIZE_STRING);
		$img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_brands (title, img1, img2) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('sss', $title, $img1, $img2);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../add_new_brand/5454522/success');
 	}
	
?>