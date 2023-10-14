<?php 
	$getID = $_SESSION['user_id'];
    if ($stmt = $mysqli->prepare("SELECT id, shop_name, email, img1
        FROM sd_merchant
       WHERE id = ?
        LIMIT 1")) {
        $stmt->bind_param('s', $getID);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $shop_name, $email, $img1);
        $stmt->fetch();
		}

?> 

<header class="main-header">
    <!-- Logo -->
    <a href="dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SRV</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Sorbovuk</b> <br/> Seller Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $shop_name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5.png " class="img-circle" alt="User Image">
                <p>
                  <?php echo $shop_name; ?>
                  <small><span class="hidden-xs"><?php echo $email; ?></span></small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="shop_profile" class="btn btn-default btn-flat">Profile</a>
                </div>
				
				<div class="pull-left" style="margin-left: 23px;">
                  <a href="edit_profile" class="btn btn-default btn-flat">Password</a>
                </div>
				
                <div class="pull-right">
                  <a href="includes/logout.php" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
  