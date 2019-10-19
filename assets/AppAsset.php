<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
   public $css = [
		'styles/bootstrap4/bootstrap.min.css',
		'plugins/fontawesome-free-5.0.1/css/fontawesome-all.css',
		'plugins/OwlCarousel2-2.2.1/owl.carousel.css',
		'plugins/OwlCarousel2-2.2.1/owl.theme.default.css',
		'plugins/OwlCarousel2-2.2.1/animate.css',
		'plugins/slick-1.8.0/slick.css',
		'styles/main_styles.css',
		'styles/responsive.css',
		
		
    ];
    public $js = [
	'styles/bootstrap4/popper.js',
	'plugins/greensock/TweenMax.min.js',
	'plugins/greensock/TimelineMax.min.js',
	'plugins/scrollmagic/ScrollMagic.min.js',
	'plugins/greensock/animation.gsap.min.js',
	'plugins/greensock/ScrollToPlugin.min.js',
	'plugins/OwlCarousel2-2.2.1/owl.carousel.js',
	'plugins/slick-1.8.0/slick.js',
	'plugins/easing/easing.js',
	'js/custom.js',
	
	
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
