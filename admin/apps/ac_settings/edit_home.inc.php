<?php	require_once("apps/initialize.php"); 
		include_once(PRIVATE_PATH . "/ac_settings/home_edit_insert_code.php"); ?>
  <title>Edit Home Page Position</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="edit_home_step_one" class="btn btn-lg btn-danger btn-raised btn-label"><i class="fa fa-folder-o"></i> &nbsp;View All Position List<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Home Page Position</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
       
             <form action="" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
              <div class="box-body">
                <div class="form-group">
                   <?php 		
								$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
								$u_link = urlencode($url_link);
								if ($u_link == "success"){
									echo '<div class="alert alert-dismissable alert-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
						<i class="fa fa-check"></i>&nbsp; <strong>Update Successful!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					</div>';
							}
						else{}
						
									
					$sanitize = true;
					$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
					$url_string_cat = urlencode($cat_name);
					
						global $mysqli;
						$stmt_m = $mysqli->prepare("SELECT id, menu, position FROM sd_home_edit
						  WHERE position = ? ");
						$stmt_m->bind_param('s', $url_string_cat);  // Bind "$email" to parameter.
						$stmt_m->execute();    // Execute the prepared query.
						// get variables from result.
						$stmt_m->store_result();
						$stmt_m->bind_result($id, $menu_id, $position);
								while ($stmt_m->fetch()) {
					?>
            <div class="form-group col-md-3">
              <input name="secID[]" type="hidden" value="<?php echo $id?>" />
    			<input name="slID" type="hidden" id="catID" value="<?php echo $url_string_cat; ?>" />
                   <label>Category name <span class="red_star">*</span></label>
                     <select name="cat[]" class='form-control' required>
                        <option value="0">No category selected</option>
                              <?php global $mysqli;
                                    $stmt = $mysqli->prepare("SELECT menu_id, menu_name FROM menu 
                                      ORDER BY menu_name ASC");
                                    $stmt->execute();
                                    $stmt->bind_result($m_id, $menu_name);
                                    while ($stmt->fetch()) {
                                    	  echo "<option value='$m_id'";  if (!(strcmp($m_id, $menu_id))) {echo "selected=\"selected\"";} 
                                  	      echo ">$menu_name</option>";
                                    		}
                            		        $stmt->close();?>
                        	            </select>
            			           </div>
    		               <?php } ?>
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