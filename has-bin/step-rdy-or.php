<?php 
$sanitize = true;
$ssID =  frst_session_start();
session_start(); 
$getID = $_SESSION['user_id'];
$p_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$p_mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
$extra_number = filter_input(INPUT_POST, 'extra_number', FILTER_SANITIZE_STRING);
$p_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$p_address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$billing_address = filter_input(INPUT_POST, 'billing_address', FILTER_SANITIZE_STRING);
$p_area = filter_input(INPUT_POST, 'area', FILTER_SANITIZE_STRING);
$p_payment_mathod = filter_input(INPUT_POST, 'payment_mathod', FILTER_SANITIZE_STRING);


global $mysqli;
$stmt_ttl = $mysqli->prepare("SELECT SUM(t_price) FROM sd_cart
			  WHERE session_d = ? ");
$stmt_ttl->bind_param('s', $ssID);  // Bind "$email" to parameter.
$stmt_ttl->execute();    // Execute the prepared query.
			// get variables from result.
$stmt_ttl->store_result();
$stmt_ttl->bind_result($sum_ttl);
$stmt_ttl->fetch();
$stmt_ttl->close();
	
global $mysqli;
$stmt_ttl = $mysqli->prepare("SELECT name, value, type FROM sd_payments
			  WHERE id = ? ");
$stmt_ttl->bind_param('s', $p_payment_mathod);  // Bind "$email" to parameter.
$stmt_ttl->execute();    // Execute the prepared query.
			// get variables from result.
$stmt_ttl->store_result();
$stmt_ttl->bind_result($mathod_name, $mathod_value, $method_type);
$stmt_ttl->fetch();
$stmt_ttl->close();

	
global $mysqli;
$stmt = $mysqli->prepare("SELECT id, session_d, pro_id, qty, price, t_price FROM sd_cart
			  WHERE session_d = ? ");
$stmt->bind_param('s', $ssID);  // Bind "$email" to parameter.
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($cart_id, $session_d, $pro_id, $qty, $price, $ttl_price);

function generateRandomString($length = 8) {
    $characters = '01234BCDESTUVWKLMNO56789APQRFGHIJXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$orderID =  generateRandomString();

date_default_timezone_set('Asia/Dhaka');
$time = time();  


?>
 <title>Order Summary</title>


	<div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.php">Home </a></li>
                    <li class="active"><a href="#">Order Summary</a></li>
                </ol>
            </div>
			
								
			
		<div class="container">
			<form action="place_order" method="post" enctype="application/x-www-form-urlencoded">
                <div class="row">
				
								<?php 
									echo '
									<input name="sessionID" value="'.$ssID .'" type="hidden" />
									<input name="memberID" value="'.$getID.'" type="hidden" />
									<input name="name" value="'.$p_name.'" type="hidden" />
									
									<input name="mobile" value="'.$p_mobile.'" type="hidden" />
									<input name="extra_number" value="'.$extra_number.'" type="hidden" />
									<input name="email" value="'.$p_email.'" type="hidden" />
									<input name="address" type="hidden" value="'.$p_address.'" />
									<input name="billing_address" type="hidden" value="'.$billing_address.'" />
									<input name="area" type="hidden" value="'.$p_area.'" />

									<input name="sub_ttl" type="hidden" value="'.$sum_ttl.'" />
									
									<input name="payment_m" type="hidden" value="'.$mathod_name.'" />
									<input name="shipping_cost" type="hidden" value="'.$mathod_value.'" />
									<input name="method_type" type="hidden" value="'.$method_type.'" />
									<input name="orderID" type="hidden" value="'.$orderID.'" />

									<input type="hidden" name="l_time" class="form-control" placeholder="Time" value="'.date("H:i:s", $time).'">
									<input type="hidden" name="date" id="alternate"  class="form-control" placeholder="Date" value="'.date("Y-m-d").'">
								';?>
				
				<div class="col-md-2"> </div>
				
                    <div class="col-md-9">
					
					
				
					<div class="col-md-12 ivnh">
						<div class="col-md-12">
							<h2 class="invt"><i class="fa fa-files-o" aria-hidden="true"></i>  Your Invoice <i class="fa fa-files-o" aria-hidden="true"></i></h2>
						</div>
					
						<div class="col-md-6">
							<div class="ortb">  Name :  <?php echo $p_name; ?></div>
							<div class="ortb">  Email :  <?php echo $p_email; ?></div>
							<div class="ortb">  Mobile :  <?php echo $p_mobile; ?></div>
							<?php 
							if ($extra_number > 0){?>
								<div class="ortb"> Extra Number :  <?php echo $extra_number; ?></div>
							<?php } ?>
						</div>
						
						<div class="col-md-6">
							<div class="dtlsd"> Your Address :  <?php echo $p_address; ?></div>
						
							<div class="dtlsd"> Billing Address :<?php echo $billing_address; ?></div>
							
						</div>
						
					</div>	
					
					
                        <div class="form-cart">
                            <div class="table-cart">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="tb-image"></th>
                                            <th class="tb-product">Product Name</th>
                                            <th class="tb-price">Unit Price</th>
                                            <th class="tb-qty">Qty</th>
                                            <th class="tb-total">SubTotal</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
										$i = 0; 
										while ($stmt->fetch()) {	
										global $mysqli;
										if ($stmt_pro = $mysqli->prepare("SELECT id, item_name, unit, img1 from sd_item_l
										  WHERE activity = 1 AND id = ? ")){
										$stmt_pro->bind_param('i', $pro_id);  // Bind "$email" to parameter.
										$stmt_pro->execute();    // Execute the prepared query.
													// get variables from result.
										$stmt_pro->bind_result($item_id, $item_name, $unit, $img1);
										$stmt_pro->store_result();
										$stmt_pro->fetch();
										$stmt_pro->close();
												}
										
										echo'
										
										<input name="item_id[]" value="'.$item_id.'" type="hidden" />
										<input name="item_name[]" value="'.$item_name.'" type="hidden" />
										<input name="item_code[]" value="'.$item_code.'" type="hidden"" />
										<input name="img[]" value="'.$img1.'" type="hidden"" />
										<input name="price[]" type="hidden"" value="'.$price.'" />
										<input name="qty[]" type="hidden"" value="'.$qty.'" />
										<input name="total_price[]" type="hidden"" value="'.$price * $qty.'" />
										<input name="unit[]" type="hidden"" value="'.$unit.'" />
										
										<tr>
                                            <td class="tb-image"><a href="product/'.$item_id.'/'.urlencode($item_name).'" class="item-photo"><img src="images/products/'.$img1.'" alt="cart"></a></td>
                                            <td class="tb-product">
                                                <div class="product-name"><a href="product/'.$item_id.'/'.urlencode($item_name).'">'.$item_name.'</a></div>
                                            </td>
                                            <td class="tb-price">
                                                <span class="price">৳ '.$price.'.00</span>
                                            </td>
											
											<td class="tb-price">
                                                <span class="price">'.$qty.'</span>
                                            </td>
                                            
                                            <td class="tb-total">
                                                <span class="price">৳ '.$ttl_price.'.00</span>
                                            </td>
                                            
                                        </tr>';
											  }
											$stmt->close();
										?>
										
										
                                       
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-actions">
                                <div class="row">
                                        <div class="col-md-6">
                                          
                                        </div><!-- End .col-md-8 -->
                                        <div class="col-md-6 ittl">
                                            <table class="table">
                                                
                                                <tfoot>
                                                    <tr>
                                                        <td class="tta">Subtotal:</td>
                                                        <td style="text-align: right;" class="tta">৳ <?php echo $sum_ttl; ?>.00</td>
                                                    </tr>
													
													 <tr>
                                                        <td class="tta">Payment Mathod:</td>
                                                        <td style="text-align: right;" class="tta"><?php echo $mathod_name; ?></td>
                                                    </tr>
													
													 <tr>
                                                        <td class="tta">Shipping Cost:</td>
                                                        <td class="tta" style="text-align: right;">৳ <?php echo $mathod_value; ?>.00</td>
                                                    </tr>
													 <tr>
                                                        <td class="tta">Grand Total:</td>
                                                        <td class="tta" style="text-align: right;">৳ <?php echo $sum_ttl + $mathod_value; ?>.00</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="md-margin"></div><!-- space -->
                                            <div class="text-right">
                                               
										
											<button name="place_o" class="button_blue middle_btn" data-color="green" data-size="l" data-style="expand-right" style="
											padding: 10px 5px;
											font-size: 16px;
											float: right;
											color: #fff;
											background: #044063;
											width:100%;
											margin-top:10px;
											    border: #044063
											">
											<i class="fa fa-shopping-cart"></i> Place Order</button>	
										
											
                                            </div>
                                        </div><!-- End .col-md-4 -->
                                    </div>
                            </div>
                        </div>
                    </div>
					
                   
					
                </div>
			</form>
            </div>
