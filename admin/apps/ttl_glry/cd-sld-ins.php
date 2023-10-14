<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['pro_img1'] , $_POST['pro_img2'])) {
	
		// Sanitize and validate the data passed in
		$title_one = filter_input(INPUT_POST, 'title_one', FILTER_SANITIZE_STRING);
		$title_two = filter_input(INPUT_POST, 'title_two', FILTER_SANITIZE_STRING);
		$title_three = filter_input(INPUT_POST, 'title_three', FILTER_SANITIZE_STRING);
		$link = filter_input(INPUT_POST, 'link');
		$img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);
		$category = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_STRING);

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_slide_mng (title_one, title_two, title_three, link, img1, img2, cat) VALUES (?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssssss', $title_one, $title_two, $title_three, $link, $img1, $img2, $category);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../add_new_slide/521478/success');
 	}
	
?>