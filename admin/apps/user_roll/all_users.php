<?php require_once("apps/initialize.php"); ?>
  <title>View User</title>
  <div class="content-wrapper">
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
      <a href="add_user" class="btn btn-lg btn-success  btn-raised btn-label"><i class="fa fa-pencil-square-o"></i>&nbsp; Add New User<div class="ripple-container"></div></a>
          <p>
          
          <div class="row">
          
        <div class="col-xs-12">
        
        
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data List</h3>

              <div class="box-tools">
                  
              </div>
            </div>
            <!-- /.box-header -->
            
        <div class="box-body table-responsive no-padding">
 
                                	<table class="table table-hover">
                            			<thead>
                            			    
                                         <tr class="info_member">
                                            <th>Name</th>
                                            <th>Email</th>
            								<th>User Type</th>
                                            <th width="13%" style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
								 
								 <?php
							        global $mysqli;
								    if($stmt_pro = $mysqli->prepare("SELECT id, username, user_type, email, password from members 
									WHERE id != 9 ORDER BY id DESC")){
									$stmt_pro->execute(); 
									$stmt_pro->bind_result($id, $username, $user_type, $email, $password);
									$stmt_pro->store_result();
										}
							        while ($stmt_pro->fetch()) {
							            
								    ?> 
										<tr>
                                            <td><?php echo $username; ?></td>
                							<td><?php echo $email; ?></td>
                							<td><?php echo ucfirst($user_type); ?></td>
                							
                                            <td style='text-align: center;'>
            								    <a href='edit_user/<?php echo $id; ?>' class='btn btn-success btn-raised btn-xs' data-toggle='tooltip' data-placement='top" title="Edit Information' ><i class='fa fa-pencil'></i></a>
                                            
                                                <a href="apps/user_roll/delete_user.php?m_id=<?php echo $id; ?>" class="btn btn-danger btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Delete This Row" onClick="return confirm('Are you sure to Delete ?')"><i class="fa fa-close"></i></a>
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
       