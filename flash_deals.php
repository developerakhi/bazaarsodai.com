<?php 
include_once 'include/msp_lp.php';
include_once 'include/functions.php'; 
frst_session_start();
//$gId = $_GET['id'];
?>
<!DOCTYPE html>
<html class="no-js" lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include ("include/head.php"); ?>

<body>
		
<?php include ("include/header.php"); ?>
<?php include ("include/left_side.php"); ?>
        <div class="content-wrap">
            <div class="main min-vh-100" id="get_product">
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://bazaarsodai.com/">Home</a></li>
                                <li>Daily Deals</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="min-vh-100">
                    <h1 style="padding-left:30px; font-size: 18px; font-weight: 700;">Running Deals</h1>
			
    			<div class='container-fluid'>	
    				<div class='row'>
        				<?php
        		        global $mysqli;
        			    if($flashDeals = $mysqli->prepare("SELECT id, offer_name, start_date, end_date from flash_deals where start_date < NOW() AND end_date > NOW()
        				ORDER BY id DESC limit 3")){
        				$flashDeals->execute(); 
        				$flashDeals->bind_result($flash_id, $offer_name, $start_date, $end_date);
        				$flashDeals->store_result();
        				}
        		        while ($flashDeals->fetch()) {
        		            
        			    ?> 
    			    
    						<?php 
    						global $mysqli;
    						if ($flshDeals = $mysqli->prepare("SELECT product_id from flash_deals_item
    						WHERE flush_deals_id = '".$flash_id."' ORDER BY id DESC LIMIT 6")){
    						$flshDeals->execute(); 
    						$flshDeals->bind_result($product_id);
    						$flshDeals->store_result();
    						}
    						while ($flshDeals->fetch()) {
    						    
    						    global $mysqli;
    					    	if ($flshDealsitem = $mysqli->prepare("SELECT id, shop_id, item_name, unit, price, discount_per, discount_price, img1, img2 from sd_item_l
    							WHERE activity = 1 AND id = '".$product_id."' ORDER BY id DESC LIMIT 6")){
    							$flshDealsitem->execute(); 
    							$flshDealsitem->bind_result($item_id, $shop_id, $item_name, $unit, $price, $discount_per, $discount_price, $img1, $img2);
    							$flshDealsitem->store_result();
    							$flshDealsitem->fetch();
    							$flshDealsitem->close();
    							}
    							
    							$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);	
    							
    						echo'
    						    <div class="col-md-6 col-lg-3 col-xl-2 col-sm-6 content colum-section">
    								<div class="product-card center">
    								<figure class="">
    									<img id="'.$item_id.'" src="images/products/';if ($img1 == NULL){echo 'photo.png';}else{echo ($img1);}echo'" class="img-fluid add_to_cart" style="height: 150px; width:150px;" size="400" alt="">
    								</figure>
    								<div style="margin-bottom: 20px; line-height: 1.5em; height: 3em; overflow: hidden;"><h1 style=""><a href="product/'.$item_id.'/'.$str.'">'.ucfirst($item_name).'</a></h1></div>
    								<div class="subText" style="min-height:30px;">'.$unit.'</div>';
    								if ($discount_price > !0){
									echo '
									<section>
                                        <p class="product-card-price center" style="font-weight: bolder; color: green; font-size: 20px;">
    										৳'.number_format($price).'
    										<del><span class="product-cart-reduced-price">৳'.number_format($price).'</span></del>
    									</p>';
    										}
    									else{
    									echo'
    									<p class="product-card-price center" style="font-weight: bolder; color: green; font-size: 20px;">
    										৳'.number_format($discount_price).'
    										<span class="product-cart-reduced-price"></span>
    									</p>';}
    									
									echo'
    								<input name="hidden_price" id="price'.$item_id.'" type="hidden" value="';if ($discount_price == 0){echo ($price);} else {echo ($discount_price);} echo'" />
    								<input type="hidden" name="hidden_name" id="name'.$item_id.'" value="'.$item_name.'" />
    								<input type="hidden" name="pimg" id="pimg'.$item_id.'" value="'.$img1.'" />
    								<input name="quantity" id="quantity'.$item_id.'" type="hidden" value="1" />
    								<input type="hidden" name="unit" id="unit'.$item_id.'" value="'.$unit.'" />
    								<div class="" style="height: 100%; margin-top: 20px;"><a type="button" name="add_to_cart" id="'.$item_id.'" class="btn btn-outline-warning add_to_cart" value="Add to Cart" > Add to cart </a></div>
    							</div>
    							</div>';
    						}									
    						?>
    					<?php }?>
    				</div>
    			</div>
					
                <h1 style="padding-left:30px; margin-top:50px; font-size: 18px; font-weight: 700;">Previous Deals</h1>
                  <div class='container-fluid'>
                     <div class='row pm'>
        				<?php
        		        global $mysqli;
        			    if($flashDeals = $mysqli->prepare("SELECT id, offer_name, start_date, end_date from flash_deals 
        				ORDER BY id ASC limit 6")){
        				$flashDeals->execute(); 
        				$flashDeals->bind_result($flash_id, $offer_name, $start_date, $end_date);
        				$flashDeals->store_result();
        				}
        		        while ($flashDeals->fetch()) {
        		            $currentDate = date('Y-m-d H:i:s', time());
        		            $timestamp1 = strtotime($end_date);
        		            $timestamp2 = strtotime($currentDate);
                            $difference = $timestamp1 - $timestamp2;
        
        			    ?>  
                        <?php if($difference < 0) {?>
							<?php 
								global $mysqli;
								if ($flshDeals = $mysqli->prepare("SELECT product_id from flash_deals_item
								WHERE flush_deals_id = '".$flash_id."' ORDER BY id ASC LIMIT 6")){
								$flshDeals->execute(); 
								$flshDeals->bind_result($product_id);
								$flshDeals->store_result();
							 }
							while ($flshDeals->fetch()) {
							    
							    global $mysqli;
						    	if ($flshDealsitem = $mysqli->prepare("SELECT id, shop_id, item_name, unit, price, discount_per, discount_price, img1, img2 from sd_item_l
    							WHERE activity = 1 AND id = '".$product_id."' ORDER BY id DESC LIMIT 6")){
    							$flshDealsitem->execute(); 
    							$flshDealsitem->bind_result($item_id, $shop_id, $item_name, $unit, $price, $discount_per, $discount_price, $img1, $img2);
    							$flshDealsitem->store_result();
    							$flshDealsitem->fetch();
    							$flshDealsitem->close();
    							}
    							
								$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);	
								
							echo'
							    <div class="col-md-6 col-lg-3 col-xl-2 col-sm-6 content colum-section">
									<div class="product-card center">
										<figure class="">
											<img src="images/products/';if ($img1 == NULL){echo 'photo.png';}else{echo ($img1);}echo'" width="200" height="200" alt="">
										</figure>
										<h1 class="name" style=""><a class="name" href="#">'.ucfirst($item_name).'</a></h1>
										<div class="subText">'.$unit.'</div>';
										if ($discount_per > 0){
										echo '
										<p class="product-card-price center" style="font-weight: bolder; color: green; font-size:20px;">
											৳'.number_format($discount_price).'
											<span class="product-cart-reduced-price">৳'.number_format($price).'</span>
										</p>';
											}
										else{
										echo'
										<p class="product-card-price center" style="font-weight: bolder; color: green; font-size: 20px;">
											৳'.number_format($price).'
											 <span class="product-cart-reduced-price"></span>
										</p>';
											}
										echo'
									</div>
								</div>';
							}									
							?>
						<?php } ?>
				<?php }?>
				</div>
            </div>
        </section>
            <?php include ("include/footer.php"); ?>
        </div>
    
</div>
<?php include ("include/cart.php"); ?>
<?php include ("category.php"); ?>
