<?php	
ob_start();
include_once 'apps/functions/functions.php'; 
include_once(PRIVATE_PATH . "/functions/general_stm.php");
?>
<style>
/*** GENERAL STYLES ***/
* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}



#page {
  text-align: ;
    font-size: ;
    margin: ;
}
#page h1 {
  margin-bottom: 4rem;
  font-family: 'Lemonada', cursive;
  text-transform: uppercase;
  font-weight: normal;
  color: #fff;
  font-size: 2rem;
}

/*** CUSTOM FILE INPUT STYE ***/
.wrap-custom-file {
  position: relative;
  display: inline-block;
  width: 150px;
  height: 150px;
  margin: 0 0.5rem 1rem;
  text-align: center;
  border: solid 1px #337ab7;
}
.wrap-custom-file input[type="file"] {
  position: absolute;
  top: 0;
  left: 0;
  width: 2px;
  height: 2px;
  overflow: hidden;
  opacity: 0;
}
.wrap-custom-file label {
  z-index: 1;
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  overflow: hidden;
  padding: 0 0.5rem;
  cursor: pointer;
  background-color: #fff;
  border-radius: 4px;
  -webkit-transition: -webkit-transform 0.4s;
  transition: -webkit-transform 0.4s;
  transition: transform 0.4s;
  transition: transform 0.4s, -webkit-transform 0.4s;
}
.wrap-custom-file label span {
  display: block;
  margin-top: 2rem;
  font-size: 1.4rem;
  color: #777;
  -webkit-transition: color 0.4s;
  transition: color 0.4s;
}
.wrap-custom-file label .fa {
  position: absolute;
  bottom: 1rem;
  left: 50%;
  -webkit-transform: translatex(-50%);
  transform: translatex(-50%);
  font-size: 1.5rem;
  color: lightcoral;
  -webkit-transition: color 0.4s;
  transition: color 0.4s;
}
.wrap-custom-file label:hover {
  -webkit-transform: translateY(-1rem);
  transform: translateY(-1rem);
}
.wrap-custom-file label:hover span, .wrap-custom-file label:hover .fa {
  color: #333;
}
.wrap-custom-file label.file-ok {
  background-size: cover;
  background-position: center;
}
.wrap-custom-file label.file-ok span {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 0.3rem;
  font-size: 1.1rem;
  color: #000;
  background-color: rgba(255, 255, 255, 0.7);
}
.wrap-custom-file label.file-ok .fa {
  display: none;
}
</style>
  <title>Add New Item</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
         <a href="view_all_item" class="btn btn-lg btn-success btn-raised btn-label" ><i class="fa fa-th-list"></i> &nbsp;View All Items<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Item</h3>
            </div>
        
       
             <form action="apps/pdt-fls/itm_ic.php" enctype="multipart/form-data"  method="POST">
				<input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
				<input type="hidden" name="pro_id[]" class="form-control" placeholder="Date" >
				<div class="box-body">
                   <div class="form-group col-md-12">
						<div id="page">
						  <!-- Our File Inputs -->
						  
							<div class="wrap-custom-file">
								<input type="file" name="photo" id="image1" accept=".gif, .jpg, .png" />
								<label  for="image1">
								  <span>Main Image</span>
								  <i class="fa fa-plus-circle"></i>
								</label>
							</div>
							
						
						  
						<!-- End Page Wrap -->
						</div>
                   </div>
                <div class="form-group">
           			<?php echo $data_out->add_item(); ?>            
                </div>
              </div>
              <!-- /.box-body -->
			  
			  

              <div class="box-footer button-demo">
              <button class="ladda-button" type="submit" name="submit" data-color="green" data-style="expand-right" data-size="l">Save Data</button>
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

<script>
$('input[type="file"]').each(function(){
  // Refs
  var $file = $(this),
      $label = $file.next('label'),
      $labelText = $label.find('span'),
      labelDefault = $labelText.text();

  // When a new file is selected
  $file.on('change', function(event){
    var fileName = $file.val().split( '\\' ).pop(),
        tmppath = URL.createObjectURL(event.target.files[0]);
    //Check successfully selection
    if( fileName ){
      $label
        .addClass('file-ok')
        .css('background-image', 'url(' + tmppath + ')');
      $labelText.text(fileName);
    }else{
      $label.removeClass('file-ok');
      $labelText.text(labelDefault);
    }
  });

// End loop of file input elements
});
</script>

 <!-- Price Calculation -->   
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="js/jquery.formula.js"></script>



 <!-- Price Calculation --> 
  
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
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('short_desc');
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