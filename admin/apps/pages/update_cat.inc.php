<?php
require_once("apps/initialize.php"); 
include_once(PRIVATE_PATH . "/functions/general_stm.php");
$search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
$cat_id = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$url_string_id = urlencode($cat_id);

global $mysqli;
$categorystm = $mysqli->prepare("SELECT menu_id , menu_name, img1, banner, activity FROM menu WHERE menu_id = ? LIMIT 1");
$categorystm->bind_param('s', $url_string_id); 
$categorystm->execute();    
$categorystm->store_result();
$categorystm->bind_result($id, $menu_name, $img1, $banner, $activity);
$categorystm->fetch();
$categorystm->close();
?>
		
 <title>Edit a product's category information</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="view_all_category" class="btn btn-lg btn-success btn-raised btn-label" ><i class="fa fa-folder-o"></i> &nbsp;View All Category<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit A Category </h3>
            </div>
            <!-- /.box-header -->
            
                   
             <form action="apps/pages/upd_ct.php" enctype="multipart/form-data"  method="POST">
                <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
                <input type="hidden" name="menu_id" value="<?php echo $id; ?>" class="form-control">
                  <div class="box-body">
    					<div class="col-md-6">
    						<label>Icon</label>
    						<input type="file" name="img1"class="btn btn-default btn-file" oninput="pic1.src=window.URL.createObjectURL(this.files[0])">
    						<input type="hidden" name="img1" value="<?php echo $img1; ?>">
    						<?php if ($img1 == NULL ) { ?>
    							<img class="caticon" id="pic1" src="dist/img/example.png"/>
    						<?php }else{ ?>
    							<img class="caticon" id="pic1" src="../images/icon/<?php echo $img1; ?>"/>
    						<?php } ?>
    					</div> 
    					
    					<div class="col-md-6">
    						<label>Banner</label>
    						<input type="file" name="banner"class="btn btn-default btn-file" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
    						<input type="hidden" name="banner" value="<?php echo $banner; ?>">
    						<?php if ($banner == NULL ) { ?>
    							<img class="caticon" id="pic" src="dist/img/example.png"/>
    						<?php }else{ ?>
    							<img class="caticon" id="pic" src="../images/icon/<?php echo $banner; ?>"/>
    						<?php } ?>
    					</div> 
    					
    					<div class="form-group col-md-12">
    					  <label>Category Name</label>
    					  <input type="text" class="form-control" required value="<?php echo $menu_name; ?>" required name="menu_name">
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
   