<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use ayrozjlc\adminlte3\assets_extra\IcheckAsset;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
IcheckAsset::register($this);
$this->title = 'Ingresar al Sistema';
?>

<div class="login-box">
    <div class="login-logo">
        <b>Admin</b>LTE
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Ingrese sus Credenciales</p>

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form'
                ]); ?>

                <?= $form->field($model, 'username')
                    ->label(false)
                    ->textInput(['placeholder' => $model->getAttributeLabel('Usuario')]) ?>

                <?= $form->field($model, 'password')
                    ->label(false)
                    ->passwordInput(['placeholder' => $model->getAttributeLabel('Contraseña')]) ?>

                <div class="row">
                    <div class="col-8">
                        <?= $form->field($model, 'rememberMe', ['template' => "<div class=\"icheck-primary\">\n{input}\n{label}\n{error}\n{hint}\n</div>"])->input('checkbox')->label('Recordarme');
                         ?>
                    </div>

                    <div class="col-4">
                        <?= Html::submitButton('Entrar', ['class' => 'btn bg-purple  btn-block btn-flat', 'name' => 'login-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
        </div>
    </div>
</div><!-- /.login-box -->
