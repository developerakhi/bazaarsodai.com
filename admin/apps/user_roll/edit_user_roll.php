<?php
require_once("apps/initialize.php"); 
include_once(PRIVATE_PATH . "/functions/client_stm.php");

$userID = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$url_string_id = urlencode($userID);

global $mysqli;
$stmt = $mysqli->prepare("SELECT username, email, user_type FROM members where id = '".$url_string_id."' ");
$stmt->execute();   
$stmt->store_result();
$stmt->bind_result($username, $email, $user_type);
$stmt->fetch();
$stmt->close();

?>
 <script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
      new WOW().init();
</script>
        
 <title>Edit User Roll</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User Roll</h3>
            </div>

             <form action="apps/user_roll/edit_user_roll_code.php" enctype="multipart/form-data"  method="POST">
             <input type="hidden" name="id" class="form-control"value="<?php echo $url_string_id; ?>">
        
              <div class="box-body">
                <div class="form-group">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="username">Name</label>
                            <input type="text" required="required" name="username" id="username" value="<?php echo $username; ?>" placeholder="Name" class="form-control" /><br>    
                        </div>
                    </div>
                    
                    <div class="row">
                        <div form-group col-md-3>
                            <div class="form-group col-md-3">
                                 <label>Email</label>
                                 <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="sel1" class="form-label">User Type</label>
                                <select class="form-control form-select" name="user_type">
                                    <option selected="selected">Choose one</option>
                                        <?php
    									if ($stmCountry = $mysqli->prepare("SELECT id, user_type from members
    									ORDER BY id ASC ")){
    									$stmCountry->execute(); 
    									$stmCountry->bind_result($cid, $useType);
    									$stmCountry->store_result();}
    									while ($stmCountry->fetch()) {
    										echo'
    										<option '; if ($useType == $user_type){echo 'selected="selected"';} echo ' value="'.$useType.'">'.$useType.'</option>';
    									}
    									?>
                                </select>
                            </div>
                        </div>
                   </div>

               
                </div>
              </div>
              <div class="box-footer button-demo">
              <button class="ladda-button" name="published" data-color="green" data-style="expand-right" data-size="l" onclick="formhash(this.form, 
              this.form.password,
               this.form.id);">Save Data</button>
                
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


   