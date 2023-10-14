<?php require_once("apps/initialize.php"); 
$search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
$payment_method = filter_input(INPUT_POST, 'payment_method', FILTER_SANITIZE_STRING);
$payment_status = filter_input(INPUT_POST, 'payment_status', FILTER_SANITIZE_STRING);
$delivery_status = filter_input(INPUT_POST, 'delivery_status', FILTER_SANITIZE_STRING);
?>
<script type="text/javascript">
$(document).ready(function(){
changePagination('0');    
});
function changePagination(pageId){
     $(".flash").show();
     $(".flash").fadeIn(400).html
        ('<div class="text-center"><img src="dist/img/ajax-loader.gif" /></div>');
     var dataString = 'pageId='+ pageId;
     $.ajax({
           type: "POST",
           url: "apps/load_data/load_holding_order.php",
           data:{
		   search: '<?php echo $search; ?>',
		   payment_method: '<?php echo $payment_method; ?>',
		   payment_status: '<?php echo $payment_status; ?>',
		   delivery_status: '<?php echo $delivery_status; ?>',
           pageId: pageId
        },
           cache: false,
           success: function(result){
           $(".flash").hide();
                 $("#pageData").html(result);
           }
      });

}
</script>


<title>Holding Orders</title>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
          
         <div class="col-md-12">
			<div class="row">
				<form action="" method="POST">
					<div class="form-group col-md-3">
						<label>Search Order</label>
						<input type="text" name="search" placeholder="<?php if ($search == NULL) {?>Order Code/Customer Name/Mobile/Email<?php }else{ ?> <?php echo $search; ?> <?php }?>" class="form-control" required>  
						<button class="srcbtn" type="submit"> <i class="fa fa-search"></i> </button>
					</div>
					<div class="form-group col-md-3">
						<label>Filter by Payment Method</label>
						<select name="payment_method" class="form-control search_bx" onchange='this.form.submit()'>
							<option value="">Select Payment Method</option>
							<option <?php if($payment_method == 9) {?> selected <?php } ?> value="9">bKash</option>
							<option <?php if($payment_method == 10) {?> selected <?php } ?> value="10">Nagad</option>
							<option <?php if($payment_method == 8) {?> selected <?php } ?> value="8">Rocket</option>
							<option <?php if($payment_method == 12) {?> selected <?php } ?> value="12">Cash on delivery</option>
						</select>
					</div>
				
					<div class="form-group col-md-3">
						<label>Filter Payment Status</label>
						<select name="payment_status" class="form-control search_bx" onchange='this.form.submit()'>
							<option value="">Select Payment Status</option>
							<option <?php if($payment_status == 'paid') {?> selected <?php } ?> value="paid">Paid</option>
							<option <?php if($payment_status == 'unpaid') {?> selected <?php } ?> value="unpaid">Unpaid</option>
						</select>
					</div>
					
					<div class="form-group col-md-3">
						<label>Filter Delivery Status</label>
						<select name="delivery_status" class="form-control search_bx" onchange='this.form.submit()'>
							<option value="">Select Delivery Status</option>
							<option value="1" <?php  if ($delivery_status == 1){echo 'selected="selected"';} ?>> Pending </option>
    						<option value="2" <?php  if ($delivery_status == 2){echo 'selected="selected"';} ?>> Shipping </option>
    						<option value="3" <?php  if ($delivery_status == 3){echo 'selected="selected"';} ?>> Holding </option>
    						<option value="4" <?php  if ($delivery_status == 4){echo 'selected="selected"';} ?>> Delivery </option>
    						<option value="5" <?php  if ($delivery_status == 5){echo 'selected="selected"';} ?>> Cancel </option>
						</select>
					</div>
				</form>
			</div>
		</div>
          
        <!-- left column -->
        <div class="col-md-12">
          <p>
          <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"> Holding Orders</h3>
            </div>
                <span id="person">
                <div id="loading" ></div>
				<div id="pageData"></div>
           
                          </div>
                          <!-- /.box -->
      				  </div>
     			 </div>
           </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>  

