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
	include_once(PRIVATE_PATH . "/person_admin/".$this->headery."");
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
if ($obj->setPageUrl() == 'view_all_item')
	{
		$obj->set_itms("itm-all.inc.php");
	}
	
if ($obj->setPageUrl() == 'view_all_pending')
	{
		$obj->set_itms("all_pending.php");
	}
	
if ($obj->setPageUrl() == 'update_item')
	{
		$obj->set_itms("up-itm.inc.php");
	}
	
if ($obj->setPageUrl() == 'upload_more_images')
	{
		$obj->set_itms("up-mr-mgi.inc.php");
	}

if ($obj->setPageUrl() == 'delete_itm')
	{
		$obj->set_itms("delete_itm.inc.php");
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
	
	
	
// Headline  Value
if ($obj->setPageUrl() == 'add_headline')
	{
		$obj->setPage("add_hdl.inc.php");
	}

if ($obj->setPageUrl() == 'headlines')
	{
		$obj->setPage("hdln_all.inc.php");
	}

if ($obj->setPageUrl() == 'update_headline')
	{
		$obj->setPage("hdl_up.inc.php");
	}
	
	
	
// End Gallery  Value
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

if ($obj->setPageUrl() == 'view_all_pending_invoices')
	{
		$obj->set_order("view_all_pending_in.inc.php");
	}

if ($obj->setPageUrl() == 'view_all_completed_invoices')
	{
		$obj->set_order("view_al_compld_in.inc.php");
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
		
if ($obj->setPageUrl() == 'delete_ord')
	{
		$obj->set_order("delete_ord.inc.php");
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
	
if ($obj->setPageUrl() == 'company_details')
	{
		$obj->set_setting("cmp-setng.inc.php");
	}
	
		
// End Settings  Value


// members  Value
if ($obj->setPageUrl() == 'add_new_person')
	{
		$obj->set_sales_person_create("new_sales_id.php");
	}

if ($obj->setPageUrl() == 'view_all_person')
	{
		$obj->set_sales_person_create("all_sales_id.php");
	}

if ($obj->setPageUrl() == 'edit_profile')
	{
		$obj->set_customer("edit_profile.php");
	}
	
if ($obj->setPageUrl() == 'shop_profile')
	{
		$obj->set_customer("edit_password.php");
	}	

	
// End members  Value


unset($obj);

?>