<?php 
    use  yii\helpers\Html;
    use backend\models\Book;
    use backend\models\Category;
    use frontend\widgets\categoryproductWidget;
    use frontend\widgets\brandproductWidget;
    use frontend\widgets\featuresitemWidget;
    use frontend\widgets\categorytabWidget;
    use frontend\widgets\recommendeditemWidget;
use kartik\widgets\StarRating

     

    

    

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
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?= $data["image"] ?>" alt="" />
								<h3>Like</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="<?= $data["image"] ?>" alt=""></a>
										  <a href=""><img src="<?= $data["image"] ?>" alt=""></a>
										  
										</div>
										<div class="item">
										  
										  <a href=""><img src="<?= $data["image"] ?>" alt=""></a>
										  <a href=""><img src="<?= $data["image"] ?>" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="<?= $data["image"] ?>" alt=""></a>
										 
										  <a href=""><img src="<?= $data["image"] ?>" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?= $data["name"] ?></h2>
								<p>Web ID:<?= $data["id"] ?></p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span><?= $data["price"] ?>Đ</span>
									<label>Số lượng:</label>
									<input type="text" value="1" />
									   <a href="<?php echo Yii::$app->homeUrl."?r=cart%2Fadd-cart&slug=".$data["slug"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
								</span>
								<p><b>Trạng thái:</b> Còn hàng</p>
								<p><b>Tác giả:</b><?= $data["author"] ?> </p>
								 
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Danh sách sản phẩm</a></li>
								<li class="active"><a href="#<?= $data["slug"] ?>" data-toggle="tab">Nội dung<a></li>
								<li><a href="#tag" data-toggle="tab">#Tag</a></li>
								<li ><a href="#reviews" data-toggle="tab">Review (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/RC21.jpg" alt="" />
												<h2>$56</h2>
												<p>Sách hay</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/RC22.jpg" alt="" />
												<h2>$56</h2>
												<p>Sách hay</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/RC23.jpg" alt="" />
												<h2>$56</h2>
												<p>Sách hay</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/RC24.jpg" alt="" />
												<h2>$56</h2>
												<p>Sách hay</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="<?= $data["slug"] ?>" >
								
								<div class="col-sm-12">
									<p><?= $data["content"] ?></p>

									
							</div>
								
							</div>
							
							<div class="tab-pane fade" id="tag" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/RC21.jpg" alt="" />
												<h2>$56</h2>
												<p>Sách hay</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/RC22.jpg" alt="" />
												<h2>$56</h2>
												<p>Sách hay</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/RC23.jpg" alt="" />
												<h2>$56</h2>
												<p>Sách hay</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/RC24.jpg" alt="" />
												<h2>$56</h2>
												<p>Sách hay</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade " id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					</div>
					</div>