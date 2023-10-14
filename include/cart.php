<?php
include_once 'include/msp_lp.php';
include_once 'include/functions.php'; 
frst_session_start();
$gId = $_GET['id'];
$coupon_code = $_POST['coupon'];


$query ="SELECT * FROM coupon WHERE coupon_code = '$coupon_code'";
$results = $mysqli->query($query);
$couponID = $results->fetch_assoc();

?>

<style>
.progress {
    position: relative;
    overflow: hidden;
    height: 34px;
    background-color: #7a7879;
    }
 .meterInfoText {
    position: absolute;
    color: #fff;
    width: 100%;
    line-height: 35px;
}
.InfoTextLeft {
    float: left;
    margin-left: 5px;
    width: 65%;
}
.InfoTextRight {
    float: right;
    margin-right: 5px;
}
.main-discount-container {
    text-align: center;
    color: #787878;
    align-items: center;
    border-width: 1px 0;
    border-style: solid;
    border-color: #ededed;
    background: #f7f7f7;
}
.discountCodeHeader {
    display: flex;
}
button.btnDiscount {
    border: 0;
    background: 0 0;
    font-size: 14px;
    /*height: 30px;*/
    width: 100%;
    outline: 0;
}
/*button {*/
/*    cursor: pointer;*/
/*}*/
.arrow-icon {
    border-radius: 10px;
    border: 1px solid #787878;
    padding: 0 3px;
    margin-right: 10px;
}
.arrow-up svg {
    transform: rotate(-90deg);
    margin-top: -3px;
}

.discountCodeContent {
    display: block;
}
.inputNbtn {
    width: 290px;
    display: block;
    text-align: center;
    /*margin: auto auto 10px;*/
}
.inputNbtn input {
    background: #e3e3e3;
    border: 0;
    font-size: 14px;
    border-radius: 5px;
    /*height: 33px;*/
    width: 180px;
    text-align: center;
    /*outline: 0;*/
    float: left;
    margin: 10px 8px 0 0;
}
.inputNbtn button.discountSubmitBtn:hover {
    background: #ff1b25;
}
button.discountSubmitBtn {
    background: #ff686e;
    color: #fff;
    font-size: 14px;
    text-transform: none;
    border: none;
    border-radius: 3px;
    /*line-height: 28px;*/
    width: 50px;
    float: left;
    cursor: pointer;
    margin: 11px 0 0 8px;
    -webkit-box-shadow: 0 0 5px #ccc;
    -moz-box-shadow: 0 0 5px #ccc;
    box-shadow: 0 0 5px #ccc;
}
.inputNbtn {
    width: 290px;
    display: block;
    text-align: center;
    margin: auto auto 10px;
}

.discountCloseBtn {
    float: left;
    width: 40px;
    padding: 0;
    margin: 12px 0 0 4px;
    border: 0;
    background: 0 0;
}
.discountCloseBtn {
    float: left;
    width: 40px;
    padding: 0;
    margin: 12px 0 0 4px;
    border: 0;
    background: 0 0;
}

.discountCodeContent {
    display: none;
}
.button{
    cursor: pointer;
}
</style>

				<div class="cbp-spmenu-push">
                    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                        <p>Your Cart List</p>
                        <div class="progress" data-reactid=".246v43j3870.3.0.3.1.1.0.0.0">
                            <div style="width:0%;" class="bar" data-reactid=".246v43j3870.3.0.3.1.1.0.0.0.0"></div>
                            <div class="meterInfoText" data-reactid=".246v43j3870.3.0.3.1.1.0.0.0.1">
                                <div class="InfoTextLeft" data-reactid=".246v43j3870.3.0.3.1.1.0.0.0.1.0">
                                    <!--<span data-reactid=".246v43j3870.3.0.3.1.1.0.0.0.1.0.0"> </span>-->
                                    <span>Delivery charge </span>
                                    <!--<span data-reactid=".246v43j3870.3.0.3.1.1.0.0.0.1.0.2"> </span>-->
                                </div>
                                <div class="InfoTextRight">
                                    <span>
                                        <span>
                                            <span>৳ </span>
                                            <span id="shipping_charge"> 0 </span>
                                        </span>
                                    </span>
                                    <span class="helpIcon">
                                        <svg width="15px" height="15px" style="fill:#fff;stroke:#fff;display:inline-block;vertical-align:middle;" version="1.1" viewBox="0 0 100 100">
                                            <path d="m50 5c-24.898 0-45 20.102-45 45s20.102 45 45 45 45-20.102 45-45-20.102-45-45-45zm7.1016 70c0 2.1992-1.8984 4.1016-4.1016 4.1016h-6.1992c-2.1992 0-4.1016-1.8984-4.1016-4.1016v-26.199c0-2.3008 1.8984-4.1016 4.1016-4.1016h6.1992c2.1992 0 4.1016 1.8984 4.1016 4.1016zm-7.2031-37.102c-4.6016 0-8.3984-3.8008-8.3984-8.5 0-4.6992 3.8008-8.5 8.3984-8.5 4.6992 0 8.5 3.8008 8.5 8.5 0 4.7031-3.7969 8.5-8.5 8.5z"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="miniCart-body">
                            
                            <ul class="peekout_cart_item_load">
								<span id="cart_details"> 
								</span>
							</ul>
                        </div>
                        
                        <div class="main-discount-container" data-reactid=".ns5w6iff4m.3.0.3.3.2.1">
                            <div class="discountCodeHeader" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.1">
                                <button class="btnDiscount" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.1.0">
                                    <span class="arrow-icon arrow-up" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.1.0.0">
                                        <svg width="10px" height="10px" style="fill:#787878;stroke:#787878;display:inline-block;vertical-align:middle;" viewBox="0 0 100 100" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.1.0.0.0">
                                            <path transform="translate(0 -952.36)" d="m31.918 1045.4l36.164-31.684 12.918-11.316-12.918-11.316-36.164-31.684-12.918 11.316 36.168 31.684-36.168 31.684zm0 0" stroke="#000" stroke-linecap="round" stroke-width="2" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.1.0.0.0.0"></path>
                                        </svg>
                                    </span>
                                    <span data-reactid=".ns5w6iff4m.3.0.3.3.2.1.1.0.1">Have a special code?</span>
                                </button>
                            </div>
                            <div class="discountCodeContent min-vh-30" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2">
                                <form action="" enctype="multipart/form-data"  method="POST">
                            		<input type="hidden" name="couponID[]" value="<?php echo $values["couponID"];?>" class="form-control" >
                                    <span class="inputNbtn" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2.0.0">
                                        <input required="" name="coupon" maxlength="100" type="text" placeholder="Referral/Discount Code" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2.0.0.0">
                                        <button class="cursor discountSubmitBtn" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2.0.0.1">
                                            <span data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2.0.0.1.0">
                                                <span data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2.0.0.1.0.0"> </span>
                                                <span data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2.0.0.1.0.1">Apply</span>
                                                <span data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2.0.0.1.0.2"> </span>
                                            </span>
                                        </button>
                                        <button class="cursor discountCloseBtn" data-reactid=".ns5w6iff4m.3.0.3.3.2.1.2.0.0.2">Close</button>
                                    </span>
                                </form>
                            </div>
                        </div>
                        <div class="miniCart-order-submit-btn center">
                            
                            <span id="cartBTN"> </span>
                        </div>
                    </nav>
                </div>
               
                <!-- Class "cbp-spmenu-open" gets applied to menu -->
			<script src="assets/addtoCart/js/jquery.min.js"></script>
                <div id="showRight" class="mini-cart-position">
                    <div class="miniCart-item-group cartinfo cart_anchor">
                        <div class="miniCart-item-number-group">
                            <span class="miniCart-items badge">
                                0
                            </span>
                            <span class="miniCart-item-text">
                                Items
                            </span>
                        </div>                            
						<div id="cart_amount" class="total_price miniCart-float-price cart_total_taka no_odometer">
                           ৳0
                        </div>
                        <span class="gb-gradient miniCart-button">
                            View Cart
                        </span>
                        <span id="miniCart-close" class="miniCart-close gb-gradient">
                            <i class="la la-close"></i>
                        </span>
                    </div>
                </div>
	<style>
        .cursor {
          cursor: pointer;
        }
    </style>
				
	<?php include ("assets/addtoCart/cartscript.php") ?>
<script>
$(document).ready(function(){
  $(".discountCodeHeader button").click(function(){
    $(".discountCodeContent").toggle();
  });
  $(".discountCloseBtn").click(function(){
    $(".discountCodeContent").hide();
  });
});
</script>
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
