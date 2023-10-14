<?php
define("APP_ROOT", dirname(dirname(__FILE__)));
define("PRIVATE_PATH", APP_ROOT . "");
require_once(PRIVATE_PATH . "/functions/functions.php");
testing_loggin();

 	if (isset($_GET['coupon_id'])) {

		$coupon_id = filter_input(INPUT_GET, 'coupon_id', FILTER_SANITIZE_NUMBER_INT);

      
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM coupon WHERE id=?")){
		$insert_stmt->bind_param('s', $coupon_id);
		$insert_stmt->execute();
	    }
		   
		   header('Location: ' . $_SERVER['HTTP_REFERER'].'');
		}
?>