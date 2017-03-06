<?php use yii\helpers\Html;?>
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Sản phẩm nổi bật</h2>
                        <?php foreach ($data as $key => $value) {
                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= $value["image"] ?>" alt="<?=  $value["name"]?>" />
                                            <h2><?=  $value["price"]?>Đ</h2>
                                            <p><a href="<?php echo Yii::$app->homeUrl."?r=book%2Fdetail&id=".$value["id"]; ?>"><?=  $value["name"]?></a></p>
                                            
                                           

                                            <a href="<?php echo Yii::$app->homeUrl."?r=cart%2Fadd-cart&slug=".$value["slug"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            
                                        </div>
                                  <!--      <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2></h2>
                                                <p></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>
                                        </div> -->

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                      
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                 <?php } ?>
                    </div><!--features_items-->