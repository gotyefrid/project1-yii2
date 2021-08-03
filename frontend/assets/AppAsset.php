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
	   'common/bootstrap.css',
       'common/styles.css',
       'fonts/ionicons.css',

    ];
    public $js = [
		'common/bootstrap.bundle.js',
        'common/scripts.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        //'yii\bootstrap\BootstrapPluginAsset',

    ];
}
