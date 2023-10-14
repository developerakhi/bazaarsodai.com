<?php
include_once 'db_connect.php'; 
$error_msg = "";
 
if (isset($_POST['mobile'], $_POST['p'])) {
    // Sanitize and validate the data passed in
    $shop_name = filter_input(INPUT_POST, 'shop_name', FILTER_SANITIZE_STRING);
	$username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $mobile_no = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
	$terms = 1 ;
	$type = 1 ;
	$activity = 1 ;
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }
 
    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
    $prep_stmt = "SELECT id FROM sd_merchant WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
   // check existing email  
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">A user with this email address already exists.</p>';
                        //$stmt->close();/////////////////////////////////////////////////////////////////
        }
                $stmt->close();
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';
                //$stmt->close();/////////////////////////////////////////////////////////////////
    }
 
    // check existing username
    $prep_stmt = "SELECT id FROM sd_merchant WHERE mobile = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $mobile_no);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                        // A user with this username already exists
                        header('Location: ../registration.php?ItemID=error');
                       // $stmt->close();
                }
                $stmt->close();
        } else {
                $error_msg .= '<p class="error">Database error line 55</p>';
              // $stmt->close();
        }
 
    if (empty($error_msg)) {
        // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE)); // Did not work
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO sd_merchant (shop_name, name, address, mobile, email, password, salt, terms, type, activity, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('sssssssssss',  $shop_name, $username, $address, $mobile_no, $email, $password, $random_salt, $terms, $type, $activity, $date);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
		
		
         header('Location: ../selleraccoount?r=success');
    }
		
		$to = 'robiulkarim139@gmail.com';  // this is your Email address
		$from = $email; // this is the sender's Email address
		$subject .= 'Shop Application';
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$message .= '<html><body>';
		$message .= '<div style="border-color: #666;background: #e9e9e9;padding: 20px;width: 540px;margin-left: auto;margin-right: auto;">';
		$message .= '<h2 style="background: #e71a52;text-align: center;color: #f7f7f7;padding: 5px;">'.$shop_name.'</h2>';
		$message .= '<table rules="all" style="border-color: #666;background: #ffffff;width: 100%;" cellpadding="10">';
		$message .= "<tr style='background: #eee;'><td><strong>Proprietor Name:</strong> </td><td>".$username."</td></tr>";
		$message .= "<tr><td><strong>Email:</strong> </td><td>".$email."</td></tr>";
		$message .= "<tr><td><strong>Mobile:</strong> </td><td>".$mobile_no."</td></tr>";
		$message .= "<tr><td><strong>Apply Date:</strong> </td><td>".$date."</td></tr>";
		$message .= "<tr><td><strong>Form Address:</strong> </td><td>".$_SERVER['SERVER_NAME']."</td></tr>";
		$message .= "</table>";
		$message .= '<h2 style="background: #337ab7;text-align: center;color: #f7f7f7;padding: 5px;border-radius: 17px;box-shadow: 0px 2px 2px #191515;width: 350px;margin-left: auto;margin-right: auto;"><a href="http://mddd.com/demo/admin" style="color: #f7f7f7;text-decoration: none;"> Click Here to Approve </a></h2>';
		$message .= "</div>";
		$message .= "</body></html>";
		
		mail($to, $subject, $message, $headers);	
		
	
}






