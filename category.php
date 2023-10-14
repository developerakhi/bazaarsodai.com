<script>
$("body").delegate(".category","click",function(event){
    event.preventDefault();
		$("#get_product").html("<div id='container5'> <img class='img img-responsive' src='images/ajax.gif'></div>");
		var cid = $(this).attr('cid');
		var slug = $(this).attr('slug');
		window.history.pushState(slug, slug, slug);
			$.ajax({
			url		:	"cat",
			method	:	"GET",
			data: "cat_id="+cid,
			success	:	function(data){
				
				$("#get_product").html($(data).find("#get_product").html());
				
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
		

</script>


<script>
    $("body").delegate(".cat","click",function(event){
        event.preventDefault();
		//$("#get_product").html("<h3>Loading...<i class='fa fa-circle-o-notch fa-spin' style='font-size:50px; color:purple;'></i></h3>");
		$("#get_product").html("<div id='container5'> <img class='img img-responsive' src='images/ajax.gif'></div>");
		
		var cid = $(this).attr('cid');
		var slug = $(this).attr('slug');
		window.history.pushState(slug, slug, slug);
			$.ajax({
			url		:	"main",
			method	:	"GET",
			data: "cat_id="+cid,
			success	:	function(data){
				
				$("#get_product").html($(data).find("#get_product").html());
				
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
</script>


<script>
//load fullcart when checkout clicked
$("body").delegate("#fullcart","click",function(event){
    event.preventDefault();

		$.ajax({
		url		:	"include/full_cart_fetch.php",
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
			
			}
		})

	})
</script>

<script>
$("body").delegate("#cash_on_delivery","click",function(event){
    event.preventDefault();
	var slug="delivery/cod";
	var subtotal = $("#subtotal").val();
	var discount = $("#discount").val();
	var gtotal = $("#gtotal").val();
	//window.history.pushState(slug, slug, slug);
		$.ajax({
		url		:	"include/chcekout.php",
		method	:	"POST",
		data	:	{
		    cash_on_delivery:1,
		    sub_total:subtotal,
		    discount:discount,
		    
		},
		success	:	function(data){
		
			$("#get_product").html(data);
			$("html, body").animate({ scrollTop: 0 }, "slow");
				
				
			}
		})
	})	
	
</script>

<script>
$("body").delegate(".faq","click",function(event){
	event.preventDefault();
		$.ajax({
		url		:	"include/faq.php",
		method	:	"POST",
		data	:	{load_faq:1},
		success	:	function(data){
			$("#get_product").html(data);
			$("html, body").animate({ scrollTop: 0 }, "slow");

		}
	})
})
</script>

<script>
//load post and other footer links
$("body").delegate(".post","click",function(event){
	event.preventDefault();
		$.ajax({
		url		:	"include/post.php",
		method	:	"POST",
		data	:	{post:1},
		success	:	function(data){
			$("#get_product").html(data);
			$("html, body").animate({ scrollTop: 0 }, "slow");

		}
	})
})

</script>

<script>
$("body").delegate(".help","click",function(event){
	event.preventDefault();
		$.ajax({
		url		:	"include/help_more.php",
		method	:	"POST",
		data	:	{help_more:1},
		success	:	function(data){
			$("#get_product").html(data);
			$("html, body").animate({ scrollTop: 0 }, "slow");

		}
	})
})

</script>

<script>
$("body").delegate(".privacy_policy","click",function(event){
	event.preventDefault();
		$.ajax({
		url		:	"include/privacy.php",
		method	:	"POST",
		data	:	{privacy_policy:1},
		success	:	function(data){
			$("#get_product").html(data);
			$("html, body").animate({ scrollTop: 0 }, "slow");

		}
	})
})

</script>

<script>
$("body").delegate(".terms_of_use","click",function(event){
	event.preventDefault();
		$.ajax({
		url		:	"include/terms_conditions.php",
		method	:	"POST",
		data	:	{terms_of_use:1},
		success	:	function(data){
			$("#get_product").html(data);
			$("html, body").animate({ scrollTop: 0 }, "slow");

		}
	})
})
</script>

<script>
$("body").delegate(".return_policy","click",function(event){
	event.preventDefault();
		$.ajax({
		url		:	"include/return_policy.php",
		method	:	"POST",
		data	:	{return_policy:1},
		success	:	function(data){
			$("#get_product").html(data);
			$("html, body").animate({ scrollTop: 0 }, "slow");

		}
	})
})
</script>


<script>
$("body").delegate(".hlpm","click",function(event){
	event.preventDefault();
		$.ajax({
		url		:	"include/return_policy.php",
		method	:	"POST",
		data	:	{hlpm:1},
		success	:	function(data){
			$("#get_product").html(data);
			$("html, body").animate({ scrollTop: 0 }, "slow");

		}
	})
})
</script>

<script>
$("body").delegate(".add_to_cart","click",function(event){
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
	//alert(itemImg);
	//exit;
	flyToElement($(itemImg), $('.cart_anchor'));
	
	})
	
</script>

