<?php
namespace ayrozjlc\adminlte3\assets_extra;

use yii\web\AssetBundle;

class OverlayScrollbarsAsset extends AssetBundle
{
    public $sourcePath  = '@vendor/almasaeed2010/adminlte/plugins/overlayScrollbars';
    public $css = [
        YII_ENV_DEV ? 'css/OverlayScrollbars.css' : 'css/OverlayScrollbars.min.css'
    ];
    public $js = [
        YII_ENV_DEV ? 'js/jquery.overlayScrollbars.js' : 'js/jquery.overlayScrollbars.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}