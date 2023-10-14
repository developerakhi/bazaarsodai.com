<script>  
$(document).ready(function(){

	load_cart_data();
   
	function load_cart_data()
	{
		$.ajax({
			url:"assets/addtoCart/fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('#load_full_cart').html(data.load_full_cart);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
				$('#subtotal').val(data.subtotal);
				$('#shipping_charge').text(data.shipping_charge);
				$('#cartBTN').html(data.cartBTN);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_unit = $('#punit'+product_id+'').val();
		var product_img = $('#pimg'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var d_quantity = $('#d_quantity'+product_id+'').val();
		var unit = $('#unit'+product_id+'').val();
		var ptype = $('#ptype'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"assets/addtoCart/action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_unit:product_unit, product_img:product_img, product_price:product_price, d_quantity:d_quantity, unit:unit, ptype:ptype, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					
				}
			});
		}
		else
		{
			alert("Please Enter Number of Quantity");
		}
	});
	

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		
			$.ajax({
				url:"assets/addtoCart/action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					
				}
			})
		
	});

	$(document).on('click', '#fullcart', function(){
		var action = 'fullcart';
		$.ajax({
			url:"assets/addtoCart/action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				
			}
		});
	});
	
	// develop 
	$(document).on('click', '.pPlus', function(){
	    var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_unit = $('#punit'+product_id+'').val();
		var product_img = $('#pimg'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var d_quantity = $('#d_quantity'+product_id+'').val();
		var shop_id = $('#shop_id'+product_id+'').val();
		var ptype = $('#ptype'+product_id+'').val();
		var quantity = $('#quantity'+product_id).val();
		var p_qty = $(this).attr("data-qty");
		
		var action = "plus";
		if(p_qty > 0){
			$.ajax({
				url:"assets/addtoCart/action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_unit:product_unit, product_img:product_img, product_price:product_price, d_quantity:d_quantity, shop_id:shop_id, ptype:ptype, product_quantity:1, quantity:quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					
				}
			});
		}
		else
		{
			alert("Please Enter Number of Quantity");
		}
 	});
	$(document).on('click', '.pMinus', function(){
	    var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_unit = $('#punit'+product_id+'').val();
		var product_img = $('#pimg'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var d_quantity = $('#d_quantity'+product_id+'').val();
		var shop_id = $('#shop_id'+product_id+'').val();
		var ptype = $('#ptype'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
	    var p_qty = $(this).attr("data-qty");
		var action = "minus";
		if(p_qty > 1){
			$.ajax({
				url:"assets/addtoCart/action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_unit:product_unit, product_img:product_img, product_price:product_price, d_quantity:d_quantity, shop_id:shop_id, ptype:ptype, product_quantity:1, action:action},
				success:function(data)
				{
					load_cart_data();
					
				}
			});
		}else{
			alert("Atleast One Product Added!");
		}
	});
    
});



</script>