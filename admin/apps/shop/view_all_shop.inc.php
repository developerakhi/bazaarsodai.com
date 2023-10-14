<?php require_once("apps/initialize.php"); 
 
$customerID = filter_input(INPUT_POST, 'customerID', FILTER_SANITIZE_STRING);

?>
<script type="text/javascript">
$(document).ready(function(){
changePagination('0');    
});
function changePagination(pageId){
     $(".flash").show();
     $(".flash").fadeIn(400).html
                ('Loading <img src="dist/img/ajax-loader.gif" />');
				
     var dataString = 'pageId='+ pageId;
     $.ajax({
           type: "POST",
           url: "apps/load_data/load_shop.php",
           data:{
 
		  userID: '<?php echo $customerID; ?>',
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
          <!--Datepicker Start -->
  <link rel="stylesheet" href="dist/css/jquery-ui.css">
  <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({
      altField: "#alternate",
      altFormat: "DD, d MM, yy"
    });
  });
  </script>
 <!--Datepicker Close -->


  <title>View All Shop</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <p>
          
          <div class="row">
          
        <div class="col-xs-12">
        
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Search A Shop </h3>
            </div>
            <!-- /.box-header -->
    
                       
      <form action="" enctype="multipart/form-data"  method="POST">
          <div class="box-body">
             
			<div class="col-md-10">  
                <div class="form-group">
 				<label for="exampleInputEmail1">Search a shop</label>
                    <select name="customerID" id="product" class='select2 form-control' style="border: 0px none;">
                     <option value="">Select A Shop</option>
						<?php global $mysqli;
                        $stmt = $mysqli->prepare("SELECT id, shop_name, name, mobile from sd_merchant WHERE activity > 0
                          ORDER BY id ASC");
                        $stmt->execute();
                        $stmt->bind_result($id, $shop_name, $name, $mobile);
                        while ($stmt->fetch()) {
                            echo "<option value='$id'>$shop_name, $country-$city </option>";
                        }
                        $stmt->close();?>
                    </select>                        
                 	</div>
            </div>
                     
           <div class="col-md-2" style="margin-top: 12px;"> 
			   <div class="box-footer button-demo">
            		 <button class="btn btn-success pull-right"><i class="fa fa-search"></i> Search...</button>
           		</div>	 
 			</div>   
          </div>
           <!-- /.box-body -->
        </form>
    </div>
          
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">View All Shop </h3>

              
            </div>
            <!-- /.box-header -->
            
      <?php 		
		$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
		$u_link = urlencode($url_link);
		if ($u_link == "success"){
			echo '
				<div class="alert alert-dismissable alert-danger" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
				<i class="fa fa-close"></i>&nbsp; <strong>Delete Successful!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			</div>';
				}
				else{}
			?>
                  <span id="person">
                <div id="loading" ></div>
				<div id="pageData"></div>
           
          	  <div class="box-footer clearfix">
             <span class="flash"></span>  
             
            </div>
                             <!-- /.box-body -->
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
<script src="dist/js/select2.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="dist/css/select2.css"/>
<link rel="stylesheet" type="text/css" href="dist/css/select2-bootstrap.css"/>
        <script>
      $('.select2').select2({ placeholder : '' });

      $('.select2-remote').select2({ data: [{id:'A', text:'A'}]});

      $('button[data-select2-open]').click(function(){
        $('#' + $(this).data('select2-open')).select2('open');
      });
</script>