<?php 	
require_once("include/functions_lgn.php"); 
require_once("include/functions.php");
sec_session_start(); 
$invoiceID = $_GET['order_id'];
$getID = $_SESSION['user_id'];
if($getID == NULL) {
    header("Location: https://bazaarsodai.com/");
}


if ($stmt = $mysqli->prepare("SELECT id, username, name, email, mobile, address
FROM sd_client
WHERE id = ?
LIMIT 1")) {
$stmt->bind_param('s', $getID);  
$stmt->execute();    
$stmt->store_result();
$stmt->bind_result($user_id, $username1, $e_name, $e_email, $e_mobile, $e_address);
$stmt->fetch();
}

global $mysqli;
$stmt_ordr = $mysqli->prepare("SELECT id, order_id, customer_name, email, mobile, address, total, shipping, mathod, g_total, time FROM sd_order_more
WHERE order_id = ? LIMIT 1");
$stmt_ordr->bind_param('s', $invoiceID);  
$stmt_ordr->execute();  
$stmt_ordr->store_result();
$stmt_ordr->bind_result($sl_id, $order_id, $cName, $order_email, $mobile, $address, $total, $shipping, $method, $g_total, $date);
$stmt_ordr->fetch();
$stmt_ordr->close();

global $mysqli;
$stmt = $mysqli->prepare("SELECT title, hotline1, top_no, email FROM sd_page_setup ");
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($Rtitle, $hotline1, $Rtop_no, $Remail);
$stmt->fetch();
$stmt->close();

?>


<!DOCTYPE html>
<html class="no-js" lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#007bff">
    <title>Bazaarsodai - Welcome to Bazaarsodai Online Shop</title>
    <meta name="keywords" content="bazaarsodai" />
    <meta name="description" content="Most popular and reliable online shop in Dhaka. Buy grocery and other items from your home with a mouse click and get home delivery.">
    <!-- Open Graph Meta-->
    <link rel="icon" href="images/logo/fevicon.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min0eb3.css?v2.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min0eb3.css?v2.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.min0eb3.css?v2.0">
    <!-- Icon font CSS -->
    <link rel="stylesheet" href="css/line-awesome.min0eb3.css?v2.0">
    <link rel="stylesheet" href="css/font-awesome.min0eb3.css?v2.0">
    <!-- sidemenu CSS -->
    <link href="assets/css/lib/themify-icons0eb3.css?v2.0" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar0eb3.css?v2.0" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="assets/owl.carousel.min0eb3.css?v2.0" rel="stylesheet">
    <link href="assets/owl.theme.default.min0eb3.css?v2.0" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="styles9c82.css?v8.4.3" rel="stylesheet">
    <!--<link href="style-odo.css?v4.4.1" rel="stylesheet">-->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Questrial|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="css/myaccount_style.css" rel="stylesheet">
    <link href="css/myaccount_invoice_style.css" rel="stylesheet">
 </head>

  <body>
		
        <!-- /# Header -->
			<?php include ("include/header.php"); ?>
        <!-- /# Header -->

        <!-- /# sidebar -->
			<?php include ("include/left_side.php"); ?>
        <!-- /# sidebar -->


        <!-- /# Main Body -->
        <div class="content-wrap">
			
            <div class="main" id="get_product">
                
			<div class="container rounded mt-5 mb-5">
                                                                    
                <div class="row">
                    <?php include('myaccount_left_menu.php')?>
                <div class="aiz-user-panel">
                    <!--<div class="row gutters-10">-->
                        <div class="myaccount-content">
                           <div style="margin-bottom: 10px;">
                               
                                <div class="logo">
                                    <a href="https://bazaarsodai.com/">
                                        <img src="images/logo/logo.png" alt="" style="mb-5">
                                    </a>
                                </div>
                                <div class="col-lg-4" style="float:right;">
    								<h4 class="billin" > BILL/INVOICE </h4>
    								<table>
        								  <tbody>
        								      <td>Bill Number : Rev/Online/<?php echo $order_id; ?>-<?php echo date('Y'); ?> </td>
        								      <tr>
            									<td>Order : <?php echo $order_id; ?></td>
        								    </tr>
        								  <tr>
        									<td>Date : <?php echo $newDate; ?></td>
        								  </tr>
        								 
        								</tbody>
    								</table>
							</div>
							</div>
                                <div>
                                    <table>
    								  <tbody>
    								    <tr>
    									    <td>Hotline : <?php echo $hotline1; ?></td>
    								    </tr>
    								  <tr>
    									<td>Mobile : <a href="tel:<?php echo $Rtop_no; ?>"><?php echo $Rtop_no; ?></a></td>
    								  </tr>
    								  <tr>
    									<td>Email : <a href="#"><?php echo $Remail; ?></a></td>
    								  </tr>
								    </tbody>
								</table>
                                </div>
                                <div class="billto"><b>Bill To</b></div>
                                <div style="float:right">
            								<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js" integrity="sha512-NFUcDlm4V+a2sjPX7gREIXgCSFja9cHtKPOL1zj6QhnE0vcY695MODehqkaGYTLyL2wxe/wtr4Z49SvqXq12UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            								<div id="output"><canvas width="80" height="80"></canvas></div>
            								<script>
            									jQuery('#output').qrcode({
            										type: 'url', 
            										text	: "Name: akhi, Mobile: <?php echo $mobile; ?>, Order: <?php echo $order_id; ?>,
            										'width' : 80,
            										'height' : 80
            									});
            								</script>
            							</div>
                                <div>
    								<table>
        								  <tbody>
        								     <tr>
        									    <td>Name : <?php echo $cName; ?></td>
        								    </tr>
        								  <tr>
        									<td>Mobile : <a href="tel:<?php echo $mobile; ?>"><?php echo $mobile; ?></a></td>
        								  </tr>
        								  <tr>
        									<td>Email : <a href="#"><?php echo $order_email; ?></a></td>
        								  </tr>
        								  <tr>
        									<td>Address : <?php echo $address; ?></td>
        								  </tr>
        								</tbody>
        								
    								</table>
							</div>
							<div class="cart-area" style="margin-top: 30px;">
            					<div class="cart-controller mb-0">
            						<div class="table-responsive">
            							<table class="table table-bordered mb0">
            								<thead>
            									<tr>
                									<th scope="col">Product</th>
                									<th scope="col">Description</th>
                									<th scope="col">Quantity</th>
                									<th scope="col">Price</th>
                									<th scope="col">Total</th>
            									</tr>
            								</thead>
            								
            								<tbody>
            								   <?php 
                								$i = 0;
                								global $mysqli;
                								if ($stmt = $mysqli->prepare("SELECT pro_id, title, img, price, qty, line_total from sd_order_list
                								WHERE orderID = ? ")){
                								$stmt->bind_param('s', $invoiceID); 
                								$stmt->execute();  
                								$stmt->store_result();
                								$stmt->bind_result($pro_id, $title, $img, $price, $qty, $line_total);
                								}
                							  while ($stmt->fetch()) { 
                
                							 if ($stmt_m = $mysqli->prepare("SELECT  id, item_name, item_code, item_sl from sd_item_l WHERE id = ? ")){
                									$stmt_m->bind_param('s', $pro_id); 
                									$stmt_m->execute();    
                									$stmt_m->bind_result($pro_id, $item_name, $item_code, $item_sl);
                									$stmt_m->store_result();
                									$stmt_m->fetch();
                									$stmt_m->close();
                									  }	
                								 ?> 
            								    
            									<tr>
                									<td class="product-thumbnail"><a href="#"><img src="images/products/<?php echo $img; ?>" width="100" alt="Image"></a></td>
                									<td class="product-name"><?php echo $title; ?></td>
                									<td class="product-price"><span class="unit-amount"><?php echo $qty; ?></span></td>
                									<td class="product-subtotal"><span class="subtotal-amount">৳<?php echo $price; ?></span></td>
                									<td class="product-subtotal"><span class="subtotal-amount">৳<?php echo $line_total; ?></span></td>
            									</tr>
            								
            					    		<?php }
							 	    	$stmt->close();
									?> 
									
            								</tbody>
            							</table>
            						</div>
            					</div>
            				</div>
							<div style="float:right;">
								<table class="table table-bordered mt15">
								  <tbody><tr>
									<td>Subtotal : </td>
									<td>৳<?php echo $total; ?></td>
								  </tr>
								  <tr>
									<td>Delivery Cost : </td>
									<td>৳<?php echo $shipping; ?></td>
								  </tr>
									  <tr>
										<td>Total : </td>
										<td>৳<?php echo $g_total; ?></td>
									  </tr>
								  </tbody>
								</table>
							</div>
                         
        				</div>	
                    </div>
    	
        </div>
    </div>
                                                                        
                                                                  
                                                                   
                                                                
				
				
                </div>
                </div>

                <!-- /# Footer -->
                <?php include ("include/footer.php"); ?>
                <!-- /# Footer -->

                

            </div>			
				
				
        </div>
        <!-- /# Main Body -->
				<!-- /# Mini Cart -->
					<?php include ("include/cart.php"); ?>
                <!-- /# Mini Cart -->


	<?php include ("category.php"); ?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->
	
    <script>window.jQuery || document.write('<script src="js/jquery.min0eb3.js?v2.0"><\/script>')</script>
	
    <!-- Bootstrap JS -->
    <script src="https://unpkg.com/popper.js@1.16.1"></script>
    <script src="js/bootstrap.min0eb3.js?v2.0"></script>
    <!-- Side menu JS -->
    <script src="assets/js/lib/jquery.nanoscroller.min0eb3.js?v2.0"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar0eb3.js?v2.0"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl.carousel.min0eb3.js?v2.0"></script>
    <!-- Classie JS -->
    <script src="js/classie0eb3.js?v2.0"></script>
    <!-- Custom JS -->
    <script src="js/custom0eb3.js?v2.0"></script>
	<!--controller js -->
	<script type="text/javascript" src="mainnew189ad2.js?v=9.20.70"></script>
	<script type="text/javascript" src="script-odoa6fa.html?v=8.6.9"></script>
		
</body>
</html>