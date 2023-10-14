<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();
					
	
				
 	if (isset($_POST['roll_name'])) {
		
		// Sanitize and validate the data passed in
		$roll_name = filter_input(INPUT_POST, 'roll_name', FILTER_SANITIZE_STRING);
		$product_management = filter_input(INPUT_POST, 'product_management', FILTER_SANITIZE_STRING);
		$category_management = filter_input(INPUT_POST, 'category_management', FILTER_SANITIZE_STRING);
		$order_management = filter_input(INPUT_POST, 'order_management', FILTER_SANITIZE_STRING);
		$slide_management = filter_input(INPUT_POST, 'slide_management', FILTER_SANITIZE_STRING);
		$flash_deals = filter_input(INPUT_POST, 'flash_deals', FILTER_SANITIZE_STRING);
		$coupon = filter_input(INPUT_POST, 'coupon', FILTER_SANITIZE_STRING);
		$customers = filter_input(INPUT_POST, 'customers', FILTER_SANITIZE_STRING);
		$pages = filter_input(INPUT_POST, 'pages', FILTER_SANITIZE_STRING);
		$reports = filter_input(INPUT_POST, 'reports', FILTER_SANITIZE_STRING);
		$change_settingt = filter_input(INPUT_POST, 'change_setting', FILTER_SANITIZE_STRING);
		
	
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO roll_permission (roll_name, product_management, category_management, order_management, slide_management, flash_deals, coupon, customers, pages, reports, change_setting) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssssssssss', $roll_name, $product_management, $category_management, $order_management, $slide_management, $flash_deals, $coupon, $customers, $pages, $reports, $change_settingt);
            $insert_stmt->execute();
       }
	   
	   
	  header('Location: ../../add_permission/521478/success');
 	}
	
?>