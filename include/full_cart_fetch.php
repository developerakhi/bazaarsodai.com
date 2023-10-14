<?php 
include_once 'functions.php'; 
session_start();
if(isset($_SESSION["shopping_cart"])){
	
$coupon_code = $_post['coupon'];
echo $coupon_code;
$subcat = urlencode($_POST["load_full_cart"]);

if ($stmt_m = $mysqli->prepare("SELECT 	sub_menu_id, sub_menu, menu_id,  meta_desc, meta_key, page_cn, img2 from sub_menu 
      WHERE sub_menu_id = ? ")){
    $stmt_m->bind_param('i', $subcat);  // Bind "$email" to parameter.
    $stmt_m->execute();    // Execute the prepared query.
      // get variables from result.
    $stmt_m->bind_result($sub_menu_id, $sub_menu_name, $sb_menu_id, $Sub_meta_desc, $Sub_meta_key, $Sub_page_cn, $banner);
    $stmt_m->store_result();
    $stmt_m->fetch();
    $stmt_m->close();
   }
}   
   $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

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
        <div class="content-wrap">
          
                <!-- /# Breadcrumbs -->
                <section class="gb-breadcrumb sidebar-blue hideOnPhone">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <ul class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li>My Cart List</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /# Breadcrumbs-->

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
                                                        <div class="col-6 miniCart-item-details">
                                                            <div class="w-100">
                                                                <div class="miniCart-item-name">
                                                                    <p>Item Name</p>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-1 miniCart-item-quantity center align-items-center align-content-center">
                                                            <div class="w-100">
                                                                <p>Quantity</p>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-2 miniCart-item-price">
                                                            <div class="w-100">
                                                                <p>Total</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-1 miniCart-item-remove">
                                                            <p>Drop</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>	
										<div class="peekout_cart_item_load">
											<span id="load_full_cart"></span>
										</div>	
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <div class="bg-orange fullCart-body m-t-24">
                                    <div class="fullcart-total-price-panel">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Grand Total:</th>
                                                        <td class="total_price">৳0</td>
														<input id="subtotal" name="subtotal" type="hidden" value="<?php echo $total; ?>"> </input>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>
                                           <!--<div class="row">-->
                                               <!--<div class="col-md-6">-->
                                                 <form action="" enctype="multipart/form-data"  method="POST">
                                    				<!--<input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">-->
                                    				<!--<input type="hidden" name="pro_id[]" class="form-control" placeholder="Date" >-->
                                                    <div class="form-group col-md-6">
                                					   <label>Coupon Code </label>
                                					   <input name="coupon" type="text" class="form-control" value="" autocomplete="off"  placeholder="Coupon Code">
                                					   <div class="box-footer button-demo" style="margin-top: 10px;">
                                                          <button class="btn btn-success" type="submit" name="submit" data-color="green" data-style="expand-right">Apply</button>
                                                        </div>
                                                    </div>
                                                </form>
                                          
                                           <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="sidebar-blue fullCart-body m-t-24">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="center m-t-24">
                                     
												<div class="m-b-10 center border-left">
													<a id="cash_on_delivery" href="#" class="btn btn-round gb-gradient mx-4">PROCEED TO ORDER</a>
												</div>
                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>		
		</div>
	</div>		
</div>

<?php include ("footer.php"); ?>

	<?php include ("../assets/addtoCart/cartscript.php") ?>
	<script src="../assets/addtoCart/js/jquery.min.js"></script>



