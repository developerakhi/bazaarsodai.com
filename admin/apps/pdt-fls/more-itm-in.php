<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['pro_id'])) {
	
		// Sanitize and validate the data passed in
		$pro_id = filter_input(INPUT_POST, 'pro_id', FILTER_SANITIZE_STRING);
		$img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);


        // Insert the new user into the database 
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_more_img (pro_id, img1, img2) VALUES (?, ?, ?)")) {
            $insert_stmt->bind_param('sss', $pro_id, $img1, $img2);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../upload_more_images/'.$pro_id.'/success');
 	}
	
?>