<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['id'] , $_POST['title'])) {
	
		// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
		$details = filter_input(INPUT_POST, 'editor1');
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);


		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_posts SET title=?, full_desc=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssi', $title, $details, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../update_more_post/'.$id.'/success');
 		}
	
	
?>