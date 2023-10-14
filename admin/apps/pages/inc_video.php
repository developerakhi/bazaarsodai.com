<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['title'])) {
	
		// Sanitize and validate the data passed in
		$title = filter_input(INPUT_POST, 'title');
		$link = filter_input(INPUT_POST, 'link');
		$sort_desc = filter_input(INPUT_POST, 'sort_desc');
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		$type = 3 ;

		

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO  rk_blog (title, link, sort_desc, date, type) VALUES (?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssss', $title, $link, $sort_desc, $date, $type);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		  header('Location: ../../add_video/8457459/success');
       }
 	}
	
?>