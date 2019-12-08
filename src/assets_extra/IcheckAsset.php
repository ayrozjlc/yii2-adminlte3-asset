<?php
namespace ayrozjlc\adminlte3\assets_extra;

use yii\web\AssetBundle;

class IcheckAsset extends AssetBundle
{
	public $sourcePath = '@vendor/almasaeed2010/adminlte';
    public $css = [
        YII_ENV_DEV ? 'plugins/icheck-bootstrap/icheck-bootstrap.css' : 'plugins/icheck-bootstrap/icheck-bootstrap.min.css'
    ];
}