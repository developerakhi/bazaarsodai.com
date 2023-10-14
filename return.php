<?php 	

require_once("include/functions.php");
$subcat = urlencode($_GET["cat_id"]);

?>

<!DOCTYPE html>
<html class="no-js" lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#007bff">
	<title> Welcome to Bazaarsodai Online Shop</title>
	<?php echo $obj_home->base_tag(); ?>
	<meta name="keywords" content="Bazaarsodai" />
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
		
        <!-- /# Header -->
			<?php include ("include/header.php"); ?>
        <!-- /# Header -->

        <!-- /# sidebar -->
			<?php include ("include/left_side.php"); ?>
        <!-- /# sidebar -->
        
        <!-- /# Main Body -->
        <div class="content-wrap">
            <div class="min-vh-100">
    			<div class="container rounded mt-5 mb-5">
                    <div class="row">
                        <div class="aiz-user-panel">
                            <!--<div class="card">-->
                                <!--<div class="card-body">-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="content-wrap min-vh-100">
                                    		
                                                <div class="main" id="get_product">
                                        			<?php
                                        			global $mysqli;
                                        			$stmt_faq = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 1");
                                        			$stmt_faq->execute();
                                        			$stmt_faq->store_result();
                                        			$stmt_faq->bind_result($id, $title_faq, $full_desc_faq);
                                        			$stmt_faq->fetch();
                                        			$stmt_faq->close();
                                        			?>
                                    				<div style="margin-left:20px;">	
                                    					<h2><?php echo $title_faq ?></h2>
                                    					<p><?php echo $full_desc_faq ?></p>
                                    				</div>
                                    			</div>			
                                            </div>
                                        </div>
                                        
                                    </div>
                                <!--</div>-->
                            <!--</div>-->
                        </div>
                    </div>
            </div>
     </div>

<!-- /# Footer -->
<?php include ("include/footer.php"); ?>
<!-- /# Footer -->

</div>	
</div>

<?php include ("include/cart.php"); ?>
	
