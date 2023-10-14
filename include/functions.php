<?php 
ob_start();
 function frst_session_start() {

 if(!isset($_SESSION)){
		session_start();
	}
  $bob = session_id();
	return $bob;
		
	if ( !is_writable(session_save_path()) ) {
	   echo 'Session save path "'.session_save_path().'" is not writable!'; 
	}
	
}


include_once 'db_connect.php';


class home_data {
	
 function base_tag() {
 
   $actual_link = "http://$_SERVER[HTTP_HOST]";  
    return '<BASE href="https://bazaarsodai.com/">';
 	
}
 
	public function slide_data(){
		global $mysqli;
		$stmt = $mysqli->prepare("SELECT id, title_one, title_two, img1, img2 from sd_slide_mng 
 				ORDER BY id DESC limit 10");
		$stmt->execute();
		$stmt->bind_result($id, $title_one, $title_two, $img1, $img2);
		
		while ($stmt->fetch()) {
				echo '
					
					<li><img src="images/slide/'.$img2.'" alt="" id="wows1_0"/></li>
					
					
					';
			 }
	   $stmt->close();
	   
	}


 public function slide_data_cat(){
	$title = isset($_GET['Amar_cat']) ? $_GET['Amar_cat'] : '';
	$url_cat = intval($title);
	
	$MainCat = isset($_GET['MainCat']) ? $_GET['MainCat'] : '';
	$url_main = intval($MainCat);
	
	if($url_cat){
	global $mysqli;
	if ($stmt_m = $mysqli->prepare("SELECT category from sd_item_l
                       WHERE sub_cat = ? ")){
        $stmt_m->bind_param('s', $url_cat);  // Bind "$email" to parameter.
        $stmt_m->execute();    // Execute the prepared query.
                 // get variables from result.
        $stmt_m->bind_result($ca_category);
        $stmt_m->store_result();
        $stmt_m->fetch();
        $stmt_m->close();
          }	
		$stmt = $mysqli->prepare("SELECT id, img1, img2, title_one from sd_slide_mng 
			WHERE cat = '".$ca_category."'
			ORDER BY id DESC limit 5");
		$stmt->execute();
		$stmt->bind_result($id, $img1, $img2, $title_one);
        $stmt->store_result();
		}
		else{
			global $mysqli;
		$stmt = $mysqli->prepare("SELECT id, img1, img2, title_one from sd_slide_mng 
			WHERE cat = '".$url_main."'
			ORDER BY id DESC limit 5");
		$stmt->execute();
		$stmt->bind_result($id, $img1, $img2, $title_one);
        $stmt->store_result();
			
		}
		echo "<ul>";
		while ($stmt->fetch()) {
			echo '<li><a href="'.$title_one.'"><img src="assets/images/slide/'.$img2.'" alt="190217-33244" title="'.$img2.'" id="wows1_0"/></a></li>';
			 }
			 echo "</ul>";
	   $stmt->close();
	   
	}
	
	
public function new_arrival(){
		   global $mysqli;
			$featud_id = 1;
			if ($stmt_pro = $mysqli->prepare("SELECT id, item_name, price, img1, img2 from sd_item_l
					  WHERE activity = 1 AND top_pro = ?
					ORDER BY id DESC limit 30")){
					$stmt_pro->bind_param('s', $featud_id);  // Bind "$email" to parameter.
					$stmt_pro->execute();    // Execute the prepared query.
								// get variables from result.
					$stmt_pro->bind_result($item_id, $item_name, $price, $img1, $img2);
					$stmt_pro->store_result();
									}
					  while ($stmt_pro->fetch()) {
						global $mysqli;
						$stmt = $mysqli->prepare("SELECT id, currency FROM sd_currency WHERE activity = 1");
						$stmt->execute();    // Execute the prepared query.
									// get variables from result.
						$stmt->store_result();
						$stmt->bind_result($c_id, $currency);
						$stmt->fetch();
						$stmt->close();						  
					 	$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);
						echo '
					
						<div class="product-item style1">
								<div class="product-inner equal-elem">
									<div class="product-thumb prmx">
										<div class="thumb-inner">
											<a href="product/'.$item_id.'/'.urlencode($str).'"><img src="images/products/';if ($img1 == NULL){echo 'photo.png';}else{echo ($img1);}echo'" alt="'.$item_name.'"></a>
										</div>
										
									</div>
									<div class="product-innfo">
										<div class="product-name"><a href="product/'.$item_id.'/'.urlencode($str).'">'.$item_name.'</a></div>';
												
									if ($discount_price > 0){
									echo '
										<span class="price">
											<ins>৳ '.$discount_price.'</ins>
											<del>৳ '.$price.'</del>
										</span>';
									}
									else{
														
									echo '
										
										<span class="price">
											<ins>৳ '.$price.'</ins>
										</span>';
										}
									echo'
										
									</div>
								</div>
							</div>						
										
											
		';
			
			}
			$stmt_pro->close();
						
	}
	

		
public function home_sec_one(){
	
		global $mysqli;
		$url_string_cat = 1;
		$stmt = $mysqli->prepare("SELECT id, menu, position FROM sd_home_edit
			  WHERE menu > 0 AND position = ? ");
		$stmt->bind_param('s', $url_string_cat);  // Bind "$email" to parameter.
		$stmt->execute();    // Execute the prepared query.
		// get variables from result.
		$stmt->store_result();
		$stmt->bind_result($id, $menu_id, $position);
			
			while ($stmt->fetch()) {
				if ($stmt_m = $mysqli->prepare("SELECT menu_name, img1, img2 from menu
                          WHERE menu_id = ? ")){
                    $stmt_m->bind_param('s', $menu_id);  // Bind "$email" to parameter.
                    $stmt_m->execute();    // Execute the prepared query.
                         // get variables from result.
                    $stmt_m->bind_result($menu_name, $c_img1, $c_img2);
                    $stmt_m->store_result();
                    $stmt_m->fetch();
                    $stmt_m->close();
                 }	
						
			echo '
			
			<div class="block-bestseller-and-deals full-width">
                <div class="container prdb">
					<div class="block-daily-deals style3">
                        <div class="title-of-section"><a href="page_id/'.$menu_id.'">'.$menu_name.'</a></div>
                            <div class="block-categories-blog">
                                <ul>';
								global $mysqli;
								if ($stmt_pro = $mysqli->prepare("SELECT sub_menu_id, sub_menu from sub_menu
																WHERE menu_id = ? 
															ORDER BY sub_menu_id DESC limit 7")){
								$stmt_pro->bind_param('i', $menu_id);  // Bind "$email" to parameter.
								$stmt_pro->execute();    // Execute the prepared query.
																	// get variables from result.
								$stmt_pro->bind_result($sub_menu_id, $sub_menu);
								$stmt_pro->store_result();
															
								}
								while ($stmt_pro->fetch()) {	  
								
								echo '
                                    <li class="categories-item"><a href="cat_id/'.$sub_menu_id.'">'.$sub_menu.'</a></li>';
								}
								echo '
                                   
									
                                </ul>
                            </div>
							
                    </div>
					
						<div> 
							<img class="brnim" src="images/icon/';if ($c_img2 == NULL){echo 'photo.png';}else{echo ($c_img2);}echo'" alt="'.$menu_name.'">
						</div>
				
                    <div class="block-bestseller-product style2">
                        <div class="bestseller-and-deals-content border-background equal-container">';
				
								global $mysqli;
								if ($stmt_pro = $mysqli->prepare("SELECT id, item_name, sub_cat, price, unit, discount_price, img1, discount_per 
								from sd_item_l
								WHERE activity = 1 AND  category = ?
								ORDER BY id DESC limit 8")){
								$stmt_pro->bind_param('s', $menu_id);  // Bind "$email" to parameter.
								$stmt_pro->execute();    // Execute the prepared query.
								// get variables from result.
								$stmt_pro->bind_result($item_id, $item_name, $sub_cat, $price, $unit, $discount_price, $img1, $discount_per);
								$stmt_pro->store_result();
																						}
								while ($stmt_pro->fetch()) {		
								global $mysqli;
								$stmt_more = $mysqli->prepare("SELECT id, img1, img2 from sd_more_img
								WHERE pro_id = ".$item_id."
								ORDER BY id ASC");
								$stmt_more->execute();    // Execute the prepared query.
								// get variables from result.
								$stmt_more->bind_result($more_id, $more_img1, $more_img2);
								$stmt_more->store_result();
								$stmt_more->fetch();
								
								global $mysqli;
								$stmt_more = $mysqli->prepare("SELECT id, currency from sd_currency
								WHERE activity = 1
								ORDER BY id ASC");
								$stmt_more->execute();    // Execute the prepared query.
								// get variables from result.
								$stmt_more->bind_result($c_id, $currency);
								$stmt_more->store_result();
								$stmt_more->fetch();
								
																	
								if ($stmt_more->num_rows == 1) {
								$scnd_img = $more_img1;
														}
										else{
										$scnd_img = $img1;
												}
																	
									$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);
									
									 echo '

										<div class="product-item style1 col-md-3 col-sm-6 col-xs-6 padding-0">
											<div class="product-inner equal-elem">
												<div class="product-thumb phig">
													<div class="thumb-inner">
														<a href="product/'.$item_id.'/'.urlencode($str).'"><img src="images/products/';if ($img1 == NULL){echo 'photo.png';}else{echo ($img1);}echo'" alt="'.$item_name.'"></a>
													</div>
												</div>
												<div class="product-innfo">
													<div class="product-name"><a href="product/'.$item_id.'/'.urlencode($str).'">'.$item_name.'</a></div>';
												
													if ($discount_price > 0){
													echo '
														<span class="price">
															<ins>৳'.number_format($discount_price).'</ins>
															<del>৳'.number_format($price).'</del>
														</span>';
													}  
													else{
																		
													echo '
														
														<span class="price">
															<ins>৳'.number_format($price).'</ins>
														</span>';
														}
													echo'
													
												</div>
											</div>
										</div>';
										}
															
									echo '
							
                            </div>
                        </div>
                    
                </div>
            </div>
				
				';
 
 				 }
			}
 	}

$obj_home = new home_data();

 ?>