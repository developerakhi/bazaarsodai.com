<div id="wowslider-container1">
		<div class="ws_images">
			<ul>
							<?php 
								global $mysqli;
								if ($stmt_pro = $mysqli->prepare("SELECT id, title_one, img1, img2 from sd_slide_mng 
									ORDER BY id DESC limit 10")){
									$stmt_pro->execute(); 
											// Execute the prepared query.
											// get variables from result.
									$stmt_pro->bind_result($s_id, $title_one, $img1, $img2);
									$stmt_pro->store_result();
										}
									while ($stmt_pro->fetch()) {
									echo'
										<li><a href="'.$title_one.'"><img src="images/slide/'.$img2.'" alt="" id="wows1_0"/></a></li>';
										}									
								?>
				
			</ul>
		</div>
		<div class="ws_script" style="position:absolute;left:-99%"></div>
		<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="slider/engine1/wowslider.js"></script>
	<script type="text/javascript" src="slider/engine1/script.js"></script>