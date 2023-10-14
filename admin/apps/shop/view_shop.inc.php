<?php ob_start();
include_once 'apps/functions/functions.php'; 
include_once("apps/sales/sales_stm.php");

$sanitize = true;
$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$client_id = urlencode($cat_name);
						
global $mysqli;
if ($stmt_m = $mysqli->prepare("SELECT id, shop_name, address, name, mobile, email, delivery, about, activity, date FROM sd_merchant
			  WHERE id = ? ")){
$stmt_m->bind_param('s', $client_id);  // Bind "$email" to parameter.
$stmt_m->execute();    // Execute the prepared query.
		// get variables from result.
$stmt_m->store_result();
$stmt_m->bind_result($id, $shop_name, $address, $name, $mobile, $email, $delivery, $about, $activity, $date);
$stmt_m->fetch();
$stmt_m->close();
	}
	

$newDate2 = date( 'j F, Y',strtotime($date) ) ;


$sql = "SELECT id, name, mobile, address, email FROM sd_client  WHERE  id = '".$customerID."'";
$member = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
$row_member = mysqli_fetch_assoc($member); 
			 
?>
  <title><?php echo $shop_name; ?></title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
			
	<center>
	
	<?php if($activity == 1){echo"<h3 class='actv'>Current Status Active</h3>";}if($activity == 2){echo"<h3 class='dactv'>Current Status Deactive</h3>";}?>
	
			<form action="apps/shop/permission.inc.php" method="GET">
				<input type="hidden" name="shop_id" value="<?php echo $id; ?>" />
			   <label>Activity <span class="red_star">*</span></label>
				   <label>
				  <input type="radio" name="activity" value="1" id="featured_0" <?php if ($activity == 1){echo 'checked="checked"';} ?>>
				  Yes</label>
			   
				<label>
				  <input type="radio" name="activity" value="2" id="featured_1" <?php if ($activity == 2){echo 'checked="checked"';} ?> />
				  No</label>
				  
				  
				  <?php if($activity == 1){echo"<button type=;submit' class='dabtn'> <i class='fa fa-toggle-on'></i>&nbsp;  Click Here to Deactive </button>
				  ";}if($activity == 2){echo"<button type='submit' class='actvb'> <i class='fa fa-toggle-off'></i>&nbsp;  Click Here to ctive </button>";}?>
			</form>
		<a href="all_itm/<?php echo $id; ?>" class="btn btn-danger" style="margin-top:10px; font-size: 20px;background: #013350;border: #013350;"><i class="fa fa-reply" aria-hidden="true" ></i>&nbsp; All Product</a>

	</center>		
            </br>
        <!-- /.col -->
      </div>
      
      <!-- info row -->
   
      </div>
      <!-- /.row -->



      

      <div class="row">
       
        <div class="col-sm-12">
				
			<div class="table-responsive" style="padding: 5px 135px;">
        
          
									<table border="1" class="tbls">
										<tbody>
											<tr>
												<td class="lstm">Joining</td>
												<td class="lstm"><?php echo $newDate2; ?></td>
											</tr>
											<tr>
												<td class="lstm tblw">Vendor Name</td>
												<td class="lstm"><?php echo $shop_name; ?></td>
											</tr>
											
											<tr>
												<td class="lstm">Proprietor Name</td>
												<td class="lstm"><?php echo $name; ?></td>
											</tr>
											
											<tr>
												<td class="lstm">Mobile</td>
												<td class="lstm"><?php echo $mobile; ?></td>
											</tr>
											
											<tr>
												<td class="lstm">Email: </td>
												<td class="lstm"><?php echo $email; ?></td>
											</tr>
											
											<tr>
												<td class="lstm">Address</td>
												<td class="lstm"><?php echo $address; ?></td>
											</tr>
											
											
											<tr>
											<?php 		
											global $mysqli;
											if ($stmt_m = $mysqli->prepare("SELECT id, shop_id FROM sd_item_l
											WHERE shop_id = '".$id."' ")){
												$stmt_m->execute();    // Execute the prepared query.
													// get variables from result.
												$stmt_m->store_result();
												$stmt_m->bind_result($id, $shop_id);
												$stmt_m->fetch();
												$stmt_m->num_rows();
												$numrows = $stmt_m->num_rows;
													  }
											?>
												<td class="lstm">Total Product</td>
												<td class="lstm"><?php echo $numrows; ?></td>
											</tr>
											
											<tr>
												<td class="lstm">Delivery System</td>
												<td class="lstm"><?php echo $delivery; ?></td>
											</tr>
											
											<tr>
												<td class="lstm">About</td>
												<td class="lstm"><?php echo $about; ?></td>
											</tr>
											
									
										</tbody>
									</table>
			
			
          </div>
        </div>
        <!-- /.col -->
		
      </div>
	  
	  
	
      <!-- /.row -->

      <!-- this row will not appear when printing -->
    
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>