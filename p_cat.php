<?php 
include_once 'include/functions.php'; 
require_once('include/connection.php');

$sanitize = true;
$title_m = isset($_GET['Amar_cat']) ? $_GET['Amar_cat'] : '';
$customerID = intval($title_m);

$title_scnd = isset($_GET['Ditoad']) ? $_GET['Ditoad'] : '';
$scnd_hd = intval($title_scnd);

$title_mn = isset($_GET['MainCat']) ? $_GET['MainCat'] : '';
$MainCat = $title_mn;


if ($stmt_m = $mysqli->prepare("SELECT sub_menu from sub_menu 
                          WHERE sub_menu_id = ? ")){
                    $stmt_m->bind_param('i', $scnd_hd);  // Bind "$email" to parameter.
                    $stmt_m->execute();    // Execute the prepared query.
                         // get variables from result.
                    $stmt_m->bind_result($sub_menu_name);
                    $stmt_m->store_result();
                    $stmt_m->fetch();
                    $stmt_m->close();
                 }	
 
if ($stmt_m = $mysqli->prepare("SELECT menu_id, menu_name from menu 
                          WHERE menu_id = ? ")){
                    $stmt_m->bind_param('s', $MainCat);  // Bind "$email" to parameter.
                    $stmt_m->execute();    // Execute the prepared query.
                         // get variables from result.
                    $stmt_m->bind_result($menu_id, $m_name2);
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
			   url: "include/load_item.php",
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
	<?php } elseif ($MainCat){?>

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
			   url: "include/load_item.php",
			   data:{
			  MainCat: '<?php echo $MainCat; ?>',
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
		
        <!-- /# Header -->
			<?php include ("include/header.php"); ?>
        <!-- /# Header -->

        <!-- /# sidebar -->
			<?php include ("include/left_side.php"); ?>
        <!-- /# sidebar -->


        <!-- /# Main Body -->
        <div class="content-wrap">
			
            <div class="main min-vh-100" id="get_product">
			
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://bazaarsodai.com/">Home</a></li>
                                <li><?php if($MainCat == ''){echo '';}elseif($MainCat == ''){echo '';}else{echo ' ' . $m_name2;}if($customerID){echo $sub_menu_name . ' > ' . $third_s_name;} ?></li>
                               
                            </ul>
                        </div>
                    </div>
                </section>
		
				<section class="all-category-panel ctpd2">
                    <div class="container-fluid">
                        <div class="">
							<div id="loading" ></div>
							<div id="pageData"></div>
							<span class="flash"></span>
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


<?php include ("category.php"); ?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->
	
    