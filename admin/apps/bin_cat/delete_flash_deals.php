<?php
define("APP_ROOT", dirname(dirname(__FILE__)));
define("PRIVATE_PATH", APP_ROOT . "");
require_once(PRIVATE_PATH . "/functions/functions.php");
testing_loggin();

 	if (isset($_GET['id'])) {
	
		$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        // Delete From database 
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM flash_deals_item WHERE id=?")){
		$insert_stmt->bind_param('i', $id);
		$insert_stmt->execute();
			   
		    header('Location: ' . $_SERVER['HTTP_REFERER'].'');
	
		 }
	}
	
	
	if (isset($_GET['fls_id'])) {
	
		$id = filter_input(INPUT_GET, 'fls_id', FILTER_SANITIZE_NUMBER_INT);

        // Delete From database 
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM flash_deals WHERE id=?")){
		$insert_stmt->bind_param('i', $id);
		$insert_stmt->execute();
		}
		
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM flash_deals_item WHERE flush_deals_id=?")){
		$insert_stmt->bind_param('i', $id);
		$insert_stmt->execute();
			   
		 }
		 
		  
		 header('Location: ' . $_SERVER['HTTP_REFERER'].'');
		 
	}
	
	
	
?>