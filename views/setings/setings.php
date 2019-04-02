<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Setings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <h3><?=  Html::encode($model->email)?></h3>
    <?= $form->field($model, 'name')->textInput(['class'=>'form-control','placeholder'=>'Enter name']) ?>
    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Enter password']) ?>
    <?= $form->field($model, 'confirm_password')->passwordInput(['placeholder'=>'Confirm password']) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>
