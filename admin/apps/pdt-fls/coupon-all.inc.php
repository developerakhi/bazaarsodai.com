<?php require_once("apps/initialize.php"); 
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
           url: "apps/load_data/load_item.php",
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

  <title>View All Coupon</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <?php if (!empty($in_id)){ ?>
       <a href="view_all_coupon" class="btn btn-lg btn-success btn-raised btn-label"><i class="fa fa-th-list"></i> &nbsp;View All Coupon<div class="ripple-container"></div></a>
        <?php } else{?>
      <a href="add_new_coupon" class="btn btn-lg btn-success  btn-raised btn-label"><i class="fa fa-pencil-square-o"></i>&nbsp; Coupon<div class="ripple-container"></div></a>
          <?php }?>
          <p>
          
          <div class="row">
          
        <div class="col-xs-12">
   
          
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data List</h3>
              
            </div>
            <!-- /.box-header -->
 
                              <div class="box-body table-responsive no-padding">
 
                                	<table class="table table-hover">
                            			<thead>
                            			    
                                         <tr class="info_member">
                                            <th>ID</th>
                                            <th>Coupon Code</th>
            								<th> Discount</th>
            								<th> Minimum Amount</th>
            								<th> End Date</th>
                                            <th width="13%" style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
								 
								 <?php
							        global $mysqli;
								    if($stmt_pro = $mysqli->prepare("SELECT id, coupon_code, discount, minimum_amount, end_date from coupon 
									 ORDER BY id DESC")){
									$stmt_pro->execute(); 
									$stmt_pro->bind_result($id, $coupon_code, $discount, $minimum_amount, $end_date);
									$stmt_pro->store_result();
										}
							        while ($stmt_pro->fetch()) {
							            
								    ?> 
										<tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $coupon_code; ?></td>
                							<td><?php echo $discount; ?></td>
                							<td><?php echo $minimum_amount; ?></td>
                							<td><?php echo $end_date; ?></td>
                							
                                            <td style='text-align: center;'>
            								    <a href='update_coupon/<?php echo $id; ?>' class='btn btn-success btn-raised btn-xs' data-toggle='tooltip' data-placement='top" title="Edit Information' ><i class='fa fa-pencil'></i></a>
                                            
                                                <a href="apps/bin_cat/delete_coupon.php?coupon_id=<?php echo $id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" onClick="return confirm('Are you sure to Delete ?')"><i class="fa fa-close"></i></a>
            							    </td>
                                        </tr>
                                    
                                <?php }?>
                                    </tbody>
                                </table>
                            </div>
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