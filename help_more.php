<?php 	

require_once("include/functions.php");
$subcat = urlencode($_GET["cat_id"]);

?>

<!DOCTYPE html>
<html class="no-js" lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="styles9c82.css?v8.4.3" rel="stylesheet">
  <!--<link href="style-odo.css?v4.4.1" rel="stylesheet">-->
  <!-- google font -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">
  <link href="https://fonts.googleapis.com/css?family=Questrial|Quicksand:300,400,500,700" rel="stylesheet">
<link href="css/myaccount_style.css" rel="stylesheet">
<style>
    #exTab1 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

/* change border radius for the tab , apply corners on top*/

#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}
</style>
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
                        <div class="aiz-user-panel" id="get-product">
                            <!--<div class="card">-->
                                <!--<div class="card-body">-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br/><br/>
                                            
                                            <div class="col-md-12 row">
                                                
                                                <!--<div class="container">-->
                                                    <ul class="nav nav-tabs" id="myTabs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#tab1">Privacy Policy</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#tab2">Terms & Conditions</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#tab3">Return Policy</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#tab4">Article</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#tab5">FAQ</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#tab6">Contact Us</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab1">
                                                            <div class="main" id="get_product">
                                                    			<?php
                                                    			global $mysqli;
                                                    			$stmt_faq = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 10");
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
                                                        <div class="tab-pane" id="tab2">
                                                            <div class="main" id="get_product">
                                                    			<?php
                                                    			global $mysqli;
                                                    			$stmt_faq = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 8");
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
                                                        <div class="tab-pane" id="tab3">
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
                                                        <div class="tab-pane" id="tab4">
                                                            <div class="main" id="get_product">
                                                    			<?php
                                                    			global $mysqli;
                                                    			$stmt_faq = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 12");
                                                    			$stmt_faq->execute();    // Execute the prepared query.
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
                                                        <div class="tab-pane" id="tab5">
                                                            <div class="main" id="get_product">
                                                        	    <?php
                                                        		global $mysqli;
                                                        		$stmt_faq = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 9");
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
                                                        <div class="tab-pane" id="tab6">
                                                            <section class="all-category-panel min-vh-100" id="person">
                                                                <div class="container-fluid">
                                                                    <div class="row"><div class="col-md-4"> </div>
                                            					        <div class="col-md-5">
                                            					            <?php 
                                                                                session_start();
                                                                                if(isset($_SESSION['status']))
                                                                                {
                                                                                ?>
                                                                                    <div class="alert alert-success alert-dismissible fade show">
                                                                                        <strong>Thank you, </strong>Successfully submit your information!
                                                                                    </div>
                                                                                  <?php  unset($_SESSION['status']);
                                                                                }
                                                                            
                                                                            ?>
                                                                            <form action="../contact_us_inc.php" enctype="multipart/form-data"  method="POST">
                                                                				<div class="box-body" style="margin-top:50px; margin-bottom:30px;">
                                                                				    <h3 class="text-center">Contact Us</h3>
                                                                                    <div class="form-group">
                                                                               			 <label>Name <span class="str">*</span> </label>
                                                                    					<input name="name" type="text" class="form-control" value="" autocomplete="off" required placeholder="Name">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                               			 <label>Email <span class="str">*</span></label>
                                                                    					<input type="email" name="email" class="form-control" required placeholder="Email">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                               			 <label>Phone Number</label>
                                                                    					<input type="number" class="form-control" name="phone_number" placeholder="Phone Number">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                               			 <label>Message</label>
                                                                               			 <textarea type="text" name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" value="" autocomplete="off" required></textarea>
                                                                                    </div>
                                                                                   
                                                                              <div class="box-footer button-demo">
                                                                                <button class="btn btn-success" type="submit" name="submit" data-color="green" data-style="expand-right">Submit</button>
                                                                              </div>
                                                                            </div>
                                                                            </form>
                                                                        </div>
                                            						</div>
                                                                </div>
                                                            </section>
                                                        </div>
                                                    </div>
                                                <!--</div>-->
                                                
                                                
                                                
                                            <!--<div class="col-md-4"><a class="help btn btn-warning" href="privacy_policy" style="color: #fff; width: 100%;">Privacy Policy</a></div>-->
                                            <!--<div class="col-md-4"><a class="help btn btn-warning" href="terms" style="color: #fff; width: 100%;">Terms & Conditions</a></div>-->
                                            <!--<div class="col-md-4"><a class="help btn btn-warning" href="return_policy" style="color: #fff; width: 100%;">Return Policy</a></div>-->
                                            </div>
                                            
                                            <div class="content-wrap min-vh-100">
                                    		
                                                <div class="main" id="get_product">
                                        			<?php
                                        			global $mysqli;
                                        			$stmt_faq = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 7");
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
<!-- /# Footer -->

</div>	
</div>

<?php include ("include/cart.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>