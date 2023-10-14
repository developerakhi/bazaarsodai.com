<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['id'])) {
	
		// Sanitize and validate the data passed in
		
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		$title = filter_input(INPUT_POST, 'title');
		$link = filter_input(INPUT_POST, 'link');
		$sort_desc = filter_input(INPUT_POST, 'sort_desc');
		$pro_img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$pro_img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);
		$date = filter_input(INPUT_POST, 'date');
		$activity = filter_input(INPUT_POST, 'activity');
		
		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE rk_blog SET title=?, link=?, sort_desc=?, img1=?, img2=?, date=?, activity=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssssssss', $title, $link, $sort_desc, $pro_img1, $pro_img2, $date, $activity, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../update_blog/'.$id.'/success');
 	}
	
	
?>