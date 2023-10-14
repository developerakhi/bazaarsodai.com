<?php
require_once("../functions/functions.php");
testing_loggin();
 	if (isset($_POST['id'])) {
	
		// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
		$shop_name = filter_input(INPUT_POST, 'shop_name', FILTER_SANITIZE_STRING);
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
		$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);
		$indhaka = filter_input(INPUT_POST, 'indhaka', FILTER_SANITIZE_STRING);
		$outdhaka = filter_input(INPUT_POST, 'outdhaka', FILTER_SANITIZE_STRING);
		$about = filter_input(INPUT_POST, 'about', FILTER_SANITIZE_STRING);
		$delivery = filter_input(INPUT_POST, 'delivery', FILTER_SANITIZE_STRING);


		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_merchant SET  shop_name=?, name=?, address=?, mobile=?, email=?, img1=?, img2=?, indhaka=?, outdhaka=?, about=?, delivery=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sssssssssssi',  $shop_name, $name, $address, $mobile, $email, $img1, $img2, $indhaka, $outdhaka, $about, $delivery, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	   
		  header('Location: ../../shop_profile/'.$id.'/success');
 		}
	
?>