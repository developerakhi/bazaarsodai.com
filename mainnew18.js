$(document).ready(function(){
//   $("#about_us_modal2").modal('show');
    
    $("body").delegate("img","contextmenu",function(event){
        return false;
     }); 
    
	cat();
	brand();
	//product();
	cart_value_count();
	peekout_cart_item_load();
	cart_shipping_charge_count();
	cart_grant_total_count();
	
	
	
	
	load_parent_for_home();
	friday_product();
	
	function cat(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{category:1},
			success	:	function(data){
				$(".app-menu").html(data);
				
				
				
				
	var treeviewMenu = $('.app-menu');

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');
				
				
				
			}
		})
	}
	
	
	
	
	

$("body").delegate(".category","click",function(event){
    event.preventDefault();
		//$("#get_product").html("<h3>Loading...<i class='fa fa-circle-o-notch fa-spin' style='font-size:50px; color:purple;'></i></h3>");
		$("#get_product").html("<div id='container5'> <img class='img img-responsive' src='bird.gif'></div>");
		
		var cid = $(this).attr('cid');
		var slug = $(this).attr('slug');
		window.history.pushState(slug, slug, slug);
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{get_seleted_Category:1,cat_id:cid},
			success	:	function(data){
				$("#get_product").html(data);
				
			$(".is_unnecessary:first").addClass("hideOnPhone");		
					
					

  if(window.innerWidth !== undefined && window.innerHeight !== undefined) { 
    var w = window.innerWidth;
    var h = window.innerHeight;
  } else {  
    var w = document.documentElement.clientWidth;
    var h = document.documentElement.clientHeight;
  }
  if (w <600){
	  document.getElementById("sidebar_open_close").click();
  }
					
				}
			})
		})
	


//load categories from home when clicked and right breadc
$("body").delegate(".category_from_home","click",function(event){
    event.preventDefault();
		//$("#get_product").html("<h3>Loading...<i class='fa fa-circle-o-notch fa-spin' style='font-size:50px; color:purple;'></i></h3>");
				$("#get_product").html("<div id='container5'> <img class='img img-responsive' src='bird.gif'></div>");
		
		var cid = $(this).attr('cid');
		var slug = $(this).attr('slug');
		var b_crumb_id=$(this).attr('b_crumb_id');
		var b_crumb_title=$(this).attr('b_crumb_title');
		
		window.history.pushState(slug, slug, slug);
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{category_from_home:1,cat_id:cid, b_crumb_id:b_crumb_id, b_crumb_title:b_crumb_title},
			success	:	function(data){
				$("#get_product").html(data);
				
					
					
					

  if(window.innerWidth !== undefined && window.innerHeight !== undefined) { 
    var w = window.innerWidth;
    var h = window.innerHeight;
  } else {  
    var w = document.documentElement.clientWidth;
    var h = document.documentElement.clientHeight;
  }
  if (w <600){
	  document.getElementById("toogle-menu-hideshow").click();
  }
					
				}
			})
		})
	


$("body").delegate(".categori","click",function(event){
	alert ("hahahah");
	exit;
    event.preventDefault();
		//$("#get_product").html("<h3>Loading...<i class='fa fa-circle-o-notch fa-spin' style='font-size:50px; color:purple;'></i></h3>");
				$("#get_product").html("<div id='container5'> <img class='img img-responsive' src='bird.gif'></div>");
		
		var cid = $(this).attr('cid');
		var slug = $(this).attr('slug');
		window.history.pushState(slug, slug, slug);
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{get_seleted_Category:1,cat_id:cid},
			success	:	function(data){
				$("#get_product").html(data);
				
					
					
					

  if(window.innerWidth !== undefined && window.innerHeight !== undefined) { 
    var w = window.innerWidth;
    var h = window.innerHeight;
  } else {  
    var w = document.documentElement.clientWidth;
    var h = document.documentElement.clientHeight;
  }
  if (w <600){
	  document.getElementById("toogle-menu-hideshow").click();
  }
					
				}
			})
		})
	





//load child category when parent is clicked
$("body").delegate(".parent","click",function(event){
    event.preventDefault();
		//$(".bowww").html("<h3>Loading...<i class='fa fa-circle-o-notch fa-spin' style='font-size:50px; color:purple;'></i></h3>");
		
		

		var cid = $(this).attr('cid');
		var cat_parent_title=$(this).attr('cat_parent_title');
		
	
		//alert (cid);
		//exit;
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{get_child_Category:1,cat_id:cid, cat_parent_title:cat_parent_title},
			success	:	function(data){
				$("#get_product").html(data);
				//$("#breadcrumb").html("<a href='index.php' style='margin-bottom:12px;'><< Categories</a> | <a class='parent' style='cursor:pointer; color:#4d79ff;' cid='"+cid+"' cat_parent_title='"+cat_parent_title+"'>"+cat_parent_title+"</a>");
				
					
					
				}
			})
		})







//load fullcart when checkout clicked
$("body").delegate("#fullcart","click",function(event){
    event.preventDefault();

fbq('track', 'InitiateCheckout',
  // begin required parameter object
  /*
  {
    value: 0,
    currency: 'BDT',
    content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  }
  */
  // end required parameter object
);

	
	//Check is customer is logged in or not

			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{ChequeLogin:1},
			success	:	function(data){ 
				if (data=="not logged in"){
					//alert ("hahaha");
					//exit;
					document.getElementById("clickbtn").click();
					
				} else{
					//window.location.assign("delivery/")
		//header("window.location:delivery/")
		
													//var slug="cart/fullcart";
							//window.history.pushState(slug, slug, slug);
								$.ajax({
								url		:	"action.php",
								method	:	"POST",
								data	:	{load_full_cart:1},
								success	:	function(data){
									if(data=="no product"){
										confirm("No product in cart. Add at least one");
										exit;
									}
									$("#get_product").html(data);
									document.getElementById("miniCart-close").click();
									$(".is_unnecessary:first").addClass("hideOnPhone");
									$("html, body").animate({ scrollTop: 0 }, "slow");
									//$("#miniCart-close").click();
									//$("#breadcrumb").html("<a href='index.php' style='margin-bottom:12px;'><< Categories</a> | <a class='parent' style='cursor:pointer; color:#4d79ff;' cid='"+cid+"' cat_parent_title='"+cat_parent_title+"'>"+cat_parent_title+"</a>");
									
										
										
									}
								})
		
		
		
			}
			
			
			
			}
		})
		
	})










		//var cid = $(this).attr('cid');
		//var cat_parent_title=$(this).attr('cat_parent_title');
		
	
		//alert (cat_parent_title);
		//exit;




//submit order when clicked submit order
$("body").delegate("#sb","click",function(event){
    event.preventDefault();
	
	
	if (document.getElementById('terms').checked) {
            //alert("checked");
        } else {
            alert("Please agree to our terms and conditions by clicking the checkbox");
			exit;
        }
//alert("Thank you");
//exit;
		//var cid = $(this).attr('cid');
		//var cat_parent_title=$(this).attr('cat_parent_title');
		var customer_name = $('#CustomerName').val();
		var address_type = $('#AddressType').val();
		var delivery_address = $('#delivery_address').val();
		var comment = $('#comment').val();
		var delivery_type = $('#deliveryTypeControlSelect1').val();
		var delivery_date = $('#delivery_date').val();
		var delivery_slot = $('#delivery_slot').val();
	//var dam = $('#CustomerName').value();
	/*
	alert (customer_name);
	alert (address_type);
	alert (delivery_address);
	alert (comment);
	alert (delivery_type);
	alert (delivery_date);
	alert (delivery_slot);
	*/
	//exit;
	//exit;
		//alert (cat_parent_title);
		//exit;
		var slug="order/success";
		//window.history.pushState(slug, slug, slug);
		
		
fbq('track', 'Purchase',
  // begin required parameter object
  //{
    //value: 0,
    //currency: 'BDT',
    //content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  //}
  // end required parameter object
);
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{submit_order:1, customer_name:customer_name,address_type:address_type,delivery_address:delivery_address,comment:comment,delivery_type:delivery_type,delivery_date:delivery_date,delivery_slot:delivery_slot},
			success	:	function(data){
				
				$("#get_product").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				$("html, body").animate({ scrollTop: 0 }, "slow");
				//promo_eligibilty_check();
				//$("#close_cart").click();
				//$("#breadcrumb").html("<a href='index.php' style='margin-bottom:12px;'><< Categories</a> | <a class='parent' style='cursor:pointer; color:#4d79ff;' cid='"+cid+"' cat_parent_title='"+cat_parent_title+"'>"+cat_parent_title+"</a>");
				
					
					
				}
			})
		})	

//load address page when click on cash on delivery
$("body").delegate("#cash_on_delivery","click",function(event){
    event.preventDefault();

		//var cid = $(this).attr('cid');
		//var cat_parent_title=$(this).attr('cat_parent_title');
		
	
		//alert (cat_parent_title);
		//exit;
		var slug="delivery/cod";
		//window.history.pushState(slug, slug, slug);
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{cash_on_delivery:1},
			success	:	function(data){
				//alert(data);
				//exit;
						if(data=="no product"){
						alert("No product in cart. Add at least one");
						exit;
						}
				$("#get_product").html(data);
				//$("#breadcrumb").html("<a href='index.php' style='margin-bottom:12px;'><< Categories</a> | <a class='parent' style='cursor:pointer; color:#4d79ff;' cid='"+cid+"' cat_parent_title='"+cat_parent_title+"'>"+cat_parent_title+"</a>");
				$("html, body").animate({ scrollTop: 0 }, "slow");
					
					
				}
			})
		})	
		
		
		
		
	
	$("body").delegate(".selectBrand","click",function(event){
		event.preventDefault();
		$("#get_product").html("<h3>Loading...</h3>");
		var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{selectBrand:1,brand_id:bid},
			success	:	function(data){
				$("#get_product").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
	
	})
	$("#search").keyup(function(){
		//$("#get_product").html("<h3>Loading...</h3>");
		var keyword = $("#search").val();
		var keyword =keyword.trim(); //remove white space from both side
		if(keyword === ""){ //if only spacbar pressed
			exit;

		}
		var slug="search/"+keyword;
		if(keyword !== ""){
		    window.history.pushState(slug, slug, slug);
		    //$("#get_product").html("<h3>Loading...</h3>");
		    		$("#get_product").html("<div id='container5'> <img class='img img-responsive' src='bird.gif'></div>");

fbq('track', 'Search',
  // begin required parameter object
  
  {
    search_string: keyword,
   // currency: 'BDT',
   // content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  }
  
  // end required parameter object
);

			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{search:1,keyword:keyword},
			success	:	function(data){ 
				$("#get_product").html(data);

			}
		})
		}
	})
	
	
		$("#search-m").keyup(function(){
		//$("#get_product").html("<h3>Loading...</h3>");
		var keyword = $("#search-m").val();
		var keyword =keyword.trim(); //remove white space from both side
		if(keyword === ""){ //if only spacbar pressed
		exit;

		}
		var slug="search/"+keyword;
		if(keyword !== ""){
		    window.history.pushState(slug, slug, slug);
		    $("#get_product").html("<h3>Loading...</h3>");
		    		//$("#get_product").html("<div id='container5'> <img class='img img-responsive' src='bird.gif'></div>");
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{search:1,keyword:keyword},
			success	:	function(data){ 
				$("#get_product").html(data);
				$("#search").val(keyword);
				$('#search').focus();
				//$("#search:text:visible:first").focus();
				//document.getElementById("search").click();

			}
		})
		}
	})
	
	
	//for search on mobile screen
		$("#search-m-m").keyup(function(){
		//$("#get_product").html("<h3>Loading...</h3>");
		var keyword = $("#search-m-m").val();
		var slug="search/"+keyword;
		if(keyword !== ""){
		    window.history.pushState(slug, slug, slug);
		    $("#get_product").html("<h3>Loading...</h3>");
		    
fbq('track', 'Search',
  // begin required parameter object
  
  {
    search_string: keyword,
   // currency: 'BDT',
   // content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  }
  
  // end required parameter object
);
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{search:1,keyword:keyword},
			success	:	function(data){ 
				$("#get_product").html(data);

			}
		})
		}
	})	
	
	/*
	
	$("#search_btn-m").click(function(){
		$("#get_product").html("<h3>Loading...</h3>");
		var keyword = $("#search-m").val();
		if(keyword != ""){
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{search:1,keyword:keyword},
			success	:	function(data){ 
				$("#get_product").html(data);

			}
		})
		}
	})
	
	
	*/
	
	
	
	
	
	$("#signup_button").click(function(event){
		event.preventDefault();
			$.ajax({
			url		:	"register.php",
			method	:	"POST",
			data	:	$("form").serialize(),
			success	:	function(data){ 
				$("#signup_msg").html(data);
			}
		})
		
	})
	$("#login").click(function(event){
		event.preventDefault();
		var email = $("#email").val();
		var pass = $("#password").val();
		$.ajax({
			url	:	"login.php",
			method:	"POST",
			data	:	{userLogin:1,userEmail:email,userPassword:pass},
			success	:function(data){
				if(data == "truefsvkjbskvvsbd"){
					window.location.href = "profile.php";
				}
			}
		})
	})
	cart_count();
	$("body").delegate("#product","click",function(event){
		event.preventDefault();
//	alert ("Service closed till 2 August, 2020, 5.00PM");
//	exit;
		
		
	function flyToElement(flyer, flyingTo) {
	var $func = $(this);
	var divider = 5;
	var flyerClone = $(flyer).clone();
	$(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
	$('body').append($(flyerClone));
	var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
	var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
	 
	$(flyerClone).animate({
		opacity: 0.4,
		left: gotoX,
		top: gotoY,
		width: $(flyer).width()/divider,
		height: $(flyer).height()/divider
	}, 700,
	function () {
		$(flyingTo).fadeOut('fast', function () {
			$(flyingTo).fadeIn('fast', function () {
				$(flyerClone).fadeOut('fast', function () {
					$(flyerClone).remove();
				});
			});
		});
	});
}
	var itemImg = $(this).parent().parent().find('img').eq(0);
	//alert(itemImg);
	//exit;
	flyToElement($(itemImg), $('.cart_anchor'));
		
		
		
		
		
		var p_id = $(this).attr('pid');
		
		
fbq('track', 'AddToCart',
  // begin required parameter object
  /*
  {
    value: 0,
    currency: 'BDT',
    content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  }
  */
  // end required parameter object
);		
		
		
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{addToProduct:1,proId:p_id},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
			}
		})
	})
	


//add product when clicked from single page

$("body").delegate("#product_single","click",function(event){
		event.preventDefault();
//		alert ("Service closed till 2 August, 2020, 5.00PM");
//		exit;
		
	/*	
	function flyToElement(flyer, flyingTo) {
	var $func = $(this);
	var divider = 5;
	var flyerClone = $(flyer).clone();
	$(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
	$('body').append($(flyerClone));
	var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
	var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
	 
	$(flyerClone).animate({
		opacity: 0.4,
		left: gotoX,
		top: gotoY,
		width: $(flyer).width()/divider,
		height: $(flyer).height()/divider
	}, 700,
	function () {
		$(flyingTo).fadeOut('fast', function () {
			$(flyingTo).fadeIn('fast', function () {
				$(flyerClone).fadeOut('fast', function () {
					$(flyerClone).remove();
				});
			});
		});
	});
}
	var itemImg = $(this).parent().parent().find('img').eq(0);
	//alert(itemImg);
	//exit;
	flyToElement($(itemImg), $('.cart_anchor'));
		
		
	*/	
		
		
		var p_id = $(this).attr('pid');
		
		
fbq('track', 'AddToCart',
  // begin required parameter object
  /*
  {
    value: 0,
    currency: 'BDT',
    content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  }
  */
  // end required parameter object
);	
		
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{addToProduct:1,proId:p_id},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				
							//var p_id2 =19;// $(this).attr('pid');
							//var s_id2 = 34;//$(this).attr('sid');
							//alert(s_id);
							//exit;
							$.ajax({
								url	:	"action.php",
								method	:	"POST",
								data	:	{single_product_modal_button_load_12:1, p_id:p_id},
								success	:	function(result){
									//alert(da);
									//exit;
									$(".modal_product_quantity_controler").html(result);
									$(".modal_product_quantity_controler_2").html(result);
									$('#buynowbutton_holder').html("<a type='button' class='gb-gradient single-product-card-btn' data-dismiss='modal'>BUY NOW</a>");
									
									//cart_count();
									//cart_value_count();
									//peekout_cart_item_load();
									//cart_shipping_charge_count();
									//cart_grant_total_count();
								}
							})
				
				
				
			}
		})
	})

//add product when clicked from single page

$("body").delegate("#product_single_single_page","click",function(event){
		event.preventDefault();
//		alert ("Service closed till 2 August, 2020, 5.00PM");
//		exit;
		
	/*	  
	function flyToElement(flyer, flyingTo) {
	var $func = $(this);
	var divider = 5;
	var flyerClone = $(flyer).clone();
	$(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
	$('body').append($(flyerClone));
	var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
	var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
	 
	$(flyerClone).animate({
		opacity: 0.4,
		left: gotoX,
		top: gotoY,
		width: $(flyer).width()/divider,
		height: $(flyer).height()/divider
	}, 700,
	function () {
		$(flyingTo).fadeOut('fast', function () {
			$(flyingTo).fadeIn('fast', function () {
				$(flyerClone).fadeOut('fast', function () {
					$(flyerClone).remove();
				});
			});
		});
	});
}
	var itemImg = $(this).parent().parent().find('img').eq(0);
	//alert(itemImg);
	//exit;
	flyToElement($(itemImg), $('.cart_anchor'));
		
		
	*/	
		
		
		var p_id = $(this).attr('pid');
		
fbq('track', 'AddToCart',
  // begin required parameter object
  /*
  {
    value: 0,
    currency: 'BDT',
    content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  }
  */
  // end required parameter object
);	
		
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{addToProduct:1,proId:p_id},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				
							//var p_id2 =19;// $(this).attr('pid');
							//var s_id2 = 34;//$(this).attr('sid');
							//alert(s_id);
							//exit;
							$.ajax({
								url	:	"action.php",
								method	:	"POST",
								data	:	{single_product_modal_button_load_single_page:1, p_id:p_id},
								success	:	function(result){
									//alert(da);
									//exit;
									//$(".modal_product_quantity_controler").html(result);
									$(".modal_product_quantity_controler_single_page").html(result);
									$("#buynowbutton_holder_single_page").html("<a type='button' class='gb-gradient single-product-card-btn' onClick='javascript:history.back(1)'>BUY NOW</a>");
									
							
									//cart_count();
									//cart_value_count();
									//peekout_cart_item_load();
									//cart_shipping_charge_count();
									//cart_grant_total_count();
								}
							})
				
				
				
			}
		})
	})
/*
	//load QNT, + and - button in the single product modal
	function single_product_modal_button_load(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{single_product_modal_button_load:1},
			success	:	function(data){
				$(".modal_product_quantity_controler").html(data);
			}
		})
	}


*/



//input product to cart from promo code message
$("body").delegate("#product_from_promo_msg","click",function(event){
		event.preventDefault();
		var p_id = $(this).attr('pid');
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{addToProduct:1,proId:p_id},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				document.getElementById("promo_button").click();
			}
		})
	})














	
	//mamabari id button
	
$("body").delegate("#mamabari","click",function(event){
	event.preventDefault();
	function flyToElement(flyer, flyingTo) {
	var $func = $(this);
	var divider = 5;
	var flyerClone = $(flyer).clone();
	$(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
	$('body').append($(flyerClone));
	var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
	var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
	 
	$(flyerClone).animate({
		opacity: 0.4,
		left: gotoX,
		top: gotoY,
		width: $(flyer).width()/divider,
		height: $(flyer).height()/divider
	}, 700,
	function () {
		$(flyingTo).fadeOut('fast', function () {
			$(flyingTo).fadeIn('fast', function () {
				$(flyerClone).fadeOut('fast', function () {
					$(flyerClone).remove();
				});
			});
		});
	});
}
	var itemImg = $(this).parent().parent().find('img').eq(0);
	
	flyToElement($(itemImg), $('.cart_anchor'));
		
		//var p_id = $(this).attr('dhoro');
		var p_id = $(this).parent('pid');
	
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{addToProduct:1,proId:p_id},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
			}
		})
	})
	
	
	
	
	
	
	cart_container();
	function cart_container(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{get_cart_product:1},
			success	:	function(data){
				$("#cart_product").html(data);
			}
		})
		
	};
	function cart_count(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{cart_count:1},
			success	:	function(data){
				$(".badge").html(data);
			}
		})
	}
	
	
	function cart_value_count(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{cart_value_count:1},
			success	:	function(data){
				$(".cart_total_taka").html(data);
				$(".odometer").html(data);
			}
		})
	}
	
	
	
	//total shipping charge calculate
		function cart_shipping_charge_count(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{cart_shipping_charge_count:1},
			success	:	function(data){
				$(".cart_total_shipping").html(data);
			}
		})
	}
	
	
	
		//grant total in cart calculate
		function cart_grant_total_count(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{cart_grant_total_count:1},
			success	:	function(data){
				$(".cart_grand_total").html(data);
			}
		})
	}
	
	
	
			//if customer get promo discount
	function if_customer_get_promo_discount(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{if_customer_get_promo_discount:1},
			success	:	function(data){
				$("#customer_promo_amount").html(data);
			}
		})
	}
	
	
	//load items in peek out cart
	function peekout_cart_item_load(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{peekout_cart_item_load:1},
			success	:	function(data){
				$(".peekout_cart_item_load").html(data);
			}
		})
	}
	
	

	
	
	
	$("#cart_container").click(function(event){
		event.preventDefault();
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{get_cart_product:1},
			success	:	function(data){
				$("#cart_product").html(data);
			}
		})
		
	})
	cart_checkout();
	function cart_checkout(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{cart_checkout:1},
			success	: function(data){
				$("#cart_checkout").html(data);
			}
		})
	}
	
	$("body").delegate(".qty","keyup",function(){
		var pid = $(this).attr("pid");
		var qty = $("#qty-"+pid).val();
		var price = $("#price-"+pid).val();
		var total = qty * price;
		$("#total-"+pid).val(total);
	})
	$("body").delegate(".remove","click",function(event){
		event.preventDefault();
		var pid = $(this).attr("remove_id");
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{removeFromCart:1,removeId:pid},
			success	:	function(data){
				$("#cart_msg").html(data);
				cart_checkout();
			}
		})
	})
	

	
	
	
	page();
	function page(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{page:1},
			success	:	function(data){
				$("#pageno").html(data);
			}
		})
	}
	$("body").delegate("#page","click",function(){
		var pn = $(this).attr("page");
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{getProduct:1,setPage:1,pageNumber:pn},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	})
	
	

	
	
	
	//TO DELETE ITEM FROM CART
		$("body").delegate("#trash_item","click",function(event){
		event.preventDefault();
		$("#promo_msg").html("<i class='fa fa-circle-o-notch fa-spin' style='font-size:15px; color:purple;'></i>");
		
		
		
		var p_id = $(this).attr('pid');
		var s_id = $(this).attr('sid');
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{deleteFromCart:1,proId:p_id,sid:s_id},
			success	:	function(data){
				$("#product_msg").html(data);
				$("#promo_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				promo_eligibilty_check();
			}
		})
	})
	
	
	
	
	
	
	
	//TO DELETE ITEM FROM CART and remove special promo
		$("body").delegate("#remove_special_promo","click",function(event){
		event.preventDefault();
		
		$("#promo_msg").html("<i class='fa fa-circle-o-notch fa-spin' style='font-size:15px; color:purple;'></i>");
		
		
		var p_id = $(this).attr('pid');
		var s_id = $(this).attr('sid');
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{deleteFromCartSpecial:1,proId:p_id,sid:s_id},
			success	:	function(data){
				//$("#product_msg").html(data);
				$("#promo_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
			}
		})
	})	
	
	
	
	
	
	
	
	
	
	
	//INCREASE ITEM FROM CART
		$("body").delegate("#increase_item","click",function(event){
		event.preventDefault();
		
		
		
		
		var p_id = $(this).attr('pid');
		var s_id = $(this).attr('sid');
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{increaseItemToCart:1,proId:p_id,sid:s_id},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
								//call ajax again to load qty into the single product modal quantity button div
								$.ajax({
								url	:	"action.php",
								method	:	"POST",
								data	:	{single_product_modal_button_load_12:1, p_id:p_id},
								success	:	function(result){
									//alert(da);
									//exit;
									$(".modal_product_quantity_controler").html(result);
									//cart_count();
									//cart_value_count();
									//peekout_cart_item_load();
									//cart_shipping_charge_count();
									//cart_grant_total_count();
								}
							})
				
				
			}
		})
	})
	
	
	
	
	
	
	
	//INCREASE ITEM AND LOAD BUTTON IN THE SINGLE PRODUCT PAGE
		$("body").delegate("#increase_item_single_page","click",function(event){
		event.preventDefault();
		
		
		
		
		var p_id = $(this).attr('pid');
		var s_id = $(this).attr('sid');
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{increaseItemToCart:1,proId:p_id,sid:s_id},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
								//call ajax again to load qty into the single product modal quantity button div
								$.ajax({
								url	:	"action.php",
								method	:	"POST",
								data	:	{single_product_modal_button_load_single_page:1, p_id:p_id},
								success	:	function(result){
									//alert(da);
									//exit;
									$(".modal_product_quantity_controler_single_page").html(result);
									//cart_count();
									//cart_value_count();
									//peekout_cart_item_load();
									//cart_shipping_charge_count();
									//cart_grant_total_count();
								}
							})
				
				
			}
		})
	})
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

		
	//DECREASE ITEM FROM CART
		$("body").delegate("#decrease_item","click",function(event){
		event.preventDefault();
		
		
		var x = document.getElementById("item-quantity").innerHTML;
		
		var p_id = $(this).attr('pid');
		var s_id = $(this).attr('sid');
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{decreaseItemToCart:1,proId:p_id,sid:s_id,curItem:x},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				promo_eligibilty_check();
								//call ajax again to load qty into the single product modal quantity button div
								$.ajax({
								url	:	"action.php",
								method	:	"POST",
								data	:	{single_product_modal_button_load_12:1, p_id:p_id},
								success	:	function(result){
									//alert(da);
									//exit;
									$(".modal_product_quantity_controler").html(result);
									//cart_count();
									//cart_value_count();
									//peekout_cart_item_load();
									//cart_shipping_charge_count();
									//cart_grant_total_count();
								}
							})
				
			}
		})
	})
	
	
	
	
	
	
		
	//DECREASE ITEM FROM CART in single page and load button
		$("body").delegate("#decrease_item_single_page","click",function(event){
		event.preventDefault();
		
		
		var x = document.getElementById("item-quantity").innerHTML;
		
		var p_id = $(this).attr('pid');
		var s_id = $(this).attr('sid');
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{decreaseItemToCart:1,proId:p_id,sid:s_id,curItem:x},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				promo_eligibilty_check();
								//call ajax again to load qty into the single product modal quantity button div
								$.ajax({
								url	:	"action.php",
								method	:	"POST",
								data	:	{single_product_modal_button_load_single_page:1, p_id:p_id},
								success	:	function(result){
									//alert(da);
									//exit;
									$(".modal_product_quantity_controler_single_page").html(result);
									//cart_count();
									//cart_value_count();
									//peekout_cart_item_load();
									//cart_shipping_charge_count();
									//cart_grant_total_count();
								}
							})
				
			}
		})
	})
	
	
	
	
	
	//update for OTP begins here------------------------
	//send OTP
	$("#req_pin").click(function(event){
		event.preventDefault();
		var mobile_number = document.getElementById("mob_number").value;
			if (isNaN(mobile_number)){
			alert ("Only number please!");
			exit;
			
		}
		//alert (mobile_number);
		//exit;
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{SendPin:1,mobile_number:mobile_number},
			success	:	function(data){ 
				$("#pin_msg").html(data);
			}
		})
		
	})
	
	
	//SUBMIT OTP
	$("#submit_pin").click(function(event){
		event.preventDefault();
		var pin_number = document.getElementById("pin").value;
		if (pin_number==""){
			alert ("Please write PIN");
			exit;
			
		}
		//alert (mobile_number);
		//exit;
fbq('track', 'CompleteRegistration',
  // begin required parameter object
  /*
  {
    value: 0,
    currency: 'BDT',
    content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  }
  */
  // end required parameter object
);			

			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{SubmitPin:1,pin_number:pin_number},
			success	:	function(data){
				if (data=="<div class='w3-container w3-center w3-animate-zoom'><h5 style='color:red;'>Wrong PIN</h5></div>"){
					$("#pin_msg").html(data);
				} else{
				//document.getElementById("fullcart").(click);
				$('#userLoginModalCenter').modal('hide');
				document.getElementById("fullcart").click();
				//location.reload();
				//document.getElementById("submit_order_new").click();//Take visitor to the delivery address page when logged in.
				}
			}
		})
		
	})
	







//for special promo login

//special promo login begins here------------------------
	//send OTP
	$("#req_pin_special").click(function(event){
		event.preventDefault();
		var mobile_number = document.getElementById("mob_number_special").value;
			if (isNaN(mobile_number)){
			alert ("Only number please!");
			exit;
			
		}
		//alert (mobile_number);
		//exit;
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{SendPin:1,mobile_number:mobile_number},
			success	:	function(data){ 
				$("#pin_msg_special").html(data);
			}
		})
		
	})
	
	
	//SUBMIT OTP
	$("#submit_pin_special").click(function(event){
		event.preventDefault();
		var pin_number = document.getElementById("pin_special").value;
		if (pin_number==""){
			alert ("Please write PIN");
			exit;
			
		}
		//alert (mobile_number);
		//exit;
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{SubmitPin:1,pin_number:pin_number},
			success	:	function(data){
				if (data=="<div class='w3-container w3-center w3-animate-zoom'><h5 style='color:red;'>Wrong PIN</h5></div>"){
					$("#pin_msg_special").html(data);
				} else{
				location.reload();
				}
			}
		})
		
	})


//special promo login ends








	
	
	//Check is customer is logged in or not
	$("#submit_order_new").click(function(event){
		event.preventDefault();

			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{ChequeLogin:1},
			success	:	function(data){ 
				if (data=="not logged in"){
					document.getElementById("testing_submit").click();
					closeNav();
				} else{
					window.location.assign("delivery/")
		//header("window.location:delivery/")
			}
			}
		})
		
	})
	
	
	

//disable request pin for 20 seconds
function submitPoll(){
    document.getElementById("req_pin").disabled = true;
    setTimeout(function() {
        document.getElementById("req_pin").disabled = false;
    }, 5000);
    
}

document.getElementById("req_pin").addEventListener("click", submitPoll);











//load parent_category images for home page
	
	function load_parent_for_home(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{load_parent_for_home:1},
			success	:	function(data){
				$(".bowww").html(data);
				
			}
		})
	}



	
	
//load products when clicked on a category
$("body").delegate(".children","click",function(event){
    event.preventDefault();
		$(".bowww").html("<h3>Loading...<i class='fa fa-circle-o-notch fa-spin' style='font-size:50px; color:purple;'></i></h3>");
		
		

		
		var cid = $(this).attr('cid');
		var slug = $(this).attr('slug');
		
		
		
		var cat_parent_id=$(this).attr('cat_parent_id');
		var cat_child_title=$(this).attr('cat_child_title');
		var current_bredcrumb= document.getElementById("breadcrumb").innerHTML;
		
		
		
		var category_link=current_bredcrumb+" | "+cat_child_title
		
		window.history.pushState(slug, slug, slug);
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{get_seleted_Category_for_home:1,cat_id:cid},
			success	:	function(data){
				$(".bowww").html(data);
				$("#breadcrumb").html(category_link);
					
				}
			})
		})






		//load friday products
			function friday_product(){
		$.ajax({
			url	:	"action.php",
			method:	"POST",
			data	:	{friday_product:1},
			success	:	function(data){
				$(".friday_product").html(data);
			}
		})
	}






//*****************************************************promo code work********
//find promo code
//$("#promo_button").click(function(event){
$("body").delegate("#promo_button","click",function(event){
	//alert("ok");
	//exit;
	
		event.preventDefault();
		var promo_code = document.getElementById("promo_code").value;
			if (promo_code==""){
			alert ("No promo entered");
			exit;
			
		}
		//alert (promo_code);
		//exit;
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{SendPromo:1,promo_code:promo_code},
			success	:	function(data){ 
			
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				if_customer_get_promo_discount();
				$("#promo_msg").html(data);
				if(data=="<span style='color:red;'>Promo does not exist or date expired!</span>"){
					modal_cancel_show=FALSE;
				} else{
					$("#modal_cancel_promo").modal('show');
				}
				
			}
		})
		
	})



//Cancel promo if customer wants card discount
//$("#promo_button").click(function(event){
$("body").delegate("#cancel-promo","click",function(event){
	//$("#about_us_modal3").modal('show');
	//alert("ok");
	//exit;
	
		event.preventDefault();
		/*
		var promo_code = document.getElementById("promo_code").value;
			if (promo_code==""){
			alert ("No promo entered");
			exit;
			
		}
		*/
		//alert (promo_code);
		//exit;
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{CancelPromo:1},
			success	:	function(data){ 
			
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				if_customer_get_promo_discount();
				$("#promo_msg").html(data);
				$("#modal_cancel_promo").modal('hide');
				
			}
		})
		
	})



	
	
	
	//new update on 27042019
	//load product details with ajax
	  
		$("body").delegate("#quickView","click",function(event){
		event.preventDefault();
		
		//$("#promo_msg").html("<h3>Lo...<i class='fa fa-circle-o-notch fa-spin' style='font-size:15px; color:purple;'></i></h3>");
		
		
		var pid = $(this).attr('pid');
		//alert(pid);
	
		//var s_id = $(this).attr('sid');
		//var p_title = $(this).attr('p_title');
		//var p_image = $(this).attr('p_image');
fbq('track', 'ViewContent',
  // begin required parameter object
  /*
  {
    value: 0,
    currency: 'BDT',
    content_type: 'product', // required property
    //content_ids: p_id // required property, if not using 'contents' property
  }
  */
  // end required parameter object
);			
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{quickView:1, pid:pid},
			success	:	function(data){
				//$("#promo_msg").html(data);
				//$("#promo_msg2").html(data);
				//$("#details_content").html(data);
				//alert (data);
				//exit;
				//$("#product_title").html(data);
				/*
				$("#promo_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				$('#login_form_protap').modal('show');
				*/
				//alert (data);
				//exit;
					  var d = $.parseJSON(data);
	  
	  //alert(d.sale_price);
	  //exit;
	  $('#modal_single_product_title').html(d.paragraph);
	  $('.single-product-desc-content').html(d.description);
	  $('.single-product-desc').html(d.unit);
	  $('.single-product-card-price_modal').html(d.product_price);
	  $('.single-product-desc').html(d.unit);
	  //$('.single-product-cart-reduced-price').html(d.sale_price);
	  $('.protap').html(d.large_image);
	  if(d.sale_price==""){
	  $('.single-product-cart-reduced-price2').html(d.sale_price);
	  } else{
		  $('.single-product-cart-reduced-price2').html("&nbsp;"+d.sale_price+"&nbsp;");
	  }
	  $('#buynowbutton_holder').html(d.buynowbutton);
	  $('.reduced-price-badge').html(d.pro_discount);
	  
	  //alert(d.sale_price);
	
	  $('#single-product-display-modal').modal('show');
													//call ajax again to load qty into the single product modal quantity button div
								$.ajax({
								url	:	"action.php",
								method	:	"POST",
								data	:	{single_product_modal_button_load_12:1, p_id:pid},
								success	:	function(result){
									//alert(da);
									//exit;
									$(".modal_product_quantity_controler").html(result);
									//cart_count();
									//cart_value_count();
									//peekout_cart_item_load();
									//cart_shipping_charge_count();
									//cart_grant_total_count();
								}
							})
				
			}
		})
	})
	  
	
//when clicked on thumb on gallery show the big image

		$("body").delegate("#gallery_thumb","click",function(event){
		event.preventDefault();
		
		//$("#promo_msg").html("<h3>Lo...<i class='fa fa-circle-o-notch fa-spin' style='font-size:15px; color:purple;'></i></h3>");
		
		
		var gid = $(this).attr('gid');
		//var s_id = $(this).attr('sid');
		//var p_title = $(this).attr('p_title');
		//var p_image = $(this).attr('p_image');
		
		
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{enlarge_gallery_image:1, gid:gid},
			success	:	function(data){
				//$("#promo_msg").html(data);
				//$("#promo_msg2").html(data);
				$("#quickviewimage").html(data);
				//alert (data);
				//exit;
				//$("#product_title").html(data);
				/*
				$("#promo_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
				$('#login_form_protap').modal('show');
*/				
			}
		})
	})






$("body").delegate("#product_on_detail_modal","click",function(event){
	event.preventDefault();
	
		/*
	function flyToElement(flyer, flyingTo) {
	var $func = $(this);
	var divider = 5;
	var flyerClone = $(flyer).clone();
	$(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
	$('body').append($(flyerClone));
	var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
	var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
	 
	$(flyerClone).animate({
		opacity: 0.4,
		left: gotoX,
		top: gotoY,
		width: $(flyer).width()/divider,
		height: $(flyer).height()/divider
	}, 700,
	function () {
		$(flyingTo).fadeOut('fast', function () {
			$(flyingTo).fadeIn('fast', function () {
				$(flyerClone).fadeOut('fast', function () {
					$(flyerClone).remove();
				});
			});
		});
	});
}
	//var itemImg = $(this).parent().parent().find('img').eq(0);
	//var itemImg = document.getElementById("big_image").scr;
	
	flyToElement($(itemImg), $('.cart_anchor'));
		
		
		
		
		
		
		
		
		
		*/
		
		
		//var p_id = $(this).attr('dhoro');
		var p_id = $(this).attr('pid');
	
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{addToProduct:1,proId:p_id},
			success	:	function(data){
				$("#product_msg").html(data);
				cart_count();
				cart_value_count();
				peekout_cart_item_load();
				cart_shipping_charge_count();
				cart_grant_total_count();
			}
		})
	})
	
	
	

		
//check if promo available for this person
	function promo_eligibilty_check(){
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{promo_eligibilty_check:1},
			success	:	function(data){
				$("#promo_msg").html(data);
			}
		})
	}
	
	
	
	
	
	
	
	
//load faqs and other footer links
	$("body").delegate(".faq","click",function(event){
		event.preventDefault();

		//$("#get_product").html("<h3>Loading...</h3>");
		//var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{load_faq:1},
			success	:	function(data){
				$("#get_product").html(data);
				$("html, body").animate({ scrollTop: 0 }, "slow");

			}
		})
	})
	
	
	
	//load privacy policy and other footer links
	$("body").delegate(".privacy_policy","click",function(event){
		event.preventDefault();

		//$("#get_product").html("<h3>Loading...</h3>");
		//var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{privacy_policy:1},
			success	:	function(data){
				$("#get_product").html(data);
				$("html, body").animate({ scrollTop: 0 }, "slow");

			}
		})
	})
	
	
	//load terms of use and other footer links
	$("body").delegate(".terms_of_use","click",function(event){
		event.preventDefault();

		//$("#get_product").html("<h3>Loading...</h3>");
		//var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{terms_of_use:1},
			success	:	function(data){
				$("#get_product").html(data);
				$("html, body").animate({ scrollTop: 0 }, "slow");

			}
		})
	})
	
	//load return poliy and other footer links
	$("body").delegate(".return_policy","click",function(event){
		event.preventDefault();

		//$("#get_product").html("<h3>Loading...</h3>");
		//var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{return_policy:1},
			success	:	function(data){
				$("#get_product").html(data);
				$("html, body").animate({ scrollTop: 0 }, "slow");

			}
		})
	})

	//load ebl promoton and other footer links
	$("body").delegate(".ebl_promotion","click",function(event){
		event.preventDefault();

		//$("#get_product").html("<h3>Loading...</h3>");
		//var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{ebl_promotion:1},
			success	:	function(data){
				$("#get_product").html(data);
				$("html, body").animate({ scrollTop: 0 }, "slow");

			}
		})
	})

	//load ebl promoton and other footer links
	$("body").delegate(".visa_campaign","click",function(event){
		event.preventDefault();

		//$("#get_product").html("<h3>Loading...</h3>");
		//var bid = $(this).attr('bid');
		
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{visa_campaign:1},
			success	:	function(data){
				$("#get_product").html(data);
				$("html, body").animate({ scrollTop: 0 }, "slow");

			}
		})
	})










	//load order_history
	$("#order_history").click(function(event){
		event.preventDefault();

		//$("#get_product").html("<h3>Loading...</h3>");
		//var bid = $(this).attr('bid');
				    		$("#get_product").html("<div id='container5'> <img class='img img-responsive' src='bird.gif'></div>");
			$.ajax({
			url		:	"action.php",
			method	:	"POST",
			data	:	{order_history:1},
			success	:	function(data){
				$("#get_product").html(data);
				$("html, body").animate({ scrollTop: 0 }, "slow");

			}
		})
	})






$("body").delegate("#delivery_date","change",function(event){
  //$(document).on('change', '#delivery_date', function(){
    //var ffd = document.getElementsByClassName("company");
		//var companys_id = this.options[this.selectedIndex].value;
	//var company_id=$("#company").val();
//var e = document.getElementById("company");
//var company_id = e.options[e.selectedIndex].value;

//var f = document.getElementById("company");
//var pro_id = f.options[f.selectedIndex].product_id;
//var pro_id = $(this).attr('product_id');

	var m = document.getElementById("delivery_date").selectedIndex;
	var n = document.getElementById("delivery_date").options;
	//alert(y[x].index);
	var option_index=(n[m].index);
	//alert (option_index);
	//exit;
	
	 //if select next day date clear all timeslot
	while (delivery_slot.firstChild)
    delivery_slot.removeChild(delivery_slot.firstChild);
		
	

//alert(companys_id);
//exit;
        $.ajax({
            method: "POST",
            url: "action.php",
			data:{load_time_slot:1, option_index:option_index},
            success: function(result) {
				//$("#unit_price").val(result);
				//alert ("Done");
				$('#delivery_slot').html(result);
               //console.log(result);
            }
        });
  



  })






})
