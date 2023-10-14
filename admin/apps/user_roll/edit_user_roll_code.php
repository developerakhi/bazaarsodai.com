<?php
require_once("../functions/functions.php");
testing_loggin();

if (isset($_POST['email'])) {
	
		// Sanitize and validate the data passed in
		 $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
   		 $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
   		 $user_type = filter_input(INPUT_POST, 'user_type', FILTER_SANITIZE_EMAIL);
   		 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  		 //$password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
		  
	   // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE)); // Did not work
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE members SET username=?, email=?, user_type=? WHERE id = ? LIMIT 1")){
		$insert_stmt->bind_param('sssi', $username, $email, $user_type, $id);
        $insert_stmt->execute();
        
       }
	  header('Location: ../../edit_user/'.$id.'');
 		}
	
	
?>