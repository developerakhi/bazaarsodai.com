<?php include_once 'functions.php';
  $page_n =  basename($_SERVER['PHP_SELF']); ?>

 					 <ul>
                     	<li><a href="my-account.php" <?php if ($page_n == 'my-account.php'){echo 'class="active"';} ?>><i class="icon icon-circle-o text-yellow pull-right"></i> <span>Dashboard</span></a></li>
                        <li><a href="all_invoices.php" <?php if ($page_n == 'all_invoices.php' || $page_n == 'add-new-in.php'){echo 'class="active"';} ?>><i class="icon icon-circle-o text-blue pull-right"></i> <span>Invoice List</span></a></li>
                       
                       
					    
					   <li><a href="my_details.php" <?php if ($page_n == 'my_details.php'){echo 'class="active"';} ?>><i class="icon icon-circle-o text-blue pull-right"></i> <span>My Account</span></a></li>
                        <li><a href="change_pass.php" <?php if ($page_n == 'change_pass.php'){echo 'class="active"';} ?>><i class="icon icon-circle-o text-blue pull-right"></i> <span>Change Password</span></a></li>
                        <li><a href="include/logout.php"><i class="icon icon-circle-o text-red pull-right"></i> <span>Log Out</span></a></li>
                     </ul>
				 
  
						