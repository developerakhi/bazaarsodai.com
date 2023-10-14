<?php 
include_once 'functions.php'; 
$subcat = urlencode($_POST["1"]);
?>

		<div class="content-wrap">
			<div class="adcontent-wrap-r">
                                           
			</div>
			
            <div class="main" id="get_product">
                 
		    	<?php
				global $mysqli;
				$stmt_faq = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 7");
				$stmt_faq->execute();    
				$stmt_faq->store_result();
				$stmt_faq->bind_result($id, $title_faq, $full_desc_faq);
				$stmt_faq->fetch();
				$stmt_faq->close();
		    	?>
				<div style="margin-left:20px;">	
				<div class="col-md-12 row">
                <div class="help col-md-4"><a class="help" href="privacy_policy" style="color: #fff;">Privacy Policy</a></div>
                <div class="help col-md-4"><a class="help" href="terms" style="color: #fff;">Terms & Conditions</a></div>
                <div class="help col-md-4"><a class="help" href="return_policy" style="color: #fff;">Return Policy</a></div>
                </div>
					<h2><?php echo $title_faq ?></h2>
					<p><?php echo $full_desc_faq ?></p>
				</div>
			</div>			
        </div>
		
<?php include ("footer.php"); ?>