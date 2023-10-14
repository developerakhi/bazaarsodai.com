<?php 
include_once 'include/msp_lp.php';
include_once 'include/functions.php'; 
frst_session_start(); 
?>
<!DOCTYPE html>
<html class="no-js" lang="en"> 
<?php include ("include/top.php"); ?>
<body>
		

		<?php include ("include/header.php"); ?>
		<?php include ("include/left_side.php"); ?>

        <div class="content-wrap">
            <div class="main min-vh-100" id="get_product">
				<section class="gb-breadcrumb sidebar-blue">
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="breadcrumb">
                                <li><a href="https://bazaarsodai.com/">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
				<section class="all-category-panel min-vh-100" id="person">
                    <div class="container-fluid">
                        <div class="row"><div class="col-md-4"> </div>
					        <div class="col-md-5">
					            <?php 
                                    session_start();
                                    if(isset($_SESSION['status']))
                                    {
                                    ?>
                                        <div class="alert alert-success alert-dismissible fade show">
                                            <strong>Thank you, </strong>Successfully submit your information!
                                        </div>
                                      <?php  unset($_SESSION['status']);
                                    }
                                
                                ?>
                                <form action="contact_us_inc.php" enctype="multipart/form-data"  method="POST">
                    				<div class="box-body" style="margin-top:50px; margin-bottom:30px;">
                    				    <h3 class="text-center">Contact Us</h3>
                                        <div class="form-group">
                                   			 <label>Name <span class="str">*</span> </label>
                        					<input name="name" type="text" class="form-control" value="" autocomplete="off" required placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                   			 <label>Email <span class="str">*</span></label>
                        					<input type="email" name="email" class="form-control" required placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                   			 <label>Phone Number</label>
                        					<input type="number" class="form-control" name="phone_number" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                   			 <label>Message</label>
                                   			 <textarea type="text" name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" value="" autocomplete="off" required></textarea>
                                        </div>
                                       
                                  <div class="box-footer button-demo">
                                    <button class="btn btn-success" type="submit" name="submit" data-color="green" data-style="expand-right">Submit</button>
                                  </div>
                                </div>
                                </form>
                            </div>
						</div>
                    </div>
                </section>
               <?php include ("include/footer.php"); ?>
            </div>
            
        </div>
     
<?php include ("include/cart.php"); ?>
<?php include ("category.php"); ?>
