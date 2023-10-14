<?php	
require_once("apps/initialize.php"); 
include_once("userStatement.php");
include_once("register.inc.php");
 ?>
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
 <title>Create New User</title>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create New User</h3>
            </div>
            <div class="box-body">
			<?php 		
			$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
			$u_link = urlencode($url_link);
			if ($u_link == "success"){
				echo '<div class="alert alert-dismissable alert-warning" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
						<i class="fa fa-check"></i>&nbsp; <strong>Successfully user created</strong> 
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						</div>';
					}
					else{}
				echo "<span style='color: red;'>" . $error_msg . "</span>";
				?>
              </div>
             <form action="" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="date" class="form-control" placeholder="Date" value="<?php echo date("Y-m-d"); ?>">
              <div class="box-body">
                <div class="form-group">
           	    	<div class="form-group col-md-4">
					   <div class="form-group col-md-12">
							<label>User Type</label>
							<select name="user_type" class="form-control" required id="user_type">
								<option value=""> Select One </option>
								<?php
    							if ($stmt_specialist = $mysqli->prepare("SELECT id, roll_name from roll_permission 
    							ORDER BY id ASC ")){
    							$stmt_specialist->execute(); 
    							$stmt_specialist->bind_result($roll_id, $userRoll );
    							$stmt_specialist->store_result();}
    							while ($stmt_specialist->fetch()) {
    								echo'
    								<option value="'.$userRoll.'">'.$userRoll.'</option>';
    							}
    							?>
							</select>
					   </div>
					   <div class="form-group col-md-12">
							<label>User Name <span class="red_star">*</span></label>
							<input type="text" name="username" id="username" placeholder="User Name" required  class="form-control" />
					   </div>
					   <div class="form-group col-md-12">
							<label>Email <span class="red_star">*</span></label>
							<input type="email" required class="form-control" name="email" id="email" placeholder="Email">
					   </div>
					   <div class="form-group col-md-12">
							<label>Password</label>
							<input type="password" class="form-control" required name="password" placeholder="Password">
					   </div>
					   <div class="form-group col-md-12">
							<label>Re-Type Password</label>
							<input type="password" class="form-control" required name="confirmpwd" id="confirmpwd" placeholder="Password">
					   </div>
				  </div>
                </div>
              </div>
              <div class="box-footer button-demo">
              <button class="ladda-button" name="published" data-color="green" data-size="l" onclick="return regformhash(this.form,
                this.form.username,
                this.form.email,
                this.form.password,
                this.form.confirmpwd);">Save Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
 
 
<link rel="stylesheet" href="dist/ladda.min.css">
