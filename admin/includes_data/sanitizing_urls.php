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
	
//****** Bannerr Management ///
if($url_string == 'add_banner') 
	{
	$msg69_1 = 'class="active"';
	$msg69 = "active";
	}
	
if($url_string == 'all_banner' || $url_string == 'update_banner')
	 {
	$msg69_2 = 'class="active"';
	$msg69 = "active";
	}
	
	
//****** Blog Management ///
if($url_string == 'add_blog') 
	{
	$msg699_1 = 'class="active"';
	$msg699 = "active";
	}
	
if($url_string == 'all_blog' || $url_string == 'update_blog')
	 {
	$msg699_2 = 'class="active"';
	$msg699 = "active";
	}
	
//****** Testimonial Management ///
if($url_string == 'add_testimonial') 
	{
	$msg698_1 = 'class="active"';
	$msg698 = "active";
	}
	
if($url_string == 'all_testimonial' || $url_string == 'update_testimonial')
	 {
	$msg698_2 = 'class="active"';
	$msg698 = "active";
	}
	
	
//****** Video Management ///
if($url_string == 'add_video') 
	{
	$msg697_1 = 'class="active"';
	$msg697 = "active";
	}
	
if($url_string == 'all_video' || $url_string == 'update_video')
	 {
	$msg697_2 = 'class="active"';
	$msg697 = "active";
	}
	


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
	


//****** Advertise Management
if($url_string == 'add_new_ads') 
	{
	$msg702_1 = 'class="active"';
	$msg702 = "active";
	}
	
if($url_string == 'view_all_ads' || $url_string == 'update_ads')
	 {
	$msg702_2 = 'class="active"';
	$msg702 = "active";
	}


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
	
	
if($url_string == 'add_new_flash_deals') 
	{
	$msg90_1 = 'class="active"';
	$msg90 = "active";
	}
	
if($url_string == 'view_all_flash_deals' || $url_string == 'update_flash_deals')
	 {
	$msg90_2 = 'class="active"';
	$msg90 = "active";
	}
	
if($url_string == 'add_new_coupon') 
	{
	$msg99_1 = 'class="active"';
	$msg99 = "active";
	}
	
if($url_string == 'view_all_coupon' || $url_string == 'update_coupon')
	 {
	$msg99_2 = 'class="active"';
	$msg99 = "active";
	}
	

if($url_string == 'add_user') 
	{
	$msg98_1 = 'class="active"';
	$msg98 = "active";
	}

if($url_string == 'all_user' || $url_string == 'edit_user')
	 {
	$msg98_2 = 'class="active"';
	$msg98 = "active";
	}
	
if($url_string == 'add_permission') 
	{
	$msg98_3 = 'class="active"';
	$msg98 = "active";
	}

if($url_string == 'all_permission' || $url_string == 'edit_permission')
	 {
	$msg98_2 = 'class="active"';
	$msg98 = "active";
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
	
if($url_string == 'currency')
	 {
	$msg80_5 = 'class="active"';
	$msg80 = "active";
	}

	
if($url_string == 'company_details')
	 {
	$msg80_4 = 'class="active"';
	$msg80 = "active";
	}


//****** Shop Management ///
if($url_string == 'view_all_shop' || $url_string == 'view_shop' || $url_string == 'all_itm')
	 {
	$msg500_1 = 'class="active"';
	$msg500 = "active";
	}
	
//****** Customer Management ///

if($url_string == 'view_all_retail_invoices' || $url_string == 'view_invoice_retail')
	 {
	$msg60_4 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'pending_order')
	{
	$msg60_8 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'shipping_order')
	{
	$msg60_9 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'holding_order')
	{
	$msg60_10 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'delivery_order')
	{
	$msg60_11 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'cancel_order')
	{
	$msg60_12 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'payment_mathod' || $url_string == 'add_new_payment_mathod' || $url_string == 'update_mathod')
	{
	$msg60_6 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'all_request')
	{
	$msg60_7 = 'class="active"';
	$msg60 = "active";
	}
	
	if($url_string == 'coupon' || $url_string == 'add_coupon' || $url_string == 'update_coupon')
	 {
	$msg60_100 = 'class="active"';
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
