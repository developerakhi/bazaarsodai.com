<?php 
	$client_id = filter_input(INPUT_GET, 'r', FILTER_SANITIZE_STRING);
	require_once("include/functions_lgn.php"); 
	sec_session_start(); 
	if(login_check($mysqli) == true) {
            
			 header("Location:https://bazaarsodai.com/");
			 } 
            else { 
                   
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
	  
	<script type="text/JavaScript" src="assets/js/login/sha512.js"></script> 
	<script type="text/JavaScript" src="assets/js/login/forms.js"></script>
	<script type="text/javascript" src="assets/js/login/wow.min.js"></script>
	<script>
		  new WOW().init();
	</script>
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
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://sorbovuk.com/">Home</a></li>
                                <li> Sign Up </li>
                               
                            </ul>
                        </div>
                    </div>
                </section>
		
				<section class="all-category-panel">
                    <div class="container-fluid">
                        <div class="row">
						<div class="col-md-3"> </div>
						
							
                            <div class="col-md-6">
							<?php if($client_id == 'success'){ ?>
										<div class="rsucess">Registration Success <i class="fa fa-check-circle" aria-hidden="true"></i>
											<div><a href="login" class="btn btn-primary gb-gradient">Login</a></div>
										</div>
										
									<?php
										}
										else
										{
										 if($client_id == 'error')?>
										 
                                <div class="fullCart-body bg- #ebedef  m-b-24">
                                    <form action="include/register.inc.php" method="post" class="delivery-option-form">
										<input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
										<input type="hidden" name="username" class="form-control" required placeholder="" value="username"> 
										   <div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Full Name</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Mobile Number</label>
                                                        <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" required="required" >
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Email Address</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Confirm Password</label>
                                                        <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
											
                                            <div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0">Address</label>
                                                        <textarea type="text" class="form-control" name="address"placeholder="Your Address" ></textarea>
													</div>
                                                </div>
                                            </div>
											
											<div class="m-b-10 center">
											<div class="lgmrb"><a href="login">Have an Account ? </a> </div>
												<button class="btn btn-round gb-gradient mx-4" type="submit" onclick="return regformhash(this.form,
												this.form.username,
												this.form.mobile,
												this.form.password,
												this.form.confirmpwd);">Sign Up Now
												</button>
											</div>
                                   
                                    </form>
                                </div>      
                            </div>
							
						<?php } ?>
								
							<div class="col-md-3"> </div>
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