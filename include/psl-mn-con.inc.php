<?php 
require_once("db_connect.php"); 
$sanitize = true;

class my_co_class {

 public function setPageUrl()
  	{
		$url_link = isset($_GET['actionID']) ? $_GET['actionID'] : 'nothing_yet';
		return $u_link = urlencode($url_link);
	}
	

public function setPage()
   {
	   
	$getting_data =  $this->setPageUrl();
	
	if ($getting_data == 'shopping_cart')
	{
	global $mysqli; 
	return include_once("has-bin/cart-dtl.php");
	}

	elseif ($getting_data == 'check_out_step')
	{
	global $mysqli; 
	return include_once("has-bin/psc-ck-out.php");
	}

	elseif ($getting_data == 'final_step')
	{
	global $mysqli; 
	return include_once("has-bin/step-rdy-or.php");
	}

	elseif ($getting_data == 'place_order')
	{
	global $mysqli; 
	return include_once("has-bin/final-plo.php");
	}

	elseif ($getting_data == 'order_completed')
	{
	global $mysqli; 
	return include_once("has-bin/order-cm.php");
	}
	
	elseif ($getting_data == 'checkout')
	{
	global $mysqli; 
	return include_once("has-bin/check_out.php");
	}
	
	elseif ($getting_data == 'payment')
	{
	global $mysqli; 
	return include_once("has-bin/payment.php");
	}

   } 


}

$obj = new my_co_class();

 ?>	