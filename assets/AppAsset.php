<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'cssanimate.min',
        'css/bootstrap.min',
        'css/front-awesome.min',
        'css/style',


    ];
    public $js = [

 
        
        'js/bootstrap.min',
        'js/html5shiv',
        'js/imagesloaded.min',
        'js/isotope.pkgd.min',
        'js/jquery.appear.min',
        'js/jquery.cslider',
        'js/jquery.fancybox.pack',
        'js/jquery/fancybox-media',
        'js/jquery.isotope',
        'js/jqurey.min',
        'js/jquery.nav.min',
        'js/jquery.scrollTo.min',
        'js/moderizr-latest',
        'js/respond.min',
        'js/script',
        'js/twitterFetcher.min',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
