<?php 
ob_start();
include_once 'db_connect.php';

class hdr_mnu {

public function main_menu()
	{
		global $mysqli;
		$stmt = $mysqli->prepare("SELECT menu_id, menu_name, img1 from menu 
			WHERE type = 1 AND activity = 1 ORDER BY menu_id ASC LIMIT 10");
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($m_id, $m_name, $img1);
		
		while ($stmt->fetch()) {
				global $mysqli;
				$stmt_sub = $mysqli->prepare("SELECT sub_menu_id, sub_menu, menu_id from sub_menu 
								  WHERE menu_id = ? ORDER BY sub_menu_id ASC");
				$stmt_sub->bind_param('s', $m_id);  // Bind "$email" to parameter.
				$stmt_sub->execute();
				$stmt_sub->store_result();
				$stmt_sub->bind_result($sub_menu_id, $sub_menu, $menu_id);

   				if ($stmt_sub->num_rows > 0) {$tree_value = 'class="has-cat-mega"';}
				else {$tree_value = '';}				
							
							echo'
							<li class="dropdown menu-item"> 
			
								<a href="page_id/'.$m_id.'" class="dropdown-toggle" data-hover="dropdown"> 
									<img src="images/icon/'.$img1.'" alt="ico" width="20px" /> '.$m_name.'
								</a>';
							if ($stmt_sub->num_rows > 0) {
							echo'
								<ul class="dropdown-menu mega-menu">
									<li class="yamm-content">
										<div class="row">';
											if ($stmt_sub->num_rows > 0) {
											while ($stmt_sub->fetch()) {
											global $mysqli;
											$stmt_t_sub = $mysqli->prepare("SELECT id, name, sub_menu_id from sd_third_sub 
												 WHERE sub_menu_id = ? ORDER BY id ASC");
											$stmt_t_sub->bind_param('s', $sub_menu_id);  // Bind "$email" to parameter.
											$stmt_t_sub->execute();
											$stmt_t_sub->store_result();
											$stmt_t_sub->bind_result($ts_id, $ts_menu_n, $s_menu_id);
												echo ' 
												<div class="col-sm-12 col-md-3">
													<h2 class="title"><a href="cat_id/'.$sub_menu_id.'">'.$sub_menu.'</a></h2>
													<ul class="links list-unstyled">';
														while ($stmt_t_sub->fetch()) {
														echo '
															<li><a href="cat_id/'.$s_menu_id.'/'.$ts_id.'">'.$ts_menu_n.'</a></li>';
																}
														$stmt_t_sub->close();  
													echo '
													</ul>
												</div>';
													}
											$stmt_sub->close(); 
										echo '

										</div>';
									}
 									 
									 	echo'
									</li>
								</ul>';
									}
 									 
								echo'
							</li>
								
							
									';
								 }
						 $stmt->close();
	}
	
	
	
public function main_menu_header()
	{
		global $mysqli;
		$stmt = $mysqli->prepare("SELECT menu_id, menu_name, img1 from menu 
			WHERE type = 1 AND activity = 1 ORDER BY menu_id ASC LIMIT 10");
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($m_id, $m_name, $img1);
		
		while ($stmt->fetch()) {
				global $mysqli;
				$stmt_sub = $mysqli->prepare("SELECT sub_menu_id, sub_menu, menu_id from sub_menu 
								  WHERE menu_id = ? ORDER BY sub_menu_id ASC");
				$stmt_sub->bind_param('s', $m_id);  // Bind "$email" to parameter.
				$stmt_sub->execute();
				$stmt_sub->store_result();
				$stmt_sub->bind_result($sub_menu_id, $sub_menu, $menu_id);

   				if ($stmt_sub->num_rows > 0) {$tree_value = 'class="has-cat-mega"';}
				else {$tree_value = '';}				
							
							echo'
							<li class="dropdown yamm mega-menu"> <a href="page_id/'.$m_id.'" data-hover="dropdown" class="dropdown-toggle">'.$m_name.' </a>';
							if ($stmt_sub->num_rows > 0) {
							echo'
							  <ul class="dropdown-menu container">
								<li>
								  <div class="yamm-content ">
									<div class="row">';
										if ($stmt_sub->num_rows > 0) {
											while ($stmt_sub->fetch()) {
											global $mysqli;
											$stmt_t_sub = $mysqli->prepare("SELECT id, name, sub_menu_id from sd_third_sub 
												 WHERE sub_menu_id = ? ORDER BY id ASC");
											$stmt_t_sub->bind_param('s', $sub_menu_id);  // Bind "$email" to parameter.
											$stmt_t_sub->execute();
											$stmt_t_sub->store_result();
											$stmt_t_sub->bind_result($ts_id, $ts_menu_n, $s_menu_id);
											echo ' 
												<div class="col-xs-12 col-sm-6 col-md-2 col-menu">
													<h2 class="title"><a href="cat_id/'.$sub_menu_id.'">'.$sub_menu.'</a></h2>
													<ul class="links">';
														while ($stmt_t_sub->fetch()) {
														echo '
															<li><a href="cat_id/'.$s_menu_id.'/'.$ts_id.'">'.$ts_menu_n.'</a></li>';
																}
														$stmt_t_sub->close();  
													echo '
													</ul>
												</div>';
													}
											$stmt_sub->close(); 
										echo '
									</div>
								  </div>';
									}
 									 
									 	echo'
								</li>
							  </ul>';
									}
 									 
							echo'
							</li>
								
							
									';
								 }
						 $stmt->close();
	}



public function allcategory()
	{
		global $mysqli;
		$stmt = $mysqli->prepare("SELECT menu_id, menu_name from menu 
			WHERE type = 1  ORDER BY menu_id ASC");
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($m_id, $m_name);
		
		while ($stmt->fetch()) {
				global $mysqli;
				$stmt_sub = $mysqli->prepare("SELECT sub_menu_id, sub_menu, menu_id from sub_menu 
								  WHERE menu_id = ? ORDER BY sub_menu_id ASC");
				$stmt_sub->bind_param('s', $m_id);  // Bind "$email" to parameter.
				$stmt_sub->execute();
				$stmt_sub->store_result();
				$stmt_sub->bind_result($sub_menu_id, $sub_menu, $menu_id);

   				if ($stmt_sub->num_rows > 0) {$tree_value = 'class="has-cat-mega"';}
				else {$tree_value = '';}				
							
							echo '				<div class="custom-col-5">
													<div class="wrap-vertical-nav">
														<h2 class="menu-title"><a class="sbtc" href="page_id/'.$m_id.'">'.$m_name.'</a></h2>
														<ul data-menuname="Men Fashion">';
												 		 while ($stmt_sub->fetch()) {
													 	 echo '
															<li class="menu-item"><a href="cat_id/'.$sub_menu_id.'" class="link-term">'.$sub_menu.'</a></li>';
															}
														$stmt_sub->close();  
												 		echo '
															
														</ul>
													</div>
												</div>
									';
								 }
						 $stmt->close();
	}



	
	

	public function featured_top(){
												global $mysqli;
												$stmt_more = $mysqli->prepare("SELECT id, currency FROM sd_currency
														WHERE activity = 1
													ORDER BY id ASC");
												$stmt_more->execute();    // Execute the prepared query.
												// get variables from result.
												$stmt_more->bind_result($C_id, $currency);
												$stmt_more->store_result();
												$stmt_more->fetch();
		   global $mysqli;
			$featud_id = 1;
			if ($stmt_pro = $mysqli->prepare("SELECT id, item_name, price, dollar, dollar_discount, discount_price, img1 from sd_item_l
					  WHERE activity = 1 AND featured = ?
					ORDER BY id DESC limit 6")){
					$stmt_pro->bind_param('s', $featud_id);  // Bind "$email" to parameter.
					$stmt_pro->execute();    // Execute the prepared query.
								// get variables from result.
					$stmt_pro->bind_result($item_id, $item_name, $price, $dollar, $dollar_discount, $discount_price, $img1);
					$stmt_pro->store_result();
									}
					  while ($stmt_pro->fetch()) {	 
					 	$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);
						echo '		
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="product/'.$item_id.'/'.urlencode($str).'" title="'.$item_name.'">
												<figure><img src="images/products/'.$img1.'" alt="'.$item_name.'"></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="product/'.$item_id.'/'.urlencode($str).'" class="product-name"><span>'.$item_name.'</span></a>';
											if ($discount_price > 0){
											echo '
											<div class="wrap-price mrgn0"><span class="product-price">৳ '.$discount_price.'</span></div>';
											}
												else{
												
											echo '
											<div class="wrap-price mrgn0"><span class="product-price">৳ '.$price.'</span></div>';
												}
											echo'
											
													
											
											';
											if ($discount_price > 0){
											echo '
											<div class="wrap-price mrgn0"><span class="product-price">$'.number_format($discount_price / $currency ).'</span></div>';
											}
												else{
												
											echo '
											<div class="wrap-price mrgn0"><span class="product-price">$'.number_format($price / $currency).'</span></div>';
												}
											echo'
											
											
											
										</div>
									</div>
								</li>
											
		';
			
			}
			$stmt_pro->close();
						
	}

}

$obj_hhdr_mnu = new hdr_mnu();

 ?>