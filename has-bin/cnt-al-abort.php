<?php 
include_once '../include/functions.php'; 

$sanitize = true;

$title = isset($_GET['actionID']) ? $_GET['actionID'] : '';
$url_string = urlencode($title);

$ItemID = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
$scnd_head = urlencode($ItemID);

if ($url_string == 'delete_cart' ){
	include_once 'spl-crt-mv.php'; 
}



?>