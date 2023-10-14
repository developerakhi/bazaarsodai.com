<?php	
ob_start();
include_once 'apps/functions/functions.php'; 
include_once(PRIVATE_PATH . "/functions/general_stm.php");

$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$proID = urlencode($cat_name);

?>


  <title>Add More Images</title>
  <div class="content-wrapper">
  

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add More Images</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br/>
                         <?php 		
			  $url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
			  $u_link = urlencode($url_link);
				if ($u_link == "success"){
								echo '<div class="alert alert-dismissable alert-success" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
											<i class="fa fa-check"></i>&nbsp; <strong>Insert Successful!</strong> Data Successfully Inserted In Item list
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											</div>';
										}
				else{}
					?>

             Required Fields <span class="red_star">*</span>

               <script type="text/javascript" src="dist/js/ajax-member.js"></script>
                 <form action="#" method="post" name="image_upload" id="image_upload" enctype="multipart/form-data">
                          <div class="box-body">
               				 <div class="form-group">
                                <label for="exampleInputEmail1">Select Item image</label>
								<span class="fileinput-new">Select file</span>
							<input type="file" size="40%" name="uploadfile" id="uploadfile" class="btn btn-default btn-file" onchange="ajaxUpload(this.form);" />
						</div>
                    </div>        
				</form>
       
             <form action="apps/pdt-fls/more-itm-in.php" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
              <div class="box-body">
               <div class="form-group">
               <div id="upload_area" class="corners align_center"></div>
               </div>
                <div class="form-group">
           			<?php echo $data_out->add_more_img(); ?>            
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
		
		
          <div class="col-md-6" >
          <div class="box box-primary" style="border-top-color: #730606;">
            <div class="box-header with-border" style="background-color: brown;">
              <h3 class="box-title">Images</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->           
              <div class="box-body">
                <div class="form-group">
 
<table class="table table-hover">
			<thead>
             <tr class="info_member">
                                <th>ID</th>
                                <th>Image</th>
                                <th width="8%" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                       <tbody>
	 <?php 		
		global $mysqli;
		$stmt = $mysqli->prepare("SELECT id, img1, img2 from sd_more_img
				WHERE pro_id = ".$proID."
    	    ORDER BY id DESC");
        $stmt->execute();    // Execute the prepared query.
        // get variables from result.
        $stmt->bind_result($id, $img1, $img2);
		$stmt->store_result();
		while ($stmt->fetch()) { 
		?>               
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><img src="../images/products/<?php echo $img1; ?>" width="90" alt="img" /></td>
                                <td style="text-align: center;">                                
                              <a href="apps/bin_cat/delete_mr_img.php?actionID=view_all_more_image&pro_id=<?php echo $proID; ?>&imgID=<?php echo $id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" onClick="return confirm('Are you sure to Delete this image?')"><i class="fa fa-close"></i><div class="ripple-container"></div></a>
							</td>
                            </tr>
   						 	 <?php }
							   $stmt->close();
								?>
                        </tbody>
                    </table>
                           </div>
              </div>
              <!-- /.box-body -->

           
            
          </div>
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
        
        
 
<script>
$(document).ready(function(){
$("select#drop1").change(function(){

	var country_id =  $("select#drop1 option:selected").attr('value'); 
// alert(country_id);	
	$("#person").html( "" );
	if (country_id.length > 0 ) { 
		
	 $.ajax({
			type: "POST",
			url: "apps/load_data/fetch_cat_item.php",
			data: "country_id="+country_id,
			cache: false,
			beforeSend: function () { 
				$('#person').html('<img src="dist/img/ajax-loader.gif" alt="" width="24" height="24">');
			},
			success: function(html) {    
				$("#person").html( html );
			}
		});
	} 
});
});
</script>

      
          
<script src="dist/js/select2.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="dist/css/select2.css"/>
<link rel="stylesheet" type="text/css" href="dist/css/select2-bootstrap.css"/>
<script>
      $('.select2').select2({ placeholder : '' });

      $('.select2-remote').select2({ data: [{id:'A', text:'A'}]});

      $('button[data-select2-open]').click(function(){
        $('#' + $(this).data('select2-open')).select2('open');
      });
</script>