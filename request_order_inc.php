<?php
 require_once("include/functions.php");
 ob_start();
   session_start(); 
		$file = $_FILES["image"];
		$filename   = uniqid() .''. time(); //
		$extension  = pathinfo( $file["name"], PATHINFO_EXTENSION ); 
		$basename   = $filename . ".". $extension; 
		// Uploading in "image" folder
		move_uploaded_file($file["tmp_name"], "images/products/" . $basename);
		if ($extension == NULL){ $image = NULL; } else { $image = $basename;}	
					
					
						
if (isset($_POST['product_name'] , $_POST['name'])) {						
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
	$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
	$product_name = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);

	global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO product_request (name, phone, address, product_name, image) 
				VALUES (?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssss', $name, $phone, $address, $product_name, $image);
            $insert_stmt->execute();
       }
       header('Location: ../request_order.php');
       
       $_SESSION['status'] = "Product request Accepted Successfully... We are contacting you as soon as possible.";
      
}
?>
