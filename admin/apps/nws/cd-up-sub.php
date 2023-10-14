<?php
require_once("../functions/functions.php");
testing_loggin();

 	if (isset($_POST['sub_menu_id'], $_POST['sub_menu'])) {
	
		// Sanitize and validate the data passed in
		$sub_menu = filter_input(INPUT_POST, 'sub_menu', FILTER_SANITIZE_STRING);
		$sub_menu_id = filter_input(INPUT_POST, 'sub_menu_id', FILTER_SANITIZE_STRING);
		$meta_desc = filter_input(INPUT_POST, 'meta_desc', FILTER_SANITIZE_STRING);
		$meta_key = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_STRING);
		$page_cn = filter_input(INPUT_POST, 'editor1', FILTER_SANITIZE_STRING);
		$cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_STRING);
		$pro_img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$pro_img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli; 	
		if ($insert_stmt = $mysqli->prepare("UPDATE sub_menu SET sub_menu=?, meta_desc=?, meta_key=?, page_cn=?, menu_id=?, img1=?, img2=? WHERE sub_menu_id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssssssss', $sub_menu, $meta_desc, $meta_key, $page_cn, $cat, $pro_img1, $pro_img2, $sub_menu_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
		  header('Location: ../../update_sub_category/'.$sub_menu_id.'/success');
 	}
	
	
?>