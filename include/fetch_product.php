<?php 
include_once 'functions.php'; 

$subcat = urlencode($_GET["country_id"]);
			

?>				
				<section class="all-category-panel m-t-24">
                    <div class="container-fluid">							
						<div class="row">					
							<?php 
								global $mysqli;
								if ($stmt_pro = $mysqli->prepare("SELECT id, item_name, price, discount_per, discount_price, img1, img2 from sd_item_l
									WHERE activity = 1 AND sub_cat = ".$subcat."
									ORDER BY id DESC LIMIT 12")){
								$stmt_pro->execute(); 
									// Execute the prepared query.
									// get variables from result.
								$stmt_pro->bind_result($id, $item_name, $price, $discount_per, $discount_price, $img1, $img2);
								$stmt_pro->store_result();
															}
								while ($stmt_pro->fetch()) {
															
								echo'
										<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 col-6">
											<div class="product-card center">
												<figure class="category-card-figure">
													<img src="images/products/'.$img1.'" class="img-fluid" alt="">
												</figure>
												<h1><a href="p_d.php">'.$item_name.'</a></h1>
												<p class="product-card-price center">৳ 100<span class="product-cart-reduced-price"></span></p>
												<a type="button" id="product" class="btn btn-outline-warning">Add to cart</a>
											</div>
										</div>';
									}									
							?>				
						</div>						
					</div>						
				</section>						
						
<?php echo $subcat; ?>		


										