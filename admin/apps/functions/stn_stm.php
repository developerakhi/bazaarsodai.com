<?php
class edit_cat {

public function social_data() {
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
			   <label>Facebook</label>
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
		
public function currency() {
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, currency, date FROM sd_currency WHERE activity = 1 
					LIMIT 1");
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($c_id, $currency, $date);
			$stmt->fetch();
			$stmt->close();
			return 
			'
			<div class="form-group col-md-6">
			    <input type="hidden" name="id" placeholder="ID" value="'.$c_id.'" class="form-control" required="required">
				<label>Update Currency <span class="red_star">*</span></label>
			    <input type="text" name="currency" placeholder="Category name" value="'.$currency.'" class="form-control">
			</div>
						  
						 
				
			';
		}
		
		
		
public function company_data() 
	{
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, copyright, top_no, email, hotline1, hotline2, hotline3, bkash, header_color FROM sd_page_setup
				LIMIT 1");
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($sc_id, $copy, $top_no, $email, $hotline1, $hotline2, $hotline3, $bkash, $header_color);
			$stmt->fetch();
			$stmt->close();
			return          
			'
							<div class="form-group col-md-3">
                                <label>Header Color Change </label>
                                <input type="color" name="header_color" placeholder="Header Color" value="'.$header_color.'" class="form-control">
                             </div>
							
							<div class="form-group col-md-3">
								<input type="hidden" name="id" placeholder="ID" value="'.$sc_id.'" class="form-control" required="required">
								<label>Mobile<span class="red_star">*</span></label>
								<input type="text" name="hotline" placeholder="Mobile" value="'.$top_no.'" class="form-control">
							</div>
							
							<div class="form-group col-md-3">
                               <label>Email </label>
                               <input type="text" name="email" placeholder="Email" value="'.$email.'" class="form-control">
                            </div>

							<div class="form-group col-md-6">
                               <label>Address </label>
                               <input type="text" name="copy" placeholder="Address" value="'.$copy.'" class="form-control">
                            </div>
							
							<h4> Order Info </h4>

							<div class="form-group col-md-4">
                               <label>Hotline  </label>
                               <input type="text" name="hotline1" placeholder="Hotline 1" value="'.$hotline1.'" class="form-control">
                            </div>
							
							<div class="form-group col-md-4">
                               <label> Nogod Number </label>
                               <input type="text" name="hotline2" placeholder="Hotline 2" value="'.$hotline2.'" class="form-control">
                            </div>
							
							<div class="form-group col-md-4">
                               <label>Rocket Number </label>
                               <input type="text" name="hotline3" placeholder="Hotline 3" value="'.$hotline3.'" class="form-control">
                            </div>
							
							<div class="form-group col-md-12">
                               <label> bKash Number </label>
                               <input type="text" name="bkash" placeholder="bKash Number" value="'.$bkash.'" class="form-control">
                            </div>
							
							
				
			';
		}
		
		
}
$data_out = new edit_cat();
?>
