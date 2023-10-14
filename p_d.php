<?php 
include_once 'include/functions.php'; 
require_once('include/connection.php');
include_once 'include/details_stm.php'; 
include_once 'include/go_to_ct_quick.php'; 
frst_session_start(); 
$sanitize = true;

$title = isset($_GET['FirstHead']) ? $_GET['FirstHead'] : '';
$url_string = intval($title);
	
		
global $mysqli;
$stmt = $mysqli->prepare("SELECT id, shop_id, item_name, item_code, sub_cat, unit, category, sort_desc, details, video, img1, price, discount_price, discount_per, quantity, number_of_sales FROM sd_item_l
WHERE activity = 1 AND id = ? LIMIT 1");
$stmt->bind_param('i', $url_string); 
$stmt->execute();    
$stmt->store_result();
$stmt->bind_result($main_itm_id, $shop_id, $item_name55, $item_code, $sub_cat, $unit, $category, $sort_description, $details, $video, $img_large, $top_price, $discount_price, $discount_per, $quantity, $number_of_sales);
$stmt->fetch();
$stmt->close();


global $mysqli;
$url_id = 5;
$stmt = $mysqli->prepare("SELECT id, title, sort_desc, full_desc FROM sd_posts WHERE id = ? LIMIT 1");
$stmt->bind_param('i', $url_id);  
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($id, $title, $sort_desc, $full_desc);
$stmt->fetch();
$stmt->close();

$stmt = $mysqli->prepare("SELECT menu_id, menu_name FROM menu WHERE menu_id = ? LIMIT 1");
$stmt->bind_param('i', $category);  
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($dmenu_id, $dmenu_name);
$stmt->fetch();
$stmt->close();

$stmt = $mysqli->prepare("SELECT sub_menu_id, sub_menu FROM sub_menu WHERE sub_menu_id = ? LIMIT 1");
$stmt->bind_param('i', $sub_cat);  
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($ssub_menu_id, $smenu_name);
$stmt->fetch();
$stmt->close();

$stmt = $mysqli->prepare("SELECT id, name FROM sd_third_sub WHERE id = ? LIMIT 1");
$stmt->bind_param('i', $sub_sub); 
$stmt->execute();    
$stmt->store_result();
$stmt->bind_result($tr_id, $tr_name);
$stmt->fetch();
$stmt->close();

?>
<!DOCTYPE html>
<html class="no-js" lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<?php echo $obj_home->base_tag(); ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bazaarsodai - Welcome to Bazaarsodai Online Shop <?php echo $username; ?></title>
<meta name="keywords" content="bazaarsodai" />
<meta name="description" content="Most popular and reliable online shop in Dhaka. Buy grocery and other items from your home with a mouse click and get home delivery.">

<meta property="og:title" content="<?php echo $item_name55; ?>" />
<meta property="og:url" content="https://www.<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="https://bazaarsodai.com/images/products/<?php echo $img_large; ?>" />
<meta property="og:description" content="<?php echo $details; ?>" />
<meta property="og:site_name" content="<?php echo $item_name55; ?>" />

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
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60bf2d00f37eec00110ef67b&product=inline-share-buttons" async="async"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60c0a93fe70afe00116ed194&product=inline-share-buttons" async="async"></script>
<style media="screen">
    figure.zoom {
      background-position: 80% 80%;
      position: relative;
      margin: 40px auto;
      border: 5px solid white;
      /*box-shadow: -1px 5px 15px black;*/
      /*box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);*/
      box-shadow: 2px 2px 2px 5px rgba(0, 0, 0, 0.03);
      height: 500px;
      width: 500px;
      overflow: hidden;
      cursor: zoom-in;
    }
    figure.zoom img:hover {
      opacity: 0;
    }
    figure.zoom img {
      transition: opacity 0.5s;
      display: block;
      width: 100%;
    }
</style>
</head>
<body>
<?php include ("include/header.php"); ?>
<?php include ("include/left_side.php"); ?>

        <div class="content-wrap">
            <div class="main min-vh-100" id="get_product">
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://bazaarsodai.com//">Home</a></li>
								<li><a href="main?cat_id=<?php echo $dmenu_id; ?>"><?php echo $dmenu_name; ?></a></li>
                                <li><?php echo $item_name55; ?></li>
                            </ul>
                        </div>
                    </div>
                </section>
				
				<div class="container-fluid">
                    <div class="row m-0">
                        <div class="col-12 p-0">
                            <!-- Single Product View Modal -->
                        <!-- Modal -->
                            <div class="product-single-pages">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
												<div class="col-md-6 col-sm-12 product-image-container">
												   <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
														<div class="carousel-inner" role="listbox">
															<div class="carousel-item active">
																<div class="img-magnifier-container center">
																    <figure id="myimage_deactivated_for_mobile-zoom" src="images/products/<?php echo $img_large; ?>" alt="First slide" class="zoom" onmousemove="zoom(event)" style="background-image: url(images/products/<?php echo $img_large; ?>)">
                                                                      <img id="myimage_deactivated_for_mobile-zoom" src="images/products/<?php echo $img_large; ?>" alt="First slide">
                                                                    </figure>
																	
																</div>
															</div>
														</div>
													</div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="d-flex align-items-center align-content-center">
                                                        <div class="mx-auto">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h1 class="single-product-title mb-1 m-t-48"><?php echo $item_name55; ?> <?php echo $unit ?></h1>
                                                                </div> 
                                                                <div class="col-6"> 
																<?php 
																if ($discount_per > 0){?>	
																<input name="price" type="hidden" value="<?php echo $discount_price;?>" />
                                                                    <p class="single-product-card-price sidebar-blue mb-0"> ৳<?php echo number_format($discount_price); ?>.00 </p>
																	<del class="dltp"> ৳<?php echo number_format($top_price); ?>.00 </del>
																<?php } else {?>
																	<p class="single-product-card-price sidebar-blue mb-0"> ৳<?php echo number_format($top_price); ?>.00 </p>
																<?php } ?>
                                                                </div>
																
																<div class="col-6"> 
																<?php 
																if ($discount_per > 0){?>	
																	<p class="single-product-card-price sidebar-blue mb-0"> <?php echo number_format($discount_per); ?>% off</p>
                                                                <?php } ?>
																</div>
																
																<?php if ($quantity > 0){?>	
                                                                <div id="buynowbutton_holder_single_page" class="col-sm-12 mt-3 buynowbutton">
                                                                     <input  class="qtyp" type="hidden" name="quantity" id="quantity<?php echo $main_itm_id ?>" value="<?php echo $quantity ?>">
																	<input name="hidden_price" id="price<?php echo $main_itm_id ?>" type="hidden" value=<?php if ($discount_price == 0){echo ($top_price);} else {echo ($discount_price);} ?> />
																	<input name="hidden_name" id="name<?php echo $main_itm_id ?>" type="hidden" value="<?php echo $item_name55;?>" />
																	<input type="hidden" name="pimg" id="pimg<?php echo $main_itm_id ?>" value="<?php echo $img_large ?>" />
																	<input type="hidden" name="shop_id" id="shop_id<?php echo $main_itm_id ?>" value="<?php echo $shop_id ?>" />
																	<a type="button" name="add_to_cart" id="<?php echo $main_itm_id ?>" class="gb-gradient single-product-card-btn add_to_cart"> <i class="fa fa-shopping-cart inner-right-vs"></i>  Add to cart </a>
                                                                </div>
                                                   
                                                               <?php } else {?>
                                                                <div class="col-md-12  mt-4">
																	<a class="stockbtn">  Out of stock </a>
                                                                </div>
                                                                <?php } ?>
                                                                <div class="col-md-12  mt-4">
                                                                    <div class="single-product-desc-content">
																	<p>
																	
																	<?php 
																	echo $details;
																// 		$status=$sort_description;
																// 		$textToStore = (htmlentities($status, ENT_QUOTES, 'UTF-8')); echo $textToStore; 
																	?></p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
										<?php
											global $mysqli;
											$stmt = $mysqli->prepare("SELECT hotline1, hotline2, hotline3, bkash FROM sd_page_setup");
											$stmt->execute();   
											$stmt->store_result();
											$stmt->bind_result($hotline1, $hotline2, $hotline3, $bkash);
											$stmt->fetch();
											$stmt->close();
										?>
                                            <div class="row m-0">
                                                <div class="col-md-8 footer-widget">
                                                    <div class="pull-left row mobileCenter">
                                                        <p class="col-md-8 m-t-10"><?php echo $full_desc; ?><br>
                                                        <strong class="red-w"><i class="la la-phone"></i> <?php echo $hotline1; ?> </strong>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 footer-widget ">
                                                    <div class="extra-links m-t-10 mobileCenter"> 
                                                       <div class="sharethis-inline-share-buttons"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Product View Modal -->
                        </div>
                    </div>
                </div>

                <!-- /# Footer -->
               
                <!-- /# Footer -->
            </div>
            <?php include ("include/footer.php"); ?>
        </div>
        <!-- /# Main Body -->
				<!-- /# Mini Cart -->
					<?php include ("include/cart.php"); ?>
                <!-- /# Mini Cart -->

	<?php include ("category.php"); ?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript">
        function zoom(e){
          var zoomer = e.currentTarget;
          e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
          e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
          x = offsetX/zoomer.offsetWidth*100
          y = offsetY/zoomer.offsetHeight*100
          zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }
    </script>
    