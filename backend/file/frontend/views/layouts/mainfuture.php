<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    <div id="header" class="shell">
        <div id="logo"><h1><a href="#">BestSeller</a></h1><span><a href="#">free css template</a></span></div>
        <!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Promotions</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </div>
        <!-- End Navigation -->
        <div class="cl">&nbsp;</div>
        <!-- Login-details -->
        <div id="login-details">
            <p>Welcome, <a href="#" id="user">Guest</a> .</p><p><a href="#" class="cart" ><img src="css/images/cart-icon.png" alt="" /></a>Shopping Cart (0) <a href="#" class="sum">$0.00</a></p>
        </div>
        <!-- End Login-details -->
    </div>
    <!-- End Header -->
    <?php echo $content;?>
    <!-- Footer -->
    <div id="footer" class="shell">
        <div class="top">
            <div class="cnt">
                <div class="col about">
                    <h4>About BestSellers</h4>
                    <p>Nulla porttitor pretium mattis. Mauris lorem massa, ultricies non mattis bibendum, semper ut erat. Morbi vulputate placerat ligula. Fusce <br />convallis, nisl a pellentesque viverra, ipsum leo sodales sapien, vitae egestas dolor nisl eu tortor. Etiam ut elit vitae nisl tempor tincidunt. Nunc sed elementum est. Phasellus sodales viverra mauris nec dictum. Fusce a leo libero. Cras accumsan enim nec massa semper eu hendrerit nisl faucibus. Sed lectus ligula, consequat eget bibendum eu, consequat nec nisl. In sed consequat elit. Praesent nec iaculis sapien. <br />Curabitur gravida pretium tincidunt.  </p>
                </div>
                <div class="col store">
                    <h4>Store</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Special Offers</a></li>
                        <li><a href="#">Log In</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Basket</a></li>
                        <li><a href="#">Checkout</a></li>
                    </ul>
                </div>
                <div class="col" id="newsletter">
                    <h4>Newsletter</h4>
                    <p>Lorem ipsum dolor sit amet  consectetur. </p>
                    <form action="" method="post">
                        <input type="text" class="field" value="Your Name" title="Your Name" />
                        <input type="text" class="field" value="Email" title="Email" />
                        <div class="form-buttons"><input type="submit" value="Submit" class="submit-btn" /></div>
                    </form>
                </div>
                <div class="cl">&nbsp;</div>
                <div class="copy">
                    <p>&copy; <a href="#">BestSeller.com</a>. Design by <a href="http://css-free-templates.com/">CSS-FREE-TEMPLATES.COM</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
