 <?php 
use frontend\models\Book; 
  ?>

  <div class="category-tab">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                            <?php 
                            $i = 0;


                            foreach ($dataCat as $key => $value) {
                                # code...
                                $i++;
                                $class ='';
                                if($i==1){
                                    $class = 'class="active"';
                                }
                             ?>
                                <li <?= $class ?>><a href="#<?= $value['slug']; ?>" data-toggle="tab"><?= $value['name'] ?></a></li>
                                <?php } ?>
                               <!-- <li><a href="#blazers" data-toggle="tab">Blazers</a></li>-->
                               
                            </ul>
                        </div>
                        <div class="tab-content">
                           <?php 
                            $j=0;

                           foreach ($dataCat as $key => $value) {
                            $j++;
                            $class = '';
                            if($j==1){ $class ='ative';}
                              
                             ?>
                            <div class="tab-pane fade <?= $class;?> in" id="<?= $value['slug'] ?>" >
                              <?php 
                                 $product = new Book();

                                 $product = $product->getDataTabProduct($value["id"]);
                                 foreach ($product as $value1) {
                    
                               ?>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= $value1["image"] ?>" alt="" />
                                                <h2><?= $value1["price"] ?>Đ</h2>
                                                <p><a href="<?php echo Yii::$app->homeUrl."?r=book%2Fdetail&id=".$value1["id"]; ?>"><?=  $value1["name"]?></a></p>
                                                 <a href="<?php echo Yii::$app->homeUrl."?r=cart%2Fadd-cart&slug=".$value1["slug"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                               <?php } ?>
                            </div>
                             <?php } ?>
                            
                        </div>
                    </div><!--/category-tab-->