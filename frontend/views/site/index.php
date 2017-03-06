<?php 
    use  yii\helpers\Html;
    use backend\models\Book;
    use backend\models\Category;
    use frontend\widgets\categoryproductWidget;
    use frontend\widgets\brandproductWidget;
    use frontend\widgets\featuresitemWidget;
    use frontend\widgets\categorytabWidget;
    use frontend\widgets\recommendeditemWidget;

     

    

    

 ?>

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>N</span>EVERLAND</h1>
                                    <h2>Khuyến mại các tựa sách thanh xuân</h2>
                                    <p>Everyone has a similar youth, but a different life </p>
                                    <button type="button" class="btn btn-default get">Mua ngay!!!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/anh11.jpg" class="girl img-responsive" alt="" />
                                    
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>N</span>EVERLAND</h1>
                                    <h2>Giảm giá lên đến 40% tất cả các tác phẩm kinh điển</h2>
                                    <p>Những tác phẩm kinh điển qua nhiều thế hệ. Mua ngay kẻo lỡ. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay!!!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/anh12.jpg" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    
                                    <button type="button" class="btn btn-default get">Hãy mang tôi về</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/anh13.jpg" class="girl img-responsive" alt="" />
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
<section>
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
                    <?= featuresitemWidget::widget();?><!--feature-items-tab-->
                    <!--category-tab-->
                   <?= categorytabWidget::widget();?>
                    <?= recommendeditemWidget::widget(); ?>
                   
                </div>
            </div>
        </div>
    </section>