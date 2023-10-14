<?php 
include_once 'functions.php'; 
require_once('connection.php');
include_once 'details_stm.php'; 
include_once 'go_to_ct_quick.php'; 
frst_session_start(); 
$sanitize = true;
	
$reqular = urlencode($_POST["reqular"]);
		
global $mysqli;
$stmt = $mysqli->prepare("SELECT id, item_name, item_code, sub_cat, unit, category, sort_desc, details, video, img1, price, discount_price, d_quantity, s_offer, e_offer, discount_per FROM sd_item_l
			  WHERE activity = 1 AND id = ?
				LIMIT 1");
$stmt->bind_param('i', $reqular);  // Bind "$email" to parameter.
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($main_itm_id, $item_name55, $item_code, $sub_cat, $unit, $category, $sort_description, $details, $video, $img_large, $top_price, $discount_price, $d_quantity, $s_offer, $e_offer, $discount_per);
$stmt->fetch();
$stmt->close();
				

?>											
											
												<div>
													<ul class="gty-wish-share">
														<li>
															<div class="qty-product">
																<div class="quantity buttons_added">
																	<input type="button" value="-" class="minus minus-btn">
																	<input type="number" step="1" name="quantity" value="1" id="quantity<?php echo $main_itm_id ?>" class="input-text qty text">
																	<input type="button" value="+" class="plus plus-btn">
																</div>
															</div>
														</li>
													</ul>
													<ul class="ordr-crt-share"> 
														<input type="hidden"  name="ptype" id="regular<?php echo $main_itm_id ?>" value="1" />
														<input name="hidden_price" id="price<?php echo $main_itm_id ?>" type="hidden" value=<?php echo $top_price ?> />
														<input name="hidden_name" id="name<?php echo $main_itm_id ?>" type="hidden" value="<?php echo $item_name55;?>" />
														<input type="hidden" name="pimg" id="pimg<?php echo $main_itm_id ?>" value="<?php echo $img_large ?>" />
														<input type="hidden" name="d_quantity" id="d_quantity<?php echo $main_itm_id ?>" value="1" />
														<li><button type="button" name="add_to_cart" id="<?php echo $main_itm_id ?>" class="add-cart-btn hover-btn add_to_cart"> <i class="fa fa-shopping-cart inner-right-vs"></i> Add to Cart </button></li>
													</ul>
												</div>
										
											
											
											
											
											
						



										