<?php
namespace ayrozjlc\adminlte3;

use yii\web\AssetBundle;

class AdminLte3Asset extends AssetBundle
{
	public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        'dist/css/adminlte.css',
        'plugins/font-awesome/css/font-awesome.css',
    ];
    public $js = [
        'js/adminlte.js'
    ];

    public $depends = [
    	'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}