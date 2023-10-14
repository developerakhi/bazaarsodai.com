<?php
 require_once("../include/functions.php");
ob_start();

    $address_id = filter_input(INPUT_POST, 'address_id', FILTER_SANITIZE_STRING);
    
    if($address_id != NULL){
    
        global $mysqli;
        $addressStm = $mysqli->prepare("SELECT name, mobile, email, address FROM user_address WHERE id = '".$address_id."'");
        $addressStm->execute();   
        $addressStm->store_result();
        $addressStm->bind_result($customer_name, $mobile, $email, $address);
        $addressStm->fetch();
        $addressStm->close();
       
        }else{
            
        $customer_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    	$mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
    	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    	$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    }
    
	$orderID = filter_input(INPUT_POST, 'orderID', FILTER_SANITIZE_STRING);
	$customerID = filter_input(INPUT_POST, 'customerID', FILTER_SANITIZE_STRING);
	$total = filter_input(INPUT_POST, 'sub_total', FILTER_SANITIZE_STRING);
	$discount = filter_input(INPUT_POST, 'discount', FILTER_SANITIZE_STRING);
	$mathod = filter_input(INPUT_POST, 'mathod', FILTER_SANITIZE_STRING);
	$trxid = filter_input(INPUT_POST, 'trxid', FILTER_SANITIZE_STRING);
	$acc_no = filter_input(INPUT_POST, 'acc_no', FILTER_SANITIZE_STRING);
	$shipping = filter_input(INPUT_POST, 'shipping', FILTER_SANITIZE_STRING);
	$delivery_time = filter_input(INPUT_POST, 'delivery_time', FILTER_SANITIZE_STRING);
	$delivery_date = filter_input(INPUT_POST, 'delivery_date', FILTER_SANITIZE_STRING);
	$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
	
	if($total < 400){
	    $shipping = 50;
	    $g_total = $total + $shipping-$discount;
	}else{
	     $shipping = 30;
	     $g_total = $total + $shipping-$discount;
	}

	global $mysqli;
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_order_more (order_id, customerID, customer_name, email, mobile, address, total, g_total, discount, mathod, trxid, acc_no, shipping, delivery_time, delivery_date, date) 
				VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssssssssssssss', $orderID, $customerID, $customer_name, $email, $mobile, $address, $total, $g_total, $discount, $mathod, $trxid, $acc_no, $shipping, $delivery_time, $delivery_date, $date);
            $insert_stmt->execute();
       }
	   
	
foreach($_POST['item_id'] as $row=>$Act)
	{
    $pro_id = $Act; 
    $item_name = $_POST["product_name"][$row];
	$product_img = $_POST["product_img"][$row];
    $price = $_POST["product_price"][$row];
    $qty = $_POST["product_quantity"][$row];
	$shop_id = $_POST["shop_id"][$row];
    $linetotal = $_POST["subttl"][$row];
   
	$query = "INSERT INTO sd_order_list (orderID, pro_id, title, img, price, qty, shop_id, line_total, date) 
							VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $mysqli->prepare($query);
	$stmt->bind_param("sssssssss", $orderID, $pro_id, $item_name, $product_img, $price, $qty, $shop_id, $linetotal, $date);
	$stmt->execute();
	$stmt->close();
	
    global $mysqli; 	
    if ($insert_stmtu = $mysqli->prepare("UPDATE sd_item_l SET number_of_sales = number_of_sales + ? WHERE id = ?")){
    $insert_stmtu->bind_param('ss', $qty, $pro_id);
    $insert_stmtu->execute();
    $insert_stmtu->close();
    }
    
    global $mysqli; 	
    if ($insert_stmtu = $mysqli->prepare("UPDATE sd_item_l SET quantity = quantity - ? WHERE id = ?")){
    $insert_stmtu->bind_param('si', $qty, $pro_id);
    $insert_stmtu->execute();
    $insert_stmtu->close();
    }
	
} 
	

		
		 print '<script language="Javascript">document.location.href="../invoice?id='.$orderID.'" ;</script>'; 
			  
		
session_start();
unset($_SESSION["shopping_cart"]);	
?>
