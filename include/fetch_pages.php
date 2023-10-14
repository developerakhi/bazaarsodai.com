<?php
//sleep(2);
include_once 'db_connect.php'; //include config file
$item_per_page = 12;

//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
    header('HTTP/1.1 500 Invalid page number!');
    exit;
}

//get current starting point of records
$position = (($page_number-1) * $item_per_page);
//fetch records using page position and item per page. 
$results = $mysqli->prepare("SELECT id, item_name, price, discount_price, img1, img2 FROM sd_item_l WHERE activity = 1 ORDER BY id DESC LIMIT ?, ?");

//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
//for more info https://www.sanwebe.com/2013/03/basic-php-mysqli-usage
$results->bind_param("dd", $position, $item_per_page); 
$results->execute(); //Execute prepared Query
$results->bind_result($item_id, $item_name, $price, $discount_price, $img1, $img2); //bind variables to prepared statement
//output results from database
while($results->fetch()){ //fetch values
    echo '
	
						
							
						<div class="col-lg-2 col-md-6">
							<div class="product-item mb-15">
								<a href="product/'.$id.'" class="product-img">
									<img src="images/products/';if ($img1 == NULL){echo 'photo.png';}else{echo ($img1);}echo'" alt="">
								</a>
								<div class="product-text-dt">
									<h4>'.$item_name.'</h4>';
										if ($discount_price > 0){
										echo '
											<div class="product-price">Tk '.number_format($discount_price).'<span>Tk '.number_format($price).'</span></div>';
										}
										else{
										echo'
											<div class="product-price">Tk '.number_format($price).'</div>';
											}
										echo'
									<a href="product/'.$id.'" class="order-btn hover-btn lstd"> <i class="fa fa-shopping-basket" aria-hidden="true"></i> Details</a>
								</div>
							</div>
						</div>
							
							
	
	
	'; 
}?>

