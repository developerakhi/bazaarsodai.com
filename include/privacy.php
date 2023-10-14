<?php 
include_once 'functions.php'; 
$subcat = urlencode($_POST["1"]);
?>

		<div class="content-wrap min-vh-100">
			<div class="adcontent-wrap-r showOnPhone" "=">
                <section class="is_unnecessary bg-orange" style="padding: 35px 0px 0px 0px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 center">
                                <div class="input-group home-main-search-panel-form align-content-center" style="margin-top:25px;">
                                    <input id="search-m-m" type="text" class="form-control" placeholder="Search product">
                                    <span class="input-group-btn">
                                        <button id="search_btn-m-m" class="btn btn-secondary gb-gradient" type="button"><i class="la la-search"></i></button>
                                    </span>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
			</div>
            <div class="main" id="get_product">
    			<?php
    			global $mysqli;
    			$stmt_faq = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 10");
    			$stmt_faq->execute();
    			$stmt_faq->store_result();
    			$stmt_faq->bind_result($id, $title_faq, $full_desc_faq);
    			$stmt_faq->fetch();
    			$stmt_faq->close();
    			?>
				<div style="margin-left:20px;">	
					<h2><?php echo $title_faq ?></h2>
					<p><?php echo $full_desc_faq ?></p>
				</div>
			</div>			
        </div>
        
		<?php include ("footer.php"); ?>