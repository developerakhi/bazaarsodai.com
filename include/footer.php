<style>
.footer-right .social-section {
        margin-bottom: 20px;
    }
.footer-right .social-section ul {
        list-style: none;
        /*float: right;*/
    }
.footer-right .social-section ul li {
        display: inline;
        float: initial;
    }
.footer-right .social-section ul li a {
        text-decoration: none;
    }
/*.footer-right .social-section ul li a img {*/
/*        width: 40px;*/
/*        height: 40px;*/
/*    }*/
    .social-icon ul li {
        float: left;
        padding-left: 10px;
    }
    
.footer-banner {
    margin-bottom: 0!important;
    /*width: 100%;*/
    color: #606060;
    background: #ddf1e1;
}
.footer-banner {
    /*width: 100%;*/
    float: left;
    padding: 5px 20px;
}
.footer-banner .banner .left-area {
    width: 55%;
    float: left;
}
.footer-banner .banner .left-area ul {
    list-style-type: none;
}
.footer-banner .banner .right-area {
    float: right;
}
.footer-banner .banner .right-area ul {
    list-style-type: none;
}
ol, ul {
    list-style: none;
}
.footer-banner .banner .right-area ul li.text {
    font-size: 15px;
    margin-right: 5px;
}
.footer-banner .banner .right-area ul li {
    display: inline;
}
.footer-banner .banner .right-area ul li.icon img {
    width: 30px;
    height: 30px;
    vertical-align: middle;
}

img {
    border: 0;
}
img.map-img {
    width: 30%;
    margin-top: -30px;
}
    
</style>

    <footer class="footer mobileCenter" style="position: relative;">
    <div class="footer-top-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 footer-widget">
                    <div class="row">
                        <div class="col-md-12">
                            <div class=""><a href="https://bazaarsodai.com/"><img src="images/logo/logo.png" alt="" style="width: 154px;" /></a>
                                <?php
            					global $mysqli;
            					$stmt = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 2");
            					$stmt->execute();   
            					$stmt->store_result();
            					$stmt->bind_result($id, $title_bangladesh2, $full_desc_bangladesh2);
            					$stmt->fetch();
            					$stmt->close();
            					?>
                                <div class="col-md-12"><p><?php echo $full_desc_bangladesh2 ?></p></div>
                                
                            </div>
                        </div>
                    </div>
                    <br>
                            <div class="row">
                                <div class="col-md-4 footer-widget">
                                    <h1 class=''>Customer Service</h1>
                                    <ul class="custo-service">
        								<!--<li><a class="about_us" href="contact" data-toggle="modal" data-target="#about_us_modal">Contact us</a> </li>-->
        								<li><a class="about_us" href="contact">Contact us</a> </li>
        								<li><a class="faq" href="faq">FAQ</a> </li>
        								<li><a class="post" href="post">Article</a> </li>
                                    </ul> 
                                </div>
                                <?php
                					global $mysqli;
                					$stmt = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts WHERE id = 2");
                					$stmt->execute();   
                					$stmt->store_result();
                					$stmt->bind_result($id, $footer_title, $footer_details);
                					$stmt->fetch();
                					$stmt->close();
            					?>
            
                                <div class="col-md-3 footer-widget">
                                    <h1 class="footer-widget-title">About Bazaarsodai</h1>
                                    <ul class="custo-service">
                						<li><a class="privacy_policy" href="privacy_policy">Privacy Policy</a></li>
                						<li><a class="terms_of_use" href="terms">Terms & Conditions</a> </li>
                						<li><a class="return_policy" href="return_policy">Return Policy</a> </li>
                                    </ul> 
                                </div>
                            <div class="col-md-4 footer-widget social-icon">
                                <h1 style="padding-left:10px;">Follow Us</h1>
                                
                                <?php 
                                    global $mysqli;
                            			$stmt = $mysqli->prepare("SELECT id, fc, twitter, google, pin, instagram
                            				FROM sd_social
                            					LIMIT 1");
                            			$stmt->execute();    // Execute the prepared query.
                            			// get variables from result.
                            			$stmt->store_result();
                            			$stmt->bind_result($sc_id, $fc, $twit, $google, $pin, $instagram);
                            			$stmt->fetch();
                            			$stmt->close();
                                
                                ?>
                                
                                
                                <div class="social-section">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/sarkarit">
                                                <img style="width:30px; height:30px;" src="images/social_icon/facebook.png"/>
                                            </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img style="width:30px; height:30px;" src="images/social_icon/youtube1.png"/>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img style="width:30px; height:30px;" src="images/social_icon/twitter.png"/>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img style="width: 30px; height: 30px;" src="images/social_icon/Instagram.webp"/>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                     <div class="col-md-2 footer-widget" style="">
                        <div style="right: -1px; bottom: 70px; position: fixed; z-index: 99999996;">
                            <a target="_black" href="https://api.whatsapp.com/send?phone=8801819449320&fbclid=IwAR0rzZbuQ9NgGFXjuEELBmCvEn7u2QQcQm6LgWcmrGRoDfdB88KYh7LzU-o"><img src="images/WhatsApp.png" style="width:70px; height:70px;"></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</footer>
				
<section class="col-md-12 footer-banner">
    <div class="banner">
        <div class="left-area">
            <ul>
                <li style="padding-top: 5px;">
                    <img src="images/1-hour.webp" style="width:30px; height:30px;">
                    <span data-reactid=".1m9t34t5y0u.b.2.0.0.b.0.0.0.0.0.0.3.1">90 minute delivery</span>
                    <img src="images/cash-on-delivery.webp" style="width:30px; height:30px;">
                    <span data-reactid=".1m9t34t5y0u.b.2.0.0.b.0.0.0.0.0.1.3.1">Cash on delivery</span>
                </li>
            </ul>
        </div>
        <div class="right-area">
            <ul>
                <li class="text">Pay with</li>
                <li class="icon">
                    <a href=""><img src="images/1.webp" data-reactid=".1m9t34t5y0u.b.2.0.0.b.0.0.0.1.0.1.0"></a>
                </li>
                <li class="icon">
                    <a href=""><img src="images/2.webp" data-reactid=".1m9t34t5y0u.b.2.0.0.b.0.0.0.1.0.2.0"></a>
                </li>
                <li class="icon">
                    <a href=""><img src="images/visa1.png" data-reactid=".1m9t34t5y0u.b.2.0.0.b.0.0.0.1.0.3.0"></a>
                </li>
                <li class="icon bkash">
                    <a href=""><img src="images/4.webp" data-reactid=".1m9t34t5y0u.b.2.0.0.b.0.0.0.1.0.4.0"></a>
                </li>
                <li class="icon bkash">
                    <a href=""><img src="images/5.webp" data-reactid=".1m9t34t5y0u.b.2.0.0.b.0.0.0.1.0.5.0"></a>
                </li>
                <li class="icon cod">
                    <a href=""><img src="images/6.webp" data-reactid=".1m9t34t5y0u.b.2.0.0.b.0.0.0.1.0.6.0"></a>
                </li>
            </ul>
        </div>
    </div>
</section>
	
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="100861008675128">
      </div>