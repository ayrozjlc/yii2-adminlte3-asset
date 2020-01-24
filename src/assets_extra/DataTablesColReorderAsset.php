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
class DataTablesColReorderAsset extends AssetBundle
{
    public $sourcePath  = '@vendor/almasaeed2010/adminlte/plugins/datatables-colreorder';

    public $css = [
        'css/colReorder.bootstrap4.css'
    ];

    public $js = [
        'js/dataTables.colReorder.js',
        'js/colReorder.bootstrap4.js'
    ];

    public $depends = [
        'ayrozjlc\adminlte3\assets_extra\DataTablesBootstrapAsset'
    ];
}
