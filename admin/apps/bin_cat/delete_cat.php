<?php
define("APP_ROOT", dirname(dirname(__FILE__)));
define("PRIVATE_PATH", APP_ROOT . "");
require_once(PRIVATE_PATH . "/functions/functions.php");
testing_loggin();

 	if (isset($_GET['catID'])) {
	
		// Sanitize and validate the data passed in
		$menu_id = filter_input(INPUT_GET, 'catID', FILTER_SANITIZE_NUMBER_INT);
		
		$icon = $_GET['icon'];
    	$path="../../../images/icon/".$icon."";
    	(unlink($path));
    	
    	$photo = $_GET['photo'];
    	$path="../../../images/icon/".$photo."";
    	(unlink($path));
		
        
        // Delete From database 
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM menu WHERE menu_id=?")){
		$insert_stmt->bind_param('s', $menu_id);
		
		if (!$insert_stmt->execute()) {
					header('Location: ../error.php?err=Registration failure: INSERT');
			   }
		 	 header('Location: ../../view_all_category/6387457/delete_success');
		   }
		}
?>


