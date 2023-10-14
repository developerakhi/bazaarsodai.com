<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['b_id'] , $_POST['title'])) {
	
		// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'b_id', FILTER_SANITIZE_NUMBER_INT);
		$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
		$img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_brands SET title=?, img1=?, img2=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sssi', $title, $img1, $img2, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../update_brand/'.$id.'/success');
 		}
	
	
?>