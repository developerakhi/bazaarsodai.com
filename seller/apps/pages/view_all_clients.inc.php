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
           url: "apps/load_data/load_clients.php",
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

<div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
								<li><a href="index.php">Home</a></li>
								<li class="active"><a href="#">Clients Management</a></li>
                            </ol>
                            <div class="page-heading">
                               <h1>View All Clients</h1>
                           </div>
                          <div class="container-fluid">
                                
<div data-widget-group="group1">
    <div class="row">
        <div class="col-sm-12">
			<a href="cat_page_view.php?actionID=add_new_client" class="btn btn-lg btn-success  btn-raised btn-label" ><i class="fa fa-pencil-square-o"></i>&nbsp; Add New Client<div class="ripple-container"></div></a>
            <div class="panel panel-sky">
                <div class="panel-heading">
                   Data List
              </div>
              
              <div class="panel-body">
              
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
                        </div>
                    </div>
                </div>
            </div>

		</div> <!-- .container-fluid -->
	</div> <!-- #page-content -->
</div>