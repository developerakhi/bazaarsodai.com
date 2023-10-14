<?php	
ob_start();
include_once 'apps/functions/functions.php'; 
include_once(PRIVATE_PATH . "/functions/general_stm.php");
?>
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <title>Add New Slide</title>
  <div class="content-wrapper">
   

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
         <a href="view_all_slide" class="btn btn-lg btn-danger btn-raised btn-label" ><i class="fa fa-th-list"></i> &nbsp;View All Slide Images <div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Image In New Slide</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br/>
             Required Fields <span class="red_star">*</span>
                        		<?php 		
								$url_link = isset($_GET['mesgID']) ? $_GET['mesgID'] : 'nothing_yet';
								$u_link = urlencode($url_link);
								if ($u_link == "success"){
									echo '<div class="alert alert-dismissable alert-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
											<i class="fa fa-check"></i>&nbsp; <strong>Insert Successful!</strong> Data Successfully Inserted In Item list
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											</div>';
										}
										else{}
										
									?>
                                <script type="text/javascript" src="dist/js/ajax-slide.js"></script>

                           <form action="#" method="post" name="image_upload" id="image_upload" enctype="multipart/form-data">
                          <div class="box-body">
               				 <div class="form-group">
                                <label for="exampleInputEmail1">Select Slide image (Min Width: 966px, Height: 300px)</label>
								<input type="file" size="40%" name="uploadfile" id="uploadfile" class="btn btn-default btn-file" onchange="ajaxUpload(this.form);" />
						</div>
                      </div>        
				</form>
       
             <form action="apps/ttl_glry/cd-sld-ins.php" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
              <div class="box-body">
               <div class="form-group">
               <div id="upload_area" class="corners align_center"></div>
               </div>
                <div class="form-group">
           			<?php echo $data_out->add_slide(); ?>            
           
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