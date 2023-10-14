<?php
define("APP_ROOT", dirname(dirname(__FILE__)));
define("PRIVATE_PATH", APP_ROOT . "");
require_once(PRIVATE_PATH . "/functions/functions.php");
testing_loggin();

 	if (isset($_GET['p_id'])) {

		$p_id = filter_input(INPUT_GET, 'p_id', FILTER_SANITIZE_NUMBER_INT);

      
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM roll_permission WHERE id=?")){
		$insert_stmt->bind_param('s', $p_id);
		$insert_stmt->execute();
	    }
 
		   header('Location: ' . $_SERVER['HTTP_REFERER'].'');
		}
?>