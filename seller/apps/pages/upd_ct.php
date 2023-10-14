<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['category_name'])) {
	
		// Sanitize and validate the data passed in
		$category_name = filter_input(INPUT_POST, 'category_name', FILTER_SANITIZE_STRING);
		$menu_id = filter_input(INPUT_POST, 'menu_id', FILTER_SANITIZE_STRING);
		$meta_desc = filter_input(INPUT_POST, 'meta_desc', FILTER_SANITIZE_STRING);
		$meta_key = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_STRING);
		$page_cn = filter_input(INPUT_POST, 'editor1', FILTER_SANITIZE_STRING);

		$pro_img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$pro_img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);
		$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE menu SET menu_name=?, meta_desc=?, meta_key=?, page_cn=?, img1=?, img2=?, type=? WHERE menu_id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssssssss', $category_name,  $meta_desc, $meta_key, $page_cn,  $pro_img1, $pro_img2, $type, $menu_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../update_category/'.$menu_id.'/success');
 	}
	
	
?>