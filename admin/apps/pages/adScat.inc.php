<?php	require_once("apps/initialize.php"); ?>
  <title>Add New  Product's Sub Category</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="view_all_sub_cat" class="btn btn-lg btn-success btn-raised btn-label"><i class="fa fa-folder-o"></i> &nbsp;View All Sub Categories<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Product's Sub Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
  
                
                
             <form action="apps/nws/sb-ins.php" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
               <?php 		
								$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
								$u_link = urlencode($url_link);
								if ($u_link == "success"){
									echo '<div class="alert alert-dismissable alert-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
						<i class="fa fa-check"></i>&nbsp; <strong>Insert Successful!</strong> Data Successfully Inserted In Product Sub Category list
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					</div>';
							}
						else{}
					?>
                    
                    
                  
              <div class="box-body">
                <div class="form-group col-md-4">
                  
           
                   <label>Category name <span class="red_star">*</span></label>
                                   <select name="cat" class='form-control' required>
                                     <option value="">Please Select A Category Name</option>
                                        
                                    <?php global $mysqli;
                                    $stmt = $mysqli->prepare("SELECT menu_id, menu_name FROM menu 
                                      ORDER BY menu_name ASC");
                                    $stmt->execute();
                                    $stmt->bind_result($id, $menu_name);
                                    while ($stmt->fetch()) {
                                        echo "<option value='$id'>$menu_name</option>";
                                    }
                                    $stmt->close();?>
                                    </select>
                </div>
                
                <div class="form-group col-md-8">
                         <label>Sub Category name <span class="red_star">*</span></label>
                        <input type="text" name="sub_category_name" placeholder="Sub Category name" class="form-control" required="required">
                    </div>
					
					<div class="form-group col-md-12 hidden">
							 <label>Meta description  </label>
							 <textarea type="text" name="meta_desc" rows="5" class="form-control"> </textarea>
						</div>
					 
						<div class="form-group col-md-12 hidden">
							 <label>Meta keywords  </label>
							 <textarea type="text" name="meta_keywords" rows="5" class="form-control"> </textarea>
						</div>
						
						<div class="form-group col-md-12 hidden">
                                <label>Page Footer Details</label>
								<textarea name="editor1"  class="input-style" id="ditor"></textarea>
								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>        
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
 