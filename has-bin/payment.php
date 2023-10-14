 <?php 	
 $invoiceID = filter_input(INPUT_GET, 'invoiceID', FILTER_SANITIZE_STRING);
	
$search =  $_GET['search'];
	
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
        $stmt->bind_result($user_id, $name, $mobile, $email, $address, $img1, $img2, $date);
        $stmt->fetch();
		}
			

										  
?>
<title>Your Invoice</title>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content-area">
					<div class="row">
						<div class="wrap-breadcrumb">
							<ul>
								<li class="item-link"><a href="index.php" class="link">home</a></li>
								<li class="item-link"><span>Your Invoice <?php echo $invoiceID; ?> </span></li>
							</ul>
						</div>
						<div class=" main-content-area">
							<div class="wrap-login-item">
							
							<form action="final_step" method="post">
								<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 ckout">
									<div class="register-form form-item ckbg">
										
										
											<fieldset class="wrap-title">
												<h3 class="form-title talc">Your Invoice</h3>
											</fieldset>
											
											
											<fieldset class="wrap-input">
												<label for="frm-reg-email">Your Email </label>
												<input type="text"  name="email" value="<?php echo $email; ?>" placeholder="Your Email">
											</fieldset>
											
											<fieldset class="wrap-input">
												<label for="frm-reg-email">Mobile Number *</label>
												<input type="text"  name="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile Number">
											</fieldset>
											
											<fieldset class="wrap-input">
												<label for="frm-reg-email">Extra Number</label>
												<input type="text"  name="extra_number" value="" placeholder="Extra Number">
											</fieldset>
											
											
											<fieldset class="wrap-input">
												<label for="frm-reg-email">Address</label>
												<input type="text"  name="address" value="<?php echo $address; ?>" placeholder="Your Address">
											</fieldset>
											
											<fieldset class="wrap-input">
												<label for="frm-reg-email">Billing Address</label>
												<input type="text"  name="billing_address" value="<?php if($address == ''){echo 'Same As Address';}else{echo $address;} ?>" placeholder="Billing Address">
											</fieldset>
											
											
											
											
											
										
									</div>
								</div>
								
									<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 ckout">
										<div class="register-form form-item ckbg">
											
											<fieldset class="wrap-title">
												<h3 class="form-title talc">PAYMENT METHOD</h3>
											</fieldset>
											
											
											
											<div class="summary summary-checkout">
												<div class="summary-item payment-method">
													<h4 class="title-box">Payment Method</h4>
													<p class="summary-info"><span class="title">Check / Money order</span></p>
													<p class="summary-info"><span class="title">Credit Cart (saved) </span></p>
													<p class="summary-info"><span class="title">Paypal </span></p>
													<div class="choose-payment-methods">
														<?php 
														global $mysqli;
														$stmt = $mysqli->prepare("SELECT id, name, value FROM sd_payments  
															  ORDER BY name ASC");
														$stmt->execute();
														$stmt->bind_result($id, $name, $value);
														while ($stmt->fetch()) {
															echo '
															<label class="payment-method">
																<input name="payment_mathod" id="payment-method-paypal" value="'.$id.'" type="radio">
																<span>'.$name.'</span>
																<span class="payment-desc">
																	Payment Method : '.$name.' </br>
																	 Charge : '.$value.'
																</span>
															</label>';
															}
														$stmt->close();
														?>
														
													</div>
													<h4 class="title-box" style="border: none;"> <i class="fa fa-truck" aria-hidden="true"></i> Free Shipping</h4>
													
													<input class="btn btn-medium" type="submit" value="Create Your Invoice" style="background: #0f6cb2;color: #fff;">
												</div>
													
											</div>
												
												
											
											
										</div>
									
									</div>
								</form>
							
							
							</div>
						</div>

					

					</div>
				</div>
				
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>