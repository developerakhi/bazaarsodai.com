<?php 
include_once 'include/functions.php'; 
 frst_session_start();
$sanitize = true;
$title_m = isset($_GET['Amar_cat']) ? $_GET['Amar_cat'] : '';
$customerID = intval($title_m);

$title_scnd = isset($_GET['Ditoad']) ? $_GET['Ditoad'] : '';
$scnd_hd = intval($title_scnd);

$subcat = urlencode($_GET["country_id"]);


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


 
if ($stmt_m = $mysqli->prepare("SELECT name, sub_menu_id, meta_desc, meta_key, page_cn, img2 from sd_third_sub 
                          WHERE id = ? ")){
                    $stmt_m->bind_param('s', $scnd_hd);  // Bind "$email" to parameter.
                    $stmt_m->execute();    // Execute the prepared query.
                         // get variables from result.
                    $stmt_m->bind_result($third_sub, $rssub_menu_id, $meta_desc, $meta_key, $page_cn, $banner2);
                    $stmt_m->store_result();
                    $stmt_m->fetch();
                    $stmt_m->close();
                 }	

if ($stmt_m = $mysqli->prepare("SELECT menu_id, menu_name from menu 
                          WHERE menu_id = ? ")){
                    $stmt_m->bind_param('s', $sb_menu_id);  // Bind "$email" to parameter.
                    $stmt_m->execute();    // Execute the prepared query.
                         // get variables from result.
                    $stmt_m->bind_result($menu_id79, $menu_name79);
                    $stmt_m->store_result();
                    $stmt_m->fetch();
                    $stmt_m->close();
                 }	

if ($stmt_m = $mysqli->prepare("SELECT 	sub_menu_id, sub_menu from sub_menu 
                          WHERE sub_menu_id = ? ")){
                    $stmt_m->bind_param('i', $rssub_menu_id);  // Bind "$email" to parameter.
                    $stmt_m->execute();    // Execute the prepared query.
                         // get variables from result.
                    $stmt_m->bind_result($sub_menu_id12, $sub_menu_name12);
                    $stmt_m->store_result();
                    $stmt_m->fetch();
                    $stmt_m->close();
                 }						 
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
	<?php echo $obj_home->base_tag(); ?>
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
	  <script src="assets/js/jquery-1.11.1.min.js"></script>
		
	<?php if ($customerID && $scnd_hd){ ?>
 

	<script type="text/javascript">
	$(document).ready(function(){
	changePagination('0');    
	});
	function changePagination(pageId){
		 $(".flash").show();
		 $(".flash").fadeIn(400).html
					('Loading <img src="images/ajax.gif" />');
					
		 var dataString = 'pageId='+ pageId;
		 $.ajax({
			   type: "POST",
			   url: "include/load_item_sb.php",
			   data:{
			  userID: '<?php echo $scnd_hd; ?>',
			  pageId: pageId
		},
			   cache: false,
			   success: function(result){
			   $(".flash").hide();
					 $("#pageData").html(result);
			   }
		  });

	}
	</script>
	<?php } else{?>

	<script type="text/javascript">
	$(document).ready(function(){
	changePagination('0');    
	});
	function changePagination(pageId){
		 $(".flash").show();
		 $(".flash").fadeIn(400).html
					('Loading <img src="images/ajax.gif" />');
					
		 var dataString = 'pageId='+ pageId;
		 $.ajax({
			   type: "POST",
			   url: "include/load_item_sb.php",
			   data:{
			  MainCat: '<?php echo $customerID; ?>',
			  pageId: pageId
		},
			   cache: false,
			   success: function(result){
			   $(".flash").hide();
					 $("#pageData").html(result);
			   }
		  });

	}
	</script>
	<?php } ?>
 </head>

  <body>
		
   


        <!-- /# Main Body -->
        <div class="content-wrap">
			<div class="adcontent-wrap-r showOnPhone">
                <!-- /# Search Panel for mobile -->
                <section class="is_unnecessary bg-orange" style="padding: 35px 0px 0px 0px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 center">
                            <!--    <h1 class="section-title section-title m-b-48 showOnPhone">Search Your Product</h1>-->
                                <div class="input-group home-main-search-panel-form align-content-center" style="margin-top:25px;">
                                    <input id='search-m-m' type="text" class="form-control" placeholder="Search product">
                                    <span class="input-group-btn">
                                        <button id='search_btn-m-m' class="btn btn-secondary gb-gradient" type="button"><i class="la la-search"></i></button>
                                    </span>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /# Search panel for mobile-->
			</div>
            <div class="main ctpd min-vh-100">
                
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://sorbovuk.com/">Home</a></li>
                                <li><?php echo $sub_menu_name ?></li>
                            </ul>
                        </div>
                    </div>
                </section>
		
				<section class="all-category-panel ctpd2">
                    <div class="container-fluid">
                        <div class="row">
						
							<?php 
								global $mysqli;
								if ($stmt_pro = $mysqli->prepare("SELECT id, item_name, price, discount_per, discount_price, img1, img2 from sd_item_l
									WHERE activity = 1 AND sub_cat = ".$subcat."
									ORDER BY id DESC LIMIT 18")){
								$stmt_pro->execute(); 
									// Execute the prepared query.
									// get variables from result.
								$stmt_pro->bind_result($id, $item_name, $price, $discount_per, $discount_price, $img1, $img2);
								$stmt_pro->store_result();
															}
								while ($stmt_pro->fetch()) {
															
								echo'
										<div class="pm col-sm-6 col-md-4 col-lg-3 col-xl-2 col-6 colum-section">
											<div class="product-card center">
												<figure class="category-card-figure">
													<img src="images/products/'.$img1.'" class="img-fluid" alt="">
												</figure>
												<h1><a href="p_d.php">'.$item_name.'</a></h1>
												<p class="product-card-price center">৳ 100<span class="product-cart-reduced-price"></span></p>
												<a type="button" id="product" class="btn btn-outline-warning">Add to cart</a>
											</div>
										</div>';
									}									
							?>		
						
				
						</div>
                    </div>
                </section>
				
                

                <!-- /# Footer -->
                <!-- /# Footer -->

                

            </div>			
				
				
        </div>
        <!-- /# Main Body -->
				<!-- /# Mini Cart -->
					<?php include ("include/cart.php"); ?>
                <!-- /# Mini Cart -->



    
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