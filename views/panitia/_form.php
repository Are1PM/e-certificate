<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Panitia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panitia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'panitia_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panitia_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panitia_no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panitia_web')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
