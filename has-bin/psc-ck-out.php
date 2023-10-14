 <?php 	
require_once("include/functions_lgn.php"); 
	frst_session_start(); 
	if(login_check($mysqli) == true) {
            
			 header("Location:checkout");
			 } 
            else { 
                   
            }
	
	$getID = $_SESSION['user_id'];
    if ($stmt = $mysqli->prepare("SELECT id, name, mobile, email, address, img1, img2, date
			FROM sd_client
				WHERE id = ?
			LIMIT 1")) {
        $stmt->bind_param('s', $getID);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($user_id, $name, $mobile, $email, $address, $img1, $img2, $date);
        $stmt->fetch();
		}
			

										  
?>
<title>Check out</title>
 
			
				
				<div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="#">Home </a></li>
                    <li class="active"><a href="#">Check out</a></li>
                </ol>
            </div>
            <div class="container">
              
                    
                    <div class="row">
                        
                       <div class="col-sm-6 loginf bas">
							<a href="checkout" class="gstb">Buy As A Guest </a>
					   </div>
					   
                        <div class="col-sm-5 loginf cklg">
                            <h5 class="title-login">Log in to your account</h5>
                            <form action="include/check_login.php" method="post">
                                <p class="form-row form-row-wide">
                                    <label>Email:<span class="required"></span></label>
                                    <input type="text" name="email" placeholder="" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Password:<span class="required"></span></label>
                                    <input type="password" name="password" placeholder="" class="input-text">
                                </p>
								
                               
                                <p class="form-row">
									<button class="button-submit" type="submit" onclick="formhash(this.form, this.form.password);">Login</button>
                                </p>                              
                            </form>
								
								<?php
									if (isset($_GET['action'])) {
									 echo '<p class="error pull-right bg-danger wow shake" style="visibility: visible;background-color: #d01212;color: aliceblue;padding: 4px;">Email or password not macth !</p>';
									}
								?>
                        </div>
                    </div>
                
            </div>
				
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
	new WOW().init();
</script>