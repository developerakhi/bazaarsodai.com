<?php
include_once 'functions.php';
$q = intval($_GET['q']);

global $mysqli;
$stmt = $mysqli->prepare("SELECT id, value FROM sd_payments
		WHERE id = '".$q."' ");
$stmt->execute();    // Execute the prepared query.
			// get variables from result.
$stmt->store_result();
$stmt->bind_result($pm_id, $pm_value);
$stmt->fetch();
$stmt->close();
 
 ?>
 
			<span class="kreen-Price-currencySymbol">৳</span>  <?php echo $pm_value; ?></span>			
								
								
	