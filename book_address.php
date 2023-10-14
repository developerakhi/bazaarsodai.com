<?php 	
require_once("include/functions_lgn.php"); 
require_once("include/functions.php");
sec_session_start(); 
$getID = $_SESSION['user_id'];
if($getID == NULL) {
    header("Location: https://bazaarsodai.com/");
}

if ($stmt = $mysqli->prepare("SELECT id, username, name, email, mobile, address
FROM sd_client
WHERE id = ?
LIMIT 1")) {
$stmt->bind_param('s', $getID);  
$stmt->execute();    
$stmt->store_result();
$stmt->bind_result($user_id, $username1, $e_name, $e_email, $e_mobile, $e_address);
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
                        <!--<?php include('myaccount_left_menu.php')?>-->
                    <div class="aiz-user-panel">
                        <!--<div class="row gutters-10">-->
                            <div class="myaccount-content">
                                <h3>Address Book</h3>
                                <div class="row">
                            <div class="col-md-12">
                                <div class="fullCart-body bg- #ebedef  m-b-24">
                                    <div class="delivery-option-form">
                                            <?php if ($getID != NULL) { ?>
                                            
                                            <a class="btn check_address_delete col-md-12" data-toggle="modal" data-target="#addAddress"><i class="fa fa-plus"></i>  New Address</a>
                                                
                                            <div class="row">
                                                <?php 
                								global $mysqli;
                								$userAddress = $mysqli->prepare("SELECT id, name, mobile, email, address from user_address WHERE user_id = '".$user_id."'
                							    ORDER BY id ASC");
                								$userAddress->execute();   
                								$userAddress->bind_result($aid, $aName, $aMobile, $aEmail, $aAddress);
                								$userAddress->store_result();
                									
                									while ($userAddress->fetch()) { 
                								?> 
                                                <div class="col-md-12">
                                                    <div class="check_address">
                                                        <!--<label><input type="radio" name="address_id" required value="<?php echo $aid; ?>"></label>-->
                                                        <div><?php echo $aName; ?></div>
                                                        <div><?php echo $aMobile; ?></div>
                                                        <div><?php echo $aEmail; ?></div>
                                                        <div><?php echo $aAddress; ?></div>
                                                        <a type ="button" href="has-bin/delete_user_add_address.php?a_id=<?php echo $aid; ?>" class="btn btn-info float-right edit" style="margin: -26px 0; color: #fff; background-color: #326230;">Delete</a>
                                                   </div>
                                                </div>
                                                <?php }$userAddress->close();?>
                                            </div>
                                            
                                            <?php } else {?>
                                            
										   <div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Customer Name</label>
                                                        <input type="text" class="form-control" value="<?php echo $custmr_name; ?>" name="name" placeholder="Full Name" required="required">
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Mobile Number</label>
                                                        <input type="number" class="form-control" value="<?php echo $custmr_mobile; ?>" placeholder="Mobile Number" name="mobile" required="required" >
                                                    </div>
                                                </div>
                                            </div>
											
											<div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0" for="CustomerName">Email Address</label>
                                                        <input type="email" class="form-control"  value="<?php echo $custmr_email; ?>"  name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group m-b-24">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
														<label class="mb-0">Delivery Address</label>
                                                        <textarea type="text" class="form-control" name="address" value="<?php echo $custmr_address; ?>" placeholder="Your Delivery Address" required="required"></textarea>
													</div>
                                                </div>
                                            </div>
											
                                         <?php } ?>
                                   
                                    </div>
                                </div>      
                            </div>
							
					</form>
					
				</section>
                <!-- /# My Delivery Options panel-->

            
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
    
    
    
    <div class="modal fade text-left" id="addAddress" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
    		<div class="modal-content">
    			<div class="modal-header" style="padding: 10px; display:block;">
    				<button type="button" class="close" data-dismiss="modal">&times;</button>
    				<h4 id="modalTitle" class="modal-title"> Add Address</h4>
    			</div>
    			<div class="modal-body" style="overflow-y: unset;">
    				<form action="has-bin/insert_user_add_address.php" method="post" enctype="multipart/form-data">
    				    <input name="user_id" type="hidden" value="<?php echo $getID; ?>"> </input>
    					<div class="form-group row">
    						<div class="form-group col-md-12">
    							<label>Name</label>
    							<input type="text" name="name" required class="form-control"  placeholder="Name">
    						</div>
    						<div class="form-group col-md-12">
    							<label>Mobile Number</label>
    							<input type="text" name="mobile" required class="form-control"  placeholder="Mobile Number">
    						</div>
    						<div class="form-group col-md-12">
    							<label>Email</label>
    							<input type="email" name="email" class="form-control"  placeholder="Email">
    						</div>
    						<div class="form-group col-md-12">
    							<label>Address</label>
    							<input type="text" name="address" class="form-control"  placeholder="Address">
    						</div>
    					</div>
    					<div class="text-right">
    						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>	  	  
    </div>
    
    <script>
	$(document).ready(function(){
	$("select#drop1").change(function(){

		var country_id =  $("select#drop1 option:selected").attr('value'); 
	// alert(country_id);	
		$("#person").html( "" );
		if (country_id.length > 0 ) { 
			
		 $.ajax({
				type: "POST",
				url: "include/payment.php",
				data: "country_id="+country_id,
				cache: false,
				beforeSend: function () { 
					$('#person').html('<img src="assets/img/ajx_loader.gif" alt="" width="" height="100">');
				},
				success: function(html) {    
					$("#person").html( html );
				}
			});
		} 
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