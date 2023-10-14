<?php // URL sanitization

$sanitize = true;

$title = isset($_GET['actionID']) ? $_GET['actionID'] : 'nothing yet';
$url_string = urlencode($title);


//****** Category Management
if($url_string == 'dashboard') 
	{
	$msg100_1 = 'class="active"';
	$msg100 = "active";
	}
	
//****** Category Management ///


//****** Category Management
if($url_string == 'add_new_category') 
	{
	$msg = 'class="active"';
	$msg2 = "active";
	}
	
if($url_string == 'view_all_category' || $url_string == 'update_category')
	 {
	$msg3 = 'class="active"';
	$msg2 = "active";
	}
	
if($url_string == 'add_new_sub_cat')
	 {
	$msg4 = 'class="active"';
	$msg2 = "active";
	}	

if($url_string == 'view_all_sub_cat' || $url_string == 'update_sub_category')
	 {
	$msg5 = 'class="active"';
	$msg2 = "active";
	}
	
	
if($url_string == 'add_new_third_sub_cat')
	 {
	$msg6 = 'class="active"';
	$msg2 = "active";
	}	

if($url_string == 'view_all_third_sub_cat' || $url_string == 'update_third_sub_category')
	 {
	$msg7 = 'class="active"';
	$msg2 = "active";
	}	
 
 	if($url_string == 'view_all_customer' || $url_string == 'update_client')
	 {
	$msg700_2 = 'class="active"';
	$msg700 = "active";
	}

if($url_string == 'ref_bonus' )
	 {
	$msg700_3 = 'class="active"';
	$msg700 = "active";
	}
//****** Category Management ///



//****** color Management
if($url_string == 'add_new_color') 
	{
	$msg22_1 = 'class="active"';
	$msg22 = "active";
	}
	
if($url_string == 'view_all_color' || $url_string == 'update_color')
	 {
	$msg22_2 = 'class="active"';
	$msg22 = "active";
	}
	
if($url_string == 'add_new_size') 
	{
	$msg22_3 = 'class="active"';
	$msg22 = "active";
	}
	
if($url_string == 'view_all_size' || $url_string == 'update_size')
	 {
	$msg22_4 = 'class="active"';
	$msg22 = "active";
	}
	
//****** color Management	
	

//****** Category Management
if($url_string == 'add_new_item') 
	{
	$msg21_1 = 'class="active"';
	$msg21 = "active";
	}
	
if($url_string == 'view_all_item' || $url_string == 'update_item' || $url_string == 'upload_more_images')
	 {
	$msg21_2 = 'class="active"';
	$msg21 = "active";
	}
	
if($url_string == 'view_all_pending' || $url_string == 'update_item' || $url_string == 'upload_more_images')
	 {
	$msg21_3 = 'class="active"';
	$msg21 = "active";
	}
	
//****** Category Management ///

if($url_string == 'sales_statement') 
	{
	$msg800_1 = 'class="active"';
	$msg800 = "active";
	}

	//****** Customer Management
if($url_string == 'add_new_slide') 
	{
	$msg70_1 = 'class="active"';
	$msg70 = "active";
	}
	
if($url_string == 'view_all_slide' || $url_string == 'update_slide')
	 {
	$msg70_2 = 'class="active"';
	$msg70 = "active";
	}
		
		
		
		
//****** Customer Management
if($url_string == 'add_headline') 
	{
	$msg100_1 = 'class="active"';
	$msg100 = "active";
	}
	
if($url_string == 'headlines' || $url_string == 'update_headline')
	 {
	$msg100_2 = 'class="active"';
	$msg100 = "active";
	}
		
		
		



//****** Customer Management
if($url_string == 'edit_home_step_one') 
	{
	$msg80_1 = 'class="active"';
	$msg80 = "active";
	}
	
if($url_string == 'update_home_position')
	 {
	$msg80_2 = 'class="active"';
	$msg80 = "active";
	}
	
if($url_string == 'social_networks')
	 {
	$msg80_3 = 'class="active"';
	$msg80 = "active";
	}

	
if($url_string == 'company_details')
	 {
	$msg80_4 = 'class="active"';
	$msg80 = "active";
	}

//****** Customer Management ///
if($url_string == 'view_all_retail_invoices' || $url_string == 'view_invoice_retail')
	 {
	$msg60_4 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'view_all_pending_invoices')
	 {
	$msg60_5 = 'class="active"';
	$msg60 = "active";
	}
	
		
	if($url_string == 'view_all_completed_invoices')
	 {
	$msg60_7 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'payment_mathod' || $url_string == 'add_new_payment_mathod' || $url_string == 'update_mathod')
	 {
	$msg60_6 = 'class="active"';
	$msg60 = "active";
	}
			
if($url_string == 'change_company_details') 
	{
	$msg303_1 = 'class="active"';
	$msg80 = "active";
	}
	
//****** Sales Person Management
if($url_string == 'add_new_person') 
	{
	$msg102_1 = 'class="active"';
	$msg102 = "active";
	}
	
if($url_string == 'view_all_person')
	 {
	$msg102_2 = 'class="active"';
	$msg102 = "active";
	}
		
//****** Close Sales Person Management ///



//****** Article Management
if($url_string == 'add_new_article') 
	{
	$msg201_1 = 'class="active"';
	$msg201 = "active";
	}
	
if($url_string == 'view_all_articles' || $url_string == 'update_post')
	 {
	$msg201_2 = 'class="active"';
	$msg201 = "active";
	}

if($url_string == 'view_all_post' || $url_string == 'update_more_post')
	 {
	$msg201_3 = 'class="active"';
	$msg201 = "active";
	}
	
	
		
//****** Close Article Management ///


//****** Advertise Management
if($url_string == 'add_new_ads') 
	{
	$msg301_1 = 'class="active"';
	$msg301 = "active";
	}
	
if($url_string == 'view_all_ads' || $url_string == 'update_ads')
	 {
	$msg301_2 = 'class="active"';
	$msg301 = "active";
	}
		
//****** Close Article Management ///


//****** Customer Management
if($url_string == 'add_new_brand') 
	{
	$msg501_1 = 'class="active"';
	$msg501 = "active";
	}
	
if($url_string == 'view_all_brand' || $url_string == 'update_brand')
	 {
	$msg501_2 = 'class="active"';
	$msg501 = "active";
	}
		
//****** Customer Management ///
?>
