<?php
function active($currect_page){
	$url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
		$url = end($url_array);  
		if($currect_page == $url){
		echo 'active'; //class name in css 
		 } 
	}
?>						<div class="left-side-tabs">
    						<div class="dashboard-left-links">
    							<a href="profile" class="<?php active('dashboard.php');?> user-item"><i class="uil uil-apps"></i>My Profile</a>
    							<a href="order" class="<?php active('my_order.php');?> user-item"><i class="uil uil-box"></i>My Orders</a>
    							<a href="profile.php" class="<?php active('profile.php');?> user-item"><i class="uil uil-gift"></i>Account Details</a>
    							<a href="password.php" class="<?php active('password.php');?> user-item"><i class="uil uil-wallet"></i>Password</a>
    							<a href="include/logout.php" class="<?php active('include/logout.php');?> user-item"><i class="uil uil-exit"></i>Logout</a>
    						</div>
					    </div>