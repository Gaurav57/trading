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
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
	   
       
		'admin/css/css-log.css',
		'admin/css/register.css',
		 'admin/css/admin.css',
		'https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap',
        'admin/css/asad/style.css',
        'admin/css/asad/style.css.map',
    ];
  public $js = [		
	   'admin/js/bootstrap.min.js',
	   'admin/js/register.js',
	    'admin/js/admin.js',
	    'admin/js/main.js',
        'admin/js/asad/dashboard.js',
        'admin/js/asad/highlight.pack.js',
        'admin/js/asad/template.js',
        'admin/js/charts/asad/chartjs.addon.js',
        'admin/js/charts/chartjs.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
