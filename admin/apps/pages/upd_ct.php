<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['menu_name'])) {
 	    
 	    
 	    $file = $_FILES["img1"];
		$file_name = $file["name"];
		$filename   = uniqid() .''. time(); //
		$extension  = pathinfo( $file["name"], PATHINFO_EXTENSION ); 
		$basenameIcon   = $filename . ".". $extension; 
		// Uploading in "uplaods" folder
		move_uploaded_file($file["tmp_name"], "../../../images/icon/" . $basenameIcon);
		$old_icon = filter_input(INPUT_POST, 'img1', FILTER_SANITIZE_STRING);
		if ($file_name == NULL){ $new_icon = $old_icon; } else { $new_icon = $basenameIcon;}
		
		$file = $_FILES["banner"];
		$file_name = $file["name"];
		$filename   = uniqid() .''. time(); //
		$extension  = pathinfo( $file["name"], PATHINFO_EXTENSION ); 
		$basenameBanner   = $filename . ".". $extension; 
		// Uploading in "uplaods" folder
		move_uploaded_file($file["tmp_name"], "../../../images/icon/" . $basenameBanner);
		$old_banner = filter_input(INPUT_POST, 'banner', FILTER_SANITIZE_STRING);
		if ($file_name == NULL){ $new_banner = $old_banner; } else { $new_banner = $basenameBanner;}
		

	
		$menu_name = filter_input(INPUT_POST, 'menu_name', FILTER_SANITIZE_STRING);
		$menu_id = filter_input(INPUT_POST, 'menu_id', FILTER_SANITIZE_STRING);
		$activity = 1;
		
	
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE menu SET menu_name=?, img1=?, banner=?, activity=? WHERE menu_id = ? LIMIT 1")){
		$insert_stmt->bind_param('sssss', $menu_name, $new_icon, $new_banner, $activity, $menu_id);
        $insert_stmt->execute();
        }
		
		 header('Location: ../../update_category/'.$menu_id.'/success');
 	}
	
	
?>