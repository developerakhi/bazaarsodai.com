<?php 	
require_once("include/functions_lgn.php"); 
require_once("include/functions.php");

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
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">-->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>-->
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
            <div class="main min-vh-100" id="get_product">
    			<div class="container rounded mt-5 mb-5">
                    <div class="row">
                        <div class="aiz-user-panel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="sms">
                                        <?php 
                                            session_start();
                                            if(isset($_SESSION['status']))
                                            {
                                                ?>
                                                    <div class="alert alert-success alert-dismissible fade show">
                                                        <strong>Thank you. </strong><?= $_SESSION['status']; ?>
                                                       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                    </div>
                                                <?php 
                                                unset($_SESSION['status']);
                                            }
                                        
                                        ?>
                    				    <h3>COULDN'T FIND YOUR DESIRED PRODUCT? SEND US A REQUEST & WE WILL TRY OUR BEST TO GET IT AT YOUR DOORSTEP !</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4"> 
                                        </div>
                                        <div class="col-md-4">
                                            <form action="request_order_inc.php" enctype="multipart/form-data"  method="POST">
                                				<div class="box-body" style="margin-top:50px; margin-bottom:30px;">
                                				    
                                                    <div class="form-group">
                                               			 <label>Name <span class="str">*</span> </label>
                                    					<input name="name" type="text" class="form-control" value="" autocomplete="off" required placeholder="Name">
                                                    </div>
                                                    <div class="form-group">
                                               			 <label>Phone <span class="str">*</span></label>
                                    					<input type="number" name="phone" class="form-control" required placeholder="Phone">
                                                    </div>
                                                    <div class="form-group">
                                               			 <label>Address</label>
                                    					<input type="text" class="form-control" name="address" placeholder="Address">
                                                    </div>
                                                    <div class="form-group">
                                               			 <label>Product Name <span class="str">*</span></label>
                                               			 <textarea type="text" name="product_name" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="1" value="" autocomplete="off" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                               			 <label>Image Upload</label>
                                    					<input type="file"  name="image" oninput="pic.src=window.URL.createObjectURL(this.files[0])" class="btn btn-default btn-file" style="margin-left: -13px;">
                                    					<img class="caticon" id="pic" src="../assets/dist/img/example.png"/ width="70" height="70">
                                                    </div>
                                              <div class="box-footer button-demo">
                                                <button class="btn btn-success" type="submit" name="submit" data-color="green" data-style="expand-right">Submit</button>
                                              </div>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="col-md-4"> 
                                        </div>
                                    </div>
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
	
