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
        'admin/css/admin.css',
		'/admin/css/register.css',
		'/admin/css/bootstrap.min.css',
		'https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap',
    ];
  public $js = [
	   'admin/js/admin.js',
	   'admin/js/bootstrap.min.js',
	   '/admin/js/register.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
