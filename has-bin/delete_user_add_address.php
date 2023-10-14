<?php
 require_once("../include/functions.php");

 ob_start();

if (isset($_GET['a_id'])) {

		$aid = filter_input(INPUT_GET, 'a_id', FILTER_SANITIZE_NUMBER_INT);

      
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM user_address WHERE id=?")){
		$insert_stmt->bind_param('s', $aid);
		$insert_stmt->execute();
	    
	     header("Location: https://bazaarsodai.com/book_address.php");
    
		}
    
}
    
?>
