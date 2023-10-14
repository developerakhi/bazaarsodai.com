<?php 
include_once 'include/functions.php';
$order_id = $_GET['id'];
// echo $order_id;exit;
if ($stmt = $mysqli->prepare("SELECT order_id, customerID, customer_name, email, mobile, address, total, g_total, discount, mathod, trxid, acc_no, shipping, delivery_time, date FROM sd_order_more WHERE order_id = ? LIMIT 1")) {
$stmt->bind_param('s', $order_id);
$stmt->execute(); 
$stmt->store_result();
$stmt->bind_result($orderID, $customerID, $customer_name, $customer_email, $customer_mobile, $customer_addresss, $total, $g_total, $discount, $mathod, $trxid, $acc_no, $shipping, $delivery_time, $date);
$stmt->fetch();
}
global $mysqli;
$stmt = $mysqli->prepare("SELECT id, company, mobile, email, address from sd_settings ORDER BY id ASC LIMIT 1");
$stmt->execute(); 
$stmt->store_result();
$stmt->bind_result($client_id, $companyName, $admin_mobile, $admin_email, $admin_address);
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
	<title>Bazaarsodai - Welcome to Bazaarsodai Online Shop <?php echo $username; ?></title>
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
        <style>
            .btn {
                display: inline-block;
                font-weight: 400;
                color: #212529;
                text-align: center;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                background-color: transparent;
                border: 1px solid transparent;
                padding: 3px 10px;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }
            
            /* Darker background on mouse-over */
            /*.btn:hover {*/
            /*  background-color: RoyalBlue;*/
            /*}*/
        </style>
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
			
            <div class="" id="get_product">
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://bazaarsodai.com/">Home</a></li>
                                <li>  <?php echo $customer_name; ?></li>
                               
                            </ul>
                        </div>
                    </div>
                </section>
		
				<section class="all-category-panel">
                    <div class="container-fluid">
                        <div class="row">
                            
                            
                            <div class="aiz-user-panel">
                    <!--<div class="row gutters-10">-->
                                <div class="myaccount-content" id="capture">
                                        
                                    <h3 class="post-name cnst">Order Successfully Placed!</h3>
                                    <marquee class="orntc">Thank You for your order ! Your order will be sent to this address.</marquee>
                                   <div style="margin-bottom: 10px;">
                                       
                                        <div class="logo">
                                            <a href="https://bazaarsodai.com/">
                                                <img src="images/logo/logo.png" alt="" style="mb-5">
                                            </a>
                                        </div>
                                        <div class="col-lg-4" style="float:right;">
            								<h4 class="billin"> BILL/INVOICE </h4>
            								<table>
                								  <tbody>
                								      <td>Bill Number : Online/<?php echo $orderID; ?>-<?php echo date('Y'); ?> </td>
                								      <tr>
                    									<td>Order Id : <?php echo $orderID; ?></td>
                								    </tr>
                								  <tr>
                									<td>Order Date : <?php echo date('d-m-Y',strtotime($date)); ?></td>
                								  </tr>
                								  <tr>
                									<td>Payment Method :
													<?php if($mathod == 9){echo"<span>bKash</span>";}
													  if($mathod == 10){echo"<span>Nogod</span>";}
													  if($mathod == 8){echo"<span>Rocket</span>";}
													  if($mathod == 12){echo"<span>Cash on Delivery</span>";}
													?> </td>
                								  </tr>
                								  <tr>
                									<td>Order Address : <?php echo $admin_address; ?></td>
                								  </tr>
                								 
                								</tbody>
            								</table>
        							</div>
        							</div>
                                       
                                        <div class=""><b>Bill To</b></div>
                                        
                                        <div class="row">
            								<table>
                								  <tbody>
                								     <tr>
                									    <td>Name : <?php echo $customer_name; ?></td>
                								    </tr>
                								  <tr>
                									<td>Mobile : <a href="tel:<?php echo $customer_mobile; ?>"><?php echo $customer_mobile; ?></a></td>
                								  </tr>
                								  <tr>
                									<td>Email : <a href="#"><?php echo $customer_email; ?></a></td>
                								  </tr>
                								  <tr>
                									<td>Delivery Address : <?php echo $customer_addresss; ?></td>
                								  </tr>
                								</tbody>
                								
            								</table>
        							</div>
        							<div class="row">
        							    <div class="col-md-12">
        							        <script type="text/javascript" src="assets/qrcode/jquery.qrcode.min.js"></script>
            								<div id="output" style="margin-left: -5px;"><img src="assets/frame.png" width="60px" height="60px"/></div>
            								<script>
            									jQuery('#output').qrcode({
            										type: 'url', 
            										text	: "Name: akhi, Mobile: <?php echo $mobile; ?>, Order: <?php echo $order_id; ?>,
            										'width' : 80,
            										'height' : 80
            									});
            								</script>
            							</div>
        							</div>
        							<div class="cart-area" style="margin-top: 30px;">
                    					<div class="cart-controller mb-0">
                    						<div class="table-responsive">
                    							<table class="table table-bordered mb0">
                    								<thead>
                    									<tr>
                        									<th scope="col">Product</th>
                        									<th scope="col">Title</th>
                        									<th scope="col">Quantity</th>
                        									<th scope="col">Price</th>
                        									<th scope="col">Total</th>
                    									</tr>
                    								</thead>
                    								
                    								<tbody>

                        								 <?php 
                            								global $mysqli;
                            								if ($stmt = $mysqli->prepare("SELECT pro_id, title, img, price, qty, line_total from sd_order_list
                                								WHERE orderID = ? ")){
                                								$stmt->bind_param('s', $order_id);
                                								$stmt->execute();  
                                								$stmt->store_result();
                                								$stmt->bind_result($pro_id, $title, $img, $price, $qty, $line_total);
                            								}
                            								while ($stmt->fetch()) { 
                            								     
                            							?> 
                    									<tr>
                        									<td class="product-thumbnail"><a href="#"><img src="images/products/<?php echo $img; ?>" width="100" alt="Image"></a></td>
                        									<td class="product-name"><?php echo $title; ?></td>
                        									<td class="product-price"><span class="unit-amount"><?php echo $qty; ?></span></td>
                        									<td class="product-subtotal"><span class="subtotal-amount">৳<?php echo $price; ?></span></td>
                        									<td class="product-subtotal"><span class="subtotal-amount">৳<?php echo $line_total; ?></span></td>
                    									</tr>
                    								
                    					    		<?php } $stmt->close();?> 
        									
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
						<div class="row">
						    <div class="col-md-4"></div>
						    <div class="col-md-2 cnst">
    							<a class="btn btn-secondary gb-gradient" href="https://bazaarsodai.com/" style="font-size: 15px;">Continue Shopping</a>
    						</div>
    						<div class="col-md-2">
                                <button id="screenshot" class="btn btn-secondary gb-gradient"><i class="fa fa-download"></i> Download</button>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                </section>
                <!-- /# Footer -->
                <?php include ("include/footer.php"); ?>
                <!-- /# Footer -->
            </div>
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
	
	
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    function capture() {
    const captureElement = document.querySelector('#capture')
    html2canvas(captureElement)
        .then(canvas => {
            canvas.style.display = 'none'
            document.body.appendChild(canvas)
            return canvas
        })
        .then(canvas => {
            const image = canvas.toDataURL('image/png').replace('image/png', 'image/octet-stream')
            const a = document.createElement('a')
            a.setAttribute('download', '<?php echo $orderID; ?>.png')
            a.setAttribute('href', image)
            a.click()
            canvas.remove()
        })
}
const screenshot = document.querySelector('#screenshot')
screenshot.addEventListener('click', capture)
</script>
</body>
</html>