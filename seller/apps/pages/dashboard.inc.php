 <?php 
	$getID = $_SESSION['user_id'];
    if ($stmt = $mysqli->prepare("SELECT id, shop_name, mobile	
        FROM sd_merchant
       WHERE id = ?
        LIMIT 1")) {
        $stmt->bind_param('s', $getID);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $shop_name, $mobile);
        $stmt->fetch();
		}

?>
<title><?php echo $shop_name; ?></title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       
       
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php 		
			global $mysqli;
				if ($stmt_m = $mysqli->prepare("SELECT id, item_name, price, img1 FROM sd_item_l
				WHERE activity = 1 AND shop_id = '".$user_id."'
				")){
					$stmt_m->execute();    // Execute the prepared query.
						// get variables from result.
					$stmt_m->store_result();
					$stmt_m->bind_result($id, $item_name, $price, $img1);
					$stmt_m->fetch();
					$stmt_m->num_rows();
					$numrows = $stmt_m->num_rows;
						  }
				?>
              <h3><?php echo $numrows; ?></h3>
              <p>Total Active Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="view_all_item" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" style="background: #e20303 !important;">
            <div class="inner">
            <?php 		
			global $mysqli;
				if ($stmt_m = $mysqli->prepare("SELECT id, item_name, price, img1 FROM sd_item_l
				WHERE activity = 2 AND shop_id = '".$user_id."'
				")){
					$stmt_m->execute();    // Execute the prepared query.
						// get variables from result.
					$stmt_m->store_result();
					$stmt_m->bind_result($id, $item_name, $price, $img1);
					$stmt_m->fetch();
					$stmt_m->num_rows();
					$numrows = $stmt_m->num_rows;
						  }
				?>
              <h3><?php echo $numrows; ?></h3>
              <p>Total Pending Product</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="view_all_pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        
      
      </div>
      <!-- /.row -->
      
<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Pending orders</h3>

            
            </div>
            <!-- /.box-header -->
            
<div class="box-body table-responsive no-padding">
	<table class="table table-hover">
		  <thead>
							<tr class="info_member">
                                <th width="10%">Invoice ID</th>
                                <th width="%">Date</th>
                                <th style="text-align:center;">Invoice Total (BDT)</th>
                                <th style="text-align:center;" width="6%">Invoice</th>
                         		<th width="6%" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                       <tbody>
					 <?php 		
					 
						global $mysqli;		
                        if ($stmt = $mysqli->prepare("SELECT id, orderID, shop_id, title, img, activity, date from sd_order_list 
							WHERE activity = 2 AND shop_id = ? GROUP BY orderID
                            ORDER BY id DESC ")){
                        $stmt->bind_param('s', $getID);  // Bind "$email" to parameter.
						$stmt->execute();    // Execute the prepared query.
                        // get variables from result.
                        $stmt->bind_result($id, $order_id, $shop_id, $title, $img, $activity, $date);
                        $stmt->store_result();
						
						
							}
							  
                    while ($stmt->fetch()) {
						
						global $mysqli;
						if ($stmt_ord = $mysqli->prepare("SELECT SUM(line_total) FROM sd_order_list
							WHERE activity = 2 AND shop_id = ".$getID." AND orderID = ".$order_id."")){
						$stmt_ord->execute();    // Execute the prepared query.
												// get variables from result.
						$stmt_ord->store_result();
						$stmt_ord->bind_result($line_total);
						$stmt_ord->fetch();
						$stmt_ord->num_rows();
						$stmt_ord->close();
						}
						
						$newDate2 = date( 'j F, Y',strtotime($date) ) ;
					
                    ?>               
                            <tr>
                                <td><strong style="color:#E60101;text-transform: uppercase;font-family: arial;font-size: 11px;"><?php echo $order_id; ?></strong></td>
                                <td><?php echo $newDate2?></td>
                            
                                <td style="text-align:center;"><b><?php echo number_format($line_total);?></b></td>
                              
                                <td> 
                                <a href="view_invoice_retail/<?php echo $order_id; ?>" class="btn btn-block btn-success" data-toggle="tooltip" data-placement="top" title="View Order" style="padding: 3px 5px;font-size: 12px;">
                                	View Invoice<div class="ripple-container"></div></a>
                                </td>
                                <td style="text-align: center;">
                                <a href="apps/bin_cat/delete_ord.inc.php?ItemID=<?php echo $order_id; ?>&shop_id=<?php echo $shop_id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" style="font-size: 10px;" onClick="return confirm('Are you sure to Delete this Order?')"><i class="fa fa-close"></i><div class="ripple-container"></div></a>
								</td>
                            </tr>
   						 	 <?php }
							 		$stmt->close();
								?>
                        </tbody>
                    </table>
                </div>
                

</div>
           
       
                          
                          
                          
                                
       </section>
    <!-- /.content -->
  </div>