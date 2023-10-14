<!-- User Login Modal -->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
<script type="text/JavaScript" src="assets/js/login/sha512.js"></script> 
<script type="text/JavaScript" src="assets/js/login/forms.js"></script>
<script type="text/javascript" src="assets/js/login/wow.min.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>-->
<script>
  new WOW().init();
</script>
<!-- Modal -->
<div class="modal fade" id="userLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="userLoginModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 px-0">
                        <div class="d-flex  h-100 lgpb">
                            <div class="mrlft">
                                <div class="loginModal-title center">
                                    <h1>Log In</h1>
                                    <p style="font-weight:bold;">Log In With Your Mobile Number Here</p>
                                </div>
                                
                                <form action="include/step_to_lgn.php" method="post" class="userLoginFrom">
                                    <fieldset>
                                        <legend>Mobile</legend>
                                        <!--<div class="form-group">-->
                                            <!--<label for="UserMobileNumber">PLEASE ENTER YOUR MOBILE PHONE NUMBER</label>-->
                                            <input type="number" class="form-control" name="mobile" placeholder="+88 Mobile Number" required style="background-color:none; width:60%; height:25px;padding:0px;">
                                            <button type="submit" class="" style="background:none; color: green; border:none; font-size:16px;">Send OTP</button>
                                        <!--</div>-->
    									<!--<div class="form-group">
                                            <label for="UserPassward">Password </label>
                                            <input type="password" class="form-control" name="password" placeholder="********">
                                        </div>-->
    									<!--<button type="submit" class="btn btn-primary gb-gradient">SIGN UP / LOGIN</button>-->
									</fieldset>
                                </form>
						        <div class="orsignInWith" style="margin-top: 57px; margin-bottom: 30px;">
						            <div class="" style="border-top:1px solid #000;"></div>
						            <div class="or-sign-div"><h1 style="font-size:25px; color:#1b1c25;">or sign in with</h1></div>
						        </div>
						        <div class="row" style="margin-bottom: 30px;">
						            <div class="col-md-4">
						                <div class="social-icon">
        						            <a href=""><span class="email"><img src="../images/envelope_PNG18366.png" width="30px" height="30px" /></span></a>
        						            <!--<span class="email"><i class="fa fa-envelope"></i></span>-->
        						        </div>
						            </div>
						            <div class="col-md-4">
						                <div class="social-icon">
        						            <a href=""><span class="facebook"><img src="../images/229098.png" width="30px" height="30px" /></span></a>
        						            <!--<span class="facebook"><i class="fa fa-facebook"></i></span>-->
        						        </div>
						            </div>
						            <div class="col-md-4">
						                <div class="social-icon">
        						            <a href=""><span class="google"><img src="../images/Google__G__Logo.svg.webp" width="30px" height="30px" /></span></a>
        						        </div>
						            </div>
						        </div>
						        <div class="row">
						            <div class="col-md-12" style="margin-left: 118px;">
						                <a href="register" style="color:#058205;">Create Account</a>
						            </div>
						        </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn gb-gradient ModalCloseBtn" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- <div class="modal-footer">
            </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="userLoginModalOtp" tabindex="-1" role="dialog" aria-labelledby="userLoginModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 px-0">
                        <div class="d-flex  h-100 lgpb">
                            <div class="mrlft">
                                <div class="loginModal-title center">
                                    <h1>Enter OTP</h1>
                                </div>
                                <form action="include/step_to_lgn.php" method="post" class="userLoginFrom">
                                    <div class="form-group">
                                        <label for="UserMobileNumber">Enter Send OTP Number</label>
                                        <input type="number" class="form-control" name="mobile" placeholder="+880 1625804712" required>
                                    </div>
									<button type="submit" class="btn btn-primary gb-gradient">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn gb-gradient ModalCloseBtn" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!-- <div class="modal-footer">
            </div> -->
        </div>
    </div>
</div>
<!-- User Login Modal -->



<!--Data Insert without load-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function ($) {
    $("#loginOTP").submit(function (event) {
			event.preventDefault();
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: 'include/step_to_lgn.php',
			type: 'POST',
			data: formData,
			async: true,
			cache: false,
			contentType: false,
			processData: false,
			error: function(){
			alert("error in ajax form submission");
								}
        });
        return false;
    });
});
</script>



        <!-- About US Modal -->
        <!-- Modal -->
        <div class="modal fade" id="about_us_modal" tabindex="-1" role="dialog" aria-labelledby="userLoginModalCenterTitle" aria-hidden="true">
			<?php
				global $mysqli;
				$stmt = $mysqli->prepare("SELECT id, title, full_desc FROM sd_posts
					WHERE id = 11 AND type = 2");
				$stmt->execute();    // Execute the prepared query.
							// get variables from result.
				$stmt->store_result();
				$stmt->bind_result($id, $title_bangladesh, $full_desc_bangladesh);
				$stmt->fetch();
				$stmt->close();
			?>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            
								<div class="col-md-12 col-sm-12 px-0">
								    <div style="padding: 20px 40px;">
										<h4><?php echo $title_bangladesh ?></h4>
										<p align="justify">
											<?php echo $full_desc_bangladesh ?> 
										</p>
                                    </div>
								</div>
                            </div>
                            <button type="button" class="btn gb-gradient ModalCloseBtn" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                    </div> -->
                </div>
            </div>
        </div>
        <!-- User Login Modal -->










<!-- Notice board Modal -->
        <!-- Modal -->
        <div class="modal fade" id="about_us_modal2" tabindex="-1" role="dialog" aria-labelledby="userLoginModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
					
                        <div class="row">
                       
                            <div class="col-md-12 col-sm-12">
								    <div style="padding:15px 25px 15px 15px;;">
										<h4 class="text-center" style="color:red; border-bottom:1px solid blue;">
									ঈদের ছুটির নোটিশ
										    </h4>
										<p align="justify" style="border-bottom:1px solid blue;">প্রিয় গ্রাহক, পবিত্র ঈদুল আজহার ছুটি উপলক্ষ্যে <span style='color:blue'>৩১ জুলাই শুক্রবার দুপুর ১২.০০ টা </span> থেকে <span style='color:blue'>২ আগস্ট রবিবার  বিকাল ৫টা পর্যন্ত</span> ঘরেবাজারের সকল সেবা ও বিভাগ বন্ধ থাকার কারণে নতুন অর্ডার গ্রহণও বন্ধ থাকবে।  তাই<span style='color:blue'> ২ আগস্ট রবিবার  বিকাল ৫টা </span> থেকে নতুন অর্ডার গ্রহণ করা হবে।  আপনাদের সাময়িক অসুবিধার জন্য আমরা আন্তরিকভাবে দু:খিত। সবাইকে ঈদ মোবারক! </p>
										
										                            <button type="button" class="btn gb-gradient" data-dismiss="modal">
                                <span aria-hidden="true">OK</span>
                            </button>
                                    </div>
                             </div>
							 
                        </div>

                    </div>
                    </div>
                    <!-- <div class="modal-footer">
                    </div> -->
                </div>
            </div>
        </div>
        <!-- User Login Modal -->








<!-- payment optin off Modal -->
        <!-- Modal -->
        <div class="modal fade" id="about_us_modal3" tabindex="-1" role="dialog" aria-labelledby="userLoginModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
					
                        <div class="row">
                       
                            <div class="col-md-12 col-sm-12">
								    <div style="padding:15px 25px 15px 15px;;">
										<h4 class="text-center" style="color:red; border-bottom:1px solid blue;">প্রিয় গ্রাহক</h4>
										<p align="justify" style="border-bottom:1px solid blue;">কারিগরি উন্নয়ন কাজের জন্য অনলাইন পেমেন্ট সাময়িক বন্ধ আছে। অনুগ্রহ করে Cash on delivery নির্বাচন করে অর্ডারটি গ্রহণ করার সময় মূল্য পরিশোধ করুন। আপনাদের সাময়িক অসুবিধার জন্য আমরা আন্তরিকভাবে দু:খিত</p>
										                            <button type="button" class="btn gb-gradient" data-dismiss="modal">
                                <span aria-hidden="true">OK</span>
                            </button>
                                    </div>
                             </div>
							 
                        </div>
                        <!--
                            <button type="button" class="btn gb-gradient ModalCloseBtn" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        -->
                    </div>
                    </div>
                    <!-- <div class="modal-footer">
                    </div> -->
                </div>
            </div>
        </div>
        <!-- User Login Modal -->






<!-- payment optin off Modal -->
        <!-- Modal -->
        <div class="modal fade" id="modal_cancel_promo" tabindex="-1" role="dialog" aria-labelledby="userLoginModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
					
                        <div class="row">
                       
                            <div class="col-md-12 col-sm-12">
								    <div style="padding:15px 25px 15px 15px;;">
										<h4 class="text-center" style="color:red; border-bottom:1px solid blue;">প্রিয় গ্রাহক</h4>
    <p align="justify" style="border-bottom:1px solid blue;">প্রোমো কোড কিংবা অনলাইন পেমেন্ট ডিসকাউন্ট দুটি সুবিধার যেকোনো একটি গ্রহণ করা যাবে। আপনি প্রোমো সুবিধা গ্রহণ করলে ডিজিটাল পেমেন্ট ডিসকাউন্ট অফার (ভিসা কার্ড, বিকাশ, নগদ ইত্যাদি) যদি থাকে তবে সেটি এই অর্ডারে প্রযোজ্য হবে না। ধন্যবাদ। </p>
										 
                                <button class="btn btn-primary" data-dismiss="modal">OK</button>
                            <!--
                                <button id="cancel-promo" class="btn btn-danger" >Cancel Promo</button>
                            </button>
                            -->
                                    </div>
                             </div>
							 
                        </div>
                        <!--
                            <button type="button" class="btn gb-gradient ModalCloseBtn" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        -->
                    </div>
                    </div>
                    <!-- <div class="modal-footer">
                    </div> -->
                </div>
            </div>
        </div>
        <!-- User Login Modal -->






        <!-- Single Product View Modal -->
        <!-- Modal -->
        <div class="modal fade" id="single-product-display-modal" tabindex="-1" role="dialog" aria-labelledby="userLoginModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 product-image-container">
                                <!-- single product image -->
                                <!--Carousel Wrapper-->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails protap" data-ride="carousel" data-touch="false" data-wrap="false" data-interval="false">
                           
                                </div>
                                <!--/.Carousel Wrapper-->
                            <!-- single product image -->
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="d-flex align-items-center align-content-center h-100">
                                    <div class="mx-auto">
                                        <div class="row">
                                            <div class="col-md-12 mobileCenter">
                                                <h1 id="modal_single_product_title" class="single-product-title mb-1 m-t-48 ">Bushra Golden Delight Extra Long Grain Basmati Rice (India)</h1>
                                            </div> 
                                            <div class="col-4 m-b-10">
                                                <p class="bg-orange mb-0 single-product-desc">52 gm</p>
                                            </div>
                                            <div class="col-4"> 
												<h5 class="sidebar-blue align-content-center">৳.&nbsp;<span class='single-product-card-price_modal mb-0'>1500</span>&nbsp;&nbsp;<span><del style="color:red;" class='single-product-cart-reduced-price2'>5844<del></span></h5>
                                            </div>
                                            <div class="col-4"> 
                                                <span class="reduced-price-badge badge-red-w">10% OFF</span>
                                            </div> 
											
											

																						
                                            <div class="col-sm-7  mt-3">
                                                <div id="single_product_qty_buttons_holder" class="modal_product_quantity_controler w-100 single-product-counter mobileCenter">
                                                    <span>QNT:</span>
                                                    <i class="la la-minus-circle red-c"></i>
                                                    <input class="single-item-quantity-number" type="text" placeholder="0">
                                                    <i class="la la-plus-circle red-c"></i>
                                                </div>
                                            </div>
                                            <div id="buynowbutton_holder" class="col-sm-5 mt-3">
                                                <a href="#" class="gb-gradient single-product-card-btn">BUY NOW</a>
                                            </div>
											
											
                                            <div class="col-md-12  mt-4">
                                                <div class="single-product-desc-content">
												<p>This is a dummy text</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="modal-payment sidebar-blue mt-4 px-2 py-2 mobileCenter">
                                                    <ul>
                                                        <li class="footer-widget-title">Pay Through : </li>
                                                        <li><img src="newimage/paythrough.jpg" style="width:200px;"> </li>
                                                    </ul> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn gb-gradient ModalCloseBtn" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row m-0">
                            <div class="col-md-9 footer-widget bg-grey">
                                    <div class="pull-left row mobileCenter">
                                        <img src="images/gb-logo-sq.jpg" alt="" class="img-fluid modal-footer-gb-logo col-md-4 pull-left">
                                        <p class="col-md-8 m-t-10">Ghorebazar.com is an online Supershop. It gives hand-picked and best quality items to the customers. At present it has delivery service only in Dhaka City. If you have any question please contact us.<br>
                                        <strong class="red-w"><i class="la la-phone"></i>   09611 84 84 84</strong>
                                        </p>
                                    </div>
                            </div>
                            <div class="col-md-3 footer-widget bg-grey">
                                <div class="extra-links m-t-10 mobileCenter"> 
                                    <a  class='return_policy' href="#">Return/Cancellation Policy</a>
									<!--
                                    <a href="#">Cancellation Policy</a>
                                    <a href="#">Delivery Information</a>
-->									
                                    <a  class='faq' href="#">FAQ</a> 
                                    <ul class="w-100"> 
                                        <li><a href="https://www.facebook.com/ghorebazar/" target="_blank"><i class="fa fa-facebook" style="color:blue;"></i></a> </li>
                                        <li><a href="https://twitter.com/ghorebazar" target="_blank"><i class="fa fa-twitter" style="color:cyan"></i></a> </li>
                                        <li><a href="https://www.youtube.com/channel/UCQNnRfPsEjQziubh1TF_7hA" target="_blank"><i class="fa fa-youtube" style="color:red"></i></a> </li> 
                                        <li><a href="https://www.instagram.com/ghorebazar/?hl=en" target="_blank"><i class="fa fa-instagram" style="color:maroon"></i></a> </li>
										<!--
                                        <li><a href="#"><i class="fa fa-envelope" style="color:orange"></i></a> </li>
										-->
										
										
										
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 m-0">
                            <div class="">
                                <a href="#"><img class="w-100" src="https://res.cloudinary.com/ghorebazar/image/upload/q_30/v1585852196/dhfcpcpkytxybdiy4sdm.webp?v1.4" style="border-top:1px solid #ebedef ;" alt="popup footer"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product View Modal -->
        
		
		
		
		
		
	<!-- Notice board Modal -->
        <!-- Modal -->
        <div class="modal fade" id="about_us_modal_privacy_policy" tabindex="-1" role="dialog" aria-labelledby="userLoginModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
					
 <h1>Privacy Policies</h1>
<h5>What Personal Information About Customers Does Ghorebazar.com Gather?</h5>
<p>The information we learn from customers helps us personalize and continually improve your Ghorebazar.com experience. Here are the types of information we gather.</p>

<p>Information You Give Us: We receive and store any information you enter on our Web site or give us in any other way. You can choose not to provide certain information, but then you might not be able to take advantage of many of our features. We use the information that you provide for such purposes as responding to your requests, customizing future shopping for you, improving our stores, and communicating with you.
Automatic Information: We receive and store certain types of information whenever you interact with us. For example, like many Web sites, we use cookies, and we obtain certain types of information when your Web browser accesses Ghorebazar.com or advertisements and other content served by or on behalf of Ghorebazar.com on other Web sites. 
Mobile: When you download or use apps created by Ghorebazar.com, we may receive information about your location and your mobile device, including a unique identifier for your device. We may use this information to provide you with location-based services, such as advertising, search results, and other personalized content. Most mobile devices allow you to turn off location services. 
E-mail Communications: To help us make e-mails more useful and interesting, we often receive a confirmation when you open e-mail from Ghorebazar.com if your computer supports such capabilities. We also compare our customer list to lists received from other companies, in an effort to avoid sending unnecessary messages to our customers. If you do not want to receive e-mail or other mail from us, please adjust your Customer Communication Preferences.
Information from Other Sources: We might receive information about you from other sources and add it to our account information.</p>

<h5>What about Cookies? </h5>
<p>Cookies are unique identifiers that we transfer to your device to enable our systems to recognize your device and to provide different amazing features, Recommended for You, personalized advertisements on other Web sites (e.g., Ghorebazar.com Associates with content served by Ghorebazar.com and Web sites using Checkout by Ghorebazar.com payment service), and storage of items in your Shopping Cart between visits.
The Help feature on most browsers will tell you how to prevent your browser from accepting new cookies, how to have the browser notify you when you receive a new cookie, or how to disable cookies altogether. Additionally, you can disable or delete similar data used by browser add-ons, such as Flash cookies, by changing the add-on's settings or visiting the Web site of its manufacturer. Because cookies allow you to take advantage of some of Ghorebazar.com's essential features, we recommend that you leave them turned on. For instance, if you block or otherwise reject our cookies, you will not be able to add items to your Shopping Cart, proceed to Checkout, or use any Ghorebazar.com products and services that require you to Sign in.</p>
<h5>Does Ghorebazar.com Share the Information It Receives?</h5>
<p>Information about our customers is an important part of our business, and we are not in the business of selling it to others. We share customer information only as described below and with subsidiaries Ghorebazar.com controls that either are subject to this Privacy Notice or follow practices at least as protective as those described in this Privacy Notice.
Promotional Offers: Sometimes we send offers to selected groups of Ghorebazar.com customers on behalf of other businesses. When we do this, we do not give that business your name and address. If you do not want to receive such offers, please adjust your Customer Communication Preferences.
Business Transfers: As we continue to develop our business, we might sell or buy stores, subsidiaries, or business units. In such transactions, customer information generally is one of the transferred business assets but remains subject to the promises made in any pre-existing Privacy Notice (unless, of course, the customer consents otherwise). Also, in the unlikely event that Ghorebazar.com or substantially all of its assets are acquired, customer information will of course be one of the transferred assets.
Protection of Ghorebazar.com and Others: We release account and other personal information when we believe release is appropriate to comply with the law; enforce or apply our Conditions of Use and other agreements; or protect the rights, property, or safety of Ghorebazar.com, our users, or others. This includes exchanging information with other companies and organizations for fraud protection and credit risk reduction. Obviously, however, this does not include selling, renting, sharing, or otherwise disclosing personally identifiable information from customers for commercial purposes in violation of the commitments set forth in this Privacy Notice.
With Your Consent: Other than as set out above, you will receive notice when information about you might go to third parties, and you will have an opportunity to choose not to share the information.</p>
<h5>How Secure Is Information About Me?</h5>
<p>We work to protect the security of your information during transmission by using Secure Sockets Layer (SSL) software, which encrypts information you input.
We reveal only the last four digits of your credit card numbers when confirming an order. Of course, we transmit the entire credit card number to the appropriate credit card company during order processing.
It is important for you to protect against unauthorized access to your password and to your computer. Be sure to sign off when finished using a shared computer. </p>
<h5>What about Third-Party Advertisers and Links to Other Websites?</h5>
<p>Our site includes third-party advertising and links to other Web sites. For more information about third-party advertising at Ghorebazar.com, including personalized or interest-based ads, please read our Interest-Based Ads policy.</p>

<h5>Which Information Can I Access?</h5>
<p>Ghorebazar.com gives you access to a broad range of information about your account and your interactions with Ghorebazar.com for the limited purpose of viewing and, in certain cases, updating that information. 
<h5>What Choices Do I Have?</h5>
<p>As discussed above, you can always choose not to provide information, even though it might be needed to make a purchase or to take advantage of such Ghorebazar.com features as Your Profile, Wish Lists, Customer Reviews, and Ghorebazar.com Prime.
You can add or update certain information on pages such as those referenced in the Which Information Can I Access? Section. When you update information, we usually keep a copy of the prior version for our records.
If you do not want to receive e-mail or other mail from us, please adjust your Customer Communication Preferences. (If you do not want to receive Conditions of Use and other legal notices from us, such as this Privacy Notice, those notices will still govern your use of Ghorebazar.com, and it is your responsibility to review them for changes.)
If you do not want us to use personal information that we gather to allow third parties to personalize advertisements we display to you, please adjust your Advertising Preferences.
The Help feature on most browsers will tell you how to prevent your browser from accepting new cookies, how to have the browser notify you when you receive a new cookie, or how to disable cookies altogether. Additionally, you can disable or delete similar data used by browser add-ons, such as Flash cookies, by changing the add-on's settings or visiting the Web site of its manufacturer. Because cookies allow you to take advantage of some of Ghorebazar.com's essential features, we recommend that you leave them turned on. For instance, if you block or otherwise reject our cookies, you will not be able to add items to your Shopping Cart, proceed to Checkout, or use any Ghorebazar.com products and services that require you to Sign in.</p>
<h5>Are Children Allowed to Use Ghorebazar.com?</h5>
<p>Ghorebazar.com does not sell products for purchase by children. We sell children's products for purchase by adults. If you are under 18, you may use Ghorebazar.com only with the involvement of a parent or guardian. We do not knowingly collect personal information from children under the age of 13 without the consent of the child's parent or guardian. 
                                    </div>
                             </div>
							 
                        </div>
                        <!--
                            <button type="button" class="btn gb-gradient ModalCloseBtn" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        -->
                    </div>
                    </div>
                    <!-- <div class="modal-footer">
                    </div> -->
                </div>
            </div>
        </div>
        <!-- User Login Modal -->	
		
		
	