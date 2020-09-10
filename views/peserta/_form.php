<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peserta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'peserta_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peserta_no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peserta_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peserta_instansi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
