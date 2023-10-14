<?php
class client_mng {

public function add_client() 
	{
	global $mysqli;
		return '
		<div class="form-group">
                   <label>Person ID  <span class="red_star">*</span></label>
                       <input type="text" name="p_id"  class="form-control" required="required">
                            </div>
		
		<div class="form-group">
                   <label>Person name  <span class="red_star">*</span></label>
                       <input type="text" name="name" placeholder="e.g Md. Monir Hossain" class="form-control" required="required">
                            </div>
							
				 <div class="form-group">
                      <label>Mobile No <span class="red_star">*</span></label>
                           <input type="text" name="mobile" placeholder="Mobile Number" class="form-control" required="required">
                            </div>
							
							  <div class="form-group">
                                <label>Email </label>
                                    <input type="text" name="email" placeholder="e.g example@stardesignbd.com" class="form-control">
                            </div>
														
							<div class="form-group">
                                <label>Address <span class="red_star">*</span></label>
								<textarea name="address" id="address" cols="50" rows="4" class="form-control" placeholder="City, State, Zip"></textarea>
                            </div>
               		 ';
		}
		
		
		
public function update_merchent() 
	{
			$getID = $_SESSION['user_id'];
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, shop_name, name, address, mobile, email, img1, img2, indhaka, outdhaka, about, delivery, date from sd_merchant
			  WHERE id = ? AND activity = 1
				LIMIT 1");
			$stmt->bind_param('i', $getID);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
            $stmt->bind_result($client_id, $shop_name, $name, $address, $mobile, $email, $img1, $img2, $indhaka, $outdhaka, $about, $delivery, $date);
			$stmt->fetch();
			$stmt->close();
			if ($img1 == NULL){ $image = "photo.png"; } else { $image = $img1;}
			echo 
			'	<input type="hidden" name="id" placeholder="" value="'.$client_id.'" class="form-control" required="required">
				<input type="hidden" name="pro_img1" placeholder="" value="'.$img1.'" class="form-control" required="required">
				<input type="hidden" name="pro_img2" placeholder="" value="'.$img2.'" class="form-control" required="required">
			
						<div id="upload_area" class="corners align_center" style="margin-top:-40px;"></div>
						   <img src="../images/logo/shop/'.$image.'" style="height:100px; width: 300px;"  alt="Logo" />
						</div>
						
							<div class="form-group col-md-4">
                                <label>Shop Name</label>
                                <input type="text" name="shop_name" placeholder="Shop Name" value="'.$shop_name.'" class="form-control" required="required">
                            </div>
							
							<div class="form-group col-md-4">
                                <label>Proprietor Name</label>
                                <input type="text" name="name" placeholder="Proprietor Name" value="'.$name.'" class="form-control">
                            </div>
							
							<div class="form-group col-md-4">
                                <label>Mobile </label>
                                <input type="number" name="mobile"  placeholder="Mobile Number" value="'.$mobile.'" class="form-control">
                            </div>
							
							<div class="form-group col-md-4">
                                <label>Email  (Username)</label>
                                 <input type="text" name="email" placeholder="Email" value="'.$email.'" class="form-control">
                            </div>

							
							<div class="form-group col-md-8">
                                <label>Address</label>
                                    <input type="text" name="address" placeholder="Address" value="'.$address.'" class="form-control">
                            </div>
							
							<div class="form-group col-md-6">
                                <label>Delivery Information </label>
								 <textarea name="delivery"  cols="50" rows="12" class="form-control" placeholder="Delivery Information">'.$delivery.'</textarea>
                            </div>
							
							
							<div class="form-group col-md-6">
                                <label>About Shop </label>
								 <textarea name="about"  cols="50" rows="12" class="form-control" placeholder="About Shop">'.$about.'</textarea>
                            </div>
						
							
						
                          ';
			}
			
	
	
public function add_supplier() 
		{
		global $mysqli;
			return '<div class="form-group">
					   <label>Officer Name  <span class="red_star">*</span></label>
						   <input type="hidden" name="type" class="form-control" required="required" value="2">
						   <input type="text" name="name" placeholder="e.g Abdul Hamid" class="form-control" required="required">
						</div>
								
						 <div class="form-group">
							  <label>Mobile No <span class="red_star">*</span></label>
							   <input type="text" name="mobile" placeholder="Mobile Number" class="form-control" required="required">
						</div>
										
					<div class="form-group">
							<label>Address <span class="red_star">*</span></label>
							<textarea name="address" id="address" cols="50" rows="4" class="form-control" placeholder="City, State, Zip"></textarea>
			 		</div>
						 ';
			}	
			
public function update_supplier() 
	{
	if (isset($_GET['ItemID'])) { 
	
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$client_id = urlencode($cat_name);

			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, name, mobile, address, date from sd_client
			  WHERE id = ?
				LIMIT 1");
			$stmt->bind_param('i', $client_id);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
            $stmt->bind_result($client_id, $name, $mobile, $address, $date);
			$stmt->fetch();
			$stmt->close();
			 
			echo 
			'<div class="form-group">
                                <label>Officer name <span class="red_star">*</span></label>
                                    <input type="hidden" name="id" placeholder="Item name" value="'.$client_id.'" class="form-control" required="required">
                                    <input type="text" name="name" placeholder="e.g Md. Monir Hossain" value="'.$name.'" class="form-control" required="required">
                            </div>
							
							  <div class="form-group">
                                <label>Mobile <span class="red_star">*</span></label>
                                    <input type="text" name="mobile" placeholder="Mobile Number" value="'.$mobile.'" class="form-control" required="required">
                            </div>
							
							
							<div class="form-group">
                                <label>Address <span class="red_star">*</span></label>
								 <textarea name="address" id="address" cols="50" rows="4" class="form-control" placeholder="City, State, Zip">'.$address.'</textarea>
                            </div>
                            
                          ';
			}
	}			
public function edit_profile() 
	{
			global $mysqli;
			$getID = $_SESSION['user_id'];
			$stmt = $mysqli->prepare("SELECT id, email, password from sd_merchant
			  WHERE id = ? AND activity = 1
				LIMIT 1");
			$stmt->bind_param('i', $getID);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
            $stmt->bind_result($client_id, $email, $password);
			$stmt->fetch();
			$stmt->close();
			 
			echo 
			'
				
							<div class="form-group col-md-6">
                                <label>Email Address</label> 
								 <input type="hidden" name="id" placeholder="" value="'.$client_id.'" class="form-control" required="required">
                                    <input type="email" readonly name="email" placeholder="e.g example@stardesignbd.com" value="'.$email.'" class="form-control">
                            </div>
		
                            <div class="form-group col-md-6">
                                <label>Change Password <span class="red_star">*</span></label>
							<input type="password" name="password" placeholder="Change Password"  class="form-control">
                            </div>
							
                          ';
		}	
}
$client_mng_out = new client_mng();
?>
