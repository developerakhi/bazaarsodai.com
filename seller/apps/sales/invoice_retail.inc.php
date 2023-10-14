<?php ob_start();
include_once 'apps/functions/functions.php'; 
include_once("apps/sales/sales_stm.php");
$getID = $_SESSION['user_id'];
$sanitize = true;
$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$client_id = urlencode($cat_name);
						
global $mysqli;
if ($stmt_m = $mysqli->prepare("SELECT customerID, customer_name, mobile, address, order_id, date FROM sd_order_more
			  WHERE order_id = ? ")){
$stmt_m->bind_param('s', $client_id);  // Bind "$email" to parameter.
$stmt_m->execute();    // Execute the prepared query.
		// get variables from result.
$stmt_m->store_result();
$stmt_m->bind_result($customerID, $customer_name, $customer_mobile, $customer_address, $orderID, $date);
$stmt_m->fetch();
$stmt_m->close();
	}
						  
$sql = "SELECT id, name, mobile, address, email FROM sd_client  WHERE  id = '".$customerID."'";
$member = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
$row_member = mysqli_fetch_assoc($member); 

$banglaDate = date( 'j F, Y',strtotime($date) ) ;	
			 
?>
  <title>Invoice</title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
				<div style="text-align:center"> 
					<?php $sales_mng_out->company_details(); ?>
				</div>
             <hr/>
        <!-- /.col -->
      </div>
      
      <!-- info row -->
    
      <!-- /.row -->
						<?php 		
                        global $mysqli;
                        if ($stmt = $mysqli->prepare("SELECT pro_id, shop_id, activity from sd_order_list
						WHERE shop_id = '".$getID."' AND orderID = '".$orderID."' ")){
                        $stmt->execute();    // Execute the prepared query.
                        // get variables from result.
				        $stmt->store_result();
                        $stmt->bind_result($pro_id, $shop_id, $activity);
						$stmt->fetch();
						$stmt->close();
                          }
						 ?>
						 
		<div class="row invoice-info">
		  <div class="col-xs-12">
			<div class="col-sm-9 invoice-col">
			<?php 
				 echo "Customer Name: " . $customer_name , '<br>';
				echo "Customer Mobile: " . $customer_mobile , '<br>';
				echo "Address: " .$customer_address, '<br>';
		   
		  ?>
			</div>
			<!-- /.col -->
			<div class="col-sm-3 invoice-col" style="text-align: right;">
			 <address>
			   <strong> Invoice ID# <?php echo $client_id; ?></strong><br>
			   Date:  <?php echo $banglaDate; ?> <br>
		
			  </address>
			</div>
			</div>
		</div>

		

	
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
                                <th style="width:3%;text-align: center;">SL</th>
                                <th style="width:8%;">Image</th>
                                <th style="width:15%;">Product Name</th>
                                <th style="width:7%;text-align: center;">Unit Price</th>
                                <th style="width:4%;text-align: center;">Qty</th>
                                <th style="text-align:right;width:10%;">Total</th>
            </tr>
            </thead>
            <tbody id="show">
                
                	<?php $i = 0; ?>
          			   <?php 		
                        global $mysqli;
                        if ($stmt = $mysqli->prepare("SELECT pro_id, shop_id, title, img, price, qty, line_total from sd_order_list
						WHERE shop_id = '".$getID."' AND orderID = ? ")){
						$stmt->bind_param('s', $client_id);  // Bind "$email" to parameter.
                        $stmt->execute();    // Execute the prepared query.
                        // get variables from result.
				        $stmt->store_result();
                        $stmt->bind_result($pro_id, $shop_id, $title, $img, $price, $qty, $line_total);
                          }
						  
						  while ($stmt->fetch()) { 

                         if ($stmt_m = $mysqli->prepare("SELECT  id, item_name, item_code from sd_item_l
                                    WHERE id = ? ")){
                                $stmt_m->bind_param('s', $pro_id);  // Bind "$email" to parameter.
                                $stmt_m->execute();    // Execute the prepared query.
                                // get variables from result.
                                $stmt_m->bind_result($pro_id, $item_name, $item_code);
                                $stmt_m->store_result();
                                $stmt_m->fetch();
                                $stmt_m->close();
                                  }	
								  
						if ($stmt_m = $mysqli->prepare("SELECT id, shop_name, mobile from sd_merchant
                                    WHERE id = ? ")){
                                $stmt_m->bind_param('s', $shop_id);  // Bind "$email" to parameter.
                                $stmt_m->execute();    // Execute the prepared query.
                                // get variables from result.
                                $stmt_m->bind_result($sp_id, $shop_name, $sp_mobile);
                                $stmt_m->store_result();
                                $stmt_m->fetch();
                                $stmt_m->close();
                                  }	
								  
                    		  ?>   
                              <span  class="price" style="visibility:hidden; float:left; height:2px;"><?php echo $sell; ?></span>
                            <tr style="background-color: #fbfbfb;">
                               
                                <td style="text-align: center;"><?php echo ++$i;?></td>
                                 <td>  <img  src="../images/products/<?php echo $img; ?>" width="100" alt="<?php echo $img; ?>" style="width: 38%;"></td>
                                <td><?php echo $title;?><br />
										Code: <?php echo $item_code; ?></td>
                               
								<td style="text-align: center;"><?php echo $price; ?></td>
                                <td style="text-align: center;"><?php echo $qty; ?></td>
                                <td style="text-align:right;"><?php echo $line_total; ?></td>
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
        <!-- accepted payments column -->
        <div class="col-sm-6">
          <p class="lead">&nbsp;</p>
</div>
        <!-- /.col -->
        <div class="col-sm-6">
				<?php 			
						$sql = "select sum(line_total) from sd_order_list  WHERE  orderID = '".$client_id."' AND shop_id =".$shop_id."";
						$sold = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
						$row_in_total = mysqli_fetch_array($sold); 
				
						global $mysqli;
						if ($stmt_m = $mysqli->prepare("SELECT customerID, shipping, mathod, g_total FROM sd_order_more
						  WHERE order_id = ? ")){
						$stmt_m->bind_param('s', $client_id);  // Bind "$email" to parameter.
						$stmt_m->execute();    // Execute the prepared query.
						// get variables from result.
						$stmt_m->store_result();
						$stmt_m->bind_result($customer_id, $shipping, $mathod, $g_total);
						$stmt_m->fetch();
						$stmt_m->close();
						  }		
						?>
          <div class="table-responsive">
        
          
            <table class="table">
              <tr>
                <th align="right"><strong>Sub Total</strong></th>
                <td style="text-align:right;"><strong><?php echo number_format($row_in_total[0]); ?></strong></td>
              </tr>
           
              <tr>
                <th align="right">Shipping Cost</th>
                <td style="text-align:right;"><strong><?php echo  $shipping; ?></strong></td>
              </tr>
              <tr>
                <th align="right">Grand Total</th>
                <td style="text-align:right;"><strong><?php echo  number_format($row_in_total[0]  + $shipping); ?></strong></td>
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