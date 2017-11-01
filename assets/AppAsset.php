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
        'css/main.css',
        'css/slick/slick-theme.css',
        'css/slick/slick.css',
        'css/font-awesome.min.css',
        '//fonts.googleapis.com/css?family=Noto+Serif:400,700&amp;subset=cyrillic-ext',
        '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
        'css/jquery.kwicks.min.css',
        'css/jquery.fancybox-1.3.4.css'
        
    ];
    public $js = [
        'js/bootstrap.min.js',
        'css/slick/slick.min.js',
        '//code.jquery.com/ui/1.12.1/jquery-ui.js',
        'js/theme.js',
        'js/jquery.kwicks.min.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.fancybox-1.3.4.js',
        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
