<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <?php if (!Yii::$app->user->isGuest): ?>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link material-ripple" data-toggle="dropdown" href="#" data-hover="dropdown">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notificaciones</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> Solicitud de Compra
                    <span class="float-right text-muted text-sm">2 dias</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">Mostar Todas</a>
            </div>
        </li>
        <li class="nav-item">
            <?= Html::a(
                '<i class="fas fa-sign-out-alt" title="Salir"></i>',
                ['/site/logout'],
                [
                    'id' => 'Close_sesion',
                    'data-method' => 'post',
                    'class' => 'nav-link material-ripple',
                    'data-ripple-color' => "#2ecc71"
                ]
            ) ?>
        </li>
    </ul>
    <?php endif ?>
</nav>
