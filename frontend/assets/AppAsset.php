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
       '/backend/web/css/custommel.css',
       'common/styles.css',
       'fonts/ionicons.css',
       'https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700',
       


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
