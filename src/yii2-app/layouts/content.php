<?php
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Html;

?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= Html::encode($this->title) ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => ['class' => 'float-sm-right']
                    ]) ?>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div>

    <section class="content" style="display: none">
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </section>
</div>

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
</footer>
