  <title>Step one > Select A Position</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <p>
          
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data List</h3>

              <div class="box-tools">

              </div>
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
              <div class="box-body table-responsive no-padding">
 
	<table class="table table-hover">
			<thead>
             <tr class="info_member">
                                <th>ID</th>
                                <th>Position</th>
                                <th width="13%" style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                     <tbody>
                         <tr>
                            <td>1</td>
                              <td>Home Page Center</td>
                               <td style="text-align: center;">
								<a href="update_home_position/1" class="btn btn-success btn-raised btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Information" >
                                	<i class="fa fa-pencil"></i><div class="ripple-container"></div></a>   
							</td>
                          </tr>
                        </tbody>
                    </table>
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
          