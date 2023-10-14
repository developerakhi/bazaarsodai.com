<?php
class due_recipt_IN {

public $get_item;

public function get_itemID() 
	{
		return $this->get_item;
	}
	
 public function top_location() 
	{
	global $mysqli;
			$id = $this->get_itemID();

			if ($stmt = $mysqli->prepare("SELECT id, sub_cat, sub_sub, category FROM sd_item_l
			  WHERE id = ?
				LIMIT 1")){
			$stmt->bind_param('i', $id);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($id, $sub_cat, $sub_sub, $category);
			$stmt->fetch();
			$stmt->close();
				}
			
           if ($stmt_m = $mysqli->prepare("SELECT  menu_id, menu_name from menu
                     WHERE menu_id = ? ")){
               $stmt_m->bind_param('s', $category);  // Bind "$email" to parameter.
               $stmt_m->execute();    // Execute the prepared query.
                                // get variables from result.
               $stmt_m->bind_result($menu_id, $menu_name);
               $stmt_m->store_result();
               $stmt_m->fetch();
               $stmt_m->close();
            }	
			 
           if ($stmt_m = $mysqli->prepare("SELECT sub_menu from sub_menu
                     WHERE sub_menu_id = ? ")){
               $stmt_m->bind_param('s', $sub_cat);  // Bind "$email" to parameter.
               $stmt_m->execute();    // Execute the prepared query.
                                // get variables from result.
               $stmt_m->bind_result($sub_menu);
               $stmt_m->store_result();
               $stmt_m->fetch();
               $stmt_m->close();
            }	

           if ($stmt_m = $mysqli->prepare("SELECT name from sd_third_sub
                     WHERE id = ? ")){
               $stmt_m->bind_param('s', $sub_sub);  // Bind "$email" to parameter.
               $stmt_m->execute();    // Execute the prepared query.
                                // get variables from result.
               $stmt_m->bind_result($sub_sub_menu);
               $stmt_m->store_result();
               $stmt_m->fetch();
               $stmt_m->close();
            }	

		return "<a href='index.php'> Home </a>" .$menu_name . "" .$sub_menu;
	}
	


}
$due_recipt_IN_out = new due_recipt_IN();
$due_recipt_IN_out->get_item = isset($_GET['FirstHead']) ? $_GET['FirstHead'] : '';


?>
