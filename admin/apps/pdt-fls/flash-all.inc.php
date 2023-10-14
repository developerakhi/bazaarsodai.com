<?php require_once("apps/initialize.php"); 
$in_id = filter_input(INPUT_POST, 'in_id', FILTER_SANITIZE_STRING);
$customerID = filter_input(INPUT_POST, 'customerID', FILTER_SANITIZE_STRING);
?>
<title>Flash Sales</title>
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <a href="add_new_flash_deals" class="btn btn-lg btn-success  btn-raised btn-label"><i class="fa fa-pencil-square-o"></i>&nbsp; Flash Deals<div class="ripple-container"></div></a>
                <div class="row">
                     <div class="col-xs-12">
        
                          <div class="box box-danger">
                           
                            <div class="box-header with-border">
                              <h3 class="box-title">Data List</h3>
                            </div>
        
 
                              <div class="box-body table-responsive no-padding">
                                	<table class="table table-hover">
                            			<thead>
                                             <tr class="info_member">
                                                <th>#</th>
                                                <th>Offer Name</th>
                                                <th>Title</th>
                								<th> Start Date</th>
                								<th> End Date</th>
                                                <th width="13%" style="text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                       
								 
								 <?php
							        global $mysqli;
								    if($stmt_pro = $mysqli->prepare("SELECT id, offer_name, sub_title, start_date, end_date from flash_deals 
									 ORDER BY id DESC")){
									$stmt_pro->execute(); 
									$stmt_pro->bind_result($id, $offer_name, $sub_title, $start_date, $end_date);
									$stmt_pro->store_result();
										}
							        while ($stmt_pro->fetch()) {
							            
								    ?> 
										<tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $offer_name; ?></td>
                                            <td><?php echo $sub_title; ?></td>
                							<td><?php echo $start_date; ?></td>
                							<td><?php echo $end_date; ?></td>
                							
                                            <td style='text-align: center;'>
            								    <a href='update_flash_deals/<?php echo $id; ?>' class='btn btn-success btn-raised btn-xs' data-toggle='tooltip' data-placement='top" title="Edit Information' ><i class='fa fa-pencil'></i></a>
                                                <a href="apps/bin_cat/delete_flash_deals.php?fls_id=<?php echo $id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" onClick="return confirm('Are you sure to Delete ?')"><i class="fa fa-close"></i></a>
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