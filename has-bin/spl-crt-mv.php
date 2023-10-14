<?php
$ItemID = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$scnd_head = urlencode($ItemID);

 	if ($scnd_head) {
	
		        // Delete From database 
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("DELETE FROM sd_cart WHERE id=?")){
		$insert_stmt->bind_param('s', $scnd_head);
		
		if (!$insert_stmt->execute()) {
					header('Location: ../error.php?err=Registration failure: INSERT');
			   }
		 	 header('Location: ' . $_SERVER['HTTP_REFERER'].'');
		   }
		}
?>