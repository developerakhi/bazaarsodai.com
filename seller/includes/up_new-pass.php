<?php
include_once '../apps/functions/functions.php'; 

if (isset($_POST['email'], $_POST['p'])) {
	  		  $session = filter_input(INPUT_POST, 'session', FILTER_SANITIZE_STRING);
			  
		if ($stmt = $mysqli->prepare("SELECT email, username
			FROM sd_password_chnge
				WHERE activity = 1 AND sessionID = ?
			LIMIT 1")) {
        $stmt->bind_param('s', $session);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($email, $username);
        $stmt->fetch();
		}
		
		// Sanitize and validate the data passed in
   		  $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
		  
	   // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE)); // Did not work
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_merchant SET password=?, salt=? WHERE email = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sss', $password, $random_salt, $username);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Update failure: INSERT');
           }
       }
	   
	   
	 
		
	  header('Location: ../login.php');
 		}
	
	
?>