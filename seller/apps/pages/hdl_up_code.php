<?php
include_once '../functions/functions.php'; 

testing_loggin();

 	if (isset($_POST['title'])) {
	
		// Sanitize and validate the data passed in
		$category_name = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
		$url = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);
		$menu_id = filter_input(INPUT_POST, 'hd_id', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_headline SET title=?, link=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sss', $category_name, $url, $menu_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	  header('Location: ../../update_headline/'.$menu_id.'/success');
 		}
	
	
?>