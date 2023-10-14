<?php 
require_once("functions.php");
require_once("functions_lgn.php");
include_once 'msp_lp.php';

$sanitize = true;
 
$ssID =  frst_session_start();
$getID = $_SESSION['user_id'];
    if ($stmt = $mysqli->prepare("SELECT id, name, email
        FROM sd_client
       WHERE id = ?
        LIMIT 1")) {
        $stmt->bind_param('s', $getID);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $username, $email);
        $stmt->fetch();
		}

global $mysqli;
$stmt_ttl2 = $mysqli->prepare("SELECT SUM(t_price), SUM(qty) FROM sd_cart
			  WHERE session_d = ? ");
$stmt_ttl2->bind_param('s', $ssID);  // Bind "$email" to parameter.
$stmt_ttl2->execute();    // Execute the prepared query.
			// get variables from result.
$stmt_ttl2->store_result();
$stmt_ttl2->bind_result($sum_ttl , $sum_ttl_qty);
$stmt_ttl2->fetch();
$stmt_ttl2->close();

global $mysqli;
$stmt = $mysqli->prepare("SELECT top_no, email FROM sd_page_setup");
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($top_no, $email);
$stmt->fetch();
$stmt->close();
	
	
global $mysqli;
$stmt_2 = $mysqli->prepare("SELECT id, session_d, pro_id, qty, price, t_price FROM sd_cart
			  WHERE session_d = ? ");
$stmt_2->bind_param('s', $ssID);  // Bind "$email" to parameter.
$stmt_2->execute();    // Execute the prepared query.
			// get variables from result.
$stmt_2->store_result();
$stmt_2->bind_result($cart_id, $session_d, $pro_id, $qty, $price, $ttl_price);

?>
<div class="col-xs-12 col-sm-12 col-md-3 sidebar hidden-sm hidden-xs"> 
    <!-- ================================== TOP NAVIGATION ================================== -->
   <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="fa fa-heartbeat"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
			
			<?php $obj_hhdr_mnu->main_menu(); ?>
			
          
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
		
         <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        </div>