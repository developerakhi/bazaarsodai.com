<?php
define("APP_ROOT", dirname(dirname(__FILE__)));
define("PRIVATE_PATH", APP_ROOT . "");
require_once(PRIVATE_PATH . "/functions/functions.php");
testing_loggin();

if (isset($_POST['name'])) {
	   // echo "<pre>";
	   // print_r($_POST);exit;
		
		$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
		$delivery_address = filter_input(INPUT_POST, 'delivery_address', FILTER_SANITIZE_STRING);
		
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_client SET name=?, mobile=?, email=?, address=?, delivery_address=? WHERE id = ? LIMIT 1")){
		$insert_stmt->bind_param('sssssi', $name, $mobile, $email, $address, $delivery_address, $id);
        $insert_stmt->execute();
        
       }
	  header('Location: ../../edit_customer/'.$id.'');
 	}
	
	
?>