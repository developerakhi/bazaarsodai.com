<?php require_once("apps/initialize.php"); 
$in_id = filter_input(INPUT_POST, 'in_id', FILTER_SANITIZE_STRING);
$customerID = filter_input(INPUT_POST, 'customerID', FILTER_SANITIZE_STRING);
$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
 $url_string_item = urlencode($cat_name);
?>

	<?php
	$stmt = $mysqli->prepare("SELECT id, shop_name, name, mobile, email, address FROM sd_merchant
  		WHERE id = ? 
    ORDER BY id ASC");
	$stmt->bind_param('s', $url_string_item); 
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($id, $shop_name, $name, $mobile, $email, $address);
	$stmt->fetch();
	$stmt->close();
	?>

<script type="text/javascript">
$(document).ready(function(){
changePagination('0');    
});
function changePagination(pageId){
     $(".flash").show();
     $(".flash").fadeIn(400).html
                ('Loading <img src="dist/img/ajax-loader.gif" />');
				
     var dataString = 'pageId='+ pageId;
     $.ajax({
           type: "POST",
           url: "apps/load_data/load_shop_itm.php",
           data:{
		  in_id: '<?php echo $in_id; ?>',
		  userID: '<?php echo $customerID; ?>',
		  shpID: '<?php echo $url_string_item; ?>',
		 
          pageId: pageId
    },
           cache: false,
           success: function(result){
           $(".flash").hide();
                 $("#pageData").html(result);
           }
      });

}
</script>

  <title><?php echo $shop_name; ?></title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
      
      
          <div class="row">
          
        <div class="col-xs-12">
        
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Vendor Information</h3>
            </div>
            <!-- /.box-header -->
             <form action="" enctype="multipart/form-data"  method="POST">
             <div class="box-body">
            
			<div class="col-md-12">  
                <div class="form-group" style="text-align: center;">
                <div style="font-size: 30px;"><?php echo $shop_name; ?></div>
				<div>Proprietor : <?php echo $name; ?></div>
				<div>Mobile : <?php echo $mobile; ?></div>
				<div>Email : <?php echo $email; ?></div>
				<div>Address :  <?php echo $address; ?> </div>
				</div>
            </div>
                 
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          
          
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data List</h3>

              
            </div>
            <!-- /.box-header -->
            <?php 		
			  $url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
			  $u_link = urlencode($url_link);
				if ($u_link == "success"){
								echo '
									<div class="alert alert-dismissable alert-danger" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
						<i class="fa fa-close"></i>&nbsp; <strong>Delete Successful!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					</div>
							';
				}
				else{}
					?>
                                         <span id="person">
                                        <div id="loading" ></div>
                                        <div id="pageData"></div>
                           
                           			   <div class="box-footer clearfix">
                           			  <span class="flash"></span>  
                            	 </span>
                            </div>
                                            
                              <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
      				  </div>
     			 </div>
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
			url: "apps/load_data/fetch_products.php",
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