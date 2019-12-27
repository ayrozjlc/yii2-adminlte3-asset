<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace ayrozjlc\adminlte3\assets_extra;
use yii\web\AssetBundle;
/**
 * DataTables register script colReorder asset bundle.
 * @author Jose Lopez Chavez <ayroz.jlc@gmail.com>
 */
class DataTablesResponsiveAsset extends AssetBundle
{
    public $sourcePath  = '@vendor/almasaeed2010/adminlte/plugins/datatables-responsive';

    public $css = [
        YII_ENV_DEV ? 'css/responsive.bootstrap4.css' : 'css/responsive.bootstrap4.min.css'
    ];

    public $js = [
        YII_ENV_DEV ? 'js/dataTables.responsive.js' : 'dataTables.responsive.min.js',
        YII_ENV_DEV ? 'js/responsive.bootstrap4.js' : 'responsive.bootstrap4.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'ayrozjlc\adminlte3\assets_extra\DataTablesAsset',
        'ayrozjlc\adminlte3\assets_extra\DataTablesBootstrapAsset'
    ];
}
