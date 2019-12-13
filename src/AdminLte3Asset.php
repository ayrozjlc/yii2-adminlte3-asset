<?php
namespace ayrozjlc\adminlte3;

use yii\web\AssetBundle;

class AdminLte3Asset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        YII_ENV_DEV ? 'plugins/fontawesome-free/css/all.css' : 'plugins/fontawesome-free/css/all.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        YII_ENV_DEV ? 'dist/css/adminlte.css' : 'dist/css/adminlte.min.css'
    ];
    public $js = [
        YII_ENV_DEV ? 'dist/js/adminlte.js' : 'dist/js/adminlte.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}