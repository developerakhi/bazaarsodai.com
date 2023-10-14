<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['id'])) {
	
		// Sanitize and validate the data passed in
		
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		$title1 = filter_input(INPUT_POST, 'title1');
		$title2 = filter_input(INPUT_POST, 'title2');
		$srt = filter_input(INPUT_POST, 'srt');
		$link = filter_input(INPUT_POST, 'link');
		$pro_img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$pro_img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);
		
		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE banner SET title1=?, title2=?, srt=?, link=?, img1=?, img2=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sssssss', $title1, $title2, $srt, $link, $pro_img1, $pro_img2, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../update_banner/'.$id.'/success');
 	}
	
	
?>