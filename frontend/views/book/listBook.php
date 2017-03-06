<?php 
    use  yii\helpers\Html;
    use backend\models\Book;
    use backend\models\Category;
    use frontend\widgets\categoryproductWidget;
    use frontend\widgets\brandproductWidget;
    use frontend\widgets\featuresitemWidget;
    use frontend\widgets\categorytabWidget;
    use frontend\widgets\recommendeditemWidget;
    use yii\widgets\LinkPager;

     

    

    

 ?>
	<div class="container">
            <div class="row">	
 <div class="col-sm-3">
                    <div class="left-sidebar">
                        <!--categoryproduct -->
                    <?= 
                        categoryproductWidget::widget();
                      
                    
                     ?>
                    
                 
                        <!--/brands_products-->
                    <?=
                          brandproductWidget::widget();
                          ?>
            <!--            
                        <div class="price-range">
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div> -->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/kytang.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>


			<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
					<?php   $data = Category::find()->where(['id'=>$id])->one();

					 ?>
						<h2 class="title text-center"><?=$data["name"] ?></h2>
						<?php foreach ($product as $key => $value) {
							# code...
						 ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?= $value["image"] ?>" alt="<?= $value["name"] ?>" />
										<h2><?= $value["price"] ?>Đ</h2>
										<p> <a href="<?php echo Yii::$app->homeUrl."?r=book%2Fdetail&id=".$value["id"]; ?>"><?= $value["name"] ?></a></p>
										   <a href="<?php echo Yii::$app->homeUrl."?r=cart%2Fadd-cart&slug=".$value["slug"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
									</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										
										<li><a href=""><i class="fa fa-plus-square"></i>Thêm vào so sánh</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						
						<?php } ?>
						
					</div><!--features_items-->

				<!--		<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul> -->
						<?php 
								echo LinkPager::widget(
										[
											'pagination' => $pages,
											'firstPageLabel' => '|<<',
											'lastPageLabel' => '>>|',
											'prevPageLabel' => '<',
											'nextPageLabel' => '>',  
											'maxButtonCount' => '3',  
											
										]
									);
						 ?>
</div>
</div>
        </div>