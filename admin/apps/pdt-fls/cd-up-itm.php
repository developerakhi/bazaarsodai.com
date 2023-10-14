<?php
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
					
					// Image upload NO 2
					$target_dir = "../../../images/products/";
						$target_file = $target_dir . basename($_FILES["image2"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["image2"]["tmp_name"]);
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
						if ($_FILES["image2"]["size"] > 500000) {
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
						  if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file)) {
							echo "The file ". basename( $_FILES["image2"]["name"]). " has been uploaded.";
						  } else {
							echo "Sorry, there was an error uploading your file.";
						  }
						 
						}
						
						
					// Image upload NO 3
					$target_dir = "../../../images/products/";
						$target_file = $target_dir . basename($_FILES["image3"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["image3"]["tmp_name"]);
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
						if ($_FILES["image3"]["size"] > 500000) {
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
						  if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file)) {
							echo "The file ". basename( $_FILES["image3"]["name"]). " has been uploaded.";
						  } else {
							echo "Sorry, there was an error uploading your file.";
						  }
						 
						}
						
						
						
					// Image upload NO 4
					$target_dir = "../../../images/products/";
						$target_file = $target_dir . basename($_FILES["image4"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["image4"]["tmp_name"]);
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
						if ($_FILES["image4"]["size"] > 500000) {
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
						  if (move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file)) {
							echo "The file ". basename( $_FILES["image4"]["name"]). " has been uploaded.";
						  } else {
							echo "Sorry, there was an error uploading your file.";
						  }
						 
						}
						
						
					// Image upload NO 5
					$target_dir = "../../../images/products/";
						$target_file = $target_dir . basename($_FILES["image5"]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["image5"]["tmp_name"]);
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
						if ($_FILES["image5"]["size"] > 500000) {
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
						  if (move_uploaded_file($_FILES["image5"]["tmp_name"], $target_file)) {
							echo "The file ". basename( $_FILES["image5"]["name"]). " has been uploaded.";
						  } else {
							echo "Sorry, there was an error uploading your file.";
						  }
						 
						}
					
					 
				// Main image update codess
					$old_img = filter_input(INPUT_POST, 'img1', FILTER_SANITIZE_STRING);
				
					$image1 = basename( $_FILES["image1"]["name"]);
					if ($image1 == NULL){ $new_img = $old_img; } else { $new_img = $image1;}
					
					
					

 	if (isset($_POST['category']  , $_POST['item_name'] , $_POST['price'])) {
	
		// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'pro_id', FILTER_SANITIZE_STRING);
		$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
		$sub_cat = filter_input(INPUT_POST, 'sub_cat', FILTER_SANITIZE_STRING);
		$item_name = filter_input(INPUT_POST, 'item_name', FILTER_SANITIZE_STRING);
		$item_code = filter_input(INPUT_POST, 'item_code', FILTER_SANITIZE_STRING);
		$unit = filter_input(INPUT_POST, 'unit', FILTER_SANITIZE_STRING);
		$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING);
		$price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING);
		$discount_per = filter_input(INPUT_POST, 'discount_per', FILTER_SANITIZE_STRING);
		$discount = filter_input(INPUT_POST, 'discount', FILTER_SANITIZE_STRING);
		$discount_price = filter_input(INPUT_POST, 'discount_price', FILTER_SANITIZE_STRING);
		$d_quantity = filter_input(INPUT_POST, 'd_quantity', FILTER_SANITIZE_STRING);
		$delivery_charge = filter_input(INPUT_POST, 'delivery_charge', FILTER_SANITIZE_STRING);
		$s_offer = filter_input(INPUT_POST, 's_offer', FILTER_SANITIZE_STRING);
		$free_delivery = filter_input(INPUT_POST, 'free_delivery', FILTER_SANITIZE_STRING);
		$get_discount = filter_input(INPUT_POST, 'get_discount', FILTER_SANITIZE_STRING);
		$e_offer = filter_input(INPUT_POST, 'e_offer', FILTER_SANITIZE_STRING);
		$sort_desc = filter_input(INPUT_POST, 'sort_desc', FILTER_SANITIZE_STRING);
		$details = filter_input(INPUT_POST, 'editor1');
		$video = filter_input(INPUT_POST, 'video');
		$top_pro = filter_input(INPUT_POST, 'top_pro', FILTER_SANITIZE_STRING);
		$popular = filter_input(INPUT_POST, 'popular', FILTER_SANITIZE_STRING);
		$shop_id = filter_input(INPUT_POST, 'shop_id', FILTER_SANITIZE_STRING);
		$img1 = filter_input(INPUT_POST, 'pro_img1', FILTER_SANITIZE_STRING);
		$img2 = filter_input(INPUT_POST, 'pro_img2', FILTER_SANITIZE_STRING);
		$activity = filter_input(INPUT_POST, 'activity', FILTER_SANITIZE_STRING);
		if ($discount_price == 0){$discount_price = $price;}

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_item_l SET item_name=?, item_code=?, category=?, sub_cat=?, sort_desc=?, details=?, video=?, quantity=?, unit=?, price=?,  discount_per=?, discount=?, discount_price=?, d_quantity=?, delivery_charge=?, s_offer=?,free_delivery=?, get_discount=?, e_offer=?, img1=?, img2=?, top_pro=?, popular=?, shop_id=?, activity=? WHERE id = ? LIMIT 1"))
		{
		// Bind the variables:
		$insert_stmt->bind_param('sssssssssssssssssssssssssi', $item_name, $item_code, $category, $sub_cat, $sort_desc, $details, $video, $quantity, $unit, $price, $discount_per, $discount, $discount_price, $d_quantity, $delivery_charge, $s_offer, $free_delivery,$get_discount, $e_offer, $new_img, $img2, $top_pro, $popular, $shop_id, $activity, $id);
		// Execute the query:
		
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
		   
		   
		}
	   
	   
	    $query = "DELETE FROM sd_clr_cat WHERE itemID = '".$id."' ";
		$stmt = $mysqli->prepare($query);
		$stmt->execute();
		$stmt->close();
		
		foreach($_POST['color'] as $row=>$Act)
			{
			$pro_id = $Act; 
			echo $pro_id;
			global $mysqli;
			$type = 1;
			$query = "INSERT INTO sd_clr_cat (itemID, color, type) 
									VALUES (?, ?, ?)";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param("sss", $id, $pro_id, $type);
			$stmt->execute();
			$stmt->close();
			
		}
		
		  header('Location: ../../update_item/'.$id.'/success');
 		}
		
?>



<?php 
			// Others images update codess		
					
					$old_img2 = filter_input(INPUT_POST, 'img2', FILTER_SANITIZE_STRING);
					$old_img3 = filter_input(INPUT_POST, 'img3', FILTER_SANITIZE_STRING);
					$old_img4 = filter_input(INPUT_POST, 'img4', FILTER_SANITIZE_STRING);
					$old_img5 = filter_input(INPUT_POST, 'img5', FILTER_SANITIZE_STRING);
					
					$image2 = basename( $_FILES["image2"]["name"]);
					if ($image2 == NULL){ $new_img2 = $old_img2; } else { $new_img2 = $image2;}
					
					
					$image3 = basename( $_FILES["image3"]["name"]);
					if ($image3 == NULL){ $new_img3 = $old_img3; } else { $new_img3 = $image3;}
					
					$image4 = basename( $_FILES["image4"]["name"]);
					if ($image4 == NULL){ $new_img4 = $old_img4; } else { $new_img4 = $image4;}
					
					$image5 = basename( $_FILES["image5"]["name"]);
					if ($image5 == NULL){ $new_img5 = $old_img5; } else { $new_img5 = $image5;}
					
				
				// Prepare the statement:
						global $mysqli;
						if ($insert_stmt2 = $mysqli->prepare("UPDATE sd_more_img SET img1=?, img2=?, img3=?, img4=? WHERE pro_id = ? LIMIT 1"))
						{
						// Bind the variables:
						$insert_stmt2->bind_param('ssssi', $new_img2, $new_img3, $new_img4, $new_img5, $id);
						// Execute the query:
						
							 if (!$insert_stmt2->execute()) {
								header('Location: ../error.php?err=Registration failure: INSERT');
						   }
						   
						   
						}

?>