<?php
ob_start();
include_once '../functions/functions.php';
testing_loggin();
				
			

				
 	if (isset($_POST['cat'] , $_POST['item_name'] , $_POST['price'])) {
 	    
 	    // Getting photo
		$file = $_FILES["photo"];
		$filename   = uniqid() .''. time(); //
		$extension  = pathinfo( $file["name"], PATHINFO_EXTENSION ); 
		$basename   = $filename . ".". $extension; 
		// Uploading in "photo" folder
		move_uploaded_file($file["tmp_name"], "../../../images/products/" . $basename);
		if ($extension == NULL){ $photo = NULL; } else { $photo = $basename;}
		
		// Sanitize and validate the data passed in
		$category = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_STRING);
		$sub_cat = filter_input(INPUT_POST, 'sub_cat', FILTER_SANITIZE_STRING);
		$sub_sub = filter_input(INPUT_POST, 'sub_sub_cat', FILTER_SANITIZE_STRING);
		$unit = filter_input(INPUT_POST, 'unit', FILTER_SANITIZE_STRING);
		$quantity = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_STRING);
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
  		$delivery_charge = filter_input(INPUT_POST, 'delivery_charge', FILTER_SANITIZE_STRING);
		$s_offer = filter_input(INPUT_POST, 's_offer', FILTER_SANITIZE_STRING);
		$free_delivery = filter_input(INPUT_POST, 'free_delivery', FILTER_SANITIZE_STRING);
		$get_discount = filter_input(INPUT_POST, 'get_discount', FILTER_SANITIZE_STRING);
		$e_offer = filter_input(INPUT_POST, 'e_offer', FILTER_SANITIZE_STRING);
		$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
		$top_pro = filter_input(INPUT_POST, 'top_pro', FILTER_SANITIZE_STRING);
		$popular = filter_input(INPUT_POST, 'popular', FILTER_SANITIZE_STRING);
		$shop_id = filter_input(INPUT_POST, 'shop_id', FILTER_SANITIZE_STRING);
		if ($discount_price == 0){$discount_price = $price;}

        // Insert the new user into the database 
		global $mysqli; 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_item_l (item_name, item_code, category, sub_cat, sub_sub, unit, quantity, sort_desc, details, video, price, discount_per, discount, discount_price, d_quantity, delivery_charge, s_offer, free_delivery, get_discount, e_offer, img1, top_pro, popular, shop_id, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)")) {
            $insert_stmt->bind_param('sssssssssssssssssssssssss', $title, $item_code,  $category, $sub_cat, $sub_sub, $unit, $quantity, $short_desc, $details, $video, $price, $discount_per, $discount, $discount_price, $d_quantity, $delivery_charge, $s_offer, $free_delivery,$get_discount, $e_offer, $photo, $top_pro, $popular, $shop_id, $date);
            $insert_stmt->execute();
       }
	   
	   
	    $last_id = $mysqli->insert_id;
		
		foreach($_POST['color'] as $row=>$Act)
			{
			$pro_id = $Act; 
			$type = 1;
			global $mysqli;
			$query = "INSERT INTO sd_clr_cat (itemID, color, type) VALUES (?, ?, ?)";
			$stmt = $mysqli->prepare($query);
			$stmt->bind_param("sss", $last_id,  $pro_id, $type);
			$stmt->execute();
			$stmt->close();
			
		}
		
		
	  header('Location: ../../add_new_item/521478/success');
 	}
	
?>