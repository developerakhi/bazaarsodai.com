<?php	require_once("apps/initialize.php"); 
$sanitize = true;
$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$client_id = urlencode($cat_name);
						

global $mysqli;
$stmt_pro = $mysqli->prepare("SELECT id, coupon_code, discount, minimum_amount, end_date from coupon WHERE id = '".$client_id."' ");
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($id, $coupon_code, $discount, $minimum_amount, $end_date);
$stmt->fetch();
$stmt->close();
 
	
?>
 <title>Edit a Coupon</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="view_all_coupon" class="btn btn-lg btn-success btn-raised btn-label" ><i class="fa fa-folder-o"></i> &nbsp;All Coupon<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit a Coupon</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       
             <form action="apps/sales/coupon_up_code.php" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
              <div class="box-body">
                <div class="form-group">
           				<?php 		
								$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
								$u_link = urlencode($url_link);
								if ($u_link == "success"){
									echo '<div class="alert alert-dismissable alert-warning" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
						<i class="fa fa-check"></i>&nbsp; <strong>Edit Successful!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					</div>';
								}
								else{}
								?>
					
                  <input type="hidden" class="form-control"  name="id" value="<?php echo $id; ?>" required placeholder="">
                  
				</div>
				
				<div class="form-group col-md-4">
           			 <label>Coupon Code </label>
    				<input name="coupon_code" type="text" class="form-control"  value="<?php echo $coupon_code;?>" placeholder="Coupon Code">
                </div>
                <div class="form-group col-md-4">
           			 <label>Discount </label>
    				<input type="text" class="form-control" name="discount" placeholder="Discount" value="<?php echo $discount;?>">
                </div>
                <div class="form-group col-md-4">
           			 <label>Minimum Amount </label>
    				<input type="text" class="form-control" name="minimum_amount" placeholder="Minimum Amount" value="<?php echo $minimum_amount;?>">
                </div>
                <div class="form-group col-md-4">
           			 <label>End Date </label>
    				<input type="datetime-local" class="form-control" name="end_date" placeholder="time" value="<?php echo $end_date;?>">
                </div>
				
				
				
              <!-- /.box-body -->

              <div class="box-footer button-demo">
              <button class="ladda-button" name="published" data-color="green" data-style="expand-right" data-size="l">Save Data</button>
                
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
<link rel="stylesheet" href="dist/ladda.min.css">
<script src="dist/spin.min.js"></script>
<script src="dist/ladda.min.js"></script>
	<script>
			// Bind normal buttons
			Ladda.bind( '.button-demo button', { timeout: 90000 } );

			// Bind progress buttons and simulate loading progress
			Ladda.bind( '.progress-demo button', {
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.1, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 2000 );
				}
			} );
		</script>       
   