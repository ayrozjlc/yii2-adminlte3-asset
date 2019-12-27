<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace ayrozjlc\adminlte3\assets_extra;
use yii\web\AssetBundle;
/**
 * Pace application asset bundle.
 *
 * @author Jose Lopez Chavez <ayroz.jlc@gmail.com>
 * @since 2.0
 */
class DataTablesBootstrapAsset extends AssetBundle
{
    public $sourcePath  = '@vendor/almasaeed2010/adminlte/plugins/datatables-bs4';

    public $css = [
        YII_ENV_DEV ? 'css/dataTables.bootstrap4.css' : 'css/dataTables.bootstrap4.min.css'
    ];

    public $js = [
        YII_ENV_DEV ? 'js/dataTables.bootstrap4.js' : 'js/dataTables.bootstrap4.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'ayrozjlc\adminlte3\assets_extra\DataTablesAsset'
    ];
}
