AdminLTE3 Asset Bundle for Yii2
=====================

*Template UI for Yii2 Framework, based on [AdminLTE3](https://adminlte.io/themes/v3)*

**AdminLTE** is a fully responsive administration template. Based on **[Bootstrap 4](https://getbootstrap.com)** framework.
Highly customizable and easy to use. Fits many screen resolutions from small mobile devices to large desktops.
!["AdminLTE Presentation"](https://adminlte.io/AdminLTE3.png "AdminLTE Presentation")


Installation
------------
#### Composer

```
composer require ayrozjlc/yii2-adminlte3-asset
```

or add

```
"ayrozjlc/yii2-adminlte3-asset": "dev-master",
```
to the ```require``` section of your `composer.json` file.

Quick Start
-----------
* 1.- In view (for example: ```@app/views/layouts/main.php```)

```php
// ...
use ayrozjlc\adminlte3\AdminLte3Asset;
// ...
AdminLte3Asset::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    '\ayrozjlc\adminlte3\AdminLte3Asset',
];
```

* 2.- Disabled bootstrap3(for example: ```@app/config/main.php```)

```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'yii\bootstrap\BootstrapAsset' => [ 'css' => [] ],
            'yii\bootstrap\BootstrapPluginAsset' => [ 'js' => [] ],
            'yii\bootstrap4\BootstrapAsset' => [ 'css' => [] ]
        ],
    ],
],
```

* 3.- You can have a **preview** by reconfiguring the path mappings of the view component:

```php
'components' => [
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => '@vendor/ayrozjlc/yii2-adminlte3-asset/src/yii2-app'
            ],
        ],
    ],
],
```


Credits
-------------
*[Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0)*
*[AdminLTE3](https://adminlte.io/themes/v3)*