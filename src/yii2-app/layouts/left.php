<?php
use yii\helpers\Html;
use yii\helpers\Url;

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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                menu example
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fas fa-file-invoice-dollar"></i>
              <p>
                menu example
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="fas fa-tools"></i>
              <p>
                menu example
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
