<?php
ob_start();
include_once 'functions_lgn.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
	
if (isset($_POST['mobile'], $_POST['p'])) {
	
		// Sanitize and validate the data passed in
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
   		$email = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_EMAIL);
  		$password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
		  
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_client SET  password=?, salt=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssi', $password, $random_salt, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
	    header('Location: ../password.php?action=success');
		
  		}
		
	 
	
?>