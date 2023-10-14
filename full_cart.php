<?php 
include_once 'include/msp_lp.php';
include_once 'include/functions.php'; 

frst_session_start();
// echo "<pre>";
//  print_r($_SESSION["shopping_cart"]);
//  exit;
$gId = $_GET['id'];
$coupon_code = $_POST['coupon'];


$query ="SELECT * FROM coupon WHERE coupon_code = '$coupon_code'";
$results = $mysqli->query($query);
$couponID = $results->fetch_assoc();

?>
<!DOCTYPE html>
<html class="no-js" lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#007bff">
<title>Welcome to Bazaarsodai Online Shop</title>
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


<!-- Custom styles for this template -->
<link href="styles9c82.css?v8.4.3" rel="stylesheet">
<!--<link href="style-odo.css?v4.4.1" rel="stylesheet">-->
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Questrial|Quicksand:300,400,500,700" rel="stylesheet">

</head>
<body>
		
		<?php include ("include/header.php"); ?>

		<?php include ("include/left_side.php"); ?>
       
        <!-- /# Main Body -->
        <div class="content-wrap">
            <div class="main" id="get_product">
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://bazaarsodai.com/">Home</a></li>
                                <li>MY CART LIST</li>
                            </ul>
                        </div>
                    </div>
                </section>
		<div class="main pdtp30" id="get_product">
            <div class="content-wrap">
                <!-- /# My Shopping Cart panel-->
                <section class="all-category-panel mrt0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="section-title showOnPhone" style="background:#FF1493; padding:8px; color:white;">MY CART LIST</h1>
                                <h1 class="mrb10 section-title hideOnPhone">MY CART LIST</h1>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="col-12 p-0">
                                <div class="fullCart-body bg- #ebedef">
                                    <ul>
                                        <li>
                                            <div class="cart-table-head center">
                                                <div class="miniCart-item-row bg-orange">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <p>Item</p>
                                                        </div>
                                                        <div class="miniCart-item-details">
                                                            <div class="w-100">
                                                                <div class="miniCart-item-name">
                                                                    <p>Item Name</p>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-5">
                                                            <div class="w-100">
                                                                <p>Quantity</p>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-2 miniCart-item-price">
                                                            <div class="">
                                                                <p>Total</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-2 miniCart-item-remove">
                                                            <p>Drop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>	
										<div class="peekout_cart_item_load">
											<!--<span id="load_full_cart"></span>-->
    											<?php 
    											$total_price = 0;
                                                $total_item = 0;
                                                ?>
                                                <div class="miniCart-body">
                                                	<table class="table">
                                                	
                                                		
                                                <?php
                                                    if(!empty($_SESSION["shopping_cart"])){
                                                    	foreach($_SESSION["shopping_cart"] as $keys => $values){
                                                ?>
                                                    		
                                        			<input type="hidden" name="item_id[]" value="<?php echo $values["product_id"];?>"> </input>
                                        			<input type="hidden" name="product_name[]" value="<?php echo $values["product_name"];?>"> </input>
                                        			<input type="hidden" name="product_price[]" value="<?php echo $values["product_price"];?>"> </input>
                                        			<input type="hidden" name="product_quantity[]" value="<?php echo $values["product_quantity"];?>"> </input>
                                        			<input type="hidden"   name="quantity[]"  value="<?php echo $values["quantity"];?>" />
                                        			<input type="hidden" name="subttl[]" value="<?php echo $values["product_quantity"] * $values["product_price"];?>"> </input>
                                        			<input type="hidden" name="product_img[]" value="<?php echo $values["product_img"];?>"> </input>
                                        			<input type="hidden" name="shop_id[]" value="<?php echo $values["shop_id"];?>"> </input>
                                        			
                    								<li class="">
                                                        <div class="">
                                                            <div class="miniCart-item-row">
                                                                <div class="row">
                                                                    
                                                                    <div class="col-2">
                                                                        <img src="images/products/<?php echo$values["product_img"];?>" alt="" class="miniCart-item-image" >
                                                                    </div>
                                                                    <div class="col-3 miniCart-item-details">
                                                                        <div class="w-100">
                                                                            <div class="miniCart-item-name">
                                                                               <?php echo $values["product_name"];?>
                                                                            </div>
                                                                            <div class="miniCart-item-briefs">
                                                                               ৳<?php echo number_format($values["product_price"]);?>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-1 miniCart-item-quantity center align-items-center align-content-center">
                                                                        
                                                                        <div class="w-100">
                                                                            <div class="quantity" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0">
                                                                            <div class="caret caret-up" title="Add one more to bag" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.0">
                                                                                <svg class="pPlus cursor" id="<?php echo $values["product_id"];?>" data-qty="<?php echo $values["product_quantity"];?>" style="width:20px; height:20px;" version="1.1" x="0px" y="0px" viewBox="0 20 100 100" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.0.0"><polygon points="46.34,39.003 46.34,39.003 24.846,60.499 29.007,64.657 50.502,43.163 71.015,63.677 75.175,59.519 50.502,34.844   " data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.0.0.0"></polygon></svg>
                                                                                <span class="miniCart-item-quantity-number"><?php echo $values["product_quantity"];?></span>
                                                                            
                                                                            </div>
                                                                            <span class="onHoverCursor" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.1"><span data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.1.0"> </span><span data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.1.1"></span><span data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.1.2"> </span></span><div class="caret caret-down" title="Remove one from bag" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.2">
                                                                            <svg class="pMinus cursor"  id="<?php echo $values["product_id"];?>" data-qty="<?php echo $values["product_quantity"];?>" style="width:20px; height:20px;" version="1.1" x="0px" y="0px" viewBox="0 -20 100 100" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.2.0"><polygon points="53.681,60.497 53.681,60.497 75.175,39.001 71.014,34.843 49.519,56.337 29.006,35.823 24.846,39.982   49.519,64.656 " data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.2.0.0"></polygon></svg></div></div>
                                                                            
                                                                        </div>
                                                                        
                                                                    </div>
                    												
                                                                    <div class="col-4 miniCart-item-price">
                                                                        <div class="w-100">
                                                                            <p>৳<?php echo number_format($values["product_quantity"] * $values["product_price"]);?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="miniCart-item-remove">
                    													<a name="delete" class="rmvc delete" id="<?php echo $values["product_id"];?>"><i class="la la-trash red-c"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    		
                                                    		<?php
                                                    		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
                                                    		$total_item = $total_item + 1;
                                                    	}
                                                    	
                                                    }
                                                ?>
										</div>	
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-orange fullCart-body m-t-24">
                            <div class="fullcart-total-price-panel">
                                <div class="table-responsive">
                                    <table class="table table-borderless" style="width:50%; float:right;">
                                        <?php 
                                        
                                        if($total_price > 400){
                                            $shipping_cost = 30;
                                            $coupon_discount = $total_price - $total_price * $couponID['discount'] / 100 + $shipping_cost;
                                            $discount_amount = $total_price * $couponID['discount'] / 100;
                                    	    
                                    	   
                                    	}else{
                                    	    
                                    	    $shipping_cost = 50;
                                    	    $coupon_discount = $total_price - $total_price * $couponID['discount'] / 100 + $shipping_cost;
                                            $discount_amount = $total_price * $couponID['discount'] / 100;
                                    	    
                                    	}
                                        ?>
                                        
                                        <tbody>
                                            <tr>
                                                <th>Sub Total :</th>
                                                <td class="total_price">৳0</td>
												<input id="subtotal" name="total" type="hidden" value="<?php echo $total; ?>"> </input>
                                            </tr>
                                            <tr>
                                                <th>Discount :</th>
                                                <td>৳ <?php echo $discount_amount; ?></td>
												<input id="discount" name="discount" type="hidden" value="<?php echo $discount_amount; ?>"> </input>
                                            </tr>
                                            <tr>
                                                <th>Delivery Charge  :</th>
                                                <td>৳ <?php echo $shipping_cost; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Grand Total :</th>
                                                <td class="">
                                                    ৳<?php echo $coupon_discount;?>
                                                    <input id="gtotal" name="gtotal" type="hidden" value="<?php echo $coupon_discount;?>"> </input>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                       
                        <div class="col-md-12">
                            <div class="fullCart-body m-t-24">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="center m-t-24">
                                 
											<div class="m-b-10 center">
												<a id="cash_on_delivery" href="#" class="btn btn-round gb-gradient mx-4">PROCEED TO ORDER</a>
											</div>
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>		
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
<script src="assets/addtoCart/js/jquery.min.js"></script>
<?php include ("category.php"); ?>
<?php include ("assets/addtoCart/cartscript.php") ?>
<script>window.jQuery || document.write('<script src="js/jquery.min0eb3.js?v2.0"><\/script>')</script>
<!-- Bootstrap JS -->
<script src="https://unpkg.com/popper.js@1.16.1"></script>
<script src="js/bootstrap.min0eb3.js?v2.0"></script>
<!-- Side menu JS -->
<script src="assets/js/lib/jquery.nanoscroller.min0eb3.js?v2.0"></script>
<!-- nano scroller -->
<script src="assets/js/lib/menubar/sidebar0eb3.js?v2.0"></script>

<!-- Classie JS -->
<script src="js/classie0eb3.js?v2.0"></script>
<!-- Custom JS -->
<script src="js/custom0eb3.js?v2.0"></script>
<!--controller js -->
<script type="text/javascript" src="mainnew189ad2.js?v=9.20.70"></script>
<script type="text/javascript" src="script-odoa6fa.html?v=8.6.9"></script>

<script>
    $(document).on('click', '.cursor', function(){
		location.reload();
	});
	
</script>

</body>
</html>