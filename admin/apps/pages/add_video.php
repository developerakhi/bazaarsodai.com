 <title>Add Video</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="all_video" class="btn btn-lg btn-danger btn-raised btn-label"><i class="fa fa-video-camera" aria-hidden="true"></i> &nbsp; All Video<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Video</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
		
		
				<form action="apps/pages/inc_video.php" enctype="multipart/form-data"  method="POST">
					
					<input type="hidden" name="date" class="form-control" value="<?php echo date("Y-m-d"); ?>">
					  <div class="box-body">
					  
						<div class="form-group col-md-12">
							<div id="upload_area" class="corners align_center"></div>
						</div>	
						
						<div class="form-group col-md-12">
						  <label>Title</label>
						  <input type="text" class="form-control"  name="title" placeholder="Title">
						</div>
						
						<div class="form-group col-md-12">
						  <label>Link</label>
						  <input type="text" class="form-control"  name="link" placeholder="Link">
						</div>
						
						<div class="form-group col-md-12">
						  <label>Youtube Video Embed Code (width="100%" height="240")</label>
						  <textarea style="height:120px;" type="text" class="form-control" name="sort_desc" placeholder="Youtube Video Embed Code"> </textarea>
						</div>

					  </div>
					  <!-- /.box-body -->

					  <div class="box-footer button-demo col-md-12">
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