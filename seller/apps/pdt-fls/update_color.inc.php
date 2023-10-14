<?php	require_once("apps/initialize.php"); 
		include_once(PRIVATE_PATH . "/functions/general_stm.php");
		?>
 <title>Edit a product's category information</title>
  <div class="content-wrapper">
  

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="view_all_category" class="btn btn-lg btn-danger btn-raised btn-label" ><i class="fa fa-folder-o"></i> &nbsp;View All Category<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit a product's category information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br/>
             Required Fields <span class="red_star">*</span>
               <script type="text/javascript" src="dist/js/ajax-member.js"></script>

                           <form action="#" method="post" name="image_upload" id="image_upload" enctype="multipart/form-data">
                          <div class="box-body">
               				 <div class="form-group">
                                <label for="exampleInputEmail1">Select A Image</label>
								<input type="file" size="40%" name="uploadfile" id="uploadfile" class="btn btn-default btn-file" onchange="ajaxUpload(this.form);" />
						</div>
                      </div>        
				</form>
             <form action="apps/pages/upd_ct.php" enctype="multipart/form-data"  method="POST">
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
					<?php echo $data_out->form_data();?>           
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
   