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
$stmt = $mysqli->prepare("SELECT id, shop_id, item_name, item_code, sub_cat, unit, category, sort_desc, details, video, img1, price, discount_price, discount_per FROM sd_item_l
			  WHERE activity = 1 AND id = ?
				LIMIT 1");
$stmt->bind_param('i', $url_string);  // Bind "$email" to parameter.
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($main_itm_id, $shop_id, $item_name55, $item_code, $sub_cat, $unit, $category, $sort_description, $details, $video, $img_large, $top_price, $discount_price, $discount_per);
$stmt->fetch();
$stmt->close();


global $mysqli;
$url_id = 5;
$stmt = $mysqli->prepare("SELECT id, title, sort_desc, full_desc FROM sd_posts
			  WHERE id = ?
				LIMIT 1");
$stmt->bind_param('i', $url_id);  // Bind "$email" to parameter.
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($id, $title, $sort_desc, $full_desc);
$stmt->fetch();
$stmt->close();

$stmt = $mysqli->prepare("SELECT menu_id, menu_name FROM menu
			  WHERE menu_id = ?
				LIMIT 1");
$stmt->bind_param('i', $category);  // Bind "$email" to parameter.
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($dmenu_id, $dmenu_name);
$stmt->fetch();
$stmt->close();

$stmt = $mysqli->prepare("SELECT sub_menu_id, sub_menu FROM sub_menu
			  WHERE sub_menu_id = ?
				LIMIT 1");
$stmt->bind_param('i', $sub_cat);  // Bind "$email" to parameter.
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($ssub_menu_id, $smenu_name);
$stmt->fetch();
$stmt->close();

$stmt = $mysqli->prepare("SELECT id, name FROM sd_third_sub
			  WHERE id = ?
				LIMIT 1");
$stmt->bind_param('i', $sub_sub);  // Bind "$email" to parameter.
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($tr_id, $tr_name);
$stmt->fetch();
$stmt->close();


global $mysqli;
$stmt = $mysqli->prepare("SELECT id, img1, img2, img3, img4 FROM sd_more_img
		WHERE pro_id = '".$url_string."' ");
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($m_id, $m_img1, $m_img2, $m_img3, $m_img4);
$stmt->fetch();
$stmt->close();
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
      <link rel="stylesheet" href="css/profile_setting.css"/>
 </head>

  <body>
		
        <!-- /# Header -->
			<?php include ("include/header.php"); ?>
        <!-- /# Header -->

        <!-- /# sidebar -->
			<?php include ("include/left_side.php"); ?>
        <!-- /# sidebar -->


        <!-- /# Main Body -->
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                       <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <!-- <span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span> --> 
                        <div class="col-md-6"><label style="font-size:13px;">Choose Profile Picture</label>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    </div>
                        <!-- <label class="labels">Choose Profile Picture</label> -->
                        
                    </div>
                </div>
                <div class="col-md-8 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Full Name</label><input style="font-size:13px;" type="text" class="form-control" placeholder="Full Name" value=""></div>
                            <div class="col-md-6"><label class="labels">User Name</label><input style="font-size:13px;" type="text" class="form-control" value="" placeholder="User Name"></div>
                        </div>
                        <div class="row mt-3">
                            <!-- <div class="col-md-12"><label class="labels">--Select Gender--</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Male</option>
                                    <option>Female</option>
                                </select>
                            </div> -->
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input style="font-size:13px;" type="text" class="form-control" placeholder="Phone Number" value=""></div>
                            <div class="col-md-12"><label class="labels">Home Address</label><input style="font-size:13px;" type="text" class="form-control" placeholder="Home Address" value=""></div>
                            <div class="col-md-12"><label class="labels">Office Address</label><input style="font-size:13px;" type="text" class="form-control" placeholder="Office Address" value=""></div>
                            <!-- <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date" class="form-control" placeholder="date of birth" value=""></div> -->
                            <div class="col-md-12"><label class="labels">Email ID</label><input style="font-size:13px;" type="text" class="form-control" placeholder="Email Id" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input style="font-size:13px;" type="text" class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input style="font-size:13px;" type="text" class="form-control" value="" placeholder="State"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                    </div>
            </div>
            <!-- <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div> -->
        </div>
        <?php include ("include/footer.php"); ?>
</div>
</div>
</div>    

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