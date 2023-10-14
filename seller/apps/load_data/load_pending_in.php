<?php	
require_once("../functions/functions.php"); 
testing_loggin();
$getID = $_SESSION['user_id'];
$date = $_POST['date'];
$inID = $_POST['in_id'];
$shop = $_POST['shop'];

if ($date != ''){
$query = "select * from sd_order_list WHERE activity = 2 AND date = '".$date."' ORDER BY id DESC";
}

elseif ($inID != ''){
$query = "select * from sd_order_list WHERE activity = 2 AND orderID = '".$inID."' ORDER BY id DESC";
}

else 
{
$query = "select * from sd_order_list WHERE activity = 2 ORDER BY id DESC";
}



$res    = mysqli_query($mysqli,$query);
$count  = mysqli_num_rows($res);
$page = (int) (!isset($_REQUEST['pageId']) ? 1 :$_REQUEST['pageId']);
$page = ($page == 0 ? 1 : $page);
$recordsPerPage = 60;
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
            $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='#'>&laquo; Previous&nbsp;&nbsp;</a></li>";   
        if ($lastpage < 7 + ($adjacents * 2))

        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li class='active'><span>$counter</span></li>";
                else
                    $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                         
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
                        $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                }
                $pagination.= "...";
                $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
                $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<li><a href=\"view_all_pending_invoices#Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"view_all_pending_invoices#Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                       $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
               $pagination.= "..";
               $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
               $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
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
                        $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<li><a href=\"view_all_pending_invoices#Page=".($next)."\" onClick='changePagination(".($next).");'>Next &raquo;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='#'>Next &raquo;</a></li>";
        
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
$query="select id, orderID from sd_order_list order by id DESC
limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage";
//echo $query;
$res    =   mysqli_query($mysqli,$query);
$count  =   mysqli_num_rows($res);
$HTML='';

?>
 <div class="box-body table-responsive no-padding">
	<table class="table table-hover">
		  <thead>
							<tr class="info_member">
                                <th>SL</th>
                                <th width="10%">Invoice ID</th>
                                <th width="%">Date</th>
                                <th width="5%">Product</th>
								<th>Product Name</th>
                                <th style="text-align:center;">Invoice Total (BDT)</th>
                                <th style="text-align:center;">Activity</th>
                                <th style="text-align:center;" width="6%">Invoice</th>
                         		<th width="6%" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                       <tbody>
					 <?php 		
					if ($date != ''){
						global $mysqli;
                        if ($stmt = $mysqli->prepare("SELECT id, orderID, shop_id, title, img, line_total, date from sd_order_list 
								 WHERE activity = 2 AND date ='".$date."'
                            ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                        $stmt->execute();    // Execute the prepared query.
                        // get variables from result.
                        $stmt->bind_result($id, $order_id, $shop_id, $title, $img, $line_total, $date);
                        $stmt->store_result();
							}
                        	  }
							  
					elseif ($inID != ''){
						global $mysqli;
                        if ($stmt = $mysqli->prepare("SELECT id, orderID, shop_id, title, img, line_total, date from sd_order_list 
								WHERE activity = 2 AND orderID ='".$inID."'
                            ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                        $stmt->execute();    // Execute the prepared query.
                        // get variables from result.
                        $stmt->bind_result($id, $order_id, $shop_id, $title, $img, $line_total, $date);
                        $stmt->store_result();
							}
                        	  }				
							  
					else {
						global $mysqli;	
						$i = 1;						
                        if ($stmt = $mysqli->prepare("SELECT id, orderID, shop_id, title, img, line_total, activity, date from sd_order_list 
						WHERE activity = 2 AND shop_id = ? 
                            ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                       $stmt->bind_param('s', $getID);  // Bind "$email" to parameter.
					   $stmt->execute();    // Execute the prepared query.
                        // get variables from result.
                        $stmt->bind_result($id, $order_id, $shop_id, $title, $img, $line_total, $activity, $date);
                        $stmt->store_result();
							}
						}
						
					while ($stmt->fetch()) { 
                           		
                    		  ?>               
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><strong style="color:#E60101;text-transform: uppercase;font-family: arial;font-size: 11px;"><?php echo $order_id; ?></strong></td>
                                <td><?php echo $date . ' ' . $time;?></td>
                                <td><img src="../images/products/<?php echo $img;?>" style="width: 100%;" alt=""></td>
								<td><?php echo $title;?></td>
                                <td style="text-align:center;"><b><?php echo $line_total;?></b></td>
                                <td style="text-align:center;">
								<?php 
								if ($activity == 1){echo "<span style='color:#00a65a;font-weight: bold;'>Completed</span>";} 
								if ($activity == 2){echo "<span style='color:#f30606;font-weight: bold;'>Pending...</span>";}
								?>
                                </td>
                                <td> 
                                <a href="view_invoice_retail/<?php echo $order_id; ?>" class="btn btn-block btn-success" data-toggle="tooltip" data-placement="top" title="View Order" style="padding: 3px 5px;font-size: 12px;">
                                	View Invoice<div class="ripple-container"></div></a>
                                </td>
                                <td style="text-align: center;">
                                <a href="delete_ord/<?php echo $order_id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" style="font-size: 10px;" onClick="return confirm('Are you sure to Delete this Order?')"><i class="fa fa-close"></i><div class="ripple-container"></div></a>
							</td>
                            </tr>
   						 	 <?php }
							 		$stmt->close();
								?>
                        </tbody>
                    </table>
                </div>
                

<?php echo  $pagination; ?>
