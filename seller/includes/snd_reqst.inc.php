<?php
include_once '../apps/functions/functions.php'; 
$error_msg = "";
 
if (isset($_POST['email'])) {
    // Sanitize and validate the data passed in
	
    $code = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$activity = 1;
 	
 		function generateRandomString2($length = 12) {
		$characters = '56789abcdef01234ghijklABCDEFGHIJKLMNmnopqrstuv1234wxyzOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
		}
	
		$orderID22 =  generateRandomString2();
 		$date = date('Y-m-d');
		
	  if ($stmt = $mysqli->prepare("SELECT email 
       		 FROM sd_merchant
     	  WHERE email = ?
        LIMIT 1")) {
        $stmt->bind_param('s', $code);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
        // get variables from result.
        $stmt->bind_result($chck_email);
        $stmt->fetch();
		
	 if ($stmt->num_rows == 1) {
			
			  // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_password_chnge (sessionID, email, username, date, activity) VALUES (?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssss', $orderID22, $chck_email, $code, $date, $activity);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
		
	 		
			
 								$to      = $chck_email; // Send email to our user
								$subject = 'Password Change Request | Verification'; // Give the email a subject 
								$message = '
								 
								Hello,
								PLease click bellow link to change your password. if you are not apply the request please do not click.
								 
								------------------------
								Email: ' .$code .  ' 
								
								
								http://www.mpcictbazar.com/shop/set_new_pass.php?abcID=' .$orderID22 . ' 
								 
								------------------------
								  
								'; // Our message above including the link
													 
								$headers = 'From:noreply@safelifecsl.com' . "\r\n"; // Set from headers
								mail($to, $subject, $message, $headers); // Send our email
								
								
								
		header('Location: ../forgot_password.php?ItemID=success');
	}
 
		 
		 else
		  {
            // No user exists.
      		  header('Location: ../forgot_password.php?error=1');
        }
      
    }
	
		
		 
}






