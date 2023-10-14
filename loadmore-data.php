
<div class="row">
<?php
include_once 'include/msp_lp.php';
include_once 'include/functions.php'; 
include_once 'include/connection.php'; 
if (isset($_POST['row'])) {
  $start = $_POST['row'];
  $limit = 30;

                    global $mysqli;
                      if ($stmt_pro = $mysqli->prepare("SELECT id, shop_id, item_name, quantity, unit, price, discount_per, discount_price, img1, img2 from sd_item_l
                      WHERE activity = 1 ORDER BY id DESC LIMIT ".$start.",".$limit)){
                     $stmt_pro->execute(); 
                      $stmt_pro->bind_result($item_id, $shop_id, $item_name, $quantity, $unit, $price, $discount_per, $discount_price, $img1, $img2);
                      $stmt_pro->store_result();
                      }
                      while ($stmt_pro->fetch()) {
                        $str = preg_replace('/[^A-Za-z0-9\. -]/', '', $item_name);        
                      echo'
                                    <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 col-6 content colum-section">
                                        <div class="product-card center">';
                          if ($quantity < 1){echo '<div class="outstock"> Out Of Stock </div>';}echo'
                                            <figure class="category-card-figure">
                                                <img id="'.$item_id.'" src="images/products/';if ($img1 == NULL){echo 'photo.png';}else{echo ($img1);}echo'" class="img-fluid add_to_cart" size="400" style="height: 150px; width:150px;" alt="">
                                            </figure>
                                            <div style="min-height: 60px;"><h1><a href="product/'.$item_id.'/'.$str.'">'.ucfirst($item_name).'</a></h1></div>
                                            <div class="subText" style="min-height:30px;">'.$unit.'</div>';
                          if ($discount_per > 0){
                          echo '
                                            <p class="product-card-price center">
                            ৳'.number_format($discount_price).'
                            <span class="product-cart-reduced-price">৳'.number_format($price).'</span>
                          </p>';
                            }
                          else{
                          echo'
                          <p class="product-card-price center">
                            ৳'.number_format($price).'
                          </p>';
                            }
                          echo'
                          <input name="hidden_price" id="price'.$item_id.'" type="hidden" value="';if ($discount_price == 0){echo ($price);} else {echo ($discount_price);} echo'" />
                          <input type="hidden" name="hidden_name" id="name'.$item_id.'" value="'.$item_name.'" />
                          <input type="hidden" name="pimg" id="pimg'.$item_id.'" value="'.$img1.'" />
                          <input name="quantity" id="quantity'.$item_id.'" type="hidden" value="'.$quantity.'" />
                          <input type="hidden" name="unit" id="unit'.$item_id.'" value="'.$unit.'" />
                          <div class="" style="height: 100%; margin-top: 20px;"><a type="button" name="add_to_cart" id="'.$item_id.'" class="btn btn-outline-warning add_to_cart" value="Add to Cart" > Add to cart </a></div>
                                        </div>
                                    </div>';
                      }   }              
                    ?>

</div>