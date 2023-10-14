<?php
class edit_cat {

public function form_data() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_cat = urlencode($cat_name);
		
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, color_code, color_name FROM sd_color
			  WHERE type = 1 AND id = ?
				LIMIT 1");
			$stmt->bind_param('s', $url_string_cat);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($id, $color_code, $color_name);
			$stmt->fetch();
			$stmt->close();
			if ($type == 1){ $type_selected1 = 'selected="selected"'; }  
			if ($type == 2){ $type_selected2 = 'selected="selected"'; }  
			echo 
			'<div class="form-group col-md-12">
						  <label>Select Colour</label>
						  <script>
						function setTextColor(picker) {
							document.getElementsByTagName("body")[0].style.color = "#" + picker.toString()
						}
						</script>
						   <input class="jscolor" name="color_code" value="#'.$color_code.'" required style="padding:18px;">
						</div>
						
						<div class="form-group col-md-12">
							 <label>Colour Name</label>
							 <input type="hidden" name="id" placeholder="color_name" value="'.$id.'" class="form-control" required="required">
							 <input type="text" class="form-control" name="color_name" value="'.$color_name.'" autocomplete="off" required placeholder="Colour Name">
						</div>
						
					
				
			';
			}
}


public function clr_data() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_cat = urlencode($cat_name);
		
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT menu_id, menu_name, meta_desc, meta_key, page_cn, img1, img2, type FROM menu
			  WHERE menu_id = ?
				LIMIT 1");
			$stmt->bind_param('s', $url_string_cat);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($menu_id, $menu_name, $meta_desc, $meta_key, $page_cn, $img1, $img2, $type);
			$stmt->fetch();
			$stmt->close();
			if ($type == 1){ $type_selected1 = 'selected="selected"'; }  
			if ($type == 2){ $type_selected2 = 'selected="selected"'; }  
			echo 
			'
					  
			<div class="form-group col-md-12">	  
			   <label>Category name <span class="red_star">*</span></label>
			    <input type="text" name="category_name" placeholder="Category name" value="'.$menu_name.'" class="form-control" required="required">
			    <input type="hidden" name="menu_id" placeholder="Category name" value="'.$menu_id.'" class="form-control" required="required">
			</div>
			
			<div class="form-group col-md-12">
                         <label for="exampleInputEmail1">Type</label>
                 			  <label>Select a position <span class="red_star">*</span></label>
                                 <select name="type" class="form-control" required="">
                                   	<option value="1" '.$type_selected1.'>Left Menu</option>
                                  </select>
                </div>
				
			
				<div class="form-group col-md-12">
							 <label>Meta description  </label>
							 <textarea type="text" name="meta_desc" rows="5" class="form-control"> '.$meta_desc.'</textarea>
						</div>
					 
						<div class="form-group col-md-12">
							 <label>Meta keywords  </label>
							 <textarea type="text" name="meta_keywords" rows="5" class="form-control"> '.$meta_key.'</textarea>
						</div>
						
						<div class="form-group col-md-12">
                                <label>Page Footer Details</label>
								<textarea name="editor1"  class="input-style" id="ditor">'.$page_cn.'</textarea>
								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>        
					  </div>
					  
					  
					  
				 
			';
			}
}

public function form_size() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_cat = urlencode($cat_name);
		
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, size FROM sd_color
			  WHERE type = 2 AND id = ?
				LIMIT 1");
			$stmt->bind_param('s', $url_string_cat);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($id, $size);
			$stmt->fetch();
			$stmt->close();
			if ($type == 1){ $type_selected1 = 'selected="selected"'; }  
			if ($type == 2){ $type_selected2 = 'selected="selected"'; }  
			echo 
			'
			
						
						<div class="form-group col-md-6">
							 <label>Size Name</label>
							 <input type="hidden" name="id" placeholder="color_name" value="'.$id.'" class="form-control" required="required">
							 <input type="text" class="form-control" name="size" value="'.$size.'" autocomplete="off" required placeholder="Size Name">
						</div>
						
					
				
			';
			}
}
		
public function sub_cat_data() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_cat = urlencode($cat_name);
		
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT sub_menu_id, meta_desc, meta_key, page_cn, menu_id, sub_menu, img1, img2
				FROM sub_menu
			 		 WHERE sub_menu_id = ?
				LIMIT 1");
			$stmt->bind_param('s', $url_string_cat);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($sub_menu_id, $meta_desc, $meta_key, $page_cn, $menu_id, $sub_menu, $img1, $img2);
			$stmt->fetch();
			$stmt->close();

			 global $mysqli;
			 $stmt_m = $mysqli->prepare("SELECT menu_id, menu_name 
			 		FROM menu 
						  ORDER BY menu_id ASC");
			 $stmt_m->execute();
			 $stmt_m->bind_result($mn_id, $menu_name);
   			
			echo 
			'
				<div class="form-group col-md-12">
					<label>Sub Category name <span class="red_star">*</span></label>
					<input type="text" name="sub_menu" placeholder="Category name" value="'.$sub_menu.'" class="form-control" required="required">
					<input type="hidden" name="sub_menu_id" placeholder="Category name" value="'.$sub_menu_id.'" class="form-control" required="required">
				</div>
				
 				 <div class="form-group col-md-12">
                     <label>Category name <span class="red_star">*</span></label>
                          <select name="cat" id="drop1" class="form-control" required>
                              <option value="">Select A Category Name</option>';
								      while ($stmt_m->fetch()) {
            							  echo "<option value='$mn_id'"; if ($menu_id == $mn_id){ echo 'selected="selected"'; } echo ">$menu_name</option>";
											  }
    								 $stmt_m->close();   
                                 echo '</select>
                  </div>
				  
				  
				  <div class="form-group col-md-12">
							 <label>Meta description  </label>
							 <textarea type="text" name="meta_desc" rows="5" class="form-control"> '.$meta_desc.'</textarea>
						</div>
					 
						<div class="form-group col-md-12">
							 <label>Meta keywords  </label>
							 <textarea type="text" name="meta_keywords" rows="5" class="form-control"> '.$meta_key.'</textarea>
						</div>
						
						<div class="form-group col-md-12">
                                <label>Page Footer Details</label>
								<textarea name="editor1"  class="input-style" id="ditor">'.$page_cn.'</textarea>
								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>        
					  </div>
 				  	
			';
			}
}


public function third_sub_cat_data() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_cat = urlencode($cat_name);
		
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, name, meta_desc, meta_key, page_cn,  img1, img2
			 from sd_third_sub
			 	 WHERE id = ?
				LIMIT 1");
			$stmt->bind_param('s', $url_string_cat);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($t_id, $t_menu, $meta_desc, $meta_key, $page_cn, $img1, $img2);
			$stmt->fetch();
			$stmt->close();
			global $mysqli;
			 $stmt_m = $mysqli->prepare("SELECT menu_id, menu_name 
			 		FROM menu 
						  ORDER BY menu_id ASC");
			 $stmt_m->execute();
			 $stmt_m->bind_result($mn_id, $menu_name);
   			
			echo 
			'
					<div class="form-group col-md-12"> 
					   <label>Category name <span class="red_star">*</span></label>
						<input type="text" name="t_menu" placeholder="Category name" value="'.$t_menu.'" class="form-control" required="required">
						<input type="hidden" name="sub_menu_id" placeholder="Category name" value="'.$t_id.'" class="form-control" required="required">
					</div>
			
			  <div class="form-group col-md-12">
							 <label>Meta description  </label>
							 <textarea type="text" name="meta_desc" rows="5" class="form-control"> '.$meta_desc.'</textarea>
						</div>
					 
						<div class="form-group col-md-12">
							 <label>Meta keywords  </label>
							 <textarea type="text" name="meta_keywords" rows="5" class="form-control"> '.$meta_key.'</textarea>
						</div>
						
						<div class="form-group col-md-12">
                                <label>Page Footer Details</label>
								<textarea name="editor1"  class="input-style" id="ditor">'.$page_cn.'</textarea>
								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>        
					  </div>
			
			';
			}
}	


public function form_for_hdl() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_cat = urlencode($cat_name);
		
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, title, link home FROM sd_headline
			  WHERE id = ?
				LIMIT 1");
			$stmt->bind_param('s', $url_string_cat);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($hd_id, $title, $link);
			$stmt->fetch();
			$stmt->close();
			echo 
			'				
			    <input type="hidden" name="hd_id" placeholder="Headline ID" value="'.$hd_id.'" class="form-control" required="required">

			   <label>Menu name <span class="red_star">*</span></label>
			    <input type="text" name="title" placeholder="Headline Title" value="'.$title.'" class="form-control" required="required">
					<br />

			   <label>Article Url</label>
			   <textarea name="link" class="form-control" id="exampleInputEmail1" placeholder="Article Link">'.$link.'</textarea>
			   
							';
			}
}	
		
	
public function add_item() 
	{
	
	global $mysqli;
    $stmt = $mysqli->prepare("SELECT menu_id, menu_name FROM menu 
                  ORDER BY menu_id ASC");
     $stmt->execute();
     $stmt->bind_result($id, $menu_name);
	 


	echo 
		'
					<div class="form-group col-md-4">
                     <label>Category name <span class="red_star">*</span></label>
                          <select name="cat" id="drop1" class="form-control" required>
                              <option value="">Select A Category Name</option>';
								      while ($stmt->fetch()) {
            							  echo "<option value='$id'>$menu_name</option>";
											  }
    								 $stmt->close();   
                                 echo '</select>
					</div>
					
					
					<div class="form-group col-md-4" id="person"> </div>
					
					
					
					<div class="form-group col-md-12"></div>	
					
					
							
					
					<div class="form-group col-md-8">
						<label>Product Name <span class="red_star">*</span></label>
						<input type="text" required name="item_name" placeholder=" " class="form-control" required="required">
					</div>
					
					
					
 						<div class="form-group col-md-4">
							 <label>Quantity</label>
						     <input type="text" name="unit" class="form-control" placeholder="" autocomplete="off">
						</div>
						
					
					<div class="form-group col-md-3">
						<div class="span4">
							<label >Price</label>
							<input type="text" required name="price" class="form-control" data-variavel="field1"   >
						</div>
                    </div>
					
					<div class="form-group col-md-3">
						<div class="span4">
							<label >Discounted  Per%</label>
							<input type="text" name="discount_per" class="form-control" data-variavel="field2"    >
						  </div>
                    </div>
					
					<div class="form-group col-md-3">
						<div class="span4">
							<label >Discount </label>
							<input type="text" name="discount" class="form-control" data-formula="#field1# * #field2# / 100"   >
						  </div>
                    </div>
					
					<div class="form-group col-md-3">
						<div class="span4">
						<label >After Discount</label>
							<input type="text" name="discount_price" class="form-control" data-formula="#field1# - #field1# * #field2# / 100 "  >
						  </div>
                    </div>
				

 						<div class="form-group col-md-12">
						
							 <label>Short description  </label>
 							 
							 <textarea name="short_desc"  class="input-style" id="ditor"></textarea>
								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>     
						</div>

						<div class="form-group col-md-12">
                                <label>Item Details</label>
								<textarea name="editor1"  class="input-style" id="ditor"></textarea>
								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>        
						</div>
						
					<div class="form-group col-md-12">
						<label >Product Review (Youtube Embed Code = width:100%; height: 420;) </label>
						<textarea type="text" name="video" class="form-control" > </textarea>
                    </div>
					
				
					
					';
}
	
	
public function update_product() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_item = urlencode($cat_name);
			
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, shop_id, item_name, item_code, sub_cat, sub_sub, category, sort_desc, details, video, img1, img2, discount_per, discount, discount_price, d_quantity, s_offer, e_offer, price, top_pro, popular, deal, date, up_date, unit, activity 
			FROM sd_item_l
			  WHERE id = ?
				LIMIT 1");
			$stmt->bind_param('i', $url_string_item);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($id, $shop_id, $item_name, $item_code, $sub_cat, $sub_sub, $category, $sort_description, $details, $video, $img12, $img2, $discount_per, $discount, $discount_price, $d_quantity, $s_offer, $e_offer, $sell, $top_pro, $popular, $deal, $date, $up_date, $unit, $activity);
			$stmt->fetch();
			$stmt->close();
			
			 $stmt = $mysqli->prepare("SELECT menu_id, menu_name FROM menu 
                  ORDER BY menu_id ASC");
			 $stmt->execute();
			 $stmt->store_result();
			 $stmt->bind_result($menu_id, $menu_name);
			 
			 
			$stmt_more = $mysqli->prepare("SELECT id, img1, img2, img3, img4 FROM sd_more_img
					WHERE pro_id = '".$url_string_item."'
                  ORDER BY id ASC");
			$stmt_more->execute();
			$stmt_more->store_result();
			$stmt_more->bind_result($m_id, $m_img1, $m_img2, $m_img3, $m_img4);
			$stmt_more->fetch();
			$stmt_more->close();
		
			 $stmt_sub = $mysqli->prepare("SELECT sub_menu_id, sub_menu FROM sub_menu
  						WHERE menu_id = ? 
                  ORDER BY sub_menu_id ASC");
			 $stmt_sub->bind_param('s', $category); 
			 $stmt_sub->execute();
			 $stmt_sub->store_result();
			 $stmt_sub->bind_result($s_menu_id, $s_menu_name);

			 $stmt_t_sub = $mysqli->prepare("SELECT id, name from sd_third_sub
  						WHERE sub_menu_id = ? 
                  ORDER BY name ASC");
			 $stmt_t_sub->bind_param('s', $sub_cat); 
			 $stmt_t_sub->execute();
			 $stmt_t_sub->store_result();
			 $stmt_t_sub->bind_result($ts_menu_id, $ts_menu_name);
			 
			 if ($img1 == NULL){ $image = "photo.png"; } else { $image = $img1;}
			
			if ($up_date == NULL)
			 		{ 
						$last_updated = $date; 
					} 
				else 
					{ 
						$last_updated = $up_date;
					}
			 
			echo 
			' 
		<div class="form-group">
            <input type="hidden" name="pro_id" placeholder="Item name" value="'.$id.'" class="form-control" required="required">
			 <input type="hidden" name="shop_id" placeholder="Item name" value="'.$shop_id.'" class="form-control">
						   
						<div id="page">
						  <!-- Our File Inputs -->
						   
							<div class="wrap-custom-file">
								<input type="hidden" name="img1" value="'.$img12.'" class="form-control" >	
								<input type="file" name="image1" id="image1" accept=".gif, .jpg, .png" />
								<label for="image1" style="background-image: url(../images/products/'.$img12.');background-size: cover;background-position: center;">
								  <span>Main Image</span>
								  <i class="fa fa-plus-circle"></i>
								</label>
							</div>
						  
						<!-- End Page Wrap -->
						</div>
						
                      </div>
						
						
						
						 <div style="clear:both;"></div>
									
						<div class="form-group col-md-4">
                         <label>Category name <span class="red_star">*</span></label>
                           <select name="category" class="form-control" required id="drop1">
                              <option value="">Select A Category Name</option>';
							while ($stmt->fetch()) 
											{
            					 echo "<option value='$menu_id'"; 
								 if ($category == $menu_id)
								 		{
								 echo "selected='selected'";
								 		} 
										echo ">$menu_name</option>";
											}
    							 	 $stmt->close();   
                                 echo '</select>
                        </div>


					 <div class="form-group col-md-4" id="person">
                         <label>Sub Category name  </label>
                           <select name="sub_cat" class="form-control">
                              <option value="">Select A Sub Category Name</option>';
							while ($stmt_sub->fetch()) 
											{
            					 echo "<option value='$s_menu_id'"; 
								 if ($sub_cat == $s_menu_id)
								 		{
								 echo "selected='selected'";
								 		} 
										echo ">$s_menu_name</option>";
											}
    							 	 $stmt_sub->close();   
                                 echo '</select>
                            </div>
						
                    <div class="form-group col-md-8">
                        <label>Product Name <span class="red_star">*</span></label>
                        <input type="text" name="item_name" placeholder="" value="'.$item_name.'" class="form-control" required="required">
                    </div>
					
				
						<div class="form-group col-md-4">
                           <label>Quantity </label>
                           <input type="text" name="unit" placeholder="" value="'.$unit.'" class="form-control">
                       </div>
					   
					<div class="form-group col-md-3">
						<div class="span4">
							<label >৳ Price</label>
							<input type="text" required name="price" value="'.$sell.'" class="form-control" data-variavel="field1"   >
						</div>
                    </div>
					
					<div class="form-group col-md-3">
						<div class="span4">
							<label >Discounted  Per%</label>
							<input type="text" name="discount_per" value="'.$discount_per.'" class="form-control" data-variavel="field2"    >
						  </div>
                    </div>
					
					<div class="form-group col-md-3">
						<div class="span4">
							<label >Discount </label>
							<input type="text" name="discount" value="'.$discount.'" class="form-control" data-formula="#field1# * #field2# / 100"   >
						  </div>
                    </div>
					
					<div class="form-group col-md-3">
						<div class="span4">
						<label >After Discount</label>
							<input type="text" name="discount_price" value="'.$discount_price.'"  class="form-control" data-formula="#field1# - #field1# * #field2# / 100 "  >
						  </div>
                    </div>
					
					
							
					
							
					 	<div class="form-group col-md-12">
							 <label>Short description  </label>
							 <textarea type="text" name="sort_desc" id="ditor" rows="5" class="form-control"> '.$sort_description.' </textarea>
 								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>    
					 
					 
					 </div>
					 
					 
							<div class="form-group col-md-12">
                                <label>Item Details</label>					
								<textarea name="editor1"  class="input-style" id="ditor">'.$details.'</textarea>
								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>
								
                            </div>
							
					
					<div class="form-group col-md-12">
						<label >Product Review (Youtube Embed Code = width:100%; height: 420;) </label>
						<textarea type="text" name="video" class="form-control" > '.$video.' </textarea>
                    </div>
							
			
					
	'
					   ;
			}
	}
	

public function add_more_img() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_item = urlencode($cat_name);
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id FROM sd_item_l
			  WHERE id = ?
				LIMIT 1");
			$stmt->bind_param('i', $url_string_item);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($id);
			$stmt->fetch();
			$stmt->close();
			
	
			echo 
			' 
		<div class="form-group">
             <input type="hidden" name="pro_id" placeholder="Item ID" value="'.$id.'" class="form-control" required="required">
			
			<div id="upload_area" class="corners align_center"></div>
       
        </div>';
	}
}	
		

public function add_slide() 
	{

	global $mysqli;
    $stmt = $mysqli->prepare("SELECT menu_id, menu_name FROM menu 
                  ORDER BY menu_id ASC");
     $stmt->execute();
     $stmt->bind_result($id, $menu_name);
	 
	 echo 
		'
		 <div class="form-group">
            <label>Category name <span class="red_star">*</span></label>
               <select name="cat" id="drop1" class="form-control" required>
                  <option value="">Select A Category Name</option>';
            					  echo "<option value='999999989'>Home</option>";
					      while ($stmt->fetch()) {
            					  echo "<option value='$id'>$menu_name</option>";
									  }
    						 $stmt->close();   
                     echo '</select>
          </div>

		<div class="form-group">
             <label>URL <span class="red_star">*</span></label>
             <input type="text" name="title_one" class="form-control" value="#" required="required">
        </div>
		';
	}	

public function update_slide() 
	{
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_item = urlencode($cat_name);
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, title_one, img1, img2, cat from sd_slide_mng
			  WHERE id = ?
				LIMIT 1");
			$stmt->bind_param('i', $url_string_item);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($id, $title_one, $img1, $img2, $cat);
			$stmt->fetch();
			$stmt->close();	


	global $mysqli;
    $stmt = $mysqli->prepare("SELECT menu_id, menu_name FROM menu 
                  ORDER BY menu_id ASC");
     $stmt->execute();
     $stmt->bind_result($menu_id, $menu_name);

	echo 
		' 
		<div class="form-group">
         <input type="hidden" name="id" placeholder="Item name" value="'.$id.'" class="form-control" required="required">
		 <input type="hidden" name="pro_img1" placeholder="Item name" value="'.$img1.'" class="form-control" required="required">
		 <input type="hidden" name="pro_img2" placeholder="Item name" value="'.$img2.'" class="form-control" required="required">
	
				<div id="upload_area" class="corners align_center"></div>
                     <img src="../images/slide/'.$img1.'" width="60" alt="img" />
                 </div>

			 <div class="form-group">
                     <label>Category name <span class="red_star">*</span></label>
                          <select name="cat" id="drop1" class="form-control" required>
                              <option value="">Select A Category Name</option>';
            					  echo "<option value='999999989'";
								 if ($cat == '999999989')
								 		{
								 echo "selected='selected'";
								 		} 
										echo ">Home</option>";
							while ($stmt->fetch()) 
											{
            					 echo "<option value='$menu_id'"; 
								 if ($cat == $menu_id)
								 		{
								 echo "selected='selected'";
								 		} 
										echo ">$menu_name</option>";
											}
    							 	 $stmt->close();   
                                 echo '</select>
                  </div>


		<div class="form-group">
             <label>URL <span class="red_star">*</span></label>
             <input type="text" name="title_one" value="'.$title_one.'" class="form-control" required="required">
           </div>';
}	
	
public function update_more_post() 
	{
	if (isset($_GET['ItemID'])) { 
		$sanitize = true;
		$cat_name = isset($_GET['ItemID']) ? $_GET['ItemID'] : '';
		$url_string_item = urlencode($cat_name);
			global $mysqli;
			$stmt = $mysqli->prepare("SELECT id, title, full_desc, img1, img2 FROM sd_posts
			  WHERE id = ?
				LIMIT 1");
			$stmt->bind_param('i', $url_string_item);  // Bind "$email" to parameter.
			$stmt->execute();    // Execute the prepared query.
			// get variables from result.
			$stmt->store_result();
			$stmt->bind_result($id, $title,	$full_desc, $img1, $img2);
			$stmt->fetch();
			$stmt->close();
			
						 
			 if ($img1 == NULL){ $image = "photo.png"; } else { $image = $img1;}
			 if ($up_date == NULL)
			 		{ 
						$last_updated = $date; 
					} 
				else 
					{ 
						$last_updated = $up_date;
					}
			 
			echo 
			' 
		<div class="form-group">
            <input type="hidden" name="id" placeholder="Item name" value="'.$id.'" class="form-control" required="required">			
							
						  <div class="form-group">
                               <label>Title </label>
                               <input type="text" name="title" placeholder="Item Code" value="'.$title.'" class="form-control">
                            </div>

                     
							<div class="form-group">
                                <label>Details</label>
								<textarea name="editor1"  class="input-style" id="ditor">'.$full_desc.'</textarea>
								 <script>
								  CKEDITOR.replace( "ditor", {
									fullPage: true,
									allowedContent: true,
									extraPlugins: "wysiwygarea"
								  });
							
								</script>


                            </div>';							   ;
			}
	}		
	
	
}
$data_out = new edit_cat();
?>
