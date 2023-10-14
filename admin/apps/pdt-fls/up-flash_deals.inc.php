<?php	
ob_start();
include_once 'apps/functions/functions.php'; 

require_once("apps/initialize.php"); 
include_once(PRIVATE_PATH . "/functions/client_stm.php");

$userID = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$url_string_id = urlencode($userID);

global $mysqli;
$stmt = $mysqli->prepare("SELECT id, offer_name, sub_title, start_date, end_date FROM flash_deals where id = '".$url_string_id."' ");
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($id, $offer_name, $sub_title, $start_date, $end_date);
$stmt->fetch();
$stmt->close();

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
</style>
  <title>Update Flash Deals</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
         <a href="view_all_flash_deals" class="btn btn-lg btn-success btn-raised btn-label" ><i class="fa fa-th-list"></i> &nbsp;View All Flash Deals</a>
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Flash Deals</h3>
            </div>
            
            
             <form action="apps/pdt-fls/cd-up-flash_deals.inc.php" enctype="multipart/form-data"  method="POST">
				<input type="hidden" name="id" class="form-control"value="<?php echo $url_string_id; ?>">
				<div class="box-body">
                    <div class="form-group col-md-3">
               			 <label>Offer Name </label>
    					<input name="offer_name" type="text" class="form-control" id="offer_name" value="<?php echo $offer_name; ?>" autocomplete="off"  placeholder="Offer Name">
                    </div>
                    <div class="form-group col-md-3">
               			 <label>Title</label>
    					<input name="sub_title" type="text" class="form-control" id="sub_title" value="<?php echo $sub_title; ?>" autocomplete="off"  placeholder="Title">
                    </div>
                    <div class="form-group col-md-3">
               			 <label>Start Date </label>
    					<input type="datetime-local" class="form-control" name="start_date" placeholder="time" value="<?php echo $start_date; ?>">
                    </div>
                    <div class="form-group col-md-3">
               			 <label>End Date </label>
    					<input type="datetime-local" class="form-control" name="end_date" placeholder="time" value="<?php echo $end_date; ?>">
                    </div>
                </div>
               <div class="box-footer button-demo">
                 <button class="ladda-button" type="submit" name="submit" data-color="green" data-style="expand-right" data-size="l">Save Data</button>
              </div>
            </form>
            
          
                  <!-- /.box-body -->
                  
    			  <div class="box-body table-responsive">
    			       <form action="apps/pdt-fls/cd-up-flash_deals.inc.php" enctype="multipart/form-data"  method="POST">
    			       <input type="hidden" name="flash_id" class="form-control"value="<?php echo $url_string_id; ?>">
    			         <div class="form-group col-md-5">
                   			<label>Add Product</label>
                            <select name="product_id" required class='form-control'>
                            <option value="">Select Product</option>
                            <?php global $mysqli;
                                $stmt = $mysqli->prepare("SELECT id, item_name, item_code from sd_item_l ORDER BY id ASC");
                                $stmt->execute();
                                $stmt->bind_result($id, $item_name, $item_code);
                                while ($stmt->fetch()) {
                                    echo "<option value='$id'>$item_name</option>";
                                }
                                $stmt->close();?>
                            </select>       
                        </div>
                        <div class="form-group col-md-2">
                            <button class="btn btn-success btn-xs" style="margin-top: 23px;padding: 6px 12px;" type="submit">Submit</button>
                        </div>
                        </form>
                        
                	<table class="table table-hover">
            			<thead>
                         <tr class="info_member">
                            <th>Item name</th>
                            <th width="18%" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
				        global $mysqli;
						if ($flshDeals = $mysqli->prepare("SELECT id, product_id from flash_deals_item WHERE flush_deals_id = '".$url_string_id."' ORDER BY id DESC limit 10")){
						$flshDeals->execute(); 
						$flshDeals->bind_result($id, $product_id);
						$flshDeals->store_result();
						}
						while ($flshDeals->fetch()) {
						    
						    global $mysqli;
					    	if ($flshDealsitem = $mysqli->prepare("SELECT id, shop_id, item_name, unit, price, discount_per, discount_price, img1, img2 from sd_item_l
							WHERE activity = 1 AND id = '".$product_id."' ORDER BY id DESC")){
							$flshDealsitem->execute(); 
							$flshDealsitem->bind_result($item_id, $shop_id, $item_name, $unit, $price, $discount_per, $discount_price, $img1, $img2);
							$flshDealsitem->store_result();
							$flshDealsitem->fetch();
							$flshDealsitem->close();
							}
					    ?>
					    <tr>
                            <td><?php echo $item_name; ?></td>
                            <td style='text-align: center;'>
                                <a href="apps/bin_cat/delete_flash_deals.php?id=<?php echo $id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Are you sure to Delete ?')"><i class="fa fa-close"></i></a>
                            </td>
                		</tr>
                    <?php }?>
                        </tbody>
                </table>
            </div>
			  

           
            
            
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  


<!--<script>-->
<!--$(document).ready(function(){-->
<!--$("select#drop1").change(function(){-->

<!--	var country_id =  $("select#drop1 option:selected").attr('value'); -->
// alert(country_id);	
<!--	$("#person").html( "" );-->
<!--	if (country_id.length > 0 ) { -->
		
<!--	 $.ajax({-->
<!--			type: "POST",-->
<!--			url: "apps/load_data/fetch_cat_item.php",-->
<!--			data: "country_id="+country_id,-->
<!--			cache: false,-->
<!--			beforeSend: function () { -->
<!--				$('#person').html('<img src="dist/img/ajax-loader.gif" alt="" width="24" height="24">');-->
<!--			},-->
<!--			success: function(html) {    -->
<!--				$("#person").html( html );-->
<!--			}-->
<!--		});-->
<!--	} -->
<!--});-->
<!--});-->
<!--</script>-->

<!--<script>-->
<!--$('input[type="file"]').each(function(){-->
  // Refs
<!--  var $file = $(this),-->
<!--      $label = $file.next('label'),-->
<!--      $labelText = $label.find('span'),-->
<!--      labelDefault = $labelText.text();-->

  // When a new file is selected
<!--  $file.on('change', function(event){-->
<!--    var fileName = $file.val().split( '\\' ).pop(),-->
<!--        tmppath = URL.createObjectURL(event.target.files[0]);-->
    //Check successfully selection
<!--    if( fileName ){-->
<!--      $label-->
<!--        .addClass('file-ok')-->
<!--        .css('background-image', 'url(' + tmppath + ')');-->
<!--      $labelText.text(fileName);-->
<!--    }else{-->
<!--      $label.removeClass('file-ok');-->
<!--      $labelText.text(labelDefault);-->
<!--    }-->
<!--  });-->

// End loop of file input elements
<!--});-->
<!--</script>-->

 <!-- Price Calculation -->   
<script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<!--<script src="js/jquery.formula.js"></script>-->



 <!-- Price Calculation --> 
  
 <!--   <script src="ckeditor.js"></script>-->
	<!--<script src="js/sample.js"></script>-->


  <!-- CK Editor -->
<!--<script src="plugins/ckeditor/ckeditor.js"></script>-->
<!-- Bootstrap WYSIHTML5 -->
<!--<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>-->
<!--<script>-->
<!--  $(function () {-->
    <!--// Replace the <textarea id="editor1"> with a CKEditor-->
    // instance, using default configuration.
<!--    CKEDITOR.replace('editor1');-->
    //bootstrap WYSIHTML5 - text editor
<!--    $(".textarea").wysihtml5();-->
<!--  });-->
<!--</script>-->
<!--<script>-->
<!--  $(function () {-->
    <!--// Replace the <textarea id="editor1"> with a CKEditor-->
    // instance, using default configuration.
<!--    CKEDITOR.replace('short_desc');-->
    //bootstrap WYSIHTML5 - text editor
<!--    $(".textarea").wysihtml5();-->
<!--  });-->
<!--</script>-->

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
        
        
 


      
          
<!--<script src="dist/js/select2.js" type="text/javascript"></script>-->
<!--<link rel="stylesheet" type="text/css" href="dist/css/select2.css"/>-->
<!--<link rel="stylesheet" type="text/css" href="dist/css/select2-bootstrap.css"/>-->
<!--<script>-->
<!--      $('.select2').select2({ placeholder : '' });-->

<!--      $('.select2-remote').select2({ data: [{id:'A', text:'A'}]});-->

<!--      $('button[data-select2-open]').click(function(){-->
<!--        $('#' + $(this).data('select2-open')).select2('open');-->
<!--      });-->
<!--</script>-->