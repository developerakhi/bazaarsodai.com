<?php 
include_once 'include/msp_lp.php';
include_once 'include/functions.php'; 
frst_session_start(); 
?>
<!DOCTYPE html>
<html class="no-js" lang="en"> 

<?php include ("include/top.php"); ?>


  <body>
		
        <!-- /# Header -->
			<?php include ("include/header.php"); ?>
       
			<?php include ("include/left_side.php"); ?>

        <div class="content-wrap">
            <div class="main min-vh-100" id="get_product">
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://bazaarsodai.com/">Home</a></li>
                                <li>Offers</li>
                            </ul>
                        </div>
                    </div>
                </section>
				<section class="all-category-panel min-vh-100" id="person">
                    <div class="container-fluid">
                        <div class="row">
						<?php 
							global $mysqli;
							if ($stmt_pro = $mysqli->prepare("SELECT id, shop_id, item_name, unit, quantity, price, discount_per, discount_price, img1, img2 from sd_item_l
							WHERE activity = 1 AND s_offer = 1
							ORDER BY id DESC LIMIT 90")){
							$stmt_pro->execute(); 
							$stmt_pro->bind_result($item_id, $shop_id, $item_name, $unit, $quantity, $price, $discount_per, $discount_price, $img1, $img2);
							$stmt_pro->store_result();
														}
							while ($stmt_pro->fetch()) {
								$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);					
							echo'
									<div class="pm col-sm-6 col-md-4 col-lg-3 col-xl-2 col-6 colum-section">
											<div class="product-card center">';
        									if ($quantity < 1){echo '<div class="outstock"> Out Of Stock </div>';}echo'
												<figure class="category-card-figure">
													<img id="'.$item_id.'" src="images/products/'.$img1.'" class="img-fluid add_to_cart" alt="" style="height: 150px; width:150px;" size="400">
												</figure>
												<div style="margin-bottom: 20px; line-height: 1.5em; height: 3em; overflow: hidden;"><h1 style=""><a href="product/'.$item_id.'/'.$str.'">'.ucfirst($item_name).'</a></h1></div>
												<div class="subText" style="min-height:30px;">'.$unit.'</div>';
												if ($discount_per > !0){
            									echo '
                                                <p class="product-card-price center">
            										৳'.number_format($discount_price).'
            										<span class="product-cart-reduced-price">৳'.number_format($price).'</span>
            									</p>';
            										}
            									else{
            									echo'
            									<p class="product-card-price center">
            										৳'.number_format($price).'
            									</p>';
            										}
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
						</div>
                    </div>
                </section>
               <?php include ("include/footer.php"); ?>
            </div>
            
        </div>
        <!-- /# Main Body -->
				<!-- /# Mini Cart -->
					<?php include ("include/cart.php"); ?>
                <!-- /# Mini Cart -->

        <?php include ("category.php"); ?>
