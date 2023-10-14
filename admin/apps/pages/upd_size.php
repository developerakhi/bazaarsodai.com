<?php
include_once '../functions/functions.php'; 
testing_loggin();

 	if (isset($_POST['size'])) {
	
		// Sanitize and validate the data passed in
		$size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
		$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		
		$type = 2;

		// Prepare the statement:
		global $mysqli;
		if ($insert_stmt = $mysqli->prepare("UPDATE sd_color SET size=?, type=? WHERE id = ? LIMIT 1")){
		// Bind the variables:
		$insert_stmt->bind_param('sss', $size, $type, $id);
		// Execute the query:
    
             if (!$insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
           }
       }
			  header('Location: ../../update_size/'.$id.'/success');
 	}
	
	
?>