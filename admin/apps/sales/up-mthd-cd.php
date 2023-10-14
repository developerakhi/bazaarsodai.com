<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['name'])) {
	
		// Sanitize and validate the data passed in
		$p_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		$title = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$value = filter_input(INPUT_POST, 'value', FILTER_SANITIZE_STRING);
		$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_payments SET name=?, value=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sss', $title, $value, $p_id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../update_mathod/'.$p_id.'/success');
 	}
	
	
?>