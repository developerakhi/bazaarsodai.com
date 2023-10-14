<?php
require_once("apps/initialize.php"); 

?>

        
 <title>Add New Permission</title>
 <style>
    .tl {
        padding-left:5px;
        margin-top:-2px;
    }
</style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Permission</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br/>
                <!--<span style="padding-left: 10px;">Required Fields</span> <span class="red_star">*</span>-->
                        <div class="box-body">
								<?php 		
								$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
								$u_link = urlencode($url_link);
								if ($u_link == "success"){
									echo '<div class="alert alert-dismissable alert-warning" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
											<i class="fa fa-check"></i>&nbsp;<strong> New Permission Added Successful!</strong> 
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											</div>';
										}
										else{}
										
									echo "<span style='color: red;'>" . $error_msg . "</span>";
									?>
                                    
                                    </div>
       
             <form action="apps/roll_permission/roll_permission_inc.php" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
              <div class="box-body">
               
                <div class="">
                  
           		 <div class="row">
                    <div class="form-check form-switch">
                        <div class="col-md-6">
                            <div>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Roll Name</label>
                                <input class="form-control" type="text" name="roll_name" id="flexSwitchCheckChecked">
                            </div>
                            <div><input class="form-check-input" type="checkbox" name="product_management" id="flexSwitchCheckChecked"><span class="tl">Product Management</span></div>
                            <div><input class="form-check-input" type="checkbox" name="category_management" id="flexSwitchCheckChecked"><span class="tl">Category Management</span></div>
                            <div><input class="form-check-input" type="checkbox" name="order_management" id="flexSwitchCheckChecked"><span class="tl">Order Management</span></div>
                            <div><input class="form-check-input" type="checkbox" name="slide_management" id="flexSwitchCheckChecked"><span class="tl">Slide Management</span></div>
                            <div><input class="form-check-input" type="checkbox" name="flash_deals" id="flexSwitchCheckChecked"><span class="tl">Flash Deals</span></div>
                            <div><input class="form-check-input" type="checkbox" name="coupon" id="flexSwitchCheckChecked"><span class="tl">Coupon</span></div>
                            <div><input class="form-check-input" type="checkbox" name="customers" id="flexSwitchCheckChecked"><span class="tl">Customers</span></div>
                            <div><input class="form-check-input" type="checkbox" name="pages" id="flexSwitchCheckChecked"><span class="tl">Pages</span></div>
                            <div><input class="form-check-input" type="checkbox" name="reports" id="flexSwitchCheckChecked"><span class="tl">Reports</span></div>
                            <div><input class="form-check-input" type="checkbox" name="change_setting" id="flexSwitchCheckChecked"><span class="tl">Change Setting</span></div>
                        </div>
                    </div>
                    
            </div>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer button-demo">
              <button class="ladda-button" name="published" data-color="green" data-size="l" onclick="return regformhash">Save Data</button>
                
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
  
<link rel="stylesheet" href="dist/ladda.min.css">
