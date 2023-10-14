<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['link'])) {
	
		// Sanitize and validate the data passed in
		$link = filter_input(INPUT_POST, 'link');
		$pro_img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$pro_img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO  banner (link, img1, img2, date) VALUES (?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssss', $link, $pro_img1, $pro_img2, $date);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		  header('Location: ../../add_banner/8457459/success');
       }
 	}
	
?>