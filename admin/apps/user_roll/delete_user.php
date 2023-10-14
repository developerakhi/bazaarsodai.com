<?php
define("APP_ROOT", dirname(dirname(__FILE__)));
define("PRIVATE_PATH", APP_ROOT . "");
require_once(PRIVATE_PATH . "/functions/functions.php");
testing_loggin();

 	if (isset($_GET['m_id'])) {

		$m_id = filter_input(INPUT_GET, 'm_id', FILTER_SANITIZE_NUMBER_INT);

      
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM members WHERE id=?")){
		$insert_stmt->bind_param('s', $m_id);
		$insert_stmt->execute();
	    }
 
		   header('Location: ' . $_SERVER['HTTP_REFERER'].'');
		}
?>