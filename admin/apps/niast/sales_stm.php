<?php
class sales_personADD {

public function update_c_info() 
	{	
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, company, mobile, email, address from sd_settings
				ORDER BY id ASC LIMIT 1 ");
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
            $stmt->bind_result($admin_id, $company_name, $mobile, $email, $address);
			$stmt->fetch();
			$stmt->close();
			 
			echo 
			'<div class="form-group">
                <label>Company Name <span class="red_star">*</span></label>
                  <input type="hidden" name="id" placeholder="ID" value="'.$admin_id.'" class="form-control" required="required">
				  
                  <input type="text" name="company_name" placeholder="e.g Star Design BD" value="'.$company_name.'" class="form-control" required="required">
				  </div>
							
			<div class="form-group">
              <label>Mobile <span class="red_star">*</span></label>
              <input type="text" name="mobile" placeholder="Mobile Number" value="'.$mobile.'" class="form-control" required="required">
              </div>
							
		 <div class="form-group">
              <label>Email</label>
                <input type="text" name="email" placeholder="e.g example@stardesignbd.com" value="'.$email.'" class="form-control">
         </div>
							
		<div class="form-group">
         <label>Address <span class="red_star">*</span></label>
		 <textarea name="address" id="address" cols="50" rows="4" class="form-control" placeholder="City, State, Zip">'.$address.'</textarea>
          </div>
                            
                          ';
			}
}
$sales_mng = new sales_personADD();
?>
