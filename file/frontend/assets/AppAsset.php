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
    ];
    public $js = [
          'js/jquery-1.6.2.min.js',
          'js/jquery.jcarousel.min.js',
          'js/png-fix.js',
           'js/functions.js',
         // 'js/main.js',
    ];
    public $depends = [
         //'yii\web\YiiAsset',
         //'yii\bootstrap\BootstrapAsset',
    ];
}
