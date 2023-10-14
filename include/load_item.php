<?php	
ob_start();
include_once 'functions.php';

$inID = $_POST['sub_Su'];
$userID = $_POST['userID'];
$Amr = $_POST['fsrt'];
$MainCat = $_POST['MainCat'];

if ($MainCat){
	$ppage = 'page_id';	
}
else{
	$ppage = 'category';	
}
if ($userID){
$query = "select * from sd_item_l WHERE activity = 1 AND sub_cat = '".$userID."' ORDER BY id DESC";
$link = $userID;
}

if ($inID){
$query = "select * from sd_item_l WHERE activity = 1 AND sub_sub = '".$inID."' ORDER BY id DESC";
$link = $Amr.'/'.$inID;
}

if ($MainCat){
$query = "select * from sd_item_l WHERE activity = 1 AND category = '".$MainCat."' ORDER BY id DESC";
$link = $MainCat;
}
if ($MainCat == 'all'){
$query = "select * from sd_item_l WHERE activity = 1 ORDER BY id DESC";
$link = $MainCat;
}
if ($MainCat == 'hotsale'){
$query = "select * from sd_item_l WHERE activity = 1 AND hot_sale = 1 ORDER BY id DESC";
$link = $MainCat;
}

$res    = mysqli_query($mysqli,$query);
$count  = mysqli_num_rows($res);
$page = (int) (!isset($_REQUEST['pageId']) ? 1 :$_REQUEST['pageId']);
$page = ($page == 0 ? 1 : $page);
$recordsPerPage = 90;
$start = ($page-1) * $recordsPerPage;
$adjacents = "2";
    
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($count/$recordsPerPage);
$lpm1 = $lastpage - 1;   
$pagination = "";
if($lastpage > 1)
    {   
        $pagination .= "<ul class='pagination pull-right'>";
        if ($page > 1)
            $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='".$ppage."/".$link."'>&laquo; Previous&nbsp;&nbsp;</a></li>";   
        if ($lastpage < 7 + ($adjacents * 2))

        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li class='active'><span>$counter</span></li>";
                else
                    $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                         
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))
            {
                for($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if($counter == $page)
                        $pagination.= "<li class='active'><span>$counter</span></li>";
                    else
                        $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                }
                $pagination.= "...";
                $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
                $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                       $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
               $pagination.= "..";
               $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
               $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           }
           else
           {
               $pagination.= "<li><a href=\"Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "..";
               for($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
               {
                   if($counter == $page)
                        $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                        $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<li><a href=\"".$ppage."/".$link."#Page=".($next)."\" onClick='changePagination(".($next).");'>Next &raquo;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='".$ppage."/".$link."'>Next &raquo;</a></li>";
        
        $pagination.= "</ul>";       
    }
    
if(isset($_POST['pageId']) && !empty($_POST['pageId']))
{
    $id=$_POST['pageId'];
}
else
{
    $id='0';
}
$query="select id, item_name, item_code from sd_item_l order by id DESC
limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage";
//echo $query;
$res    =   mysqli_query($mysqli,$query);
$count  =   mysqli_num_rows($res);
$HTML='';
				?>
	<div class="row">			
<?php				
					
                        global $mysqli;
						
						if ($inID != ''){
							if ($stmt = $mysqli->prepare("SELECT id, item_name, price, discount_price, discount_per
							img1 from sd_item_l
								 	 WHERE activity > 0 AND sub_sub = ?
								ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                            $stmt->bind_param('s', $inID);  // Bind "$email" to parameter.
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($item_id, $item_name, $price, $discount_price, $img1, $discount_per);
							$stmt->store_result();
							  }
							  
							}
												
						elseif ($userID){
							if ($stmt = $mysqli->prepare("SELECT id, item_name, price, discount_price, img1, discount_per
							from sd_item_l
								  WHERE activity > 0 AND sub_cat = ?
								ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                            $stmt->bind_param('s', $userID);  // Bind "$email" to parameter.
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($item_id, $item_name, $price, $discount_price, $img1, $discount_per);
							$stmt->store_result();
							  }
						}

						elseif ($MainCat == 'all'){
							if ($stmt = $mysqli->prepare("SELECT id, item_name, price, discount_price, img1, discount_per
							from sd_item_l
								  WHERE activity > 0
								ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($item_id, $item_name, $price, $discount_price, $img1, $discount_per);
							$stmt->store_result();
							  }
						}						

						elseif ($MainCat == 'hotsale'){
							if ($stmt = $mysqli->prepare("SELECT id, shop_id, item_name, price, discount_price, img1, discount_per
							from sd_item_l
								  WHERE activity > 0 AND hot_sale = 1 
								ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($item_id, $shop_id, $item_name, $price, $discount_price, $img1, $discount_per);
							$stmt->store_result();
							  }
						}	
						
						
						elseif ($MainCat != 'all' || $MainCat != 'hotsale'){
							if ($stmt = $mysqli->prepare("SELECT id, shop_id, item_name, price, discount_price, img1, discount_per
							from sd_item_l
								  WHERE activity > 0 AND category = ?
								ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                            $stmt->bind_param('s', $MainCat);  // Bind "$email" to parameter.
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($item_id, $shop_id, $item_name, $price, $discount_price, $img1, $discount_per);
							$stmt->store_result();
							  }
						}						
											
		
							while ($stmt->fetch()) {

									$str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);
								  
								echo '	
									<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 col-6">
										<div class="product-card center">
											<figure class="category-card-figure">
												<img  id="'.$item_id.'" src="images/products/'.$img1.'" class="img-fluid add_to_cart" alt="">
											</figure>
											<h1><a href="product/'.$item_id.'/'.$str.'">'.$item_name.'</a></h1>';
											if ($discount_price > 0){
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
												<span class="product-cart-reduced-price"></span>
											</p>';
												}
											echo'
											<input name="hidden_price" id="price'.$item_id.'" type="hidden" value="';if ($discount_price == 0){echo ($price);} else {echo ($discount_price);} echo'" />
											<input type="hidden" name="hidden_name" id="name'.$item_id.'" value="'.$item_name.'" />
											<input type="hidden" name="pimg" id="pimg'.$item_id.'" value="'.$img1.'" />
											<input name="quantity" id="quantity'.$item_id.'" type="hidden" value="1" />
											<input type="hidden" name="shop_id" id="shop_id'.$item_id.'" value="'.$shop_id.'" />
											<a type="button" name="add_to_cart" id="'.$item_id.'" class="btn btn-outline-warning add_to_cart" value="Add to Cart" > Add to cart </a>
										</div>
									</div>
										
			  ';
				 					}
							 		$stmt->close();
								?>
     
<?php echo  $pagination; ?>
</div>