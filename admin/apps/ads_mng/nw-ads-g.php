<?php	require_once("apps/initialize.php"); ?>
  <title>Add New Advertise</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="view_all_ads" class="btn btn-lg btn-danger btn-raised btn-label"><i class="fa fa-folder-o"></i> &nbsp;View All Advertise<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Advertise</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       		<form id="imageform" method="post" enctype="multipart/form-data" action='ads/ajaxupload-ads.php'>
                  <div class="box-body">
      				 <div class="form-group">
                     <div class="add-title"></div>
                      <label for="exampleInputEmail1">Select A image</label>
                     <input type="file" id="photoimg" name="photoimg" style="padding: 10px;border: solid 1px #337ab7;" />
                   </div>
                </div> 
            </form>
                 
 
             <form action="apps/pages/ins-ads-go.php" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
              <div class="box-body">
               <div class="form-group">
                <div id='preview' align="center" ></div>     
					</div>
                <div class="form-group">
                   <?php 		
								$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
								$u_link = urlencode($url_link);
								if ($u_link == "success"){
									echo '<div class="alert alert-dismissable alert-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
						<i class="fa fa-check"></i>&nbsp; <strong>Insert Successful!</strong> Data Successfully Inserted In Advertise list
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					</div>';
							}
						else{}
					?>
                    
               
                          
                  <p>

                       <label>
                         <input type="checkbox" name="top_1" value="1" id="CheckboxGroup1_0" />
                         Position 1 (width: 290px; height: 190px;)</label>
                          
                      <label>
                         <input type="checkbox" name="home_l_1" value="1" id="CheckboxGroup1_0" />
                         Position 2 (width: 290px; height: 190px;)</label>
                      
                      <label>
                         <input type="checkbox" name="home_l_2" value="1" id="CheckboxGroup1_0" />
                         Position 3 (width: 290px; height: 190px;)</label>

                  
                  </p>
                  
                      

                </div>
                
                <div class="form-group">
                    <label>Advertise Url <span class="red_star">*</span></label>
                     <input name="ads_url" type="text" required="required" class="form-control" placeholder="Advertise Url" value="#">
                 </div>
                 
                <div class="form-group">
                  <label>Adsence Url </label>
                   <textarea name="adsence" class="form-control"></textarea>
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
  
  <script type="text/javascript" src="ads/js/jquery.form.js"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
            $('#photoimg').change(function(){ 
				$("#preview").html('');
				$("#preview").html('<img src="ads/loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
	});
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
