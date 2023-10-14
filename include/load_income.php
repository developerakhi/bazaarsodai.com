<?php	
ob_start();
include_once 'functions_lgn.php';
sec_session_start(); 
$getID = $_SESSION['user_id'];

 $query = "select * from sd_point_count WHERE customerID = '".$getID."' ORDER BY id DESC";
 $ppage = 'all_income.php';
 
$res    = mysqli_query($mysqli,$query);
$count  = mysqli_num_rows($res);
$page = (int) (!isset($_REQUEST['pageId']) ? 1 :$_REQUEST['pageId']);
$page = ($page == 0 ? 1 : $page);
$recordsPerPage = 50;
$start = ($page-1) * $recordsPerPage;
$adjacents = "2";
    
$prev = $page - 1;
$next = $page + 1;
$lastpage = ceil($count/$recordsPerPage);
$lpm1 = $lastpage - 1;   
$pagination = "";
if($lastpage > 1)
    {   
        $pagination .= "<ul class='pagination justify-content-end'>";
        if ($page > 1)
            $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a></li>";
        else
            $pagination.= "<li class='page-item previous disabled'><a class='page-link' href='".$ppage."'>&laquo; Previous&nbsp;&nbsp;</a></li>";   
        if ($lastpage < 7 + ($adjacents * 2))

        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li class='page-item active'><span>$counter</span></li>";
                else
                    $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                         
            }
        }
        elseif($lastpage > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))
            {
                for($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if($counter == $page)
                        $pagination.= "<li class='page-item active'><span>$counter</span></li>";
                    else
                        $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                }
                $pagination.= "...";
                $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
                $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<li class='page-item active'><span>$counter</span></li>";
                   else
                       $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
               $pagination.= "..";
               $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
               $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           }
           else
           {
               $pagination.= "<li class='page-item'><a class='page-link' href=\"Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li class='page-item'><a class='page-link' href=\"Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "..";
               for($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
               {
                   if($counter == $page)
                        $pagination.= "<li class='page-item active'><span>$counter</span></li>";
                   else
                        $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<li class='page-item'><a class='page-link' href=\"".$ppage."#Page=".($next)."\" onClick='changePagination(".($next).");'>Next &raquo;</a></li>";
        else
            $pagination.= "<li class='page-item previous disabled'><a class='page-link' href='".$ppage."'>Next &raquo;</a></li>";
        
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
$query="select id from sd_item_l order by id DESC
limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage";
//echo $query;
$res    =   mysqli_query($mysqli,$query);
$count  =   mysqli_num_rows($res);
$HTML='';

$query="select id from sd_item_l order by id DESC";
//echo $query;
$res2    =   mysqli_query($mysqli,$query);
$count_t  =   mysqli_num_rows($res2);

?>	 
					
									<table class="table cart-table">
                                        <thead>
                                            <tr>
												<th class="table-title">ID</th>
                                                <th class="table-title">DATE</th>
                                                <th class="table-title">INVOICE ID</th>
												 <th class="table-title">CUSTOMER NAME</th>
												<th class="table-title">Amount</th>
                                             </tr>
                                        </thead>
                                        <tbody>
										<?php 		
								
										global $mysqli;		
										if ($stmt = $mysqli->prepare("SELECT id, in_id, customerID, amount, date
											from sd_point_count 
												WHERE customerID = '".$getID."'
											ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
										$stmt->execute();    // Execute the prepared query.
										// get variables from result.
										$stmt->bind_result($id, $order_id, $customerID, $amount, $date);
										$stmt->store_result();
											}
											  
									while ($stmt->fetch()) {
											
										$sql = "SELECT id, name, mobile, address FROM sd_client  WHERE  id = '".$customerID."'";
										$member = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
										$row_member = mysqli_fetch_assoc($member); 
										?> 
                                            <tr>
												<td class="product-code"><?php echo $id; ?></td>
                                                <td class="product-price"><?php echo $date;?></span></td>
                                                 <td class="product-code"><?php echo $order_id; ?></td>
                                                <td class="product-nam"><?php echo $row_member['name'];?></td>
												
                                                <td class="product-code"><?php echo $amount;?></td>
                                                
                                            </tr>
										<?php }
										$stmt->close();
										?>	
											
                                           
                                         
                                     	</tbody>
                             		</table> 
                                    
                                    
                                   
                                
      <div class="col-12 col-lg-12" style="clear: both;">
			<?php echo  $pagination; ?>
  	  </div>
