<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();

 	if (isset($_POST['menu_name'])) {
 	    
 	    // Getting Icon
		$file = $_FILES["icon"];
		$filename   = uniqid() .''. time(); //
		$extension  = pathinfo( $file["name"], PATHINFO_EXTENSION ); 
		$basename   = $filename . ".". $extension; 
		move_uploaded_file($file["tmp_name"], "../../../images/icon/" . $basename);
		if ($extension == NULL){ $icon_img = NULL; } else { $icon_img = $basename;}
		
		 // Getting photo
		$file = $_FILES["photo"];
		$filename   = uniqid() .''. time(); //
		$extension  = pathinfo( $file["name"], PATHINFO_EXTENSION ); 
		$basename   = $filename . ".". $extension; 
		move_uploaded_file($file["tmp_name"], "../../../images/icon/" . $basename);
		if ($extension == NULL){ $photo = NULL; } else { $photo = $basename;}
	
		// Sanitize and validate the data passed in
		$menu_name = filter_input(INPUT_POST, 'menu_name', FILTER_SANITIZE_STRING);
		$meta_desc = filter_input(INPUT_POST, 'meta_desc', FILTER_SANITIZE_STRING);
		$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
		

        // Insert the new user into the database 
		global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO  menu (menu_name, meta_desc, img1, img2, banner, type) VALUES (?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssss', $menu_name, $meta_desc, $icon_img, $pro_img2, $photo, $type);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		  header('Location: ../../add_new_category/8457459/success');
       }
 	}
	
?>