
<?php

//fetch_cart.php
include_once 'connection.php';
session_start();

$total_price = 0;
$total_item = 0;

$output = '
<div class="miniCart-body">
	<table class="table">
	
		
';
if(!empty($_SESSION["shopping_cart"]))
{
	foreach($_SESSION["shopping_cart"] as $keys => $values)
	{
	    $values["quantity"];
	    
	   
	    
		$output .= '
		
			<input type="hidden" name="item_id[]" value="'.$values["product_id"].'"> </input>
			<input type="hidden" name="product_name[]" value="'.$values["product_name"].'"> </input>
			<input type="hidden" name="product_unit[]" value="'.$values["product_unit"].'"> </input>
			<input type="hidden" name="product_price[]" value="'.$values["product_price"].'"> </input>
			<input type="hidden" name="product_quantity[]" value="'.$values["product_quantity"].'"> </input>
			<input type="hidden" name="quantity[]" value="'.$values["quantity"].'"> </input>
			<input type="hidden" name="subttl[]" value="'.$values["product_quantity"] * $values["product_price"].'"> </input>
			<input type="hidden" name="product_img[]" value="'.$values["product_img"].'"> </input>
			<input type="hidden" name="unit[]" value="'.$values["unit"].'"> </input>
			
								<li class="">
                                    <div class="">
                                        <div class="miniCart-item-row">
                                            <div class="row">
                                                
                                                <div class="col-3 miniCart-item-image">
                                                    <img src="images/products/'.$values["product_img"].'" alt="" >
                                                </div>
                                                <div class="col-4 miniCart-item-details">
                                                    <div class="w-100">
                                                        <div class="miniCart-item-name">
                                                           '.$values["product_name"].'
                                                        </div>
                                                        <div class="miniCart-item-name">
                                                           '.$values["unit"].' 
                                                        </div>
                                                        
                                                    </div>
                                                </div> 
                                                <div class="col-2 miniCart-item-quantity center align-items-center align-content-center">
                                                    
                                                    <div class="w-100">
                                                        <div class="quantity" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0">
                                                        <div class="caret caret-up" title="Add one more to bag" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.0">
                                                            <svg class="pPlus cursor" id="'.$values["product_id"].'" data-qty="'.$values["product_quantity"].'" style="width:20px; height:20px;" version="1.1" x="0px" y="0px" viewBox="0 20 100 100" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.0.0"><polygon points="46.34,39.003 46.34,39.003 24.846,60.499 29.007,64.657 50.502,43.163 71.015,63.677 75.175,59.519 50.502,34.844   " data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.0.0.0"></polygon></svg>
                                                            <span class="miniCart-item-quantity-number">'.$values["product_quantity"].'</span>
                                                        
                                                        </div>
                                                        <span class="onHoverCursor" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.1"><span data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.1.0"> </span><span data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.1.1"></span><span data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.1.2"> </span></span><div class="caret caret-down" title="Remove one from bag" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.2">
                                                        <svg class="pMinus cursor"  id="'.$values["product_id"].'" data-qty="'.$values["product_quantity"].'" style="width:20px; height:20px;" version="1.1" x="0px" y="0px" viewBox="0 -20 100 100" data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.2.0"><polygon points="53.681,60.497 53.681,60.497 75.175,39.001 71.014,34.843 49.519,56.337 29.006,35.823 24.846,39.982   49.519,64.656 " data-reactid=".susb8vjaou.3.0.3.3.0.4:$express_7635_nonCoupon.0.2.0.0"></polygon></svg></div></div>
                                                        
                                                    </div>
                                                    
                                                </div>
												
                                                <div class="col-2 miniCart-item-price">
                                                    <div class="w-100">
                                                        <p>৳'.number_format($values["product_quantity"] * $values["product_price"]).'</p>
                                                    </div>
                                                </div>
                                                <div class="col-1 miniCart-item-remove">
													<a name="delete" class="rmvc delete" id="'. $values["product_id"].'"><i class="la la-trash red-c"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
		
		';
		$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
		$total_item = $total_item + 1;$cartBTN .= '<a href="full_cart.php" class="btn btn-secondary gb-gradient">Check Out<span class="total_price"> ৳ '.$total_price.' </span></a>';
	
		if($total_price > 400){
                                                    		    
    	    $shipping_charge = 30 ;
    	   
    	}else{
    	    
    	     $shipping_charge = 50;
    	
    	}
	}
	
	
	$cartBTNz .= '<a href="full_cart.php" class="btn btn-secondary gb-gradient">Check Out ৳ '.$total_price.' </a>';	
	
}

else
{
	$output .= '
    <tr>
    	<td colspan="5" align="center">
    		Your Cart is Empty!
    	</td>
    </tr>
    ';
}
$output .= '</table></div>';
$data = array(
	'cart_details'		=>	$output,
	'load_full_cart'	=>	$output,
	'total_price'		=>	'৳'. number_format($total_price),
	'subtotal'	    	=>	 $total_price,
	'total_item'		=>	$total_item,
	'cartBTN'       	=>	$cartBTNz,
	'shipping_charge'	=>	$shipping_charge
);	

echo json_encode($data);

?>

