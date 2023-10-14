<?php 
include_once 'functions.php'; 
require_once("functions_lgn.php");
sec_session_start();
$subcat = urlencode($_POST["load_full_cart"]);
$sub_total = urlencode($_POST["sub_total"]);
$discount = urlencode($_POST["discount"]);
$getID = $_SESSION['user_id'];

if ($stmt = $mysqli->prepare("SELECT id, name, mobile, email, address, img1, img2, date
FROM sd_client WHERE id = ? LIMIT 1")) {
$stmt->bind_param('s', $getID); 
$stmt->execute();    
$stmt->store_result();
$stmt->bind_result($user_id, $custmr_name, $custmr_mobile, $custmr_email, $custmr_address, $custmr_img1, $custmr_img2, $custmr_date);
$stmt->fetch();
}


	
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

<style>
    .deliveryStep.activeStep {
    border-color: #c0c6c8;
}

.deliveryStep {
    border: 1px solid #c1c1c1;
    border-radius: 3px;
    margin: 10px 0;
}
.deliveryStepTitle {
    border-bottom: 1px solid #bdc3c5;
}
.deliveryStepTitle {
    display: block;
    border-bottom: 0;
}
.deliveryStepTitle {
    border-radius: 3px;
    padding: 10px 20px;
    height: 52px;
    border-bottom: 1px solid #c1c1c1;
    background: #f8f8f8;
    font-weight: 700;
}
.deliveryStepTitle {
    display: block;
}
.deliveryStepTitle {
    border-radius: 3px;
    padding: 10px 20px;
    height: 52px;
    border-bottom: 1px solid #c1c1c1;
    background: #f8f8f8;
    font-weight: 700;
}
.titleLeft {
    float: left;
}
.deliveryStepContent {
    height: 380px;
}
.deliveryComponent {
    clear: both;
    text-align: center;
}
.deliveryTimeWrapper {
    padding: 10px 20px;
    /*-webkit-border-radius: 3px;*/
    /*-moz-border-radius: 3px;*/
    /*border-radius: 3px;*/
}
.deliveryTime, .deliveryComponent div .regularSlots .deliveryTime {
    float: initial;
    width: 100%;
}
.deliveryComponent div .onlyExpressItems .deliveryTime .days.fullWidth, .deliveryComponent div .regularSlots .deliveryTime .days.fullWidth{
    left: 227px;
}
div.deliveryTime div.days {
    left: 38px;
}
div.deliveryTime div.dropdown {
    position: absolute;
    background-color: #fff;
    box-shadow: 0 0 14px -2px rgba(0,0,0,.75);
    border-radius: 2px;
    top: 95px;
    z-index: 9999;
}
div.deliveryTime div.days div.singleDay {
    float: left;
    cursor: pointer;
    width: 80px;
    height: 100%;
    padding: 7px 5px 7px 10px;
}
div.deliveryTime div.days div.singleDay p:first-child {
    color: #878787;
    font-size: 10px;
    font-weight: 700;
}
div.deliveryTime div.dropdown {
    position: absolute;
    background-color: #fff;
    box-shadow: 0 0 14px -2px rgba(0,0,0,.75);
    border-radius: 2px;
    top: 95px;
    z-index: 9999;
}
.deliveryTime {
    /*float: left;*/
    /*width: 50%;*/
    position: relative;
}
div.deliveryTime .iconAndDescription {
    width: 100%;
    margin: auto;
}
div.deliveryTime .iconAndDescription>p svg{
    vertical-align: middle;
    width: 22px;
    height: 22px;
    margin-right: 10px;
}
div.deliveryTime .iconAndDescription>p {
    margin-left: 12px;
    font-size: 14px;
    text-align: center;
    margin-top: 4px;
}
/*div.deliveryTime section.daySelect {*/
/*    width: 110px;*/
/*    margin-left: 20px;*/
/*}*/
/*div.deliveryTime section.selectOptions {*/
/*    float: left;*/
/*    border: 1px solid #ede5e6;*/
/*    border-radius: 2px;*/
/*    height: 55px;*/
/*    cursor: pointer;*/
/*    margin-top: 2px;*/
/*    z-index: 4;*/
/*    text-align: left;*/
/*    -webkit-transition: -webkit-box-shadow 300ms;*/
/*    -moz-transition: -moz-box-shadow 300ms;*/
/*    -ms-transition: box-shadow 300ms;*/
/*    -o-transition: box-shadow 300ms;*/
/*    transition: box-shadow 300ms;*/
/*}*/
/*div.deliveryTime section.timeSelect {*/
/*    margin-left: 9px;*/
/*    width: 225px;*/
/*}*/
/*div.deliveryTime section.daySelect div.firstBlock {*/
/*    width: 75px;*/
/*}*/

/*div.deliveryTime section.selectOptions div.firstBlock {*/
/*    float: left;*/
/*    background-color: #fff;*/
/*    height: 100%;*/
/*    border-radius: 3px 0 0 3px;*/
/*}*/
/*div.deliveryTime .iconAndDescription>p {*/
/*    margin-left: 12px;*/
/*    font-size: 14px;*/
/*    text-align: center;*/
/*    margin-top: 4px;*/
/*}*/

/*div.deliveryTime p {*/
/*    margin-bottom: 0;*/
/*    padding-top: 0;*/
/*}*/
/*div.deliveryTime .iconAndDescription>p svg {*/
/*    vertical-align: middle;*/
/*    width: 22px;*/
/*    height: 22px;*/
/*    margin-right: 10px;*/
/*}*/
div.deliveryTime div.dropdownContainer {
    /*width: 370px;*/
    /*margin: auto;*/
    /*display: inline-block;*/
    /*margin-right: 110px;*/
}
/*div.deliveryTime section.daySelect {*/
/*    width: 110px;*/
/*    margin-left: 20px;*/
/*}*/
/*div.deliveryTime section.daySelect div.firstBlock {*/
/*    width: 75px;*/
/*}*/
/*div.deliveryTime section.selectOptions div.firstBlock {*/
/*    float: left;*/
/*    background-color: #fff;*/
/*    height: 100%;*/
/*    border-radius: 3px 0 0 3px;*/
/*}*/
/*div.deliveryTime section.selectOptions div.firstBlock p.dayName {*/
/*    color: #878787;*/
/*    margin-top: 12px;*/
/*    line-height: 12px;*/
/*    font-size: 10px;*/
/*    font-weight: 700;*/
/*    text-transform: uppercase;*/
/*}*/

div.deliveryTime section.selectOptions div.firstBlock p {
    margin-left: 10px;
}
div.deliveryTime section.selectOptions div.firstBlock p.dateName {
    color: #3f3f3f;
    font-size: 14px;
    line-height: 18px;
}
div.deliveryTime section.daySelect div.tooltipSuggestion {
    width: 33px;
}

div.deliveryTime section.selectOptions div.tooltipSuggestion {
    height: 100%;
    float: left;
    border-radius: 0 2px 2px 0;
    background-color: #fff;
}
div.deliveryTime section.selectOptions div.tooltipSuggestion i.caret-down {
    display: block;
    margin-top: 18px;
    margin-left: 10px;
    width: 12px;
    height: 12px;
    border-bottom: 2px solid #ababab;
    border-right: 2px solid #ababab;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}
div.deliveryTime section.mobileDaySelect, div.deliveryTime section.mobileTimeSelect {
    /*margin-top: 10px;*/
    clear: none;
}

div.deliveryTime section.mobileDaySelect {
    display: none;
}
div.deliveryTime section.mobileDaySelect select, div.deliveryTime section.mobileTimeSelect select {
    /*width: 95%;*/
    /*padding: 5px;*/
    border: 1px solid #ccc;
    /*background: #f0f3f5;*/
    outline: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
div.deliveryTime section.mobileDaySelect select, div.deliveryTime section.mobileTimeSelect select:hover{
    background: #f7941d;
    color:#fff;
}

div.deliveryTime section.timeSelect div.firstBlock {
    /*width: 190px;*/
}

.dropdownContainer section {
    /*padding: 20px 0;*/
    /*margin:0 80px;*/
}
div.deliveryTime section.selectOptions.open div.tooltipSuggestion, div.deliveryTime section.selectOptions:hover div.tooltipSuggestion {
    background-color: #ff686e;
}

div.deliveryTime section.timeSelect div.tooltipSuggestion {
    /*width: 33px;*/
}
div.deliveryTime section.selectOptions div.tooltipSuggestion {
    height: 100%;
    float: left;
    border-radius: 0 2px 2px 0;
    background-color: #fff;
}
div.singleTime.selected, div.singleTime:hover {
    background-color: #ff686e;
}

div.singleTime {
    cursor: pointer;
    padding-top: 4px;
    padding-left: 15px;
    padding-bottom: 5px;
    text-align: left;
}
div.singleTime p {
    margin-top: 4px;
    color: #878787;
    font-size: 13px;
    font-weight: 700;
}
.deliveryStepTitle .titleLeft h2 {
    float: left;
    font-size: 14px;
    padding-left: 33px;
    margin-top: -23px;
    color: #4b4b4b;
}
.clearAll {
    clear: both;
}
.select-input {
    cursor: pointer;
}
option.day-op:hover {
  background-color: #ff686e;
}
.all {
    margin: 0 145px;
}
</style>
	<div class="content-wrap">
			<div class="adcontent-wrap-r showOnPhone">
                <!-- /# Search Panel for mobile -->
                <section class="is_unnecessary bg-orange hideOnPhone" style="padding: 35px 0px 0px 0px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 center">
                            <!--    <h1 class="section-title section-title m-b-48 showOnPhone">Search Your Product</h1>-->
                                <div class="input-group home-main-search-panel-form align-content-center" style="margin-top:25px;">
                                    <input id="search-m-m" type="text" class="form-control" placeholder="Search product">
                                    <span class="input-group-btn">
                                        <button id="search_btn-m-m" class="btn btn-secondary gb-gradient" type="button"><i class="la la-search"></i></button>
                                    </span>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /# Search panel for mobile-->
			</div>
			
        <div class="main pdtp30" id="get_product">
			<div class="content-wrap bg-orange">
             
				<!-- /# Breadcrumbs -->
                <section class="gb-breadcrumb sidebar-blue hideOnPhone">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <ul class="breadcrumb">
                                    <li><a href="https://bazaarsodai.com/">Home</a></li>
                                    <li>Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /# Breadcrumbs-->

                <!-- /# My Delivery Options panel-->
                <section class="delivery-options-panel">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
							    <h1 class="section-title showOnPhone" style="background:#FF1493; padding:8px; color:white;">Delivery Information</h1>
                                <h1 class="section-title hideOnPhone">Delivery Information</h1>
                            </div>
                        </div>
					<form action="has-bin/insert_order.php" method="POST">
					<input type="hidden" name="date" value="<?php echo date("Y-m-d") ?>"> </input>
					<input type="hidden" name="orderID" value="<?php echo date("ymdhis") ?>"> </input>
					<input id="sub_total" name="sub_total" type="hidden" value="<?php echo $sub_total; ?>"> </input>
					<input id="discount" name="discount" type="hidden" value="<?php echo $discount; ?>"> </input>
					<input name="customerID" type="hidden" value="<?php echo $getID; ?>"> </input>
					
					  <!--<span class="hidden" id="load_full_cart"></span>-->
					    <?php
                            if(!empty($_SESSION["shopping_cart"])){
                            	foreach($_SESSION["shopping_cart"] as $keys => $values){
                        ?>
                            		
                			<input type="hidden" name="item_id[]" value="<?php echo $values["product_id"];?>"> </input>
                			<input type="hidden" name="product_name[]" value="<?php echo $values["product_name"];?>"> </input>
                			<input type="hidden" name="product_price[]" value="<?php echo $values["product_price"];?>"> </input>
                			<input type="hidden" name="product_quantity[]" value="<?php echo $values["product_quantity"];?>"> </input>
                			<input type="hidden" name="subttl[]" value="<?php echo $values["product_quantity"] * $values["product_price"];?>"> </input>
                			<input type="hidden" name="product_img[]" value="<?php echo $values["product_img"];?>"> </input>
                			<input type="hidden" name="shop_id[]" value="<?php echo $values["shop_id"];?>"> </input>
                	    <?php 
                	                $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
                                    $total_item = $total_item + 1;
                	        
                            	}
                            }
                	    ?>
					  
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fullCart-body bg- #ebedef  m-b-24">
                                    <div class="delivery-option-form">
                                            <?php if ($getID != NULL) { ?>
                                            <div class="row">
                                                <div class="col-md-5"></div>
                                                <div class="col-md-5">
                                                    <a class="btn" data-toggle="modal" data-target="#addAddress" style="background:#214e1f; color:#fff;"><i class="fa fa-plus"></i> Add Address</a>
                                                </div>
                                                <div class="col-md-2"></div>
                                            </div>
                                            <div class="row">
                                                <?php 
                								global $mysqli;
                								$userAddress = $mysqli->prepare("SELECT id, name, mobile, email, address from user_address WHERE user_id = '".$getID."'
                							    ORDER BY id ASC");
                								$userAddress->execute();   
                								$userAddress->bind_result($aid, $aName, $aMobile, $aEmail, $aAddress);
                								$userAddress->store_result();
                									
                									while ($userAddress->fetch()) { 
                								?> 
                                                <div class="col-md-12">
                                                    <div class="check_address">
                                                        <label><input type="radio" name="address_id" required value="<?php echo $aid; ?>"></label>
                                                        <div><?php echo $aName; ?></div>
                                                        <div><?php echo $aMobile; ?></div>
                                                        <div><?php echo $aEmail; ?></div>
                                                        <div><?php echo $aAddress; ?></div>
                                                   </div>
                                                </div>
                                                <?php }$userAddress->close();?>
                                            </div>
                                            
                                            <?php } else {?>
                                            
										   <div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Customer Name</label>
                                                        <input type="text" class="form-control" value="<?php echo $custmr_name; ?>" name="name" placeholder="Full Name" required="required">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Mobile Number</label>
                                                        <input type="number" class="form-control" value="<?php echo $custmr_mobile; ?>" placeholder="Mobile Number" name="mobile" required="required" >
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Email Address</label>
                                                        <input type="email" class="form-control"  value="<?php echo $custmr_email; ?>"  name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0">Delivery Address</label>
                                                        <textarea type="text" class="form-control" name="address" value="<?php echo $custmr_address; ?>" placeholder="Your Delivery Address" required="required"></textarea>
													</div>
                                                </div>
                                            </div>
											
                                         <?php } ?>
                                   
                                    </div>
                                </div>      
                            </div>
							
							
							<div class="col-md-6">
                                <div class="fullCart-body bg- #ebedef  m-b-24">
                                    <div class="delivery-option-form">
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Payment Method</label>
														  <select class="form-control" name="mathod" id="drop1">
															<option>Payment Method</option>
															<option value="9">bKash</option>
															<option value="10">Nogod</option>
															<option value="8">Rocket</option>
															<option selected value="12">Cash on Delivery</option>
														</select> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                            <div class="deliveryStep activeStep deliverySlot">
                                                                <div class="deliveryStepTitle">
                                                                    <div class="titleLeft">
                                                                        <div class="stepIcon">
                                                                            <svg style="fill:#214354;stroke:#214354;display:inline-block;vertical-align:middle;" width="30px" height="30px" x="0px" y="0px" viewBox="0 0 100 100">
                                                                                <g transform="translate(0,-952.36218)">
                                                                                    <path d="m 50,970.36215 c -17.6731,0 -32,14.32701 -32,31.99995 0,17.673 14.3269,32.0001 32,32.0001 17.6731,0 32,-14.3271 32,-32.0001 0,-17.67294 -14.3269,-31.99995 -32,-31.99995 z m 0,10 c 1.1046,0 2,0.8954 2,2 l 0,17.99995 16,0 c 1.1046,0 2,0.8954 2,2 0,1.1046 -0.8954,2 -2,2 l -18,0 c -1.1046,0 -2,-0.8954 -2,-2 l 0,-19.99995 c 0,-1.1046 0.8954,-2 2,-2 z" stroke="none"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                        <h2>Preferred Delivery Time</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="deliveryStepContent">
                                                                    <div class="deliveryComponent isBothDropDown">
                                                                        <div>
                                                                            <div class="timings">
                                                                                <div class="onlyExpressItems">
                                                                                    <div class="deliveryTimeWrapper">
                                                                                        <div class="deliveryTime">
                                                                                            <div class="iconAndDescription">
                                                                                                <p>
                                                                                                    <svg version="1.1" x="0px" y="0px" viewBox="-9 11 100 100">
                                                                                                        <path class="st0" d="M59.4,32.6c0.2,0.2-0.2,0.3-0.2,0.3s-1.2,0.3-1.5,0.8c-0.3,0.3-0.8,1.5-0.8,1.5c0.7-0.2,1.5-0.3,2.3-0.7 c0.2,0,0.3,0.2,0.5,0.3c0.2,0-2,0.8-2.5,1.2c-0.3,0.3-2,1.7-2.5,1.7S53,37.9,53,37.9c0.2,0.3,0.3,0.7,0.7,1.2c0,0-1.2,0.7-1.2,0.8 c-0.2,0.2-1,1.2-1,1.2s3,0.3,4-1.3c-1,1.7-3.3,3.3-8.2,3.3c-5,0-9-2-11.7-3c-2.8-1.2-6.5-2.5-9.5-2.5c-2.8,0-6.2,0.8-8.4,2.9 c-3.9-1.5-9.2-0.7-11.7,1.7c-2.3,2.3-4.7,5.2-5,7.2c-0.5,2.2-1.7,7.4-3.3,9.7c-2.3,3.8-5,4.8-5.9,6.5c-0.8,1.7-0.8,5.2-0.7,5.2 c0.3,0.2,1.5,0,2.2-0.3c1.3-0.5,5-4.3,6.4-6.2c1.3-1.8,5.9-9.9,6.5-12.7c0.7-2.8,1.3-5.7,3.3-7.2c2.2-1.5,4.8-0.8,4.8-0.7 c0,0-2.5,2-2.7,7.5c-0.2,5.5,3.2,4.9,1.5,8.4c-1.7,3-6.7,1-8.4,2.8c-1.3,1.5,0,6.9,0,7.9c0,1-0.5,5.7-0.8,6.9c-0.2,1,0,1.7-0.2,2.3 c-0.2,0.5,1,0.7,1,0.7s-1,1.3-1.5,1c-0.5-0.2-0.8-0.2-1.2,0c-0.3,0-1,0.3-1.7,0l-2.7,5.7c0.3,0.2,0.8,0.3,1.3,0.2 c0.7-0.2,4-1.7,4.4-2c0.5-0.2,3.3-1.8,3.8-2.8c0.3-1,1-4.2,1-5.2c0.2-1,0.3-4.2,0.3-5c0-0.8-0.2-2.3,0-3c0.3-0.5,0.8-1.2,1.5-1.5 c0.8-0.2,1.8-0.2,2-0.2c0.3,0,3.2,0.3,3.7,0.3c0.7,0,3.3-0.5,4-0.8c0.8-0.2,1.3,0,1.5,0.3c0.3,0.3-0.3,0.8-0.3,1 c-0.2,0.2-1.5,1.8-1.8,2.5c-0.3,0.8-1.5,2.3-1.2,3c0.3,0.7,0.3,0.8,1.3,1.3c1,0.3,4.9,2.3,7,4.3c2.3,2.2,4.5,4.8,4.9,6.2 c0.5,1.5,1.3,1.7,1.8,1.7c0.5,0.2,1.5,0.3,1.5,1c0,0.7-0.2,1.5-0.2,1.5l6.2,2.3c0,0,0-2.2-0.2-3c-0.2-1-1.2-2-2-3 c-0.8-1.2-9.5-9.7-10.4-10.4c-0.8-0.5-1.5-1.2-1.7-2.5c-0.2-1.3,1.5-2.3,2.5-3.5c0.7-0.8,2.5-4.7,2.8-5.2c0.3-0.5,1.5-1.8,2.2-1.8 c0.8,0,2.7,1.2,5,2c1,0.3,8.2,2.2,9.2,2.5c1,0.2,3.2,0,3.8,0.7c0.7,0.5,0,1.8-0.2,2.7c-0.2,1-2,4.7-2,4.7s0.3,1.3,0.3,2.4 c0,1.2-0.5,5.3-1,6.7c-0.3,1.5-2.7,5.4-3.2,6c-0.3,0.5-0.8,0.8-0.8,1.7c0,0.8,1.5,1,2,1.7c0.7,0.5,0.2,1.5,0,2.5l6.7,2.8 c0-0.5,0.3-1.3,0-1.7c-0.2-0.5-1-1.5-1.5-2.2c-0.3-0.5-1.5-2.3-1.8-2.7c-0.3-0.5-0.3-1.5,0-2.3c0.2-0.8,2.3-6.5,2.5-7.2 c0.3-0.8,3.5-7.5,3.8-8.4c0.3-1,3-5.9,3.3-6.7c0.3-1,2.5-1.8,3.2-1.8c0.8,0,5,1.5,5.7,1.8c0.5,0.2,4.4,1.8,5,2.2 c0.8,0.3,0.3,1-0.2,1.2c-0.5,0.3-6.7,4.5-7.2,4.7c-0.5,0.2-1,0.7-1.3,0.7c-0.5,0-1.2,0.5-1.2,0.7c0,0.3-0.2,1-1,1c-0.7,0-2-1-2.8-2 c-1.2,0.7-2,1.2-2.5,2.2c-0.8,0.8-1.2,1.5-1.7,2.7c0.3,0.3,1,0.5,1.5,0.5h5.4c0.5,0,1.2-0.2,1.7-0.3c0.5-0.3,13.7-9,13.7-9 s2.2-1.7,2.2-3.2c0-1.2-1-1.5-1.3-2c-0.5-0.3-3.5-2.3-4-2.7c-0.7-0.5-3-1.8-3.7-2.2c-0.5-0.3-2.4-1-2.4-1c0.5-1.5,0.8-2.7,1-3 c0.2-0.3,0.2-3.4,0.3-3.9c0-0.5,0.8-2.7,1.2-3c0.3-0.3,1.2-3,1.3-3.5c0.2-0.3,1.5-4.2,2.2-4.2c0.7-0.2,1.3,0.5,2,0.5 c0.7,0.2,3.2-0.2,4.5,0c1.2,0.2,2.7,1.7,3,1.8c0.5,0.2,1.7,0.7,2,0.7c0.2,0,1.8-1.2,1.8-1.5c0-0.3-1.2-1-1.3-1 c-0.2-0.2-1.3-0.8-1.3-0.8c0,0.2,0.5-0.3,1.3-0.3c0.7,0,1.3,0.7,1.5,0.8c0.3,0.2,1.2,0.7,1.3,0.3c0.2-0.2,0.8-1,0.8-1.5 c0-0.7-0.7-1.5-1-1.8c-0.3-0.3-4.2-4-4.5-4.2c-0.5-0.2-2.5-2-2.5-2.5c-0.2-0.3-1.2-1.2-1.3-1.3c-0.2-0.2-5.2-3.7-5.9-4.2 c-0.7-0.5-1.3-1.3-1.3-2.2c0-0.8-0.3-3-0.3-3s-1.2-0.2-1.7,0.3c-0.5,0.3-1.7,3-2.3,3c-1.8-0.3-4.2,0.2-4.2,0.5 c0.2,0.5,1.8,0.2,1.8,0.2c0,0.2-0.7,1-1.2,1c-0.3,0-1.3,0.3-1.5,0.5c-0.3,0-1,0.5-1,0.5c0.5,0,1,0,1.7,0.2c0,0-1,0.7-1.5,0.7 c-0.5,0-2.2,0.5-2.7,0.7c-0.3,0.3-1.7,1.3-1.7,1.3h-1.5l0.2,0.3h0.8L59.4,32.6L59.4,32.6z" ></path>
                                                                                                    </svg>
                                                                                                    <span> </span>
                                                                                                    <span>When would you like your <b>Express Delivery</b>?</span>
                                                                                                </p>
                                                                                                <section class="pb-5">
                                                                                                    <div class="container">
                                                                                                        <div class="row">
                                                                                                            <div class="col-lg-6">
                                                                                                                <!--<p>---Select A Day & Date ---</p>-->
                                                                                                                <div class="card border-0">
                                                                                                                    <div class="card-body p-0">
                                                                                                                        <!-- AUTO COMPLETE DROPDOWN -->
                                                                                                                        
                                                                                                                        <select name="delivery_date" type="time" onfocus='this.size=10;' onblur='this.size=0;' onchange='this.size=1; this.blur();' class="select-input border-0 mb-1 px-3 py-4 rounded shadow">
                                                                                                                            <option class="day-op"><? echo date('l jS', strtotime("today")); ?></option>
                                                                                                          					<option class="day-op"><? echo date('l jS', strtotime("tomorrow")); ?></option>
                                                                                                          					<option class="day-op"><? echo date('l jS', strtotime("+ 2 days")); ?></option>
                                                                                                          					<option class="day-op"><? echo date('l jS', strtotime("+ 3 days")); ?></option>
                                                                                                          					<option class="day-op"><? echo date('l jS', strtotime("+ 4 days")); ?></option>
                                                                                                          					<option class="day-op"><? echo date('l jS', strtotime("+ 5 days")); ?></option>
                                                                                                          					<option class="day-op"><? echo date('l jS', strtotime("+ 6 days")); ?></option>
                                                                                                          					<option class="day-op"><? echo date('l jS', strtotime("+ 7 days")); ?></option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-lg-6">
                                                                                                                <!--<p>--- Select A Time ---</p>-->
                                                                                                                <div class="card border-0">
                                                                                                                    <div class="card-body p-0">
                                                                                                                        <!-- AUTO COMPLETE DROPDOWN -->
                                                                                                                        <select name="delivery_time" type="time" onfocus='this.size=10;' onblur='this.size=0;' onchange='this.size=1; this.blur();' class="select-input border-0 mb-1 px-3 py-4 rounded shadow">
                                                                                                                            <option class="day-op" value="9:00 AM - 10:00 AM">9:00 AM - 10:00 AM</option>
                                                                                                                            <option class="day-op" value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                                                                                                                            <option class="day-op" value="11:00 PM - 12:00 PM">11:00 PM - 12:00 PM</option>
                                                                                                                            <option class="day-op" value="12:00 PM - 1:00 PM">12:00 PM - 1:00 PM</option>
                                                                                                                            <option class="day-op" value="1:00 PM - 2:00 PM">1:00 PM - 2:00 PM</option>
                                                                                                                            <option class="day-op" value="2:00 PM - 3:00 PM">2:00 PM - 3:00 PM</option>
                                                                                                                            <option class="day-op" value="3:00 PM - 4:00 PM">3:00 PM - 4:00 PM</option>
                                                                                                                            <option class="day-op" value="4:00 PM - 5:00 PM">4:00 PM - 5:00 PM</option>
                                                                                                                            <option class="day-op" value="5:00 PM - 6:00 PM">5:00 PM - 6:00 PM</option>
                                                                                                                            <option class="day-op" value="6:00 PM - 7:00 PM">6:00 PM - 7:00 PM</option>
                                                                                                                            <option class="day-op" value="7:00 PM - 8:00 PM">7:00 PM - 8:00 PM</option>
                                                                                                                            <option class="day-op" value="8:00 PM - 9:00 PM">8:00 PM - 9:00 PM</option>
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                       
											<span id="person"> </span>

                                        <!-- delivery options forms -->
                                    </div>
                                </div>      
                            </div>
						</div>
						</div>
						</div>
						
						<div class="col-md-12">
                            <div class="fullCart-body m-t-24">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="center m-t-24">
											<div class="m-b-10 center">
												<button type="submit" class="btn btn-round gb-gradient mx-4">SUBMIT ORDER</button>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</form>
					
				</section>
                <!-- /# My Delivery Options panel-->

            
		</div>			
				
				
    </div>
	
	
	<div class="modal fade text-left" id="addAddress" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
    		<div class="modal-content">
    			<div class="modal-header" style="padding: 10px; display:block;">
    				<button type="button" class="close" data-dismiss="modal">&times;</button>
    				<h4 id="modalTitle" class="modal-title"> Add Address</h4>
    			</div>
    			<div class="modal-body" style="overflow-y: unset;">
    				<form action="has-bin/insert_user_address.php" method="post" enctype="multipart/form-data">
    				    <input name="user_id" type="hidden" value="<?php echo $getID; ?>"> </input>
    					<div class="form-group row">
    						<div class="form-group col-md-12">
    							<label>Name</label>
    							<input type="text" name="name" required class="form-control"  placeholder="Name">
    						</div>
    						<div class="form-group col-md-12">
    							<label>Mobile Number</label>
    							<input type="text" name="mobile" required class="form-control"  placeholder="Mobile Number">
    						</div>
    						<div class="form-group col-md-12">
    							<label>Email</label>
    							<input type="email" name="email" class="form-control"  placeholder="Email">
    						</div>
    						<div class="form-group col-md-12">
    							<label>Address</label>
    							<input type="text" name="address" class="form-control"  placeholder="Address">
    						</div>
    					</div>
    					<div class="text-right">
    						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>	  	  
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

<?php include ("../assets/addtoCart/cartscript.php") ?>
<script src="../assets/addtoCart/js/jquery.min.js"></script>

<?php include ("footer.php"); ?>