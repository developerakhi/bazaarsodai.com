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
        $stmt->bind_result($user_id, $name, $mobile, $email, $address, $img1, $img2, $date);
        $stmt->fetch();
		}
			

										  
?>
<title>Billing Information</title>

			<div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="#">Billing Information</a></li>
                </ol>
            </div>

			
				<div class="container">
					<div class="row">
                       <form action="final_step" method="post">
                   
						<div class="col-md-7 loginf cklg">
                            <h5 class="title-login">Billing Information</h5>
							
                                
								<p class="form-row form-row-wide">
                                    <label>Full Name:<span class="required"></span></label>
                                    <input type="text" name="name" value="<?php echo $name; ?>" required placeholder="" class="input-text">
                                </p>
								<p class="form-row form-row-wide">
                                    <label>Email :<span class="required"></span></label>
                                    <input type="email" name="email" value="<?php echo $email; ?>" placeholder="" class="input-text">
                                </p>
								
								<p class="form-row form-row-wide">
                                    <label>Mobile Number :<span class="required"></span></label>
                                    <input type="number" name="mobile" value="<?php echo $mobile; ?>" required placeholder="" class="input-text">
                                </p>
								
								<p class="form-row form-row-wide">
                                    <label>Extra Number :<span class="required"></span></label>
                                    <input type="number" name="extra_number" value="" placeholder="" class="input-text">
                                </p>
								
								<p class="form-row form-row-wide">
                                    <label>Address :<span class="required"></span></label>
                                    <input type="text" name="address" value="<?php echo $address; ?>" placeholder="" class="input-text">
                                </p>
								<p class="form-row form-row-wide">
                                    <label>Billing Address :<span class="required"></span></label>
                                    <input type="text"name="billing_address" value="<?php if($address == ''){echo 'Same As Address';}else{echo $address;} ?>" placeholder="" class="input-text">
                                </p>
							
                                
								
                           
								
								
                        </div>
					
					   <div class="col-md-1"> </div>
					   
                        <div class="col-md-4 padding-left-5">
							<div class="order-summary">
								<h4 class="title-shopping-cart">PAYMENT METHOD</h4>
								<div class="checkout-element-content">
									
									<ul><?php 
														global $mysqli;
														$stmt = $mysqli->prepare("SELECT id, name, value FROM sd_payments  
															  ORDER BY name ASC");
														$stmt->execute();
														$stmt->bind_result($id, $name, $value);
														while ($stmt->fetch()) {
															echo '
															
															<li><label class="inline"><input name="payment_mathod" value="'.$id.'" required  type="radio">
															<span class="input"></span>'.$name.' - '.$value.'</label></li>';
															}
														$stmt->close();
														?>
										
									</ul>
									
									
									
									<button type="submit" class="btn-checkout">
										<span>Create Your Invoice</span>
									</button>
								</div>
							</div>
						</div>
					</form>
                    </div>
					
				</div>
					
					
					
						
                       
                    </div>
                </form>
            </div>
				
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>