<?php
 require_once("include/functions.php");
 ob_start();
   session_start(); 
// 		$file = $_FILES["image"];
// 		$filename   = uniqid() .''. time(); //
// 		$extension  = pathinfo( $file["name"], PATHINFO_EXTENSION ); 
// 		$basename   = $filename . ".". $extension; 
// 		// Uploading in "image" folder
// 		move_uploaded_file($file["tmp_name"], "images/products/" . $basename);
// 		if ($extension == NULL){ $image = NULL; } else { $image = $basename;}	
					
					
						
if (isset($_POST['name'] , $_POST['name'])) {						
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_STRING);
	$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
	

	global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO contact_us (name, email, phone_number, message) 
				VALUES (?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssss', $name, $email, $phone_number, $message);
            $insert_stmt->execute();
       }
       header('Location: contact_us.php');
       
       $_SESSION['status'] = "for getting in touch!";
      
}
?>
