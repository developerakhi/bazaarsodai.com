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
	

        <!-- /# Main Body -->
        <div class="content-wrap">
			
            <div class="main min-vh-100 mpt0" id="get_product">
				
				<section class="all-category-panel">
                    <div class="container-fluid">
                        <div class="row">
						<div class="col-md-4"> </div>
						
													
                            <div class="col-md-4">
							<div class="sasdh">
								<div class="mrlg">
									<a href="https://sorbovuk.com/"><img src="images/logo/logo.png" alt="" style="width:60%" /></a>
								</div>	
									<?php if($client_id == 'success'){ ?>
									
										<div class="rsucess">Congratulations ! <i class="fa fa-check-circle" aria-hidden="true"></i></div>
										<div class="fullCart-body bg- #ebedef">
											<form action="seller/includes/process_login.php"  method="post" name="login_form">
													
													<div class="form-group">
														<div class="row">
															<div class="col-md-12 col-sm-12">
																<label class="mb-0" for="CustomerName">Email Address</label>
																<input type="email" class="form-control" name="email" placeholder="Email Address">
															</div>
														</div>
													</div>
													
													<div class="form-group">
														<div class="row">
															<div class="col-md-12 col-sm-12">
																<label class="mb-0" for="CustomerName">Password</label>
																<input type="password" class="form-control" name="password" placeholder="Password">
															</div>
														</div>
													</div>
													<div class="m-b-10 center">
													<div class="lgmrb"><a href="selleraccoount">Create New Account ? </a> </div>
													    <button type="submit" class="btn btn-round gb-gradient mx-4" onclick="formhash(this.form, this.form.password);">Sign In</button>
													</div>
										   
											</form>
										</div>
										<?php
										}
										else
										{
										 if($client_id == 'error'){ echo '<p class="error" style="color: red;font-size: 14px;font-weight: bold;">A user with this email address already exists. Please Try Another Email Address</p>';
									}?>
										 
                                <div class="fullCart-body bg- #ebedef">
                                    <form action="include/register_seller_inc_code.php" method="post" class="">
										<input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
										<input type="hidden" name="username" class="form-control" required placeholder="" value="username"> 
											
											<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Shop Name</label>
                                                        <input type="text" class="form-control" name="shop_name" placeholder="Shop Name" required="required">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Proprietor Name</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Proprietor Name" required="required">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Mobile Number</label>
                                                        <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" required="required" >
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Email Address</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Confirm Password</label>
                                                        <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
											 <div class="form-check checkbox-theme">
												<input class="form-check-input mrk" name="terms" required type="checkbox">
												<div class="satrm" data-toggle="modal" data-target="#myModal">Terms & Conditions</div>
											</div>
											
											<div class="m-b-10 center">
											<div class="lgmrb"><a href="sellerlogin">Have an Account ? </a> </div>
												<button class="btn btn-round gb-gradient mx-4" type="submit" onclick="return regformhash(this.form,
												   this.form.username,
												   this.form.mobile,
												   this.form.password,
												   this.form.confirmpwd);">Register Now !
											   </button>
											</div>
                                    </form>
                                </div>      
                            </div>
							
						<?php } ?>	
						</div>		
						</div>
                    </div>
                </section>
				<!-- Terms & Conditions -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
						<?php
							global $mysqli;
							$stmt_trms = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts
								WHERE id = 13 ");
							$stmt_trms->execute();    // Execute the prepared query.
										// get variables from result.
							$stmt_trms->store_result();
							$stmt_trms->bind_result($id, $full_desc1, $full_desc2);
							$stmt_trms->fetch();
							$stmt_trms->close();
						?>
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <h4 class="modal-title"><?php echo $full_desc1; ?></h4>
							</div>
							<div class="modal-body trdts">

							<?php echo $full_desc2; ?>
							
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						  </div>
						  
						</div>
					</div>
				<!-- Terms & Conditions -->
            </div>	
        </div>
      
<script>
$(window).load(function () {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
</script>


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