<?php 
include_once 'include/functions.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<title>Message Test</title>
<body>
    <div class="main-wrapper">

		<div class="page-wrapper">
			<div class="content">
					<div class="row">
						<div class="col-md-12">
							<form action="include/MessageSendCode.php" method="post">
								<div class="card-box">
									<div class="row">
										<div class="col-sm-12">
											<h4 class="ttle">ম্যাসেজ করুন  </h4>
										</div>
										<div class="col-md-8">
											<div class="card-box">
												<div class="form-group row">
													<label class="col-md-4 col-form-label"> মোবাইল নম্বর</label>
													<div class="col-md-8">
														<input type="number" name="toUser" required class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-4 col-form-label">ম্যাসেজ</label>
													<div class="col-md-8">
														<textarea type="text" name="messageContent" required class="form-control"> </textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								<div class="text-center">
								   <button  class="btn btn-primary submit-btn">Send Message</button>
								</div>
							 </div>	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

</body>
</html>