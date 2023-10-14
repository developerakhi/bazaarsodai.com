<?php
$current_date = date('Y-m-d');
$yesterday = date("Y-m-d", strtotime("yesterday"));
$thisweek = date("Y-m-d", strtotime('-7 days'));
$thismonth = date("Y-m-d", strtotime('-30 days'));
$thisyear = date("Y-m-d", strtotime('-365 days'));

$select_date = filter_input(INPUT_POST, 'select_date', FILTER_SANITIZE_STRING);
$today_date = filter_input(INPUT_POST, 'today', FILTER_SANITIZE_STRING);
$yesterday_date = filter_input(INPUT_POST, 'yesterday', FILTER_SANITIZE_STRING);
$thisweek_date = filter_input(INPUT_POST, 'thisweek', FILTER_SANITIZE_STRING);
$thismonth_date = filter_input(INPUT_POST, 'thismonth', FILTER_SANITIZE_STRING);
$thisyear_date = filter_input(INPUT_POST, 'thisyear', FILTER_SANITIZE_STRING);
?>

<?php 		
global $mysqli;
$totalProducts = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM products"));
$totalcategories = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM categories"));
$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM order_list"));
$totaluser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM user"));
?>
<title>Dashboard</title>
<div class="content-wrapper">
    <section class="content">
		<div class="box-header with-border ajkrl">
			<div class="row">
				<div class="filterbox">
					<form action="" enctype="multipart/form-data" method="post" >
						<input type="date" name="select_date" value="<?php echo $select_date; ?>" class="form-control" onchange='this.form.submit()'>
					</form>
				</div>
				<div class="filterbox">
					<form action="" enctype="multipart/form-data"  method="post">
						<input type="hidden" name="thisyear" value="<?php echo $thisyear; ?>">
						<button type="submit" class="filterBtn"> This Year </button>
					</form>
				</div>
				<div class="filterbox">
					<form action="" enctype="multipart/form-data"  method="post">
						<input type="hidden" name="thismonth" value="<?php echo $thismonth; ?>">
						<button type="submit" class="filterBtn"> This Month </button>
					</form>
				</div>
				<div class="filterbox">
					<form action="" enctype="multipart/form-data"  method="post">
						<input type="hidden" name="thisweek" value="<?php echo $thisweek; ?>">
						<button type="submit" class="filterBtn"> This Week </button>
					</form>
				</div>
				<div class="filterbox">
					<form action="" enctype="multipart/form-data"  method="post">
						<input type="hidden" name="yesterday" value="<?php echo $yesterday; ?>">
						<button type="submit" class="filterBtn"> Yesterday </button>
					</form>
				</div>
				<div class="filterbox">
					<form action="" enctype="multipart/form-data"  method="post">
						<input type="hidden" name="today" value="<?php echo $current_date; ?>">
						<button type="submit" class="filterBtn"> Today </button>
					</form>
				</div>
			</div>
		</div>
		</br>
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<?php 
				if ($today_date != NULL){
					
					$totalProducts = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_item_l WHERE date = '$today_date'"));
				
				}elseif($yesterday_date != NULL){
					
					$totalProducts = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_item_l WHERE date = '$yesterday_date'"));
					
				}elseif($thisweek_date != NULL){
					
					$totalProducts = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_item_l WHERE date between '$thisweek_date' AND '$current_date'"));
					
				}elseif($thismonth_date != NULL){
					
					$totalProducts = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_item_l WHERE date between '$thismonth_date' AND '$current_date'"));
					
				}elseif($thisyear_date != NULL){
					
					$totalProducts = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_item_l WHERE date between '$thisyear_date' AND '$current_date'"));
					
				}elseif($select_date != NULL){
					
					$totalProducts = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_item_l WHERE date = '$select_date'"));
					
				}else{
					
					$totalProducts = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_item_l"));
				}
				?>
			  <div class="small-box ivbg">
				<div class="inner">
				  <h3><?php echo $totalProducts; ?></h3>
				  <p>Products</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="view_all_item" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			<div class="col-lg-3 col-xs-6">
			<?php 
			if ($today_date != NULL){
				
				$totalcategories = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM menu WHERE create_at = '$today_date'"));
			
			}elseif($yesterday_date != NULL){
				
				$totalcategories = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM menu WHERE create_at = '$yesterday_date'"));
				
			}elseif($thisweek_date != NULL){
				
				$totalcategories = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM menu WHERE create_at between '$thisweek_date' AND '$current_date'"));
				
			}elseif($thismonth_date != NULL){
				
				$totalcategories = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM menu WHERE create_at between '$thismonth_date' AND '$current_date'"));
				
			}elseif($thisyear_date != NULL){
				
				$totalcategories = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM menu WHERE create_at between '$thisyear_date' AND '$current_date'"));
				
			}elseif($select_date != NULL){
				
				$totalcategories = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM menu WHERE create_at = '$select_date'"));
				
			}else{
				
				$totalcategories = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM menu"));
			}
			?>
			  <div class="small-box ivbg">
				<div class="inner">
				  <h3><?php echo $totalcategories; ?></h3>
				  <p>Categories</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="view_all_category" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			<div class="col-lg-3 col-xs-6">
				<?php 
				if ($today_date != NULL){
					
					$totaluser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_client WHERE date = '$today_date'"));
				
				}elseif($yesterday_date != NULL){
					
					$totaluser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_client WHERE date = '$yesterday_date'"));
					
				}elseif($thisweek_date != NULL){
					
					$totaluser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_client WHERE date between '$thisweek_date' AND '$current_date'"));
					
				}elseif($thismonth_date != NULL){
					
					$totaluser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_client WHERE date between '$thismonth_date' AND '$current_date'"));
					
				}elseif($thisyear_date != NULL){
					
					$totaluser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_client WHERE date between '$thisyear_date' AND '$current_date'"));
					
				}elseif($select_date != NULL){
					
					$totaluser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_client WHERE date = '$select_date'"));
					
				}else{
					
					$totaluser = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_client"));
				}
				?>
			  <div class="small-box ivbg">
				<div class="inner">
				  <h3><?php echo $totaluser; ?></h3>
				  <p>Users</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="all_user" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			<div class="col-lg-3 col-xs-6">
				<?php 
				if ($today_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE date = '$today_date'"));
				
				}elseif($yesterday_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE date = '$yesterday_date'"));
					
				}elseif($thisweek_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE date between '$thisweek_date' AND '$current_date'"));
					
				}elseif($thismonth_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE date between '$thismonth_date' AND '$current_date'"));
					
				}elseif($thisyear_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE date between '$thisyear_date' AND '$current_date'"));
					
				}elseif($select_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE date = '$select_date'"));
					
				}else{
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more"));
				}
				?>
			  <div class="small-box ivbg">
				<div class="inner">
				  <h3><?php echo $totalorderlist; ?></h3>
				  <p>Orders</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="view_all_retail_invoices" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			
			<div class="col-lg-3 col-xs-6">
				<?php 
				if ($today_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 1 AND date = '$today_date'"));
				
				}elseif($yesterday_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 1 AND date = '$yesterday_date'"));
					
				}elseif($thisweek_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 1 AND date between '$thisweek_date' AND '$current_date'"));
					
				}elseif($thismonth_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 1 AND date between '$thismonth_date' AND '$current_date'"));
					
				}elseif($thisyear_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 1 AND date between '$thisyear_date' AND '$current_date'"));
					
				}elseif($select_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 1 AND date = '$select_date'"));
					
				}else{
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 1"));
				}
				?>
			  <div class="small-box ivbg">
				<div class="inner">
				  <h3><?php echo $totalorderlist; ?></h3>
				  <p> Pending  Orders</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="pending_order" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			
			<div class="col-lg-3 col-xs-6">
				<?php 
				if ($today_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 2 AND date = '$today_date'"));
				
				}elseif($yesterday_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 2 AND date = '$yesterday_date'"));
					
				}elseif($thisweek_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 2 AND date between '$thisweek_date' AND '$current_date'"));
					
				}elseif($thismonth_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 2 AND date between '$thismonth_date' AND '$current_date'"));
					
				}elseif($thisyear_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 2 AND date between '$thisyear_date' AND '$current_date'"));
					
				}elseif($select_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 2 AND date = '$select_date'"));
					
				}else{
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 2"));
				}
				?>
			  <div class="small-box ivbg">
				<div class="inner">
				  <h3><?php echo $totalorderlist; ?></h3>
				  <p>Shipping Order</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="shipping_order" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			
			<div class="col-lg-3 col-xs-6">
				<?php 
				if ($today_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 5 AND date = '$today_date'"));
				
				}elseif($yesterday_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 5 AND date = '$yesterday_date'"));
					
				}elseif($thisweek_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 5 AND date between '$thisweek_date' AND '$current_date'"));
					
				}elseif($thismonth_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 5 AND date between '$thismonth_date' AND '$current_date'"));
					
				}elseif($thisyear_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 5 AND date between '$thisyear_date' AND '$current_date'"));
					
				}elseif($select_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 5 AND date = '$select_date'"));
					
				}else{
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 5"));
				}
				?>
			  <div class="small-box ivbg">
				<div class="inner">
				  <h3><?php echo $totalorderlist; ?></h3>
				  <p>  Cancel   Order</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="cancel_order" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			
			<div class="col-lg-3 col-xs-6">
				<?php 
				if ($today_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 4 AND date = '$today_date'"));
				
				}elseif($yesterday_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 4 AND date = '$yesterday_date'"));
					
				}elseif($thisweek_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 4 AND date between '$thisweek_date' AND '$current_date'"));
					
				}elseif($thismonth_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 4 AND date between '$thismonth_date' AND '$current_date'"));
					
				}elseif($thisyear_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 4 AND date between '$thisyear_date' AND '$current_date'"));
					
				}elseif($select_date != NULL){
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 4 AND date = '$select_date'"));
					
				}else{
					
					$totalorderlist = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM sd_order_more WHERE activity = 4"));
				}
				?>
			  <div class="small-box ivbg">
				<div class="inner">
				  <h3><?php echo $totalorderlist; ?></h3>
				  <p>  Delivery   Order</p>
				</div>
				<div class="icon">
				  <i class="ion ion-bag"></i>
				</div>
				<a href="delivery_order" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			
			
			

		</div>  
		
		<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Orders</h3>
            </div>
            <div class="box-body table-responsive no-padding">
            	<table class="table table-hover">
            		<thead>
                        <tr class="info_member">
                            <th>#</th>
                            <th width="10%">Invoice ID</th>
                            <th width="12%">Date</th>
                            <th> Name</th>
							<th> Mobile </th>
							<th> Method </th>
							<th> TRXID </th>
							<th> Acc. No. </th>
                            <th style="text-align:center;">Total (BDT)</th>
                            <th style="text-align:center;">Activity</th>
                            <th style="text-align:center;" width="6%">Invoice</th>
                     		<th width="6%" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                     <tbody>
            				    	<?php 
            				    	$sl = 1;
            						global $mysqli;		
                                    if ($stmt = $mysqli->prepare("SELECT id, order_id, customer_name, mobile, g_total, mathod, trxid, acc_no, date, activity 
            						from sd_order_more ORDER BY id DESC LIMIT 10")){
                                    $stmt->execute();  
                                    $stmt->bind_result($id, $order_id, $customer_name, $mobile, $g_total, $mathod, $trxid, $acc_no, $date, $activity);
                                    $stmt->store_result();
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
            								<td><?php echo $trxid;?></td>
            								<td><?php echo $acc_no;?></td>
                                            <td style="text-align:center;"><b>৳ <?php echo number_format ($g_total);?></b></td>
                                            <td style="text-align:center;">
            								<?php if($activity == 1){echo"<span style='color: #008347;'>Pending...</span>";}
            									  if($activity == 2){echo"<span style='color: #0002BF;'>Shipping</span>";}
            									  if($activity == 3){echo"<span style='color: #0002BF;'>Holding</span>";}
            									  if($activity == 4){echo"<span style='color: #0002BF;'>Delivery</span>";}
            									  if($activity == 5){echo"<span style='color: #0002BF;'>Cancel</span>";}
            								?>
                                            </td>
                                            <td> 
                                            <a href="view_invoice_retail/<?php echo $order_id; ?>" class="btn btn-block btn-success" data-toggle="tooltip" data-placement="top" title="View Invoice" style="padding: 3px 5px;font-size: 12px;">
                                            	Invoice<div class="ripple-container"></div></a>
                                            </td>
                                            <td style="text-align: center;">
                                            <a href="apps/bin_cat/delete_invoice.php?actionID=view_all_retail_invoices&itemID=<?php echo $order_id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" style="font-size: 10px;" onClick="return confirm('Are you sure to Delete this Invoice?')"><i class="fa fa-close"></i><div class="ripple-container"></div></a>
            							</td>
                                        </tr>
               						 	 <?php } $stmt->close(); ?>
                                    </tbody>
                                </table>
                            </div>
                            
            
            </div> 
		
    </section>
    
</div>


