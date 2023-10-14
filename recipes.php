<?php 
include_once 'include/functions.php'; 
 frst_session_start();
$subcat = urlencode($_GET["cat_id"]);

if ($stmt_m = $mysqli->prepare("SELECT 	menu_name, meta_desc, meta_key, page_cn, img1, banner, img2, type, activity from menu 
      WHERE menu_id = ? ")){
    $stmt_m->bind_param('i', $subcat);  // Bind "$email" to parameter.
    $stmt_m->execute();    // Execute the prepared query.
      // get variables from result.
    $stmt_m->bind_result($menu_name, $meta_desc, $meta_key, $page_cn, $img1, $photo, $img2, $type, $activity);
    $stmt_m->store_result();
    $stmt_m->fetch();
    $stmt_m->close();
   }
   
   $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
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
<!-- Owl Carousel CSS -->
<link href="assets/owl.carousel.min0eb3.css?v2.0" rel="stylesheet">
<link href="assets/owl.theme.default.min0eb3.css?v2.0" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="styles9c82.css?v8.4.3" rel="stylesheet">
<!--<link href="style-odo.css?v4.4.1" rel="stylesheet">-->
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Questrial|Quicksand:300,400,500,700" rel="stylesheet">
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
                                <li><a href="https://bazaarsodai.com/">Home</a></li>
                                <li>Recipes</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="all-category-panel ctpd2 min-vh-100">
		           <div class="container-fluid">
		               <div class="row">
		                   <div class="col-md-12">
		                       <a href="#">
                                    <img width="100%" src="images/icon/category.jpg">
                                </a>
		                   </div>
		               </div>
		           </div>
		       </section>
				<section class="mb-30">
                    <div class="container-fluid">
                        <div class="row">
			                <?php 
							global $mysqli;
							if ($stmt_pro = $mysqli->prepare("SELECT id, shop_id, item_name, unit, sort_desc, price, discount_per, discount_price, img1, img2 from sd_item_l
							WHERE activity = 1 AND category = 68 ORDER BY id DESC LIMIT 90")){
							$stmt_pro->execute(); 
							$stmt_pro->bind_result($item_id, $shop_id, $item_name, $unit, $sort_desc, $price, $discount_per, $discount_price, $img1, $img2);
							$stmt_pro->store_result();}
							while ($stmt_pro->fetch()) {
								$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);	
							echo'
                                <div class="pm col-md-3">
                                    <div class="inner">
                                        <img src="images/products/'.$img1.'" class="add_to_cart recipep">
                                        <div class="service-title">
                                           <h3 style="font-size: 1.4rem;">'.ucfirst($item_name).'</h3>
                                        </div>
                                        <p>'.$sort_desc.'</p>
                                        <a href="https://bazaarsodai.com/product/'.$item_id.'/'.$ite_name.'">Read more &gt;&gt;</a>
                                </div>
                             </div>';
							}									
				        	?>                    
						</div>
                    </div>
                </section>
                <?php include ("include/footer.php"); ?>
            </div>
        </div>
     
<?php include ("include/cart.php"); ?>
 
<?php include ("category.php"); ?>
