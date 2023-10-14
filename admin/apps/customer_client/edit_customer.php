
<?php	
ob_start();
include_once 'apps/functions/functions.php'; 

require_once("apps/initialize.php"); 
include_once(PRIVATE_PATH . "/functions/client_stm.php");

$userID = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$url_string_id = urlencode($userID);

global $mysqli;
$stmt = $mysqli->prepare("SELECT id, name, mobile, email, address, delivery_address FROM sd_client where id = '".$url_string_id."' ");
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($id, $name, $mobile, $email, $address, $delivery_address);
$stmt->fetch();
$stmt->close();

?>
		
 <title>Edit Customer</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="all_customer" class="btn btn-lg btn-success btn-raised btn-label" ><i class="fa fa-folder-o"></i> &nbsp;View All Customer<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Customer Details</h3>
            </div>
            <!-- /.box-header -->
            
                   
             <form action="apps/customer_client/update_customer_code.php" enctype="multipart/form-data"  method="POST">
                <input type="hidden" name="id" class="form-control"value="<?php echo $url_string_id; ?>">
                <div class="box-body">
                    <div class="form-group col-md-3">
               			 <label> Name </label>
    					<input name="name" type="text" class="form-control" id="name" value="<?php echo $name; ?>" autocomplete="off"  placeholder="Name">
                    </div>
                    <div class="form-group col-md-3">
               			 <label>Mobile</label>
    					<input name="mobile" type="text" class="form-control" id="mobile" value="<?php echo $mobile; ?>" autocomplete="off"  placeholder="Mobile">
                    </div>
                    <div class="form-group col-md-3">
               			 <label>Email </label>
    					<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email">
                    </div>
                    <div class="form-group col-md-3">
               			 <label>Default Address </label>
    					<input type="text" class="form-control" name="address" value="<?php echo $address; ?>" placeholder="Email">
                    </div>
                    <div class="form-group col-md-3">
               			 <label>Delivery Address </label>
    					<input type="text" class="form-control" name="delivery_address" value="<?php echo $delivery_address; ?>" placeholder="Email">
                    </div>
                </div>

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
   <script src="ckeditor.js"></script>
	<script src="js/sample.js"></script>


  <!-- CK Editor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

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
   