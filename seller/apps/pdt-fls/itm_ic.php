<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();
					
					// Image upload NO 1
					$target_dir = "../../../images/products/";
						$target_file = $target_dir . basename($_FILES["image1"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["image1"]["tmp_name"]);
						  if($check !== false) {
							echo "File is an image - " . $check["mime"] . ".";
							$uploadOk = 1;
						  } else {
							echo "File is not an image.";
							$uploadOk = 0;
						  }
						}

						// Check if file already exists
						if (file_exists($target_file)) {
						  echo "Sorry, file already exists.";
						  $uploadOk = 0;
						}

						// Check file size
						if ($_FILES["image1"]["size"] > 500000) {
						  echo "Sorry, your file is too large.";
						  $uploadOk = 0;
						}

						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {
						  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						  $uploadOk = 0;
						}

						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
						  echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
						  if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
							echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
						  } else {
							echo "Sorry, there was an error uploading your file.";
						  }
						 
						}
					
				
					
					$image1 = basename( $_FILES["image1"]["name"]);
					

				
 	if (isset($_POST['cat'] , $_POST['item_name'] , $_POST['price'])) {
		
		// Sanitize and validate the data passed in
		$shop_id = filter_input(INPUT_POST, 'shop_id', FILTER_SANITIZE_STRING);
		$category = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_STRING);
		$sub_cat = filter_input(INPUT_POST, 'sub_cat', FILTER_SANITIZE_STRING);
		$sub_sub = filter_input(INPUT_POST, 'sub_sub_cat', FILTER_SANITIZE_STRING);
		$unit = filter_input(INPUT_POST, 'unit', FILTER_SANITIZE_STRING);
		$title = filter_input(INPUT_POST, 'item_name', FILTER_SANITIZE_STRING);
		$short_desc = filter_input(INPUT_POST, 'short_desc', FILTER_SANITIZE_STRING);
		$item_code = filter_input(INPUT_POST, 'item_code', FILTER_SANITIZE_STRING);
		$details = filter_input(INPUT_POST, 'editor1');
		$video = filter_input(INPUT_POST, 'video');
		$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
		$discount_per = filter_input(INPUT_POST, 'discount_per', FILTER_SANITIZE_STRING);
		$discount = filter_input(INPUT_POST, 'discount', FILTER_SANITIZE_STRING);
		$discount_price = filter_input(INPUT_POST, 'discount_price', FILTER_SANITIZE_STRING);
		$d_quantity = filter_input(INPUT_POST, 'd_quantity', FILTER_SANITIZE_STRING);
		$s_offer = filter_input(INPUT_POST, 's_offer', FILTER_SANITIZE_STRING);
		$e_offer = filter_input(INPUT_POST, 'e_offer', FILTER_SANITIZE_STRING);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		$top_pro = filter_input(INPUT_POST, 'top_pro', FILTER_SANITIZE_STRING);
		$popular = filter_input(INPUT_POST, 'popular', FILTER_SANITIZE_STRING);
		$activity = 2 ;
		

        // Insert the new user into the database 
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_item_l (shop_id, item_name, item_code, category, sub_cat, sub_sub, unit, sort_desc, details, video, price, discount_per, discount, discount_price, d_quantity, s_offer, e_offer, img1, top_pro, popular, activity, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssssssssssssssssssss', $shop_id, $title, $item_code,  $category, $sub_cat, $sub_sub, $unit, $short_desc, $details, $video, $price, $discount_per, $discount, $discount_price, $d_quantity, $s_offer, $e_offer, $image1, $top_pro, $popular, $activity, $date);
            // Execute the prepared query.
            if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	   
	   
	    $last_id = $mysqli->insert_id;
		
		foreach($_POST['color'] as $row=>$Act)
			{
			$pro_id = $Act; 
			$type = 1;
			global $mysqli;
			$query = "INSERT INTO sd_clr_cat (itemID, color, type) 
									VALUES (?, ?, ?)";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param("sss", $last_id,  $pro_id, $type);
			$stmt->execute();
			$stmt->close();
			
		}
		
		
		foreach($_POST['pro_id'] as $row=>$Act)
			{
			$pro_id = $Act; 
			$image21 = $image2;
			$image31 = $image3;
			$image41 = $image4;
			$image51 = $image5;
			$type = 1 ;
			
			global $mysqli;
			$query = "INSERT INTO sd_more_img (pro_id, img1, img2, img3, img4, type) 
									VALUES (?, ?, ?, ?, ?, ?)";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param("ssssss", $last_id, $image21, $image31, $image41, $image51, $type);
			$stmt->execute();
			$stmt->close();
		
		}
		
		

	   
	  header('Location: ../../add_new_item/521478/success');
 	}
	
?>