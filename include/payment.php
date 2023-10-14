<?php
require_once("functions.php");

$country_id = urlencode($_POST["country_id"]);

global $mysqli;
$stmt = $mysqli->prepare("SELECT bkash, hotline2, hotline3 FROM sd_page_setup ");
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($bkashno, $nogodnum, $rocketnum);
$stmt->fetch();
$stmt->close();
?>			

					
                             
														
	<?php if ($country_id == 9){?>	
															
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Merchant BKash Number</label>
							<input type="text" readonly class="form-control" aria-describedby="emailHelp" value="<?php echo $bkashno; ?>" name="">
						</div>
					</div>
				</div>
				
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Transction ID</label>
							<input type="text" name="trxid" class="form-control" aria-describedby="emailHelp" placeholder="Transaction ID">
						</div>
					</div>
				</div>
				
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Your bKash Number</label>
							<input type="text" name="acc_no" class="form-control" aria-describedby="emailHelp" placeholder="Your bKash Number">
						</div>
					</div>
				</div>
															
			<?php } ?>
			
			<?php if ($country_id == 10){?>	
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Merchant Nogod Number</label>
							<input type="text" readonly class="form-control" aria-describedby="emailHelp" value="<?php echo $nogodnum; ?>" name="">
						</div>
					</div>
				</div>
				
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Transction ID</label>
							<input type="text" name="trxid" class="form-control" aria-describedby="emailHelp" placeholder="Transaction ID">
						</div>
					</div>
				</div>
				
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Your Nogod Number</label>
							<input type="text" name="acc_no" class="form-control" aria-describedby="emailHelp" placeholder="Your Nogod Number">
						</div>
					</div>
				</div>
				
			<?php } ?>
			
			<?php if ($country_id == 8){?>	
														
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Merchant Rocket Number</label>
							<input type="text" readonly class="form-control" aria-describedby="emailHelp" value="<?php echo $rocketnum; ?>" name="">
						</div>
					</div>
				</div>
				
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Transction ID</label>
							<input type="text" name="trxid" class="form-control" aria-describedby="emailHelp" placeholder="Transaction ID">
						</div>
					</div>
				</div>
				
				<div class="form-group m-b-24">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<label class="mb-0">Your Rocket Number</label>
							<input type="text" name="acc_no" class="form-control" aria-describedby="emailHelp" placeholder="Your Rocket Number">
						</div>
					</div>
				</div>
			
			<?php } ?>
														
													