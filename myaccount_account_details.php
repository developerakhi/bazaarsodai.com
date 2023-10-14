<?php 	
require_once("include/functions_lgn.php"); 
require_once("include/functions.php");
sec_session_start(); 
$getID = $_SESSION['user_id'];
if($getID == NULL) {
    header("Location: https://bazaarsodai.com/");
}

if ($stmt = $mysqli->prepare("SELECT id, username, name, email, mobile, address, date
FROM sd_client
WHERE id = ?
LIMIT 1")) {
$stmt->bind_param('s', $getID);  
$stmt->execute();    
$stmt->store_result();
$stmt->bind_result($user_id, $username1, $e_name, $e_email, $e_mobile, $e_address, $e_date);
$stmt->fetch();
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
            <div class="main" id="get_product">
			<div class="container rounded mt-5 mb-5">
                <div class="row">
                    <?php include('myaccount_left_menu.php')?>
                     <div class="aiz-user-panel">
                    <!--<div class="row gutters-10">-->
                        <div class="myaccount-content">
                            <h3>My Account</h3>
                            <div class="account-details-form">
                                <form action="include/up_account_code.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $getID; ?>">
                                    <div class="">
                                        <div class="col-lg-12">
                                            <div class="single-input-item">
                                                <label for="first-name" class="required">Name</label>
                                                <input type="text" name="name" value="<?php echo $e_name; ?>" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input-item">
                                                <label for="first-name" class="required">Mobile</label>
                                                <input type="text" name="mobile" readonly="" value="<?php echo $e_mobile; ?>" placeholder="Mobile">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input-item">
                                                <label for="first-name" class="required">Email</label>
                                                <input type="email" name="email" value="<?php echo $e_email; ?>" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-input-item">
                                                <label for="first-name" class="required">Address</label>
                                                <input type="text" name="address" value="<?php echo $e_address; ?>" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button type="submit" class="check-btn sqr-btn ">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
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
</body>
</html>