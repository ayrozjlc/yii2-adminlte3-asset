<?php
use yii\helpers\Html;
use yii\helpers\Url;

$items = [
    [
        'label' => 'Dashboard',
        'url' => ['/site/index'],
        'icon' => 'th'
    ],
    [
        'label' => 'menu example',
        'url' => "#",
        'icon' => 'users'
    ],
    [
        'label' => 'menu example 2',
        'url' => '#',
        'icon' => 'file-invoice-dollar'
    ],
    [
        'label' => 'menu example 3',
        'url' => '#',
        'icon' => 'tools'
    ]
];
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-dark-purple">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <?= Html::img("https://adminlte.io/themes/dev/AdminLTE/dist/img/user2-160x160.jpg", ['class'=>"img-circle elevation-2"]); ?>
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <?= ayrozjlc\adminlte3\widgets\Menu::widget([
            'items' => $items,
            'itemOptions' => ['class' => 'nav-item'],
        ]); ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
