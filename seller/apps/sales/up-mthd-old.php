<?php	require_once("apps/initialize.php"); 
$sanitize = true;
$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$client_id = urlencode($cat_name);
						
global $mysqli;
if ($stmt_m = $mysqli->prepare("SELECT id, name, value, position FROM sd_payments
			  WHERE id = ? ")){
$stmt_m->bind_param('s', $client_id);  // Bind "$email" to parameter.
$stmt_m->execute();    // Execute the prepared query.
		// get variables from result.
$stmt_m->store_result();
$stmt_m->bind_result($id, $title, $value, $type);
$stmt_m->fetch();
$stmt_m->close();
	}
	
?>
 <title>Edit a payment mathod</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="payment_mathod" class="btn btn-lg btn-danger btn-raised btn-label" ><i class="fa fa-folder-o"></i> &nbsp;View All payment mathod<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit a payment mathod</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br/>
             Required Fields <span class="red_star">*</span>
             <form action="apps/sales/up-mthd-cd.php" enctype="multipart/form-data"  method="POST">
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
					
                  <input type="hidden" class="form-control" id="exampleInputEmail1" name="id" value="<?php echo $id; ?>" required placeholder="Mathod Name">
                  <label for="exampleInputEmail1">Mathod Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $title; ?>" required placeholder="Mathod Name">
                </div>
                
               <div class="form-group">
                  <label for="exampleInputEmail1">Mathod Charge</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $value; ?>" name="value" required placeholder="">
			 </div>
                
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
   