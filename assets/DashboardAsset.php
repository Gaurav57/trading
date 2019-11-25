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
		'admin/css/materialdesignicons.css',
		'https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap',
		'https://fonts.googleapis.com/icon?family=Material+Icons',
        'admin/css/asad/style_1.css',
        'admin/css/asad/style.css.map',
    ];
  public $js = [		
	   'admin/js/bootstrap.min.js',
	   'admin/js/register.js',
	    'admin/js/admin.js',
	    'admin/js/main.js',
		'admin/js/apexcharts.min.js',
		'admin/js/Chart.min.js',
        'admin/js/asad/dashboard.js',
        //'admin/js/asad/highlight.pack.js',
        'admin/js/asad/template.js',
        'admin/js/asad/charts/chartjs.addon.js',
        'admin/js/asad/charts/chartjs.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
