<?php $coupon_code =  $_GET['coupon'];  ?>
 <?php 	
require_once("include/functions_lgn.php"); 

	frst_session_start(); 
	
	$getID = $_SESSION['user_id'];
    if ($stmt = $mysqli->prepare("SELECT id, name, mobile, email, address, img1, img2, date
			FROM sd_client
				WHERE id = ?
			LIMIT 1")) {
        $stmt->bind_param('s', $getID);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $custmr_name, $custmr_mobile, $custmr_email, $custmr_address, $custmr_img1, $custmr_img2, $custmr_date);
        $stmt->fetch();
		}
		
global $mysqli;
$stmt_cpn = $mysqli->prepare("SELECT id, value FROM sd_coupon
			  WHERE activity = 2 AND code = ? ");
$stmt_cpn->bind_param('s', $coupon_code);  // Bind "$email" to parameter.
$stmt_cpn->execute();    // Execute the prepared query.
			// get variables from result.
$stmt_cpn->store_result();
$stmt_cpn->bind_result($cpn_id, $cpn_value);
$stmt_cpn->fetch();
$stmt_cpn->close();
			

										  
?>
<title>Shopping Cart</title>
<div class="wrapper">
		<div class="gambo-Breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home <?php echo $coupon_code; ?></a></li>
								<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="all-product-grid">
			<div class="container">
			<?php		
							if(isset($_SESSION["shopping_cart"]) && count($_SESSION["shopping_cart"])>0) { 
						?>
			<form action="has-bin/insert_order.php" method="POST">
			<input type="hidden" name="date" value="<?php echo date("Y-m-d") ?>"> </input>
				<div class="row">
					<div class="col-lg-7 col-md-7">
						<div  class="checkout accordion left-chck145">
						
							<div class="estimate-ship-tax">
								<div class="shopping-cart-table ">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th class="cart-romove item">Remove</th>
													<th class="cart-description item">Image</th>
													<th class="cart-product-name item">Product</th>
													<th class="cart-qty item">Price</th>
													<th class="cart-sub-total item">Quantity</th>
													<th class="cart-total last-item">Subtotal</th>
												</tr>
											</thead>
											
											<input type="hidden" name="orderID" value="<?php echo date("ymdhis") ?>"> </input>
														
												<?php
													$cart_box = '<ul class="cart-products-loaded">';
													$total = 0;
													foreach($_SESSION["shopping_cart"] as $product){					
													$product_id = $product["product_id"]; 
													$product_name = $product["product_name"]; 
													$product_price = $product["product_price"];
													$product_img = $product["product_img"];
													$product_quantity = $product["product_quantity"];
													$d_quantity = $product["d_quantity"];
													$subtotal= ($product_price * $product_quantity);
													$total = ($total + $subtotal);
												?>
												
												<input type="hidden" required name="item_id[]" value="<?php echo $product_id ?>"> </input>
												<input type="hidden" name="product_name[]" value="<?php echo $product_name ?>"> </input>
												<input type="hidden" name="product_img[]" value="<?php echo $product_img ?>"> </input>
												<input type="hidden" name="product_price[]" value="<?php echo $product_price ?>"> </input>
												<input type="hidden" name="product_quantity[]" value="<?php echo $product_quantity ?>"> </input>
												<input type="hidden" name="d_quantity[]" value="<?php echo $d_quantity ?>"> </input>
												<input type="hidden" name="subtotal[]" value="<?php echo $subtotal ?>"> </input>
											
											
											<tbody>
												<tr>
													<td class="romove-item"><button type="button" class="btn btn-danger btn-xs delete" id="<?php echo $product_id; ?>">Remove</button></td>
													<td class="cart-image">
														<img class="crtim" src="images/products/<?php echo $product_img; ?>" alt="">
													</td>
													<td class="cart-product-name-info">
														<?php echo $product_name; ?>
													</td>
													<td class="cart-product-sub-total"><span class="cart-sub-total-price">৳<?php echo number_format($product_price) ?></span></td>
													<td class="cart-product-sub-total"><span class="cart-sub-total-price"><?php echo $product_quantity; ?></span></td>
													<td class="cart-product-grand-total"><span class="cart-grand-total-price">৳<?php echo number_format($subtotal) ?></span></td>
												</tr>
											 <?php } ?>
											</tbody>
											
										</table><!-- /table -->
									</div>
								</div>
					
							</div>
						
					
							
						</div>
						
						<div class="cnstc">
							<a href="index.php" class="save-btn14 hover-btn">Continue Shopping</a>
						</div>
																	
						
					</div>
					
					
					
					
				<div class="col-lg-5 col-md-5">
									
					<?php 
						if(isset($total)) {
						?>	
						<div class="pdpt-bg mt-0">
							<div class="pdpt-title">
								<h4>Order Summary</h4>
							</div>
							
							<div class="total-checkout-group">
								<div class="cart-total-dil">
									<h4>Subtotal</h4>
									<span>৳ <?php echo number_format($total) ?></span>
									<input id="txt_name" name="total" type="hidden" value="<?php echo $total; ?>"> </input>
								</div>
								<div class="cart-total-dil pt-3">
									<h4>Delivery Charges</h4>
									<span> <b>৳ </b><strong id="deliveryc"></strong> </span>
								</div>
							</div>
							
							<div class="main-total-cart">
								<h2>Total</h2>
								<span> <strong>৳ <span id="total"></span></strong></span>
							</div>
							
									<div class="col-lg-12">
                                        <div class="country-select">
										<label class="dlbcr">Delivery Charge</label>
                                            <select class="dlvry" name="shipping" required>
											<?php 
												global $mysqli;
												$stmt_payment = $mysqli->prepare("SELECT id, name, value FROM sd_payments  
													ORDER BY id DESC");
												$stmt_payment->execute();
												$stmt_payment->bind_result($id, $name, $value);
												while ($stmt_payment->fetch()) {
												echo '
													<option data-value="'.$value.'" value="'.$value.'">'.$name.' - '.$value.'</option>';
															}
												$stmt_payment->close();
											?>
											
                                            </select> 
                                        </div>
                                    </div>
							
									<div class="col-lg-12">
                                        <div class="country-select">
                                            <select class="dlvry" name="mathod" id="drop1">
												<option>Payment Method</option>
												<option value="9">bKash</option>
												<option value="10">Nogod</option>
												<option value="8">Rocket</option>
												<option selected value="12">Cash on Delivery</option>
                                            </select> 
                                        </div>
                                    </div>
									
									<div id="person"></div>
												
						
						<div id="checkout_wizard" class="checkout accordion left-chck145">
							<div class="checkout-step">
								<div class="checkout-card" id="headingTwo">
									<span class="checkout-step-number"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
									<h4 class="checkout-step-title">
										<button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Delivery Address</button>
									</h4>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#checkout_wizard">
									<div class="checkout-step-body">
										<div class="checout-address-step">
											<div class="row">
												<div class="col-lg-12">												
													<input type="hidden" name="customerID" value="<?php echo $getID ?>"> </input>
														<div class="address-fieldset">
															<div class="row">
																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<input name="name"  value="<?php echo $custmr_name; ?>" type="text" placeholder="Full Name" class="form-control input-md" required="">
																	</div>
																</div>
																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<input name="mobile" type="text" value="<?php echo $custmr_mobile; ?>" placeholder="Mobile Number" class="form-control input-md" required="">
																	</div>
																</div>
																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<input name="email" type="email" value="<?php echo $custmr_email; ?>" placeholder="Email Address" class="form-control input-md" required="">
																	</div>
																</div>
																<div class="col-lg-12 col-md-12">
																	<div class="form-group">
																		<input name="address" type="text" value="<?php echo $custmr_address; ?>"  placeholder="Address" class="form-control input-md">
																	</div>
																</div>
																
															</div>
														</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
							
							<div class="payment-secure">
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"> Coupon Apply</button>
								<input type="hidden" name="destroy" value="1"> </input>
								<button type="submit" class="collapsed ml-auto next-btn16 hover-btn ckfn"> Order Submit </button>
							</div>
						</div>
					<?php } ?>
					
				</div>
					
				</div>
			</form>	
		<?php } ?>
				
			</div>
		</div>	
	</div>
	
	
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<form action="include/apply_coupon.php" method="POST">
			<input type="hidden" name="cart" value="<?php echo date("ymdhis") ?>" > 
			
				<div class="modal-dialog">
				  <!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<input name="code" type="text"  placeholder="Enter Coupon Code" class="form-control input-md">
								</div>
							</div>
						</div>
						<div class="modal-footer">
						  <button type="submit" class="collapsed ml-auto next-btn16 hover-btn ckfn"> Apply </button>
						</div>
					</div>
				  
				</div>
			</form>
		</div>

	<script>
		$(document).ready(function(){
		$("select#drop1").change(function(){

			var country_id =  $("select#drop1 option:selected").attr('value'); 
		// alert(country_id);	
			$("#person").html( "" );
			if (country_id.length > 0 ) { 
				
			 $.ajax({
					type: "POST",
					url: "include/payment.php",
					data: "country_id="+country_id,
					cache: false,
					beforeSend: function () { 
						$('#person').html('<img src="assets/img/ajx_loader.gif" alt="" width="" height="100">');
					},
					success: function(html) {    
						$("#person").html( html );
					}
				});
			} 
		});
		});
	</script>
	
	
 
<script>
$(function() {
    $("select[name='shipping']").change(function() { updateTotal(); });
    updateTotal();
});

function updateTotal() {
    var newTotal = 0;
	var getValue = $('#txt_name').val();
    $("select[name='shipping'] option:selected").each(function() {
        newTotal += parseFloat($(this).data('value'));
    });
    $("#total").text(+newTotal + +getValue);
	$("#deliveryc").text(+newTotal);
}

</script>
 




