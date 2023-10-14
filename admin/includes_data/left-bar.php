<?php include("sanitizing_urls.php"); 
session_start();

$query ="SELECT * FROM roll_permission WHERE roll_name = '".$user_type."' ";
$results = $mysqli->query($query);
$permissionData = $results->fetch_assoc();

?> 
 
 
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a></li>
       
       <?php if ($permissionData['product_management'] == 'on')  { ?>
       <li class="treeview <?php echo $msg21; ?>">
          <a href="#">
            <i class="fa fa-list-alt"></i> <span>Product Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg21_1; ?>><a href="add_new_item"><i class="fa fa-edit"></i> Add New Product</a></li>
            <li <?php echo $msg21_2; ?>><a href="view_all_item"><i class="fa fa-cubes"></i> View All Product</a></li>
          </ul>
        </li>
        <?php } ?>
        
        <?php if ($permissionData['category_management'] == 'on')  { ?>
        <li class="treeview <?php echo $msg2; ?>">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Category Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg; ?>><a href="add_new_category"><i class="fa fa-edit"></i> Add New Category</a></li>
            <li <?php echo $msg3; ?>><a href="view_all_category"><i class="fa fa-th-list"></i> View All Category</a></li>
			<li <?php echo $msg4; ?>><a href="add_new_sub_cat"><i class="fa fa-edit"></i> Add New Sub Category</a></li>
            <li <?php echo $msg5; ?>><a href="view_all_sub_cat"><i class="fa fa-th-list"></i> View All Sub Category</a></li>
           </ul>
        </li>
        <?php } ?>
	    
	 
	  <?php if ($permissionData['order_management'] == 'on')  { ?>
		<li class="treeview <?php echo $msg60; ?>">
          <a href="#">
            <i class="fa fa-th-list"></i> <span>Order Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
             <ul class="treeview-menu">
               <li <?php echo $msg60_4; ?>><a href="view_all_retail_invoices"><i class="fa fa-th-list"></i> All Order</a></li>
               <li <?php echo $msg60_8; ?>><a href="pending_order"><i class="fa fa-th-list"></i> Pending Order</a></li>
               <li <?php echo $msg60_9; ?>><a href="shipping_order"><i class="fa fa-th-list"></i> Shipping Order</a></li>
               <li <?php echo $msg60_10; ?>><a href="holding_order"><i class="fa fa-th-list"></i> Holding Order</a></li>
               <li <?php echo $msg60_11; ?>><a href="delivery_order"><i class="fa fa-th-list"></i> Delivery Order</a></li>
               <li <?php echo $msg60_12; ?>><a href="cancel_order"><i class="fa fa-th-list"></i> Cancel Order</a></li>
               <li <?php echo $msg60_7; ?>><a href="all_request"><i class="fa fa-paper-plane"></i> Product Request</a></li>
                <li <?php echo $msg60_6; ?>><a href="payment_mathod"><i class="fa fa-th-list"></i> Payment System</a></li>
            </ul>
        </li>
        <?php } ?>
		
		<?php if ($permissionData['slide_management'] == 'on')  { ?>
		 <li class="treeview <?php echo $msg70; ?>">
          <a href="#">
            <i class="fa fa-picture-o"></i> <span>Slide Management</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg70_1; ?>><a href="add_new_slide"><i class="fa fa-edit"></i>Add Slide Image</a></li>
            <li <?php echo $msg70_2; ?>><a href="view_all_slide"><i class="fa fa-tree"></i> All Slide Image</a></li>
          </ul>
        </li>
        <?php } ?>
        
        <?php if ($permissionData['flash_deals'] == 'on')  { ?>
        <li class="treeview <?php echo $msg90; ?>">
          <a href="#">
            <i class="fa fa-bolt" aria-hidden="true"></i> <span>Flash Deals</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg90_1; ?>><a href="add_new_flash_deals"><i class="fa fa-edit"></i>Add Flash Deals</a></li>
            <li <?php echo $msg90_2; ?>><a href="view_all_flash_deals"><i class="fa fa-tree"></i>All Flash Deals</a></li>
          </ul>
        </li>
        <?php } ?>
        
        <?php if ($permissionData['coupon'] == 'on')  { ?>
        <li class="treeview <?php echo $msg99; ?>">
          <a href="#">
            <i class="fa fa-gift" aria-hidden="true"></i> <span>Coupon</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg99_1; ?>><a href="add_new_coupon"><i class="fa fa-edit"></i>Add New Coupon</a></li>
            <li <?php echo $msg99_2; ?>><a href="view_all_coupon"><i class="fa fa-tree"></i> View All Coupon</a></li>
          </ul>
        </li>
        <?php } ?>
    
        <?php if ($permissionData['customers'] == 'on')  { ?>
        <li class="treeview <?php echo $msg700; ?>">
          <a href="#">
            <i class="fa fa-user"></i> <span>Customers</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <!--<li <?php echo $msg700_2; ?>><a href="view_all_customer"><i class="fa fa-users"></i> View All Customers </a></li>-->
            <li <?php echo $msg700_2; ?>><a href="all_customer"><i class="fa fa-users"></i> View All Customers </a></li>
     
          </ul>
        </li>
        <?php } ?>
        
        
        <?php if ($permissionData['pages'] == 'on')  { ?>
		<li class="treeview <?php echo $msg201; ?>">
          <a href="#">
            <i class="fa fa-newspaper-o"></i> <span>Pages</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg201_3; ?>><a href="view_all_post"><i class="fa fa-list"></i> All Pages</a></li>
          </ul>
        </li>
        <?php } ?>
	
	    <?php if ($permissionData['pages'] == 'on')  { ?>
        <li class="treeview <?php echo $msg800; ?>">
          <a href="#">
            <i class="fa fa-line-chart"></i> <span>Reports</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li <?php echo $msg800_1; ?>><a href="sales_statement"><i class="fa fa-area-chart"></i> Received Statement</a></li>
            
          </ul>
        </li>
         <?php } ?>
         
         
        <?php if ($permissionData['user_roll'] == 'on')  { ?>
        <li class="treeview <?php echo $msg98; ?>">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i> <span>User Roll</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          
          <ul class="treeview-menu">
            <li <?php echo $msg98_1; ?>><a href="add_user"><i class="fa fa-edit"></i>Add User</a></li>
            <li <?php echo $msg98_2; ?>><a href="all_user"><i class="fa fa-tree"></i> View User</a></li>
            <li <?php echo $msg98_3; ?>><a href="add_permission"><i class="fa fa-edit"></i>Add Permission</a></li>
            <li <?php echo $msg98_4; ?>><a href="all_permission"><i class="fa fa-tree"></i> View Permission</a></li>
          </ul>
        </li>
        <?php } ?>
        
        <?php if ($permissionData['change_setting'] == 'on')  { ?>
        <li class="treeview <?php echo $msg80; ?>">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Change Setting</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
			
            <li <?php echo $msg80_3; ?>><a href="social_networks"><i class="fa fa-edit"></i>Social Networks</a></li>
            <li <?php echo $msg80_3; ?>><a href="all_contact_us"><i class="fa fa-paper-plane"></i>Contact Us Info</a></li>
            <li <?php echo $msg80_4; ?>><a href="company_details"><i class="fa fa-edit"></i> Contact Info</a></li>
            <li <?php echo $msg303_1; ?>><a href="change_company_details"><i class="fa fa-eraser"></i> Edit Invoice Head</a></li>
          </ul>
        </li>
        <?php } ?>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>