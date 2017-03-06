<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\headertopWidget;
use frontend\widgets\headerbottomWidget;
use frontend\widgets\sildeWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
   <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +84973537</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> tp@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo Yii::$app->homeUrl; ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="<?php echo Yii::$app->homeUrl; ?>"><img src="images/home/logo1.jpg" alt="logo" /></a>
                            
                        </div>
                        <div class="btn-group pull-right">
                           <!-- <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div> 
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> <?php if (!Yii::$app->user->isGuest): ?> <?php echo Yii::$app->user->identity->username; ?></a></li>
                               
                                <li><a href="<?php echo Yii::$app->homeUrl."?r=checkout"; ?>"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <li><a href="<?php echo Yii::$app->homeUrl."?r=cart"; ?>"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        <!--     <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li> -->
                                  <li><?php //echo Html::a('Logout',['/site/logout'],['data-method'=>'post']); ?>
                                    <?php echo Html::beginForm(['/site/logout'],'post')

                                     ?>
                                     <?php echo Html::submitButton(
                                                'Thoát',
                                                ['class' => 'fa fa-unlock']
                                            ); ?>
                                    <?php echo Html::endForm(); ?>
                                  </li>
                              <?php else: ?>
                                       
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <li><a href="<?php echo Yii::$app->homeUrl."?r=cart"; ?>"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                   <li><?php echo Html::a('Đăng Nhập',['/site/login'],['data-method'=>'post']); ?>
                                    
                                  </li>
                                  <li><?php echo Html::a('Đăng Ký',['/site/signup']); ?>
                                    
                                  </li>

                            </ul>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><?php echo Html::a('Trang chủ',['/site/index'],['style' =>['color'=>'orange'],'font-weight'=>'bold']); ?></li>
                                <li class="dropdown"><a href="#">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Sản phẩm</a></li>
                                        <li><a href="product-details.html">Product Details</a></li> 
                                        <li><a href="checkout.html">Thanh toán</a></li> 
                                        <li><a href="cart.html">Giỏ hàng</a></li> 
                                        <li><?php echo Html::a('Đănng Nhập',['/site/login'],['data-method'=>'post']); ?></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Reviews Sách<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Reviews từ Neverland</a></li>
                                        <li><a href="blog-single.html">Reviews từ bạn đọc</a></li>
                                    </ul>
                                </li> 
                                <li><a href="404.html">Khuyên mãi</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Tìm kiếm"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    </section><!--/slider-->
    
    
    <?php echo $content;  ?>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>N</span>EVERLAND</h2>
                            <p>Giá trị của cuộc sống!</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/bookgirl1.jpg" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/bookgirl2.jpg" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/bookgirl3.jpg" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/bookgirl4.jpg" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.jpg" alt="" />
                            <p>187B, Đường Giảng Võ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Hỗ trợ trực tuyến</a></li>
                                <li><a href="#">Liên hệ</a></li>
                                <li><a href="#">Tình trạng đơn hàng</a></li>
                            
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Tin tức sách</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="#">Chân dung</a></li>
                                <li><a href="#">Điểm sách</a></li>
                                <li><a href="#">Phê bình</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                                <li><a href="#">Chính sách đổi trả</a></li>
                                <li><a href="#">Hệ thóng thanh toán</a></li>
                                <li><a href="#">Ưu đãi khách hàng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Về chúng tôi</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Giới thiệu về cửa hàng</a></li>
                                <li><a href="#">Tuyển dụng</a></li>
                                <li><a href="#">Vị trí cửa hàng</a></li>
                            
                                <li><a href="#">Bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Giới thiệu cho người dùng</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Nhập email của bạn..." />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Nhận thêm thông tin khuyến mãi <br />vui lòng để lại Email....</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
    </footer><!--/Footer-->
    <script>
   // function addCart(id){
     //   $.get('<?php echo Yii::$app->homeUrl."?r=shopping%2Faddcart" ?>',{'id':id}, function(data){

       //     alert("s0k");
        //});
    }
    </script>
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
