<?php require_once("apps/initialize.php"); ?>
  <title>View User</title>
  <div class="content-wrapper">
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
             <a href="add_permission" class="btn btn-lg btn-success  btn-raised btn-label"><i class="fa fa-pencil-square-o"></i>&nbsp; Add New Permission</a>
          <div class="row"></br>
          <div class="col-xs-12">
              
        
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data List</h3>
            </div>
   
            
        <div class="box-body table-responsive no-padding">
                            	<table class="table table-hover">
                        			<thead>
                        			    
                                     <tr class="info_member">
                                        <th>Id</th>
                                        <th>Roll Name</th>
                                        <th width="13%" style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
							 
							    <?php
							    $sl = 0;
						        global $mysqli;
							    if($stmt_pro = $mysqli->prepare("SELECT id, roll_name from roll_permission 
								 ORDER BY id DESC")){
								$stmt_pro->execute(); 
								$stmt_pro->bind_result($id, $roll_name);
								$stmt_pro->store_result();
									}
						        while ($stmt_pro->fetch()) {
						            
							    ?> 
									<tr>
                                        <td><?php echo ++$sl;?></td>
                                        <td><?php echo $roll_name;?></td>
                                        
                                        
                                        <td style='text-align: center;'>
        								    <a href='edit_permission/<?php echo $id; ?>' class='btn btn-success btn-raised btn-xs' data-toggle='tooltip' data-placement='top" title="Edit Information' ><i class='fa fa-pencil'></i></a>
                                        <?php if($id != 9) {?>
                                            <a href="apps/roll_permission/delete_permission.php?p_id=<?php echo $id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete " onClick="return confirm('Are you sure to Delete ?')"><i class="fa fa-close"></i></a>
        							   <?php } ?>
        							    </td>
                                    </tr>
                                
                            <?php }?>
                                </tbody>
                            </table>
                    </div>
				    
				    
				</div>
           
          	  <!--<div class="box-footer clearfix">-->
             <!--<span class="flash"></span>  -->
          
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
       