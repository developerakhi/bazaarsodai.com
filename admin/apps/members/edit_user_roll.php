<?php	require_once("apps/initialize.php"); 
    include_once(PRIVATE_PATH . "/functions/client_stm.php");
?>
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
        
 <title>Edit User Roll</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User Roll</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br/>
             Required Fields <span class="red_star">*</span>
                        <div class="box-body">
								<?php 		
								$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
								$u_link = urlencode($url_link);
								if ($u_link == "success"){
									echo '<div class="alert alert-dismissable alert-warning" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
											<i class="fa fa-check"></i>&nbsp; <strong>Edit User Successful!</strong> 
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											</div>';
										}
										else{}
									?>
                                    </div>
       
             <form action="apps/members/edit_user_roll_code.php" enctype="multipart/form-data"  method="POST">
                <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
                  <div class="box-body">
                   
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="" value=""/>
               		<!--<?php echo $client_mng_out->edit_user();?>-->
                    </div>
                    
                  </div>
              <!-- /.box-body -->

              <div class="box-footer button-demo">
              <button class="ladda-button" name="published" data-color="green" data-style="expand-right" data-size="l" onclick="formhash(this.form, 
              this.form.password,
               this.form.id);">Save Data</button>
                
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


   