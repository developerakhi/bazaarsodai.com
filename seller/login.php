<?php
include_once 'apps/functions/functions.php';

if (login_check($mysqli) == true) {
    header("Location:index.php");
	exit;
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
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
    <div class="login-logo" style="margin-bottom: 0;">
      <a href="login.php" class="login-logo"><img src="../images/logo/logo.png" width="100%"></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your account</p>
      
      <form action="includes/process_login.php" method="post" name="login_form" class="form" role="form">   
        
        <div class="form-group has-feedback">
          <input name="email" type="email" class="form-control" placeholder="Email" value="">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input name="password" type="password" class="form-control" placeholder="Password" value="">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <?php
		if (isset($_GET['error'])) {
		   echo '<p class="error pull-right bg-danger wow shake">Username OR Password Not Matched!</p>';
				 }
	?>  
        <div class="row">
          
          <!-- /.col -->
          
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" onclick="formhash(this.form, this.form.password);">Sign In</button>
          </div>
		  <div class="col-xs-8 hidden" style="text-align: right;">
             <p><a href="forgot_password.php" class="forgot-password" style="color: aliceblue; font-size:14px;">Forgot Password?</a></p>
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




