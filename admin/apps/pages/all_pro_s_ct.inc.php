<?php require_once("apps/initialize.php"); ?>
<script type="text/javascript">
$(document).ready(function(){
changePagination('0');    
});
function changePagination(pageId){
     $(".flash").show();
     $(".flash").fadeIn(400).html
                ('Loading <img src="assets/img/ajax-loader.gif" />');
				
     var dataString = 'pageId='+ pageId;
     $.ajax({
           type: "POST",
           url: "apps/load_data/loadsub_Dcat.php",
           data:{
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
 <title>View All Product's Sub Categories</title>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <a href="add_new_sub_cat" class="btn btn-lg btn-success  btn-raised btn-label"><i class="fa fa-pencil-square-o"></i> &nbsp;Add New Sub Category<div class="ripple-container"></div></a>
          <p>
            <!-- general form elements -->
          </p>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">View All Product's Sub Categories</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <div class="form-group">
                   <?php 		
								$url_link = isset($_GET['msgID']) ? $_GET['msgID'] : 'nothing_yet';
								$u_link = urlencode($url_link);
								if ($u_link == "delete_success"){
									echo '
									<div class="alert alert-dismissable alert-danger" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
						<i class="fa fa-close"></i>&nbsp; <strong>Delete Successful!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					</div>
			';
								}
								else{}
								?>
                <div id="loading" ></div>
				<div id="pageData"></div>
				<div class="col-sm-6">
                <div class="dataTables_paginate paging_bootstrap" id="editable_paginate">
               	
                 <span class="flash"></span>   
                </div>
             </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 
