
<?php require_once("apps/initialize.php"); 
$search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
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
       url: "apps/load_data/loadDcat.php",
       data:{
	  search: '<?php echo $search; ?>',
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
<title>All Category</title>
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <a href="add_new_category" class="btn btn-lg btn-success  btn-raised btn-label" ><i class="fa fa-pencil-square-o"></i>&nbsp; Add Category</a>
        </div>
          <div class="col-md-6">
              <form action="" method="POST">
    			<div class="form-group col-md-12">
    				<label>Search Category</label>
    				<input type="text" name="search" placeholder="<?php if ($search == NULL) {?>Category Name<?php }else{ ?> <?php echo $search; ?> <?php }?>" class="form-control" required>  
    				<button class="srcbtn" type="submit" style="background-color: #36939d; border-color: #36939d; right:2%;"> <i class="fa fa-search"></i> </button>
    			</div>
    		</form>
          </div>
      </div>
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data List</h3>
            </div>
                <div id="loading" ></div>
				<div id="pageData"></div> 
                          </div>
      				  </div>
     			 </div>
           </div>
      </div>
    </section>
  </div>  
          