<?php ob_start();
include_once 'apps/functions/functions.php'; 
include_once("apps/sales/sales_stm.php");

$sanitize = true;
$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$orderID = urlencode($cat_name);
						
global $mysqli;
if ($stmt_m = $mysqli->prepare("SELECT id, customerID, customer_name, email, mobile, address, total, g_total, discount, mathod, payment_status, trxid, acc_no, shipping, delivery_time, delivery_date, date, activity FROM sd_order_more
WHERE order_id = ? ")){
$stmt_m->bind_param('s', $orderID);  
$stmt_m->execute();   
$stmt_m->store_result();
$stmt_m->bind_result($id, $customerID, $customer_name, $customer_email, $customer_mobile, $customer_address, $total, $g_total, $discount, $mathod, $payment_status, $trxid, $acc_no, $shipping, $delivery_time, $delivery_date, $date, $activity);
$stmt_m->fetch();
$stmt_m->close();
}

global $mysqli;
$stmt = $mysqli->prepare("SELECT id, company, mobile, email, address from sd_settings ORDER BY id ASC LIMIT 1");
$stmt->execute(); 
$stmt->store_result();
$stmt->bind_result($client_id, $companyName, $admin_mobile, $admin_email, $admin_address);
$stmt->fetch();
$stmt->close();
						  
$sql = "SELECT id, name, mobile, address, email FROM sd_client  WHERE  id = '".$customerID."'";
$member = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
$row_member = mysqli_fetch_assoc($member);

$newDate = date( 'j F Y',strtotime($date) ) ;
?>
  <title>Order - <?php echo $orderID; ?></title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <section class="content-header">
		<div class="row">
			<div class="col-md-3">
				<form action="apps/sales/update_order_status.php" enctype="multipart/form-data"  method="POST">
					<input type="hidden" name="order_id" value="<?php echo $id; ?>" class="form-control">
					<div class="col-sm-12">
						<label>Select Payment Status</label>
						<select name="payment_status" class="form-control search_bx" onchange='this.form.submit()'>
							<option value="">Select Payment Status</option>
							<option <?php if($payment_status == 'paid') {?> selected <?php } ?> value="paid">Paid</option>
							<option <?php if($payment_status == 'unpaid') {?> selected <?php } ?> value="unpaid">Unpaid</option>
						</select>
					</div>
				</form>
			</div>
			
			<div class="col-md-3">
				<form action="apps/sales/update_order_status.php" enctype="multipart/form-data"  method="POST">
					<input type="hidden" name="order_id" value="<?php echo $id; ?>" class="form-control">
					<div class="col-sm-12">
						<label>Select Delivery Status</label>
						<select name="delivery_status" class="form-control search_bx" onchange='this.form.submit()'>
							<option value="1" <?php  if ($activity == 1){echo 'selected="selected"';} ?>> Pending </option>
    						<option value="2" <?php  if ($activity == 2){echo 'selected="selected"';} ?>> Shipping </option>
    						<option value="3" <?php  if ($activity == 3){echo 'selected="selected"';} ?>> Holding </option>
    						<option value="4" <?php  if ($activity == 4){echo 'selected="selected"';} ?>> Delivery </option>
    						<option value="5" <?php  if ($activity == 5){echo 'selected="selected"';} ?>> Cancel </option>
						</select>
					</div>
				</form>
			</div>
			
		</div>
    </section>
				
    <section class="invoice">
      <div class="col-sm-12 invhead">
    		<div class="row invhtop">
    			<div class="col-sm-6">
    				<table width="100%" border="0" cellspacing="5" cellpadding="5">
    				  <tr>
    					<td width="" align="">
    						<div class="invcompay"><?php echo $companyName; ?></div>
    						<div><strong> Phone : <?php echo $admin_mobile ;?></strong></div>
    						<div><strong> Email : <?php echo $admin_email ;?></strong></div>
    						<div><strong> Address : <?php echo $admin_address ;?></strong></div>
    					</td>
    				  </tr>
    				</table>
    			</div>
    			<div class="col-sm-6 text-right">
    				<div>
    					<div class="billin"> BILL/INVOICE </div>
    					<strong> Order : <?php echo $orderID ;?></strong><br>
    					<strong> Payment Status : <?php echo $payment_status ;?></strong></br>
    					<strong> Payment Method : <?php echo $mathod ;?></strong></br>
    					<strong> Delivery Status : 
		                <?php if($activity == 1){echo"<span style='color: #008347;'>Pending</span>";}
					        if($activity == 2){echo"<span style='color: #0002BF;'>Shipping</span>";}
					        if($activity == 3){echo"<span style='color: #0002BF;'>Holding</span>";}
					        if($activity == 4){echo"<span style='color: #0002BF;'>Delivery</span>";}
					        if($activity == 5){echo"<span style='color: #0002BF;'>Cancel</span>";}
			        	?>
						</strong></br>
    					<strong> Order Date : <?php echo $newDate ;?></strong></br>
    					<strong> Delivery Date : <?php echo $delivery_date ;?>, <?php echo $delivery_time ;?></strong>
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm-8">
    				<div class=""><b> BILL TO </b></div>
    				<div><strong> Name : <?php echo $customer_name ;?></strong></div>
    				<div><strong> Mobile : <?php echo $customer_mobile ;?></strong></div>
    				<div><strong> Email : <?php echo $customer_email ;?></strong></div>
    				<div><strong> Address : <?php echo $customer_address ;?></strong></div>
    			</div>
    			<div class="col-sm-4 text-right">
    				<div>
    					<script type="text/javascript" src="../assets/qrcode/jquery.qrcode.min.js"></script>
    					<div id="output"></div>
    					<script>
    						jQuery('#output').qrcode({
    							type: 'text', 
    							text	: "Order: <?php echo $orderID ?>, Mobile: <?php echo $customer_mobile ?>",
    							'width' : 80,
    							'height' : 80
    						});
    					</script>
    				</div>
    			</div>
    		</div>
    	</div>
			
    

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
                <th style="width:3%;text-align: center;">#</th>
                <th style="width:8%;">Image</th>
                <th style="width:15%;">Product Name</th>
				<th style="width:7%;text-align: center;">Unit Price</th>
                <th style="width:4%;text-align: center;">Qty</th>
                <th style="text-align:right;width:10%;">Total</th>
            </tr>
            </thead>
                <tbody id="show">
      			   <?php 
      			    $i = 0;
                    global $mysqli;
                    if ($stmt = $mysqli->prepare("SELECT pro_id, title, img, price, qty, d_qty, line_total from sd_order_list WHERE orderID = ? ")){
					$stmt->bind_param('s', $orderID); 
                    $stmt->execute();   
			        $stmt->store_result();
                    $stmt->bind_result($pro_id, $title, $img, $price, $qty, $d_qty, $line_total);
                    }
				   while ($stmt->fetch()) { ?>   
                         <span  class="price" style="visibility:hidden; float:left; height:2px;"><?php echo $sell; ?></span>
                        <tr style="background-color: #fbfbfb;">
                            <td style="text-align: center;"><?php echo ++$i;?></td>
                            <td>  <img  src="../images/products/<?php echo $img; ?>" width="100" alt="<?php echo $img; ?>" style="width: 38%;"></td>
                            <td><?php echo $title;?></td>
							<td style="text-align: center;">Tk <?php echo number_format ($price); ?></td>
                            <td style="text-align: center;"><?php echo $qty; ?></td>
                            <td style="text-align:right;">Tk <?php echo number_format ($line_total); ?></td>
                        </tr>
   					 <?php }
				$stmt->close();
				?>   
      		 </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        
        <div class="col-sm-6">
             <p class="lead">&nbsp;</p>
        </div>

        <div class="col-sm-6">
	        <?php 			
			$sql = "select sum(line_total) from sd_order_list  WHERE  orderID = '".$orderID."'";
			$sold = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
			$row_in_total = mysqli_fetch_array($sold); 
			?>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th align="right"><strong>Sub Total</strong></th>
                <td style="text-align:right;"><strong><?php echo number_format ($row_in_total[0]); ?></strong></td>
              </tr>
              <tr>
                <th align="right">Delivery Cost</th>
                <td style="text-align:right;"><strong><?php echo $shipping; ?></strong></td>
              </tr>
			  <tr>
                <th align="right">Payment Method</th>
                <td style="text-align:right;"><strong>
				<?php
				if($mathod == 9){echo"<span style='color: #;font-weight: 600;;'>bKash</span>";}
				if($mathod == 10){echo"<span style='color: #f5061c;font-weight: 600;;'>Nogod</span>";}
				if($mathod == 8){echo"<span style='color: #;font-weight: 600;;'>Rocket</span>";}
				if($mathod == 12){echo"<span style='color: #f5061c;font-weight: 600;;'>Cash on Delivery</span>";}
				?>
				</strong></td>
              </tr>
              <tr>
                <th align="right">Grand Total</th>
                <td style="text-align:right;"><strong><?php echo number_format ($row_in_total[0]  - $discount + $shipping); ?></strong></td>
              </tr>
              
              
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="inp-vw.php?ItemID=<?php echo $orderID; ?>" target="_blank" class="btn btn-default pull-left">
          	<i class="fa fa-print"></i> Print</a>
          
        <a href="view_all_retail_invoices" class="btn btn-primary  pull-left" style="margin-left:15px;">
        	<i class="fa fa-reply" aria-hidden="true" ></i>&nbsp; Go Back</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>