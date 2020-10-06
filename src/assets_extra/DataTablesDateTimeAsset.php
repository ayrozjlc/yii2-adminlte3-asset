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
class DataTablesDateTimeAsset extends AssetBundle
{
    public $sourcePath  = '@bower/datetime-moment';

    public $js = [
        'dist/datetime-moment.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_END
    ];

    public $depends = [
        'ayrozjlc\adminlte3\assets_extra\DataTablesBootstrapAsset'
    ];
}
