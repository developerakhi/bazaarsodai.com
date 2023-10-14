<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['color_code'])) {
	
		// Sanitize and validate the data passed in
		$color_code = filter_input(INPUT_POST, 'color_code', FILTER_SANITIZE_STRING);
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		$color_name = filter_input(INPUT_POST, 'color_name', FILTER_SANITIZE_STRING);
		$type = 1;

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_color SET color_code=?, color_name=?, type=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('ssss', $color_code,  $color_name, $type, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../update_color/'.$id.'/success');
 	}
	
	
?>