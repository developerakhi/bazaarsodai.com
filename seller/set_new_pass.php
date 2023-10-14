<?php
include_once 'apps/functions/functions.php';
sec_session_start();

if (login_check($mysqli) == true) {
    header("Location:index.php");
	exit;
} else {
    $logged = 'out';
}

$client_id = filter_input(INPUT_GET, 'abcID', FILTER_SANITIZE_STRING);
 
 if ($stmt = $mysqli->prepare("SELECT email, username
			FROM sd_password_chnge
				WHERE activity = 1 AND sessionID = ?
			LIMIT 1")) {
        $stmt->bind_param('s', $client_id);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($email_nm, $rcvd_username);
        $stmt->fetch();
		
		 if ($stmt->num_rows > 0) {
			 
            } 
            else { 
               header("Location:forgot_password.php?ItemID=session_error");
            }
			
			
		}
		
		
		if ($stmt = $mysqli->prepare("SELECT id, email, password
			FROM members
				WHERE email = ?
			LIMIT 1")) {
        $stmt->bind_param('s', $email_nm);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $email, $password);
        $stmt->fetch();
		}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Set New Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  
  <link rel="stylesheet" href="dist/css/animate.min.css">
	  <style type="text/css">
		.footer-bottom {
			width: 100%;
			margin-right: auto;
			margin-left: auto;
			font-size: 14px;
			font-weight: bold;
			color: #FFF;
			text-align: center;
			bottom: 15px;
			position: absolute;
		}
	</style>
</head>
<body class="hold-transition login-page">    

<div class="login-box">
  <div class="login-logo" style="margin-bottom: 0px;">
	<a href="login.php" class="login-logo"><img src="../images/logo/logo.png" width="100%"></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h3 class="login-box-msg">Set New Password</h3>
	
    <form action="includes/up_new-pass.php" method="post" name="login_form" class="form" role="form">   
	<input type="hidden" name="id" placeholder="Item name" value="<?php echo $client_id; ?>" class="form-control" required="required">
	<input type="hidden" name="session" value="<?php echo $client_id; ?>" class="form-control" required="required">
														 
      <div class="form-group has-feedback">
       <input name="email" value="<?php echo $rcvd_username; ?>" type="text" readonly autocomplete="off" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password"  type="password" autocomplete="off" class="form-control" placeholder="New Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
	   
      <div class="row">
        
        <!-- /.col -->
		
        <div class="col-xs-4">
          <button class="btn btn-primary" type="submit" onclick="formhash(this.form, 
																						  this.form.password,
																						   this.form.id);">Update Password</button>
        </div>
         <!-- /.col -->
      </div>
     </form>
	
<br/>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

	
<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

            <script type="text/JavaScript" src="js/sha512.js"></script> 
            <script type="text/JavaScript" src="js/forms.js"></script>
            <script type="text/javascript" src="js/wow.min.js"></script>
            <script>
                  new WOW().init();
            </script>
</body>
</html>



