<?php	
require_once("../functions/functions.php");
$search = $_POST['search'];
$link = $_POST['page_name']. "/" .$_POST['catID'];
$payment_method = $_POST['payment_method'];
$payment_status = $_POST['payment_status'];
$delivery_status = $_POST['delivery_status'];


$query = "select * from sd_order_more WHERE activity = 4";

if ($search != ''){
$query = "select * from sd_order_more WHERE activity = 4 AND name = '".$search."' ";
}
elseif ($payment_method != ''){
$query = "select * from sd_order_more WHERE activity = 4 AND mathod = '".$payment_method."' ";
}
elseif ($payment_status != ''){
$query = "select * from sd_order_more WHERE activity = 4 AND payment_status = '".$payment_status."' ";
}
elseif ($delivery_status != ''){
$query = "select * from sd_order_more WHERE activity = '".$delivery_status."' ";
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
            $pagination.= "<li><a href=\"delivery_order#Page=".($prev)."\" onClick='changePagination(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a></li>";
        else
            $pagination.= "<li class='previous disabled'><a href='#'>&laquo; Previous&nbsp;&nbsp;</a></li>";   
        if ($lastpage < 7 + ($adjacents * 2))

        {   
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<li class='active'><span>$counter</span></li>";
                else
                    $pagination.= "<li><a href=\"delivery_order#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                         
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
                        $pagination.= "<li><a href=\"delivery_order#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
                }
                $pagination.= "...";
                $pagination.= "<li><a href=\"delivery_order#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
                $pagination.= "<li><a href=\"delivery_order#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
           
           }
           elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<li><a href=\"delivery_order#Page=\"1\"\" onClick='changePagination(1);'>1</a></li>";
               $pagination.= "<li><a href=\"delivery_order#Page=\"2\"\" onClick='changePagination(2);'>2</a></li>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<li class='active'><span>$counter</span></li>";
                   else
                       $pagination.= "<li><a href=\"delivery_order#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
               $pagination.= "..";
               $pagination.= "<li><a href=\"delivery_order#Page=".($lpm1)."\" onClick='changePagination(".($lpm1).");'>$lpm1</a></li>";
               $pagination.= "<li><a href=\"delivery_order#Page=".($lastpage)."\" onClick='changePagination(".($lastpage).");'>$lastpage</a></li>";   
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
                        $pagination.= "<li><a href=\"cancel_order#Page=".($counter)."\" onClick='changePagination(".($counter).");'>$counter</a></li>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<li><a href=\"cancel_order#Page=".($next)."\" onClick='changePagination(".($next).");'>Next &raquo;</a></li>";
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
?>

 <div class="box-body table-responsive no-padding">
	<table class="table table-hover">
		  <thead>
             <tr class="info_member">
                                <th>#</th>
                                <th width="10%">Order ID</th>
                                <th>Date</th>
                                <th> Name</th>
								<th> Mobile </th>
								<th>Payment Method </th>
								<th>Payment Status </th>
								<th style="text-align:center;">Delivery Status</th>
								<th> Delivery Time </th>
                                <th style="text-align:center;">Amount</th>
                         		<th width="6%" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                       <tbody>
					 <?php
					    $sl = 1;
				    	if ($search != ''){
						global $mysqli;
                        if ($stmt = $mysqli->prepare("SELECT id, order_id, customer_name, mobile, g_total, mathod, delivery_time, date, activity, payment_status from sd_order_more
                        WHERE activity = 4 AND order_id LIKE '%$search%' || customer_name LIKE '%$search%' || mobile LIKE '%$search%' || email LIKE '%$search%'
                        ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                        $stmt->execute();    
                        $stmt->bind_result($id, $order_id, $customer_name, $mobile, $g_total, $mathod, $delivery_time, $date, $activity, $payment_status);
                        $stmt->store_result();
						}
						
                        }elseif ($payment_method != ''){
						global $mysqli;
                        if ($stmt = $mysqli->prepare("SELECT id, order_id, customer_name, mobile, g_total, mathod, delivery_time, date, activity, payment_status from sd_order_more
						WHERE activity = 4 AND mathod = '".$payment_method."' ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                        $stmt->execute();   
                        $stmt->bind_result($id, $order_id, $customer_name, $mobile, $g_total, $mathod, $delivery_time, $date, $activity, $payment_status);
                        $stmt->store_result();
						}
						
                        }elseif ($payment_status != ''){
						global $mysqli;
                        if ($stmt = $mysqli->prepare("SELECT id, order_id, customer_name, mobile, g_total, mathod, delivery_time, date, activity, payment_status from sd_order_more   
						WHERE activity = 4 AND payment_status = '".$payment_status."' ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                        $stmt->execute();    
                        $stmt->bind_result($id, $order_id, $customer_name, $mobile, $g_total, $mathod, $delivery_time, $date, $activity, $payment_status);
                        $stmt->store_result();
						}
						
                        }elseif ($delivery_status != ''){
						global $mysqli;
                        if ($stmt = $mysqli->prepare("SELECT id, order_id, customer_name, mobile, g_total, mathod, delivery_time, date, activity, payment_status from sd_order_more
						WHERE activity = '".$delivery_status."' ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                        $stmt->execute();   
                        $stmt->bind_result($id, $order_id, $customer_name, $mobile, $g_total, $mathod, $delivery_time, $date, $activity, $payment_status);
                        $stmt->store_result();
						}
						
                        }else {
						global $mysqli;		
                        if ($stmt = $mysqli->prepare("SELECT id, order_id, customer_name, mobile, g_total, mathod, delivery_date, delivery_time, date, activity, payment_status from sd_order_more 
                        WHERE activity = 4 ORDER BY id DESC limit ".mysqli_real_escape_string($mysqli,$start).",$recordsPerPage")){
                        $stmt->execute(); 
                        $stmt->bind_result($id, $order_id, $customer_name, $mobile, $g_total, $mathod, $delivery_date, $delivery_time, $date, $activity, $payment_status);
                        $stmt->store_result();
					    	}
						}
						
					while ($stmt->fetch()) { 
    					$newDate = date( 'j F Y',strtotime($date) ) ;
    					$sql = "SELECT id, name, mobile, address FROM sd_client  WHERE  id = '".$customer_id."'";
    					$member = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
    					$row_member = mysqli_fetch_assoc($member);
                    	?>               
                            <tr>
                                <td><?php echo +$sl; ?></td>
                                <td><strong style="color:#E60101;text-transform: uppercase;font-family: arial;font-size: 11px;"><?php echo $order_id; ?></strong></td>
                                <td><?php echo $newDate ;?></td>
                                <td><?php echo $row_member['name'];?><?php echo $customer_name;?></td>
								<td><?php echo $mobile;?></td>
								<td style="text-align:center;">
								<?php if($mathod == 9){echo"<span>bKash</span>";}
									  if($mathod == 10){echo"<span>Nogod</span>";}
									  if($mathod == 8){echo"<span>Rocket</span>";}
									  if($mathod == 12){echo"<span>COD</span>";}
								?>
                                </td>
                                <th><?php echo ucfirst($payment_status); ?></th>
                                <td style="text-align:center;">
								<?php if($activity == 1){echo"<span style='color: #008347;'>Pending...</span>";}
									  if($activity == 2){echo"<span style='color: #0002BF;'>Shipping</span>";}
									  if($activity == 3){echo"<span style='color: #0002BF;'>Holding</span>";}
									  if($activity == 4){echo"<span style='color: #0002BF;'>Delivery</span>";}
									  if($activity == 5){echo"<span style='color: #0002BF;'>Cancel</span>";}
								?>
                                </td>
								<td><?php echo $delivery_date; ?>, <?php echo $delivery_time;?></td>
                                <td style="text-align:center;"><b>৳ <?php echo number_format ($g_total);?></b></td>
                                <td style="text-align: center;">
                                    <a href="view_invoice_retail/<?php echo $order_id; ?>" class="btn btn-success btn-raised btn-xs" data-toggle="tooltip" data-placement="top">
                                	View<div class="ripple-container"></div></a>
                                      <a href="apps/bin_cat/delete_invoice.php?actionID=view_all_retail_invoices&itemID=<?php echo $order_id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" style="font-size: 10px;" onClick="return confirm('Are you sure to Delete this Invoice?')"><i class="fa fa-close"></i><div class="ripple-container"></div></a>
							    </td>
                            </tr>
   						 	 <?php }
							 		$stmt->close();
								?>
                        </tbody>
                    </table>
                </div>
                

<?php echo  $pagination; ?>
