<?php
require_once("apps/initialize.php"); 
include_once(PRIVATE_PATH . "/functions/client_stm.php");

$userID = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$url_string_id = urlencode($userID);

global $mysqli;
$stmt = $mysqli->prepare("SELECT roll_name, product_management, category_management, order_management, slide_management, flash_deals, coupon, customers, pages, reports, change_setting FROM roll_permission where id = '".$url_string_id."' ");
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($roll_name, $product_management, $category_management, $order_management, $slide_management, $flash_deals, $coupon, $customers, $pages, $reports, $change_settingt);
$stmt->fetch();
$stmt->close();

?>

        
 <title>Edit Roll Permission</title>
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
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Roll Permission</h3>
            </div>

             <form action="apps/roll_permission/edit_roll_permission_code.php" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="id" class="form-control"value="<?php echo $url_string_id; ?>">
              <div class="box-body">
                <div class="form-group">
                    <div class="row">
                    <div class="form-check form-switch">
                        <div class="col-md-6">
                            <div>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Roll Name</label>
                                <input class="form-control" type="text" name="roll_name" value="<?php echo $roll_name;?>">
                            </div>
                            <div><input class="form-check-input" <?php if($product_management != NULL) {?> checked value="<?php echo $product_management;?>" <?php } ?>  type="checkbox" name="product_management"><span class="tl">Product Management</span></div>
                            <div><input class="form-check-input" <?php if($category_management != NULL) {?> checked value="<?php echo $product_management;?>" <?php  } ?> type="checkbox" name="category_management"><span class="tl">Category Management</span></div>
                            <div><input class="form-check-input" <?php if($order_management != NULL) {?> checked value="<?php echo $order_management;?>" <?php  } ?> type="checkbox" name="order_management"><span class="tl">Order Management</span></div>
                            <div><input class="form-check-input" <?php if($slide_management != NULL) {?> checked value="<?php echo $slide_management;?>" <?php  } ?>  type="checkbox" name="slide_management"><span class="tl">Slide Management</span></div>
                            <div><input class="form-check-input" <?php if($flash_deals != NULL) {?> checked value="<?php echo $flash_deals;?>" <?php  } ?> type="checkbox" name="flash_deals"><span class="tl">Flash Deals</span></div>
                            <div><input class="form-check-input" <?php if($coupon != NULL) {?> checked value="<?php echo $coupon;?>" <?php  } ?> type="checkbox" name="coupon"><span class="tl">Coupon</span></div>
                            <div><input class="form-check-input" <?php if($customers != NULL) {?> checked value="<?php echo $customers;?>" <?php  } ?> " type="checkbox" name="customers"><span class="tl">Customers</span></div>
                            <div><input class="form-check-input" <?php if($pages != NULL) {?> checked value="<?php echo $pages;?>" <?php  } ?> type="checkbox" name="pages"><span class="tl">Pages</span></div>
                            <div><input class="form-check-input" <?php if($reports != NULL) {?> checked value="<?php echo $reports;?>" <?php  } ?> type="checkbox" name="reports"><span class="tl">Reports</span></div>
                            <div><input class="form-check-input" <?php if($change_settingt != NULL) {?> checked value="<?php echo $change_settingt;?>" <?php  } ?>  type="checkbox" name="change_setting"><span class="tl">Change Setting</span></div>
                        </div>
                    </div>
                    
            </div>
                </div>
              </div>
              <div class="box-footer button-demo">
              <button class="ladda-button" name="published" data-color="green" data-style="expand-right" data-size="l" onclick="formhash">Save Data</button>
                
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

		</script>


   