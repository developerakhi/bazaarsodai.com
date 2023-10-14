<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['sub_category_name'])) {
	
		// Sanitize and validate the data passed in
		$sub_cat = filter_input(INPUT_POST, 'sub_category_name', FILTER_SANITIZE_STRING);
		$category = filter_input(INPUT_POST, 'sub_cat', FILTER_SANITIZE_STRING);
		$meta_desc = filter_input(INPUT_POST, 'meta_desc', FILTER_SANITIZE_STRING);
		$meta_key = filter_input(INPUT_POST, 'meta_keywords', FILTER_SANITIZE_STRING);
		$page_cn = filter_input(INPUT_POST, 'editor1', FILTER_SANITIZE_STRING);
		$pro_img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$pro_img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);


        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_third_sub (name, meta_desc, meta_key, page_cn, sub_menu_id, img1, img2) VALUES (?, ?, ?,  ?, ?, ?,?)")) {
            $insert_stmt->bind_param('sssssss', $sub_cat, $meta_desc, $meta_key, $page_cn, $category, $pro_img1, $pro_img2);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
		  header('Location: ../../add_new_third_sub_cat/545SD5/success');
 	}
	
?>