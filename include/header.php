<?php 
require_once("functions.php");
require_once("functions_lgn.php");

include_once 'msp_lp.php';


$sanitize = true;
 
$ssID =  frst_session_start();
$getID = $_SESSION['user_id'];
if ($stmt = $mysqli->prepare("SELECT id, name, mobile FROM sd_client WHERE id = ? LIMIT 1")) {
$stmt->bind_param('s', $getID);
$stmt->execute(); 
$stmt->store_result();
$stmt->bind_result($user_id, $username, $userMobile);
$stmt->fetch();
}

global $mysqli;
$stmt_ttl2 = $mysqli->prepare("SELECT SUM(t_price), SUM(qty) FROM sd_cart WHERE session_d = ? ");
$stmt_ttl2->bind_param('s', $ssID);
$stmt_ttl2->execute();   
$stmt_ttl2->store_result();
$stmt_ttl2->bind_result($sum_ttl , $sum_ttl_qty);
$stmt_ttl2->fetch();
$stmt_ttl2->close();

global $mysqli;
$stmt = $mysqli->prepare("SELECT top_no, header_color, email, copyright FROM sd_page_setup");
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($top_no, $header_color, $email, $address);
$stmt->fetch();
$stmt->close();

global $mysqli;
$stmt = $mysqli->prepare("SELECT fc, twitter, google, pin, instagram FROM sd_social ");
$stmt->execute();  
$stmt->store_result();
$stmt->bind_result($fc, $twitter, $google, $pin, $instagram);
$stmt->fetch();
$stmt->close();
	
global $mysqli;
$stmt_2 = $mysqli->prepare("SELECT id, session_d, pro_id, qty, price, t_price FROM sd_cart WHERE session_d = ? ");
$stmt_2->bind_param('s', $ssID); 
$stmt_2->execute();   
$stmt_2->store_result();
$stmt_2->bind_result($cart_id, $session_d, $pro_id, $qty, $price, $ttl_price);

?>
<?php include ("model.php"); ?>
        <!-- User Login Modal -->
		<div class="header" style="background:<?php echo $header_color; ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div id ="sidebar_open_close" class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
							<div class="logo"><a href="https://bazaarsodai.com/">
                                <img src="images/logo/logo.png" alt="" style="width:" /></a>
                            </div>
                            <a class="showOnPhone mobile-logo" href="https://bazaarsodai.com/"><img src="images/logo/logo.png" alt=""></a>
                        </div>
					
                        <div class="search" style="">
                            <form action="search" method="GET" enctype="multipart/form-data" class="input-group topbar-search-form float-left">
                                <input type="text" class="form-control" name="product" placeholder="Searching Bazaarsodai..." id="tags" required >
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="la la-search" style="margin-top: 7px; margin-right: 3px;"></i></button>
                                </span>
                            </form>
                        </div>
                   
                        <div class="float-right topbar-right-button-group product-icon" style="">
                            <ul>
                                 <li class="header-icon hideOnPhone"><a class="hlpm float-left" href="request" style="color:#000;"><img src="images/4110870-200.png" style="width:30px; height: 30px; margin: 0 8px;" /><span>Product Request</span></a></li>
    							<?php if($getID != ''){
    							echo '
    								<li class="header-icon usre"><i class="la la-user lh-36"></i><span>'.$username.'</span>
    									<div class="drop-down dropdown-profile text-left no-shadow">
    										<div class="dropdown-content-heading">
    											<a href="profile"><i class="fa fa-user"></i><span class="text-left">Your Profile</span></a>
    										</div>
    										<div class="dropdown-content-body">
    											<ul>
    												<li><a id="order_history" href="order"><i class="fa fa-shopping-cart"></i> <span>Your Orders</span></a></li>
    												<li><a id="order_history" href="bookAddress"><i class="fa fa-shopping-cart"></i> <span>Book Address</span></a></li>
    												<li><a id="order_history" href="order"><i class="fa fa-credit-card"></i> <span>Payment History</span></a></li>
    												<li><a id="order_history" href="password"><i class="fa fa-key"></i><span>Change Password</span></a></li>
    												<li>
    													<a href="include/logout.php"><i class="ti-power-off"></i> <span>Log Out !</span></a>
    												</li>
    											</ul>
    										</div>
    										
    									</div>
    								</li>';
    							}else{?>
    								<li class="header-icon usre float-right"><i class="la la-user lh-36"></i>
                                       <a id="clickbtn" data-toggle="modal" data-target="#userLoginModalCenter">My Account</a>
                                    </li>
    							<?php } ?>	
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>