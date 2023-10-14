<?php include("sanitizing_urls.php"); ?> 
 <?php 
	$getID = $_SESSION['user_id'];
	
    if ($stmt = $mysqli->prepare("SELECT id, shop_name, mobile, img1, img2
        FROM sd_merchant
       WHERE id = ?
        LIMIT 1")) {
        $stmt->bind_param('s', $getID);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $shop_name, $mobile, $img1, $img2);
        $stmt->fetch();
		}
		if ($img1 == NULL){ $image = "photo.png"; } else { $image = $img1;}
?> 
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <center>
		        <a href="dashboard" class="login-logo"><img src="../images/logo/shop/<?php echo $img1; ?>" width="100%"></a>

           </center>
        </div>
        <div class="pull-left info">
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li <?php echo $msg100_1; ?>><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
       
       
       <li class="treeview <?php echo $msg21; ?>">
          <a href="#">
            <i class="fa fa-list-alt"></i> <span>Product Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg21_1; ?>><a href="add_new_item"><i class="fa fa-edit"></i> Add New Item</a></li>
            <li <?php echo $msg21_2; ?>><a href="view_all_item"><i class="fa fa-cubes"></i>  Active Items</a></li>
			<li <?php echo $msg21_3; ?>><a href="view_all_pending"><i class="fa fa-cubes"></i>  Pending Items</a></li>
          </ul>
        </li>
        
             
      
		<li <?php echo $msg60_4; ?>><a href="view_all_retail_invoices"><i class="fa fa-shopping-cart"></i> <span>All Order</span></a></li>
       
      
        
   
        
        
         <li class="hidden treeview <?php echo $msg800; ?>">
          <a href="#">
            <i class="fa fa-line-chart"></i> <span>Reports</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg800_1; ?>><a href="sales_statement"><i class="fa fa-area-chart"></i> Received Statement</a></li>
            
          </ul>
        </li>
        
       

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>