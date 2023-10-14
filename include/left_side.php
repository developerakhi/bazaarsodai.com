<?php 
include_once 'functions.php';
include_once 'msp_lp.php';

global $mysqli;
$stmt = $mysqli->prepare("SELECT top_no, hotline2, hotline3, bkash FROM sd_page_setup");
$stmt->execute();    
$stmt->store_result();
$stmt->bind_result($top_no, $hotline2, $hotline3, $bkash);
$stmt->fetch();
$stmt->close();

?>
<style type="text/css">
    
    .store-menu-block{
        display: flex;
        text-align: center;
    }
    
    .store-item.selected{
        background-color: #ff686e;
        color: #fff;
        border-radius: 5px;
    }
   
    .store-menu-block .item  {
     border: 1px solid #ff686e;
     border-radius: 5px;
     padding: 0px 5px;
     font-size: 12px;
     text-align: center;
     cursor: pointer;
   
     
    }
    
    /*.store-menu-block .item:hover{*/
    /*    background-color: #ff686e;*/
    /*    color: white;*/
    /*}*/
    .help {
        text-align: center;
        background: #f7941d;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        padding: 8px;
        /*margin-top: 20px;*/
        padding-left: 0;
    }
    
</style>
	
		<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano sidebar_open_close">
                <div class="nano-content">
                    <?php 
                           $url = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
                      
                        ?>
                    <ul class="full-navigation">
                        <div class="store-menu" id="sidemenu-hide-to-small">
                                <?php 
                                   $url = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
                                
                                ?>
                            <div  class="store-menu-block" style="line-height:14px;">
                                <li class="menu-item">
                                    <a href="grocery">
                                        <div class="item al <?php echo ($url == 'grocery' || $url =='' || $url == !'pharmacy') ? 'store-item selected' : ''; ?>">
                                            <svg style="display:inline-block;vertical-align:middle;" width="20px" height="20px" viewBox="0 0 23 23" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0"><g data-name="Group 42518" transform="translate(-200 -125)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0"><circle data-name="Ellipse 868" cx="11.5" cy="11.5" r="11.5" transform="translate(200 125)" fill="#4fb65c" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.0"></circle><path data-name="Path 68355" d="M222.951 137.505v-.481h-1.736l-2.35.481-2.588.681-2.561.528-3.512.713-3.618.607-2.588.343 3.135 6.773a12.162 12.162 0 005.339.814 13.2 13.2 0 003.2-.675 9.319 9.319 0 002.355-1.317 11.624 11.624 0 004.924-8.467z" fill="#206b1f" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.1"></path><path data-name="Path 68334" d="M216.308 138.081l-1.353.263.104.535a2.85 2.85 0 01.045.365l1.375-.267z" fill="#fef0ae" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.2"></path><path data-name="Path 68335" d="M221.433 138.406l-4.733.92a.182.182 0 01-.213-.144l-.223-1.145a.182.182 0 01.144-.214l4.733-.92a.547.547 0 01.641.433l.083.429a.547.547 0 01-.432.641z" fill="#fe9901" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.3"></path><path data-name="Path 68336" d="M217.91 138.34a.182.182 0 01-.214-.144l-.117-.603-1.168.227a.182.182 0 00-.144.213l.222 1.146a.182.182 0 00.214.144l4.732-.92a.547.547 0 00.433-.642l-.036-.183z" fill="#fb8801" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.4"></path><path data-name="Path 68337" d="M212.834 142.231l-5.435 1.057a2.864 2.864 0 01-3.357-2.264l-.129-.66a.109.109 0 01.087-.128l10.84-2.107a.109.109 0 01.129.086l.128.66a2.864 2.864 0 01-2.263 3.356z" fill="#fb2b3a" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.5"></path><path data-name="Path 68338" d="M206.17 140.61l-.127-.66a.109.109 0 01.086-.128l-2.13.414a.109.109 0 00-.086.128l.129.66a2.864 2.864 0 003.358 2.265l2.129-.414a2.864 2.864 0 01-3.358-2.265z" fill="#e41f2d" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.6"></path><path data-name="Path 68339" d="M207.933 131.838a1.606 1.606 0 00-.397-.24.037.037 0 01-.003-.067 1.379 1.379 0 00.574-.55.038.038 0 00-.01-.048 1.374 1.374 0 00-.71-.292.038.038 0 01-.028-.058 1.8 1.8 0 00.228-1.45.038.038 0 00-.04-.027 1.8 1.8 0 00-1.26.754.038.038 0 01-.063-.004 1.375 1.375 0 00-.538-.55.038.038 0 00-.047.01 1.38 1.38 0 00-.295.739.037.037 0 01-.064.022 1.6 1.6 0 00-.371-.278.038.038 0 00-.047.01 1.813 1.813 0 00-.348 1.493l.454 1.621a.038.038 0 00.04.028l1.673-.187a1.813 1.813 0 001.255-.881.038.038 0 00-.01-.047z" fill="#248e6d" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.7"></path><g data-name="Group 42500" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.8"><path data-name="Path 68340" d="M205.766 131.177a1.976 1.976 0 01.314-1.534 1.323 1.323 0 00-.394-.331.038.038 0 00-.047.009 1.379 1.379 0 00-.295.739.037.037 0 01-.064.022 1.605 1.605 0 00-.371-.278.038.038 0 00-.047.01 1.813 1.813 0 00-.348 1.493l.454 1.621a.038.038 0 00.04.028l1.22-.135z" fill="#2e9876" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.8.0"></path></g><path data-name="Path 68341" d="M206.455 130.765a.265.265 0 00-.369.071l-1.206 1.79.085.304a.038.038 0 00.041.027l.314-.034 1.207-1.79a.265.265 0 00-.072-.368z" fill="#0ed290" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.9"></path><path data-name="Path 68342" d="M210.16 132.418l-.53.786a.109.109 0 01-.153.03l-.574-.388a.109.109 0 01-.03-.152l.53-.786a.109.109 0 01.152-.03l.575.388a.109.109 0 01.03.152z" fill="#a2e62e" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.a"></path><path data-name="Path 68343" d="M209.506 132.729a.109.109 0 01-.03-.153l.349-.515-.27-.182a.109.109 0 00-.152.03l-.53.785a.109.109 0 00.03.152l.574.387a.109.109 0 00.152-.03l.182-.269z" fill="#97d729" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.b"></path><path data-name="Path 68344" d="M210.326 129.756l-.785-.53a.109.109 0 01-.03-.152l.388-.574a.109.109 0 01.152-.03l.785.53a.109.109 0 01.03.152l-.388.575a.109.109 0 01-.152.03z" fill="#a2e62e" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.c"></path><path data-name="Path 68345" d="M210.14 129.11a.109.109 0 01-.03-.152l.207-.307-.266-.18a.109.109 0 00-.152.03l-.388.574a.109.109 0 00.03.153l.785.53a.109.109 0 00.153-.03l.18-.266z" fill="#97d729" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.d"></path><path data-name="Path 68346" d="M212.935 135.97l-.785-.53a.109.109 0 01-.03-.151l.388-.575a.109.109 0 01.153-.03l.785.53a.109.109 0 01.03.152l-.388.574a.11.11 0 01-.153.03z" fill="#a2e62e" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.e"></path><path data-name="Path 68347" d="M212.423 135.625l.203-.301a.109.109 0 01.152-.03l.512.346.185-.273a.109.109 0 00-.03-.152l-.785-.53a.109.109 0 00-.152.03l-.388.575a.109.109 0 00.03.152z" fill="#97d729" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.f"></path><path data-name="Path 68348" d="M204.384 137.88a3.207 3.207 0 004.329-.702.187.187 0 00-.043-.27l-4.992-3.374a.187.187 0 00-.266.062 3.207 3.207 0 00.972 4.284z" fill="#fee97d" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.g"></path><path data-name="Path 68349" d="M204.99 136.98a2.123 2.123 0 002.945-.572l-3.518-2.372a2.123 2.123 0 00.573 2.944z" fill="#fef0ae" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.h"></path><path data-name="Path 68350" d="M205.595 136.084a1.04 1.04 0 001.442-.28l-1.723-1.162a1.04 1.04 0 00.28 1.442z" fill="#fee97d" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.i"></path><path data-name="Path 68351" d="M213.714 132.247a.112.112 0 00.162-.04 1.175 1.175 0 00-1.937-1.307.112.112 0 00.023.164z" fill="#fb2b3a" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.j"></path><path data-name="Path 68352" d="M213.913 131.232l.028.02a1.175 1.175 0 00-2.004-.352.112.112 0 00.023.165l.462.311a1.175 1.175 0 011.49-.144z" fill="#e41f2d" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.k"></path><path data-name="Path 68353" d="M208.154 135.187a1.474 1.474 0 00.182 2.055 1.071 1.071 0 00.292.138.569.569 0 00.632-.231l.266-.394.586.395a.111.111 0 00.154-.03l.475-.703a.111.111 0 00-.03-.154l-.586-.396.265-.394a.573.573 0 00-.031-.686 1.071 1.071 0 00-.227-.206 1.474 1.474 0 00-1.978.606z" fill="#f6a96c" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.l"></path><path data-name="Path 68354" d="M209.237 137.067a1.474 1.474 0 01-.182-2.055 1.872 1.872 0 01.643-.596 1.622 1.622 0 00-1.543.77 1.474 1.474 0 00.182 2.056 1.069 1.069 0 00.292.137.569.569 0 00.632-.23l.033-.049a.695.695 0 01-.057-.033z" fill="#ea9b58" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-2.0.0.m"></path></g></svg>
                                            Grocery
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="recipes">
                                        <div class="<?php echo ($url == 'recipes') ? 'store-item selected' : ''; ?> item al">
                                            <svg style="display:inline-block;vertical-align:middle;" width="20px" height="20px" viewBox="0 0 82.068 82" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0"><defs data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.0"><linearGradient id="linear-gradient" x1="0.732" x2="0.297" y1="0.882" y2="0.298" gradientUnits="objectBoundingBox" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.0.0"><stop offset="0" stop-color="#ff9c69" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.0.0.0"></stop><stop offset="0.995" stop-color="#ffccac" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.0.0.1"></stop></linearGradient></defs><g data-name="Group 42411" transform="translate(-34 -144)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.1"><circle cx="38.582" cy="38.582" r="38.582" fill="#ffed7a" data-name="Ellipse 855" transform="translate(34 144)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.1.0"></circle><path fill="#ebd023" d="M0 0h46.153v34.3a41.864 41.864 0 01-11.087 5.98 40.532 40.532 0 01-12.8 2.1 35.444 35.444 0 01-14.381-3A104.423 104.423 0 01.079 35.6z" data-name="Path 68291" transform="rotate(-42 280.061 27.68)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.1.1"></path><g transform="translate(51.648 151.599)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.1.2"><path fill="url(#linear-gradient)" d="M129.56 51.76c-4.83-17.288-13.631-21.689-17.454-22.8a6.646 6.646 0 00-3.713 0c-3.824 1.112-12.624 5.514-17.454 22.8 0 0-8.094 26.171 11.848 32.823a23.622 23.622 0 0014.926 0c19.941-6.652 11.847-32.823 11.847-32.823z" data-name="Path 68284" transform="translate(-89.314 -28.694)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-0.0.1.2.0"></path></g></g></svg>
                                            Recipes
                                        </div>
                                    </a>
                                </li>
                                <!--<li class="menu-item ">-->
                                <!--    <a href="grocery" style="10px;">-->
                                <!--        <div class="item al <?php echo ($url == 'grocery') ? 'store-item selected' : ''; ?>">-->
                                <!--            <svg style="display:inline-block;vertical-align:middle;" width="20px" height="20px" viewBox="0 0 73.457 76" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0"><g data-name="Group 42412" transform="translate(24405 1908)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0"><g transform="translate(-24405.051 -1907.627)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0"><ellipse cx="36.5" cy="38" fill="#6d76e7" data-name="Ellipse 856" rx="36.5" ry="38" transform="translate(.051 -.373)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.0"></ellipse><path fill="#1c2ede" d="M145.173 108.444a37.005 37.005 0 00-.426-5.613l-15.336-15.354a12.891 12.891 0 00-18.177 0l-23.757 23.758a12.89 12.89 0 000 18.176l15.347 15.334a36.757 36.757 0 0042.349-36.3z" data-name="Path 68292" transform="translate(-71.663 -70.664)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.1"></path><path fill="#fff" d="M87.477 129.411a12.891 12.891 0 010-18.177l23.758-23.758a12.891 12.891 0 0118.177 0 12.89 12.89 0 010 18.176l-23.758 23.758a12.89 12.89 0 01-18.177.001z" data-name="Path 68293" transform="translate(-71.663 -70.664)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.2"></path><path fill="#9cfdff" d="M151.789 128.031l-23.757 23.757a12.891 12.891 0 01-18.177 0l41.935-41.935a12.89 12.89 0 010 18.177z" data-name="Path 68294" transform="translate(-94.042 -93.042)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.3"></path><path fill="#ffaa20" d="M117.533 210.834l-11.879 11.879a12.852 12.852 0 11-18.176-18.176l11.879-11.879z" data-name="Path 68295" transform="translate(-71.664 -163.966)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.4"></path><path fill="#e67500" d="M139.91 265.088l-11.879 11.879a12.891 12.891 0 01-18.177 0L130.823 256z" data-name="Path 68296" transform="translate(-94.042 -218.22)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.5"></path></g></g></svg>-->
                                <!--            Shop-->
                                <!--        </div>-->
                                <!--    </a>-->
                                <!--</li>-->
                                
                                <li class="menu-item">
                                    <a href="pharmacy">
                                        <div class="item al <?php echo ($url == 'pharmacy') ? 'store-item selected' : ''; ?>">
                                            <svg style="display:inline-block;vertical-align:middle;" width="20px" height="20px" viewBox="0 0 73.457 76" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0"><g data-name="Group 42412" transform="translate(24405 1908)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0"><g transform="translate(-24405.051 -1907.627)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0"><ellipse cx="36.5" cy="38" fill="#6d76e7" data-name="Ellipse 856" rx="36.5" ry="38" transform="translate(.051 -.373)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.0"></ellipse><path fill="#1c2ede" d="M145.173 108.444a37.005 37.005 0 00-.426-5.613l-15.336-15.354a12.891 12.891 0 00-18.177 0l-23.757 23.758a12.89 12.89 0 000 18.176l15.347 15.334a36.757 36.757 0 0042.349-36.3z" data-name="Path 68292" transform="translate(-71.663 -70.664)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.1"></path><path fill="#fff" d="M87.477 129.411a12.891 12.891 0 010-18.177l23.758-23.758a12.891 12.891 0 0118.177 0 12.89 12.89 0 010 18.176l-23.758 23.758a12.89 12.89 0 01-18.177.001z" data-name="Path 68293" transform="translate(-71.663 -70.664)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.2"></path><path fill="#9cfdff" d="M151.789 128.031l-23.757 23.757a12.891 12.891 0 01-18.177 0l41.935-41.935a12.89 12.89 0 010 18.177z" data-name="Path 68294" transform="translate(-94.042 -93.042)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.3"></path><path fill="#ffaa20" d="M117.533 210.834l-11.879 11.879a12.852 12.852 0 11-18.176-18.176l11.879-11.879z" data-name="Path 68295" transform="translate(-71.664 -163.966)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.4"></path><path fill="#e67500" d="M139.91 265.088l-11.879 11.879a12.891 12.891 0 01-18.177 0L130.823 256z" data-name="Path 68296" transform="translate(-94.042 -218.22)" data-reactid=".2360sjbltfm.4.0.1.0.0.2.0.0.0.$store-item-1.0.0.0.5"></path></g></g></svg>
                                            Pharmacy
                                        </div>
                                    </a>
                                </li>
                            </div>
                        </div>
                        <li class="sidebar-blue tmpl"> <a href="offer"><img src="images/Special-offer-PNG-Free-Download.png" width="20" height="20">Offer</a> </li>
                        <li class="sidebar-blue tmpl"> <a href="discount"><img src="images/discount.png" width="20" height="20">Discount</a> </li>
                        <li class="sidebar-blue tmpl <?php echo ($url == 'flash_deals' || $url =='') ? 'sidebar-blue tmpl' : ''; ?>">
                            <a href="flash_deals"><i class="fa fa-gift" aria-hidden="true" style="margin-left:6px;"></i>Daily Deals</a>
                        </li>
                        <li class="sidebar-blue tmpl">  
                            <a href="freedelivery"><i class="fa fa-bolt fa-fw fa-2x" aria-hidden="true"></i>Free Delivery</a>
                        </li>
                        <li class="sidebar-blue tmpl"> <a href="popular"><img src="images/776579.png" width="20" height="20">Popular</a><hr style="margin:0; padding:0;"> </li>
						<?php
							global $mysqli;
							$stmt = $mysqli->prepare("SELECT menu_id, menu_name, img1 from menu 
								WHERE type = 1 AND activity = 1 AND menu_id != 68 AND menu_id != 69 AND menu_id != 70 AND menu_id != 67 AND menu_id != 71 AND menu_id != 72 AND menu_id != 90 ORDER BY menu_name ASC LIMIT 20");
							$stmt->execute();
							$stmt->store_result();
							$stmt->bind_result($m_id, $m_name, $icon);
										
							while ($stmt->fetch()) {
								global $mysqli;
								$stmt_sub = $mysqli->prepare("SELECT sub_menu_id, sub_menu, menu_id from sub_menu 
								 WHERE menu_id = ? ORDER BY sub_menu_id ASC");
								$stmt_sub->bind_param('s', $m_id);  // Bind "$email" to parameter.
								$stmt_sub->execute();
								$stmt_sub->store_result();
								$stmt_sub->bind_result($sub_menu_id, $sub_menu1, $menu_id);

								if ($stmt_sub->num_rows > 0) {$tree_value = 'class="has-cat-mega"';}
								else {$tree_value = '';}
							echo '	
								<li>
								        <a href="main?cat_id='.$m_id.'" class="cat treeview-item sidebar-sub-toggle" slug="main?cat_id='.$m_id.'" cid="'.$m_id.'"><img src="images/icon/'.$icon.'" width="20">'.$m_name.' ';
								        if ($stmt_sub->num_rows > 0) {
									    echo '
									        <span class="sidebar-collapse-icon ti-angle-down"></span>';
										}
										echo'
									</a>
									<ul>';
									while ($stmt_sub->fetch()) {
										echo '
											<li class=""><a href="'.$sub_menu_id.'" class="category treeview-item" slug="cat?cat_id='.$sub_menu_id.'" cid="'.$sub_menu_id.'"><i class="fa fa-caret-right"></i>'.$sub_menu1.'</a></li>
										';
											}
										$stmt_sub->close();  
									echo '
									</ul>
								</li>';
									 }
								$stmt->close();
						?>
						
						
						<!--<li> <a href="recipes"><img src="images/recipe-icon.jpg">Recipes</a> </li>-->
						
						<div class="hel" style="width: 100%;"><a class="btn btn-warning btn-lg" href="help_more" style="color: #fff; width: 100%;">Help & More</a></div>
						
						
					</ul>
	
                </div>
            </div>
        </div>
	
		

	

	



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
<script>
	const currentLocation = location.href;
	const menuItem = document.querySelectorAll('a');
	const menuLength = menuItem.lenght;
	for(Let i = 0; i < menuLenght; i++){
	   if(menuItem[i].href=== currentLocation){
		menuItem[i].className = "active";
	   }
	}

</script>
<script>
    $(document).ready(function(){
        $('#sidebar_open_close').click(function() {
         if($('#sidebar_open_close').hasClass("is-active")){
             $(".store-menu").hide();
             $(".aa").show();
         }else{
             $(".store-menu").show();
            $(".aa").hide();
         }
    });
});


</script>