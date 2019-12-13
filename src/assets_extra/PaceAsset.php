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
class PaceAsset extends AssetBundle
{
    public $sourcePath  = '@vendor/almasaeed2010/adminlte/plugins/pace-progress';
    public $css = [
        'themes/red/pace-theme-minimal.css'
    ];
    public $js = [
        'pace.min.js'
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
