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
* In view (for example: ```@app/views/layouts/main.php```)

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
    'ayrozjlc\adminlte3\AdminLte3Asset',
];
```

Preview
-----------
* You can have a **preview** by reconfiguring the path mappings of the view component:

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

Assets
-----------
* Example in view

```php
use ayrozjlc\adminlte3\assets_extra\IcheckAsset;

IcheckAsset::register($this);
```
or add to your ```assets/AppAsset.php```

```php
public $depends = [
    'ayrozjlc\adminlte3\assets_extra\PaceAsset',
    'ayrozjlc\adminlte3\assets_extra\IcheckAsset',
    'ayrozjlc\adminlte3\assets_extra\DataTablesAsset',
    'ayrozjlc\adminlte3\assets_extra\DataTablesBootstrapAsset',
];
```

Widgets
-----------
* Menu
* ActionColumn
* Alert
* Datatables

* example(menu)
```php
ayrozjlc\adminlte3\widgets\Menu::widget([
    'items' => [
        'label' => 'menu',
        'url' => ['/site/index'],
        'icon' => 'users' //$iconClassPrefix = 'fas fa-'
    ],
    'itemOptions' => ['class' => 'nav-item'],
]);
```

Credits
-------------
* **[Yii 2.0 Framework](http://www.yiiframework.com/doc-2.0)**
* **[AdminLTE3](https://adminlte.io/themes/v3)**
