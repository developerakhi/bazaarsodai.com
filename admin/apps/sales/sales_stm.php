<?php
class sales_itms {	

		
public function company_details() 
	{
	global $mysqli;
	$stmt = $mysqli->prepare("SELECT id, company, mobile, email, address from sd_settings
				ORDER BY id ASC LIMIT 1 ");
	$stmt->execute();    // Execute the prepared query.
			// get variables from result.
	$stmt->store_result();
    $stmt->bind_result($client_id, $companyName, $admin_mobile, $admin_email, $admin_address);
	$stmt->fetch();
	$stmt->close();
			 
	echo '<table width="100%" border="0" cellspacing="5" cellpadding="5">
          <tr>
           
            <td width="" align="center">
			<h1 style="margin:0px;font-size: 35px; ">&nbsp;'.$company.'</h1>
				Phone : '.$mobile.'
				<p style="margin-bottom:0px;">Email : '.$email.'</p>
				<p style="margin-bottom:0px;">'.$address.'</p>				
			  </td>
            <td width="5%" align="center">&nbsp;</td>
          </tr>
        </table>
       	';
	}		
	
public function in_customer() 
	{
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$client_id = urlencode($cat_name);
						
			global $mysqli;
		if ($stmt_m = $mysqli->prepare("SELECT customerID, customer_name, mobile, address, order_id, discount, area_officer, salesID, customer_category, prev_due, date, time, full_date FROM sd_order_more
								  WHERE order_id = ? ")){
		$stmt_m->bind_param('s', $client_id);  // Bind "$email" to parameter.
		$stmt_m->execute();    // Execute the prepared query.
		// get variables from result.
		$stmt_m->store_result();
		$stmt_m->bind_result($customerID, $customer_name, $customer_mobile, $customer_address, $orderID, $discount, $area_officer, $salesID, $customer_category, $prev_due, $date, $time, $date_full);
		$stmt_m->fetch();
		$stmt_m->close();
			  }				  
			$sql = "SELECT id, name, customer_id, mobile, address, email FROM sd_client  WHERE  id = '".$customerID."'";
			$member = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
			$row_member = mysqli_fetch_assoc($member); 
				
		
				echo "<address>";
				echo 'Customer ID:' . $row_member['customer_id']. '<br>';
				echo 'M/S:' . $row_member['email']. '<br>';
				echo 'Proprietor:' . $row_member['name'] . '<br>';
				echo 'Mobile:' . $row_member['mobile']. '<br>';
				echo 'Address:' . $row_member['address']. '<br>';
				echo "</address>";
	}	
	
public function in_customer_more() 
		{
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$client_id = urlencode($cat_name);
						
		global $mysqli;
		if ($stmt_m = $mysqli->prepare("SELECT salesID, time, full_date, area_officer, customer_category, l_time FROM sd_order_more
						  WHERE order_id = ? ")){
		$stmt_m->bind_param('s', $client_id);  // Bind "$email" to parameter.
		$stmt_m->execute();    // Execute the prepared query.
			// get variables from result.
		$stmt_m->store_result();
		$stmt_m->bind_result($salesID, $time,  $date_full, $area_officer , $customer_category, $Only_time);
		$stmt_m->fetch();
		$stmt_m->close();
		 }
		 
		if ($stmt_area_o = $mysqli->prepare("SELECT name FROM sd_client  
					WHERE  id = '".$area_officer."'
						 ")){
		$stmt_area_o->execute();    // Execute the prepared query.
		// get variables from result.
		$stmt_area_o->store_result();
		$stmt_area_o->bind_result($a_o_name);
		$stmt_area_o->fetch();
		$stmt_area_o->close();
		}		

		echo "<address>";
		echo "<span style='text-transform: uppercase;font-weight: bold;'>Invoice ID# " . $client_id . '</span><br>';
		echo "Date:" . $date_full. '<br>';
		echo 'Time: ' .$Only_time. '<br>';
		echo "Area Officer:" . $a_o_name. '<br>';
		echo "Category:" . $customer_category. '<br>';
		echo "</address>";
		}		
public function in_spl() 
	{
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$client_id = urlencode($cat_name);
						
			global $mysqli;
		if ($stmt_m = $mysqli->prepare("SELECT customerID, customer_name, mobile, address, order_id, discount, area_officer, salesID, customer_category, prev_due, date, time, full_date FROM sd_purchase_more 
								  WHERE order_id = ? ")){
		$stmt_m->bind_param('s', $client_id);  // Bind "$email" to parameter.
		$stmt_m->execute();    // Execute the prepared query.
		// get variables from result.
		$stmt_m->store_result();
		$stmt_m->bind_result($customerID, $customer_name, $customer_mobile, $customer_address, $orderID, $discount, $area_officer, $salesID, $customer_category, $prev_due, $date, $time, $date_full);
		$stmt_m->fetch();
		$stmt_m->close();
			  }				  
			$sql = "SELECT id, name, customer_id, mobile, address, company_name FROM sd_client  WHERE  id = '".$customerID."'";
			$member = mysqli_query($mysqli, $sql) or die("Opps some thing went wrong");
			$row_member = mysqli_fetch_assoc($member); 
				
		
				echo "<address>";
				echo 'Company Name:' . $row_member['company_name']. '<br>';
				echo 'Name:' . $row_member['name'] . '<br>';
				echo 'Mobile:' . $row_member['mobile']. '<br>';
				echo 'Address:' . $row_member['address']. '<br>';
				echo "</address>";
	}			
	
public function in_spl_d_more() 
		{
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$client_id = urlencode($cat_name);
						
		global $mysqli;
		if ($stmt_m = $mysqli->prepare("SELECT salesID, time, full_date, area_officer, customer_category FROM sd_purchase_more
						  WHERE order_id = ? ")){
		$stmt_m->bind_param('s', $client_id);  // Bind "$email" to parameter.
		$stmt_m->execute();    // Execute the prepared query.
			// get variables from result.
		$stmt_m->store_result();
		$stmt_m->bind_result($salesID, $time,  $date_full, $area_officer , $customer_category);
		$stmt_m->fetch();
		$stmt_m->close();
		 }
		 
		if ($stmt_area_o = $mysqli->prepare("SELECT name FROM sd_client  
					WHERE  id = '".$area_officer."'
						 ")){
		$stmt_area_o->execute();    // Execute the prepared query.
		// get variables from result.
		$stmt_area_o->store_result();
		$stmt_area_o->bind_result($a_o_name);
		$stmt_area_o->fetch();
		$stmt_area_o->close();
		}		

		echo "<address>";
		echo "Invoice ID# " . $client_id . '<br>';
		echo "Date:" . $date_full. '<br>';
		echo "</address>";
		}		

		
public function in_details() 
		{
			$this->in_customer();
		}
		
public function in_right_more() 
		{
			$this->in_customer_more();
		}
		
public function in_spl_details() 
		{
			$this->in_spl();
		}

public function in_spl_more() 
		{
			$this->in_spl_d_more();
		}		
		
}

$sales_mng_out = new sales_itms();
?>
