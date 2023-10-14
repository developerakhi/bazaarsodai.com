<?php	
ob_start();
include_once 'db_connect.php';

$query = "select * from  sd_item_l WHERE activity = 1 AND hot = 1 ORDER BY id DESC";

$res    = mysqli_query($mysqli,$query);
$count  = mysqli_num_rows($res);
$page = (int) (!isset($_REQUEST['pageId']) ? 1 :$_REQUEST['pageId']);
$page = ($page == 0 ? 1 : $page);
$recordsPerPage = 20;
$start = ($page-1) * $recordsPerPage;
$adjacents = "2";
    
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($count/$recordsPerPage);
$lpm1 = $lastpage - 1;   
$pagination = "";
if($lastpage > 1)
    {   
        $pagination .= "<ul class='pagination'>";
        if ($page > 1)
            $pagination.= "<li><a href=\"#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; &nbsp;&nbsp;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='#'>&laquo; &nbsp;&nbsp;</a></li>";   
        if ($lastpage < 7 + ($adjacents * 2))

        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li class='active'><span>$counter</span></li>";
                else
                    $pagination.= "<li><a href=\"#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                         
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
                        $pagination.= "<li><a href=\"#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                }
                $pagination.= "...";
                $pagination.= "<li><a href=\"#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
                $pagination.= "<li><a href=\"#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<li><a href=\"#Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"#Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                       $pagination.= "<li><a href=\"#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
               $pagination.= "..";
               $pagination.= "<li><a href=\"#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
               $pagination.= "<li><a href=\"#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
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
                        $pagination.= "<li><a href=\"#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<li><a href=\"#Page=".($next)."\" onClick='changePagination(".($next).");'> &raquo;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='#'> &raquo;</a></li>";
        
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
$query="select id, item_name from sd_item_l WHERE activity = 1 AND hot = 1 order by id DESC
limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage";
//echo $query;
$res    =   mysqli_query($mysqli,$query);
$count  =   mysqli_num_rows($res);
$HTML='';

		

							if ($stmt = $mysqli->prepare("SELECT id, item_name, price, discount_price, img1, discount_per
							 from sd_item_l WHERE activity = 1 AND hot = 1
								ORDER BY id DESC limit  ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
							$stmt->execute();    // Execute the prepared query.
							// get variables from result.
							$stmt->bind_result($item_id, $item_name, $price, $discount_price, $img1, $discount_per);
							$stmt->store_result();
							  }

				  while ($stmt->fetch()) {	  
					
					echo '
					
							<li class="col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
								<div class="product product-style-2 equal-elem ">
									<div class="product-thumnail">
										<a href="product/'.$item_id.'/'.urlencode($str).'" title="'.$item_name.'">
											<figure><img src="images/products/'.$img1.'" alt="'.$item_name.'"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="product/'.$item_id.'/'.urlencode($str).'" class="product-name"><span>'.$item_name.'</span></a>';
													 if ($discount_price > 0){
														echo '
														<div class="wrap-price">
															<ins><p class="product-price">৳ '.$discount_price.'.00</p></ins> 
															<del><p class="product-price">৳ '.$price.'.00</p></del>
														</div>';
													}
													
													else{
																			
													echo '
														<div class="wrap-price">
															<ins><p class="product-price">৳ '.$price.'.00</p></ins> 
														</div>';
																				
													}
													echo'
										<div class="tcl"><a href="product/'.$item_id.'/'.urlencode($str).'" class="dtls">Details</a></div>
									</div>
								</div>
							</li>
				  
				';
			}
			 $stmt->close();
			echo '<!-- Item Close-->	
		<!-- close step-->';

								?>
      
<?php echo  $pagination; ?>
