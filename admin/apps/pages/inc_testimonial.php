<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['title'])) {
	
		// Sanitize and validate the data passed in
		$title = filter_input(INPUT_POST, 'title');
		$sort_desc = filter_input(INPUT_POST, 'sort_desc');
		$pro_img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$pro_img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		$type = 2 ;

		

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO  rk_blog (title, sort_desc, img1, img2, date, type) VALUES (?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssss', $title,  $sort_desc, $pro_img1, $pro_img2, $date, $type);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		  header('Location: ../../add_testimonial/8457459/success');
       }
 	}
	
?>