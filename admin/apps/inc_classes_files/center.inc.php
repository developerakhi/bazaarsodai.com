<?php 
require_once("apps/initialize.php"); 
$sanitize = true;

class my_co_class {

 public function setPageUrl()
  	{
		$url_link = isset($_GET['actionID']) ? $_GET['actionID'] : 'nothing_yet';
		return $u_link = urlencode($url_link);
	}

 public function setPage($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/pages/".$this->headery."");
   }
   
 public function set_gallery($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/ttl_glry/".$this->headery."");
   }
   
 public function set_itms($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/pdt-fls/".$this->headery."");
   }


 public function set_sales_person_create($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/user_roll/".$this->headery."");
   }
   
   public function set_request_create($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/product_request/".$this->headery."");
   }
   
   public function set_customer_create($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/customer_client/".$this->headery."");
   }

    public function set_contactUs_create($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/contact_us/".$this->headery."");
   }

public function roll_permission($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/roll_permission/".$this->headery."");
   }
  

  public function set_customer($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/members/".$this->headery."");
   }

  public function set_setting($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/ac_settings/".$this->headery."");
   }
   
  public function set_order($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/sales/".$this->headery."");
   }

    public function set_sting($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/niast/".$this->headery."");
   }
  
    public function set_statement($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/statement/".$this->headery."");
   }
   
    public function set_shop($headery)
   {
	$this->headery = $headery;
	global $mysqli; 
	include_once(PRIVATE_PATH . "/shop/".$this->headery."");
   }
   
}

$obj = new my_co_class();

if ($obj->setPageUrl() == 'dashboard')
	{
		$obj->setPage("dashboard.inc.php");
	}
	
// First Category Value
if ($obj->setPageUrl() == 'add_new_category')
	{
		$obj->setPage("add_cat.inc.php");
	}
if ($obj->setPageUrl() == 'view_all_category')
	{
		$obj->setPage("all_pro_cat.inc.php");
	}
if ($obj->setPageUrl() == 'update_category')
	{
		$obj->setPage("update_cat.inc.php");
	}
	
	
// Banner Value
if ($obj->setPageUrl() == 'add_banner')
	{
		$obj->setPage("add_banner.php");
	}
if ($obj->setPageUrl() == 'all_banner')
	{
		$obj->setPage("all_banner.php");
	}
if ($obj->setPageUrl() == 'update_banner')
	{
		$obj->setPage("update_banner.php");
	}
	
	
// Testimonial Value
if ($obj->setPageUrl() == 'add_testimonial')
	{
		$obj->setPage("add_testimonial.php");
	}
if ($obj->setPageUrl() == 'all_testimonial')
	{
		$obj->setPage("all_testimonial.php");
	}
if ($obj->setPageUrl() == 'update_testimonial')
	{
		$obj->setPage("update_testimonial.php");
	}
	
	
// Blog Value
if ($obj->setPageUrl() == 'add_blog')
	{
		$obj->setPage("add_blog.php");
	}
if ($obj->setPageUrl() == 'all_blog')
	{
		$obj->setPage("all_blog.php");
	}
if ($obj->setPageUrl() == 'update_blog')
	{
		$obj->setPage("update_blog.php");
	}
	
	
// Video Value
if ($obj->setPageUrl() == 'add_video')
	{
		$obj->setPage("add_video.php");
	}
if ($obj->setPageUrl() == 'all_video')
	{
		$obj->setPage("all_video.php");
	}
if ($obj->setPageUrl() == 'update_video')
	{
		$obj->setPage("update_video.php");
	}
	
	
// Coupon  Value

if ($obj->setPageUrl() == 'coupon')
	{
		$obj->set_order("coupon.php");
	}
	
if ($obj->setPageUrl() == 'add_coupon')
	{
		$obj->set_order("add_coupon.php");
	}
	
	
// First Color & Size Value
if ($obj->setPageUrl() == 'add_new_color')
	{
		$obj->setPage("add_color.inc.php");
	}
if ($obj->setPageUrl() == 'view_all_color')
	{
		$obj->setPage("all_color.inc.php");
	}
	
if ($obj->setPageUrl() == 'update_color')
	{
		$obj->setPage("update_color.inc.php");
	}
	
if ($obj->setPageUrl() == 'add_new_size')
	{
		$obj->setPage("add_size.inc.php");
	}
	
if ($obj->setPageUrl() == 'view_all_size')
	{
		$obj->setPage("all_size.inc.php");
	}
if ($obj->setPageUrl() == 'update_size')
	{
		$obj->setPage("update_size.inc.php");
	}
	
	

if ($obj->setPageUrl() == 'add_new_sub_cat')
	{
		$obj->setPage("adScat.inc.php");
	}
if ($obj->setPageUrl() == 'view_all_sub_cat')
	{
		$obj->setPage("all_pro_s_ct.inc.php");
	}
if ($obj->setPageUrl() == 'update_sub_category')
	{
		$obj->setPage("up-sb-ct.inc.php");
	}


if ($obj->setPageUrl() == 'add_new_third_sub_cat')
	{
		$obj->setPage("ad-thd-c.php");
	}
	
if ($obj->setPageUrl() == 'view_all_third_sub_cat')
	{
		$obj->setPage("all-thd-ct.inc.php");
	}

if ($obj->setPageUrl() == 'update_third_sub_category')
	{
		$obj->setPage("updt-thrd-sb-pg.php");
	}

// Item  Value
if ($obj->setPageUrl() == 'add_new_item')
	{
		$obj->set_itms("itm-ins-lsf.php");
	}
	
// Recipies  Value
if ($obj->setPageUrl() == 'add_new_recipe')
	{
		$obj->set_itms("recipe-ins-lsf.php");
	}	

if ($obj->setPageUrl() == 'view_all_recipe')
	{
		$obj->set_itms("recipe-all.inc.php");
	}

if ($obj->setPageUrl() == 'add_new_flash_deals')
	{
		$obj->set_itms("flash-ins-lsf.php");
	}
if ($obj->setPageUrl() == 'view_all_flash_deals')
	{
		$obj->set_itms("flash-all.inc.php");
	}
if ($obj->setPageUrl() == 'update_flash_deals')
	{
		$obj->set_itms("up-flash_deals.inc.php");
	}	
	
if ($obj->setPageUrl() == 'add_new_coupon')
	{
		$obj->set_itms("coupon-ins-lsf.php");
	}	
	
if ($obj->setPageUrl() == 'view_all_item')
	{
		$obj->set_itms("itm-all.inc.php");
	}

	
if ($obj->setPageUrl() == 'view_all_coupon')
	{
		$obj->set_itms("coupon-all.inc.php");
	}	
if ($obj->setPageUrl() == 'update_coupon')
	{
		$obj->set_itms("up-coupon.inc.php");
	}

if ($obj->setPageUrl() == 'update_item')
	{
		$obj->set_itms("up-itm.inc.php");
	}


	
if ($obj->setPageUrl() == 'delete_itm')
	{
		$obj->set_itms("delete_itm.inc.php");
	}
	
if ($obj->setPageUrl() == 'upload_more_images')
	{
		$obj->set_itms("up-mr-mgi.inc.php");
	}	
// End Item  Value

if ($obj->setPageUrl() == 'view_all_customer')
	{
		$obj->set_customer("all_members.inc.php");
	}	
	
	if ($obj->setPageUrl() == 'update_client')
	{
		$obj->set_customer("clnt-up-sngl.inc.php");
	}	
if ($obj->setPageUrl() == 'sales_statement')
	{
		$obj->set_statement("sales_statement.inc.php");
	}
 
if ($obj->setPageUrl() == 'ref_bonus')
	{
		$obj->set_customer("all_bns_lst.inc.php");
	}	

// Gallery  Value
if ($obj->setPageUrl() == 'add_new_slide')
	{
		$obj->set_gallery("nw-ad.inc.php");
	}

if ($obj->setPageUrl() == 'view_all_slide')
	{
		$obj->set_gallery("all_slide_img.inc.php");
	}

if ($obj->setPageUrl() == 'update_slide')
	{
		$obj->set_gallery("sld-upimg.inc.php");
	}


// Add  Value
if ($obj->setPageUrl() == 'add_new_ads')
	{
		$obj->ads_mngmnt("nw-ads-g.php");
	}
	
if ($obj->setPageUrl() == 'view_all_ads')
	{
		$obj->ads_mngmnt("all-ads-vw.php");
	}
	
if ($obj->setPageUrl() == 'update_ads')
	{
		$obj->ads_mngmnt("ads-up-mn.php");
	}
	
	


// Shop  Value
if ($obj->setPageUrl() == 'view_all_shop')
	{
		$obj->set_shop("view_all_shop.inc.php");
	}
	
if ($obj->setPageUrl() == 'view_shop')
	{
		$obj->set_shop("view_shop.inc.php");
	}
	
if ($obj->setPageUrl() == 'permission')
	{
		$obj->set_shop("permission.inc.php");
	}

if ($obj->setPageUrl() == 'deactive')
	{
		$obj->set_shop("deactive.inc.php");
	}	

if ($obj->setPageUrl() == 'all_itm')
	{
		$obj->set_shop("all_itm.inc.php");
	}
	
if ($obj->setPageUrl() == 'delete_shop')
	{
		$obj->set_shop("delete.inc.php");
	}
	
	
//Order  Value
if ($obj->setPageUrl() == 'view_all_post')
	{
		$obj->setPage("all-pst-vw.inc.php");
	}
	
if ($obj->setPageUrl() == 'update_more_post')
	{
		$obj->setPage("up-pst-in.inc.php");
	}

if ($obj->setPageUrl() == 'view_all_retail_invoices')
	{
		$obj->set_order("view_all_invoices_retail.inc.php");
	}

if ($obj->setPageUrl() == 'pending_order')
	{
		$obj->set_order("pending_order.php");
	}

if ($obj->setPageUrl() == 'shipping_order')
	{
		$obj->set_order("shipping_order.php");
	}
	
if ($obj->setPageUrl() == 'cancel_order')
	{
		$obj->set_order("cancel_order.php");
	}
	
if ($obj->setPageUrl() == 'delivery_order')
	{
		$obj->set_order("delivery_order.php");
	}
	
if ($obj->setPageUrl() == 'holding_order')
	{
		$obj->set_order("holding_order.php");
	}


if ($obj->setPageUrl() == 'payment_mathod')
	{
		$obj->set_order("pmnt-mthd.php");
	}

if ($obj->setPageUrl() == 'add_new_payment_mathod')
	{
		$obj->set_order("pmnt-add-nw.inc.php");
	}

if ($obj->setPageUrl() == 'update_mathod')
	{
		$obj->set_order("up-mthd-old.php");
	}	

if ($obj->setPageUrl() == 'view_invoice_retail')
	{
		$obj->set_order("invoice_retail.inc.php");
	}	
	
	
if ($obj->setPageUrl() == 'approved')
	{
		$obj->set_order("psl-tr-ap.php");
	}	
		
	
// Settings  Value

if ($obj->setPageUrl() == 'edit_home_step_one')
	{
		$obj->set_setting("step_one_edit.php");
	}
	
if ($obj->setPageUrl() == 'update_home_position')
	{
		$obj->set_setting("edit_home.inc.php");
	}
	
if ($obj->setPageUrl() == 'social_networks')
	{
		$obj->set_setting("scl-setng.inc.php");
	}
	
if ($obj->setPageUrl() == 'currency')
	{
		$obj->set_setting("change_currency.php");
	}
	
if ($obj->setPageUrl() == 'company_details')
	{
		$obj->set_setting("cmp-setng.inc.php");
	}
	
		
// End Settings  Value


// user roll  Value
if ($obj->setPageUrl() == 'add_user')
	{
		$obj->set_sales_person_create("add_new_user.php");
	}

if ($obj->setPageUrl() == 'all_user')
	{
		$obj->set_sales_person_create("all_users.php");
	}

if ($obj->setPageUrl() == 'edit_user')
    {
	$obj->set_sales_person_create("edit_user_roll.php");
    }
// end user roll  Value



// product request  Value
if ($obj->setPageUrl() == 'add_request')
	{
		$obj->set_request_create("add_new_request.php");
	}

if ($obj->setPageUrl() == 'all_request')
	{
		$obj->set_request_create("all_request.php");
	}
	
	if ($obj->setPageUrl() == 'all_customer')
	{
		$obj->set_customer_create("all_customer.php");
	}
	if ($obj->setPageUrl() == 'edit_customer')
	{
		$obj->set_customer_create("edit_customer.php");
	}
	
	if ($obj->setPageUrl() == 'all_contact_us')
	{
		$obj->set_contactUs_create("all_contact_us.php");
	}

if ($obj->setPageUrl() == 'edit_request')
    {
	$obj->set_request_create("edit_product_request.php");
    }
// end product request  Value



if ($obj->setPageUrl() == 'edit_profile')
    {
	$obj->set_customer("edit_profile.php");
    }	
	
if ($obj->setPageUrl() == 'change_company_details')
	{
		$obj->set_sting("update_company_info.inc.php");
	}
	
// End members  Value


// roll permission  Value
if ($obj->setPageUrl() == 'add_permission')
	{
		$obj->roll_permission("add_new_permission.php");
	}

if ($obj->setPageUrl() == 'all_permission')
	{
		$obj->roll_permission("all_permission.php");
	}
if ($obj->setPageUrl() == 'edit_permission')
    {
	$obj->roll_permission("edit_permission.php");
    }
unset($obj);

?>