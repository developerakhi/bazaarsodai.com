<?php 
include_once 'include/msp_lp.php';
include_once 'include/functions.php'; 
include_once 'include/connection.php'; 
frst_session_start(); 
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
<meta name="keywords" content="Bazaarsodai - Welcome to Bazaarsodai Online Shop" />
<meta name="description" content="Bazaarsodai - Welcome to Bazaarsodai Online Shop">
<link rel="icon" href="images/logo/fevicon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="css/bootstrap.min0eb3.css?v2.0">
<link rel="stylesheet" href="css/bootstrap-grid.min0eb3.css?v2.0">
<link rel="stylesheet" href="css/bootstrap-reboot.min0eb3.css?v2.0">
<!-- Icon font CSS -->
<link rel="stylesheet" href="css/line-awesome.min0eb3.css?v2.0">
<link rel="stylesheet" href="css/font-awesome.min0eb3.css?v2.0">
<link href="assets/css/lib/themify-icons0eb3.css?v2.0" rel="stylesheet">
<link href="assets/css/lib/menubar/sidebar0eb3.css?v2.0" rel="stylesheet">
<link href="assets/owl.carousel.min0eb3.css?v2.0" rel="stylesheet">
<link href="assets/owl.theme.default.min0eb3.css?v2.0" rel="stylesheet">
<link href="styles9c82.css?v8.4.3" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Questrial|Quicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/slider/engine1/style.css" />
<script type="text/javascript" src="assets/slider/engine1/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/deals_of_day.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
  <body>
	<?php include ("include/header.php"); ?>
	<?php include ("include/left_side.php"); ?>
        <!-- /# Main Body -->
        <div class="content-wrap">
			<div class="adcontent-wrap-r showOnPhone">
                <section class="is_unnecessary bg-orange">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 center">
                                <div class="input-group home-main-search-panel-form align-content-center" style="margin-top:25px;">
                                    <input type="text" class="form-control" placeholder="Search product">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary gb-gradient" type="button"><i class="la la-search"></i></button>
                                    </span>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
			</div>
			
            <div class="main" id="get_product">
				<div class='container-fluid'>
					<div id="wowslider-container1">
						<div class="ws_images">
							<ul>
							<?php 
								global $mysqli;
								if ($stmt_pro = $mysqli->prepare("SELECT id, title_one, title_two, title_three, link, img1, img2 from sd_slide_mng 
									ORDER BY id DESC limit 10")){
									$stmt_pro->execute(); 
									$stmt_pro->bind_result($s_id, $title_one, $title_two, $title_three, $link, $img1, $img2);
									$stmt_pro->store_result();
										}
									while ($stmt_pro->fetch()) {
									echo'
								<li><img width="100%" height="100%" src="images/slider/'.$img2.'" /></li>';
								}									
							?>
							</ul>
							<div class="ws_controls">
							    <div class="ws_bullets"><div>
							    <?php
							        global $mysqli;
								    if($stmt_pro = $mysqli->prepare("SELECT id, title_one, title_two, title_three, link, img1, img2 from sd_slide_mng 
									ORDER BY id DESC limit 10")){
									$stmt_pro->execute(); 
									$stmt_pro->bind_result($s_id, $title_one, $title_two, $title_three, $link, $img1, $img2);
									$stmt_pro->store_result();
										}
							        while ($stmt_pro->fetch()) {
								?>  
                                    <a href="#" title="Wonderful landscape" class="ws_selbull">1</a>
                                <?php } ?> 
                                
                                </div>
                                </div>
                                <a href="#" class="ws_next"><span><i></i><b></b></span></a>
                                <a href="#" class="ws_prev"><span><i></i><b></b></span></a>
                            </div>
						</div>
					</div>	
				</div>
				<script type="text/javascript" src="assets/slider/engine1/wowslider.js"></script>
				<script type="text/javascript" src="assets/slider/engine1/script.js"></script>
                        <div class='container-fluid'>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class="card card-bg" style="margin-top:20px;">
                                        <?php
                            		        global $mysqli;
                            			    if($flashDeals = $mysqli->prepare("SELECT id, offer_name, sub_title, start_date, end_date from flash_deals ORDER BY id DESC Limit 1")){
                            				$flashDeals->execute(); 
                            				$flashDeals->bind_result($flash_id, $offer_name, $sub_title, $start_date, $end_date);
                            				$flashDeals->store_result();
                            					}
                            				while ($flashDeals->fetch()) {
                            				    
                            				    $currentDate = date('Y-m-d H:i:s', time());
                            		            $timestamp1 = strtotime($end_date);
                            		            $timestamp2 = strtotime($currentDate);
                                                $difference = $timestamp1 - $timestamp2;
                            				  
                            				?>
                                         <div class="card-body">
                                           <div class="row">
                                                <div class="col-md-2"></div>
                                               <div class="col-md-4">
                                                    <div class="fls-text">
                                                        <?php if($difference < 0) {?>
                                                            <h1 class="card-title" id="demo"> Comming Soon...</h1>
                                                        <?php } ?>
                                                        <?php if($difference > 0) {?>
                                                         <h1 class="card-title" id="demo"> <?php echo $offer_name; ?></h1>
                                                        <?php } ?>
                                                        
                                                        <h6 style="padding-left: 9px;"><?php echo $sub_title; ?></h6><br>
                                                        <div id="clockdiv">
                                                              <div>
                                                                <span class="hours" id="hour"></span>
                                                                <div class="smalltext">Hours</div>
                                                              </div>
                                                              <div>
                                                                <span class="minutes" id="minute"></span>
                                                                <div class="smalltext">Minutes</div>
                                                              </div>
                                                              <div style="margin: 0 -5px;">
                                                                <span class="seconds" id="second"></span>
                                                                <div class="smalltext">Seconds</div>
                                                              </div>
                                                        </div>
                                                          
                                                        <p id="demo"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-5" style="float:right;">
                        							<?php 
                									global $mysqli;
                									if ($flshDeals = $mysqli->prepare("SELECT product_id from flash_deals_item
                									WHERE flush_deals_id = '".$flash_id."' ORDER BY id DESC limit 1")){
                									$flshDeals->execute(); 
                									$flshDeals->bind_result($product_id);
                									$flshDeals->store_result();
                									}
                									while ($flshDeals->fetch()) {
                									    
                									    global $mysqli;
                        						    	if ($flshDealsitem = $mysqli->prepare("SELECT id, shop_id, item_name, unit, price, discount_per, discount_price, img1, img2 from sd_item_l
                            							WHERE activity = 1 AND id = '".$product_id."' ORDER BY id DESC")){
                            							$flshDealsitem->execute(); 
                            							$flshDealsitem->bind_result($item_id, $shop_id, $item_name, $unit, $price, $discount_per, $discount_price, $img1, $img2);
                            							$flshDealsitem->store_result();
                            							$flshDealsitem->fetch();
                            							$flshDealsitem->close();
                            							}
                            							
                										$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);	
                										if($difference > 0){
                										   
                										
                									echo '
                										
                										<div class="deal-product" style="height: 70%;">
                                                                <img id="'.$item_id.'" src="images/products/';if ($img1 == NULL){echo 'photo.png';}else{echo ($img1);}echo'" size="400">
                                                                <div class="product-details" style="margin-top: 15px;">
                                                                    <div class="product-name">'.ucfirst($item_name).'</div>
                                                                    <div class="product-name" style="margin-top: 20px;">'.$unit.'</div>
                                                                </div>
                                                            <div class="price">
                                                                <div class="amount">
                                                                    
                                                                    <svg style="display:inline-block;vertical-align:middle;" width="20px" height="31px"></svg>';
                                    									if ($discount_price > !0){
                                    									echo '
                                    									<section>
                                                                            <p class="product-card-price center" style="font-weight: bolder; color: green; font-size: 20px;">
                                        										৳'.number_format($price).'
                                        										<del><span class="product-cart-reduced-price">৳'.number_format($price).'</span></del>
                                        									</p>';
                                        										}
                                        									else{
                                        									echo'
                                        									<p class="product-card-price center" style="font-weight: bolder; color: green; font-size: 20px;">
                                        										৳'.number_format($discount_price).'
                                        										<span class="product-cart-reduced-price"></span>
                                        									</p>';}
                                        									
                                    									echo'
                                    								</section>
                                                                </div>
                                                                <div class="discount-percent">
                                                                    <span>'.$discount_per.'% Off</span>
                                                                </div>
                                                            </div>
                                                        </div>';
                										}
                									}
                									?>
                                         </div>
                                    </div>
                                </div>
                            <?php } ?>
                                     
                                </div>
                                
                            </div>
                        </div>
                   </div>
                   
                <section class='home-all-cat'>
                    <div class='container-fluid'>
                        <div class='row justify-content-md-center'>
							<?php 
							global $mysqli;
							if ($stmt_mnct = $mysqli->prepare("SELECT menu_id, menu_name, img1, img2
								from menu WHERE activity = 1 AND type = 1 ORDER BY menu_id DESC LIMIT 8")){
								$stmt_mnct->execute(); 
								$stmt_mnct->bind_result($menu_id, $menu_name, $img1_icon, $img2);
								$stmt_mnct->store_result();
									}
								while ($stmt_mnct->fetch()) {
									
								global $mysqli;
								if ($stmt_w = $mysqli->prepare("SELECT id FROM  sd_item_l WHERE activity = 1 AND category = ".$menu_id." ")){
									$stmt_w->execute();    
									$stmt_w->store_result();
									$stmt_w->bind_result($ttlwrs);
									$stmt_w->fetch();
									$stmt_w->num_rows();
									$trnumrows2 = $stmt_w->num_rows;
									}
								echo'
								<div class="col-md-3 col-12">
									<a href="category/'.$menu_id.'">
										<div class="white-card order-steps ctgr">
											<img class="ctimg" src="images/icon/'.$img1_icon.'" alt="'.$menu_name.'">
											<div class="ctup">'.$menu_name.'</div>
											<span class="rarw"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
										</div>
									</a>
								</div>';
								}									
							?>
                        </div>
                    </div>
                </section>
				<div id="pageContent"></div>
                <!-- all product -->
                <section class="all-category-panel">
                    <div class="container-fluid">
						<div class='row contents'>
                            <div class='col-md-12'>
                               <h1 class="pplrpt">ALL PRODUCT</h1>
                            </div>
                        </div>
                        <div class="row">
                            <!--<div class="owl-carousel owl-carousel-offer">-->
        					<?php 
        				
        					
                                  $count_query = "SELECT count(*) as allcount from sd_item_l";
                                  $count_result = mysqli_query($con,$count_query);
                                  $count_fetch = mysqli_fetch_array($count_result);
                                  $productCount = $count_fetch['allcount'];
                                  $limit = 30;


        							global $mysqli;
        							if ($stmt_pro = $mysqli->prepare("SELECT id, shop_id, item_name, quantity, unit, price, discount_per, discount_price, img1, img2 from sd_item_l
        							WHERE activity = 1 AND discount_per =0 ORDER BY id DESC LIMIT $limit")){
        							$stmt_pro->execute(); 
        							$stmt_pro->bind_result($item_id, $shop_id, $item_name, $quantity, $unit, $price, $discount_per, $discount_price, $img1, $img2);
        							$stmt_pro->store_result();
        							}
        							while ($stmt_pro->fetch()) {
        								$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);				
        							echo'
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 col-6 content colum-section">
                                        <div class="product-card center">';
                                        
                                            foreach($_SESSION["shopping_cart"] as $keys => $values)
			                                {
			                                    
			                                    if($_SESSION["shopping_cart"][$keys]['product_id'] == $item_id)
                                    				{
                                    				    if($_SESSION["shopping_cart"][$keys]['product_quantity']>=$quantity)
                                    				 	{
                                    					   echo '<div class="outstock">Out Of Stock </div>';
                                    					}
                                    				}
			    
			                                }
                                        
                                        
        									if ($quantity < 1){echo '<div class="outstock"> Out Of Stock </div>';}echo'
                                            <figure class="category-card-figure">
                                                <img id="'.$item_id.'" src="images/products/';if ($img1 == NULL){echo 'photo.png';}else{echo ($img1);}echo'" class="img-fluid add_to_cart" size="400" style="height: 150px; width:150px;" alt="">
                                            </figure>
                                            <div style="margin-bottom: 10px; line-height: 1.5em; height: 3em; overflow: hidden;"><h1><a href="product/'.$item_id.'/'.$str.'">'.ucfirst($item_name).'</a></h1></div>
                                            <div class="subText" style="min-height:30px;">'.$unit.'</div>';
        									if ($discount_per > 0){
        									echo '
                                            <p class="product-card-price center">
        										৳'.number_format($discount_price).'
        										<span class="product-cart-reduced-price">৳'.number_format($price).'</span>
        									</p>';
        										}
        									else{
        									echo'
        									<p class="product-card-price center">
        										৳'.number_format($price).'
        									</p>';
        										}
        									echo'
        									<input name="hidden_price" id="price'.$item_id.'" type="hidden" value="';if ($discount_price == 0){echo ($price);} else {echo ($discount_price);} echo'" />
        									<input type="hidden" name="hidden_name" id="name'.$item_id.'" value="'.$item_name.'" />
        									<input type="hidden" name="pimg" id="pimg'.$item_id.'" value="'.$img1.'" />
        									<input name="hidden" id="quantity'.$item_id.'" type="hidden" value="'.$quantity.'" />
        									<input type="hidden" name="unit" id="unit'.$item_id.'" value="'.$unit.'" />
        									<div class="" style="height: 100%; margin-top: 20px;"><a type="button" name="add_to_cart" id="'.$item_id.'" class="btn btn-outline-warning add_to_cart" value="Add to Cart" > Add to cart </a></div>
                                        </div>
                                    </div>';
        							}									
        						?>
        						
    						<!--</div>-->
    						<div class="productList"></div>
						</div>
						
                    </div>
                    
                   
                    <div class='row'>
                        <div class="col-md-10">
						   
                        </div>
                            <div class='card-actions col-md-2 col-12 col-sm-12' style="margin-top: 25px; margin-bottom: 25px; padding-left:25px;">
                                <input type="button" id="loadBtn" value="Load More" class="btn btn-load" style="color: #fff;">
                                <input type="hidden" id="row" value="0">
                                <input type="hidden" id="postCount" value="<?php echo $productCount; ?>">
                                
                            </div>
                        
					</div>
<script>
      $(document).ready(function () {
        $(document).on('click', '#loadBtn', function () {
          var row = Number($('#row').val());
          var count = Number($('#postCount').val());
          var limit = 30;
          row = row + limit;
          $('#row').val(row);
          $("#loadBtn").val('Loading...');
     
          $.ajax({
            type: 'POST',
            url: 'loadmore-data.php',
            data: 'row=' + row,
            success: function (data) {
              var rowCount = row + limit;
              $('.productList').append(data);
              if (rowCount >= count) {
                $('#loadBtn').css("display", "none");
              } else {
                $("#loadBtn").val('Load More');
              }
            }
          });
        });
      });
</script>
</section>
				
				<section class='special-collection'>
					<?php
					global $mysqli;
					$stmt = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 14");
					$stmt->execute();   
					$stmt->store_result();
					$stmt->bind_result($id, $title_bangladesh2, $full_desc_bangladesh2);
					$stmt->fetch();
					$stmt->close();
					?>
                    <div class='container-fluid'>
						<div class='row'>
                            <div class='col-md-12'>
                                <h1 class='abtt'><a href='#'><?php echo $title_bangladesh2 ?></a></h1>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12 dummy'>
								<p><?php echo $full_desc_bangladesh2 ?></p>
                            </div>
                        </div>
                    </div>
                </section>
                <?php include ("include/footer.php"); ?>
            </div>			
        </div>
		<?php include ("include/cart.php"); ?>
		<?php include ("category.php"); ?>
		

<!-- Bootstrap core JavaScript
================================================== -->
<script src="assets/js/readMoreJS.min.js"></script>

<script>
	$readMoreJS.init({
		target: '.dummy',
		numOfWords: 200,
		toggle: true,
		moreLink: ' Read More  ...',
		lessLink: 'Read Less'
	});
</script>
<script>
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
</script>

<script>
      var today = new Date();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var countDownDate = new Date("<?php echo $end_date; ?>").getTime();
      var x = setInterval(function() {
          var now = new Date().getTime();
          var distance = countDownDate - now;
                // alert(distance);
            
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var dayhourscount = days*24;
          var hour = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60 ) + dayhourscount);
          
          var minute = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var second = Math.floor((distance % (1000 * 60)) / 1000);
        
        //   document.getElementById("demo").innerHTML = days;
          document.getElementById("hour").innerHTML = hour;
          document.getElementById("minute").innerHTML = minute;
          document.getElementById("second").innerHTML = second;
       
       
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Comming Soon...";
            document.getElementById("hour").innerHTML ='0';
            document.getElementById("minute").innerHTML ='0' ; 
            document.getElementById("second").innerHTML = '0'; }
        }, 1000);
</script>
    

<script>
    let loadMoreBtn = document.querySelector('#load-more');
    let currentItem = 30;
    
    loadMoreBtn.onclick = () =>{
    	let boxes = [...document.querySelectorAll('.content')]
    	for (var i = currentItem; i < currentItem + 30; i++){
    	boxes[i].style.display = 'inline-block';
    }
    currentItem += 30;
    if(currentItem >= boxes.length){
    	loadMoreBtn.style.display = 'none';
    }
    
    }
</script>


