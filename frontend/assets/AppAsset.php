<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/site.css',
               //'templatemo_style.css',
       'css/style.css', 
       'css/bootstrap.min.css', 
       'css/font-awesome.min.css', 
      'css/prettyPhoto.css' ,
      'css/price-range.css' ,
      'css/animate.css' ,
      'css/main.css',
      'css/responsive.css', 
    ];
    public $js = [
          //'js/jquery-1.6.2.min.js',
          //'js/jquery.jcarousel.min.js',
          //'js/png-fix.js',
           //'js/functions.js',
           'js/html5shiv.js',
           'js/respond.min.js',
          'js/main.js',
           'js/jquery.js',
          'js/bootstrap.min.js',
          'js/jquery.scrollUp.min.js',
          'js/price-range.js',
          'js/jquery.prettyPhoto.js',
          'js/contact.js',
          'js/gmaps.js',
          

           // 'js/main.js',
    ];
    public $depends = [
         'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
