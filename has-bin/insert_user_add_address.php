<?php
 require_once("../include/functions.php");

 ob_start();


if (isset($_POST['name'] , $_POST['mobile'])) {						
	$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
	$user_address_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$user_address_mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
	$user_address_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$user_address_address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
	
    	global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO user_address (user_id, name, mobile, email, address) 
				VALUES (?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssss', $user_id, $user_address_name, $user_address_mobile, $user_address_email, $user_address_address);
            $insert_stmt->execute();
        }
       
	 header("Location: https://bazaarsodai.com/book_address.php");
    }
?>
