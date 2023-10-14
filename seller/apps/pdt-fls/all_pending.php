<?php require_once("apps/initialize.php"); 
$getID = $_SESSION['user_id'];
$in_id = filter_input(INPUT_POST, 'in_id', FILTER_SANITIZE_STRING);
$customerID = filter_input(INPUT_POST, 'customerID', FILTER_SANITIZE_STRING);
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
           url: "apps/load_data/load_item_pending.php",
           data:{
		  in_id: '<?php echo $in_id; ?>',
		  userID: '<?php echo $customerID; ?>',
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

  <title>View All Items</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <?php if (!empty($in_id)){ ?>
       <a href="view_all_item" class="btn btn-lg btn-danger btn-raised btn-label"><i class="fa fa-th-list"></i> &nbsp;View All Items<div class="ripple-container"></div></a>
        <?php } else{?>
      <a href="add_new_item" class="btn btn-lg btn-success  btn-raised btn-label"><i class="fa fa-pencil-square-o"></i>&nbsp; Add New Item<div class="ripple-container"></div></a>
          <?php }?>
          <p>
          
          <div class="row">
          
        <div class="col-xs-12">
        
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Search A Items</h3>
            </div>
            <!-- /.box-header -->
             <form action="" enctype="multipart/form-data"  method="POST">
             <div class="box-body">
           
                 
				<div class="col-md-10">  
					<div class="form-group">
						<label for="exampleInputEmail1">Item Name</label>
						<select name="customerID" id="product" class='select2 form-control' style="border: 0px none;">
							<option value="">Select A Item Name</option>
							<?php global $mysqli;
							$stmt = $mysqli->prepare("SELECT id, item_name from sd_item_l
							WHERE activity = 2 AND shop_id = '".$getID."'
							  ORDER BY item_name ASC");
							$stmt->execute();
							$stmt->bind_result($id, $item_name);
							while ($stmt->fetch()) {
								echo "<option value='$id'>$item_name</option>";
							}
							$stmt->close();?>
						</select>                        
                 	</div>
                </div>
                                  
                     
                    <div class="col-md-2" style="margin-top: 12px;"> 
						<div class="box-footer button-demo">
            			<button class="btn btn-success pull-right"><i class="fa fa-search" aria-hidden="true"></i> Search...</button>
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