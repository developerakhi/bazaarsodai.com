<?php
class edit_cat {

public function social_data() 
	{
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, fc, twitter, google, pin, instagram
				FROM sd_social
					LIMIT 1");
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($sc_id, $fc, $twit, $google, $pin, $instagram);
			$stmt->fetch();
			$stmt->close();
			return 
			'
			<div class="form-group">
			    <input type="hidden" name="id" placeholder="ID" value="'.$sc_id.'" class="form-control" required="required">
			   <label>Facebook <span class="red_star">*</span></label>
			    <input type="text" name="fc" placeholder="Category name" value="'.$fc.'" class="form-control">
				   </div>
						  <div class="form-group">
                               <label>Twitter </label>
                               <input type="text" name="twitter" placeholder="Twitter Link" value="'.$twit.'" class="form-control">
                            </div>

						  <div class="form-group">
                               <label>Google+ </label>
                               <input type="text" name="google" placeholder="Google Link" value="'.$google.'" class="form-control">
                            </div>
							
							<div class="form-group">
                               <label>Pinterest</label>
                               <input type="text" name="pin" placeholder="Pinterest" value="'.$pin.'" class="form-control">
                            </div>
							
							 <div class="form-group">
                               <label>Instagram  </label>
                               <input type="text" name="instagram" placeholder="Instagram" value="'.$instagram.'" class="form-control">
                            </div>	
				
			';
		}
public function company_data() 
	{
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, copyright, top_no, email FROM sd_page_setup
				LIMIT 1");
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($sc_id, $copy, $top_no, $email);
			$stmt->fetch();
			$stmt->close();
			return 
			'
			<div class="form-group">
			    <input type="hidden" name="id" placeholder="ID" value="'.$sc_id.'" class="form-control" required="required">
			   <label>Hotline <span class="red_star">*</span></label>
			    <input type="text" name="hotline" placeholder="Hotline" value="'.$top_no.'" class="form-control">
				   </div>
						  <div class="form-group">
                               <label>Email </label>
                               <input type="text" name="email" placeholder="Email" value="'.$email.'" class="form-control">
                            </div>

						  <div class="form-group">
                               <label>Copyright </label>
                               <input type="text" name="copy" placeholder="Copyright" value="'.$copy.'" class="form-control">
                            </div>
				
			';
		}
		
		
}
$data_out = new edit_cat();
?>
