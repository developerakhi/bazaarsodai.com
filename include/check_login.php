<?php
include_once 'functions_lgn.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
	$prev = $_POST['prev'];
 
    if (login($email, $password, $mysqli) == true) {
        // Login success 
	 if($prev != ''){
		  header('Location: ../promote_ads/'.$prev.'');
		 }
	 else{
        header('Location: ../check_out_step');
	 }
    } else {
        // Login failed 
        header('Location: ../login.php?action=error');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}
?>