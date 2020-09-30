<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ECertificate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ecertificate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'peserta_id')->textInput() ?>

    <?= $form->field($model, 'webinar_id')->textInput() ?>

    <?= $form->field($model, 'waktu_daftar')->textInput() ?>

    <?= $form->field($model, 'waktu_presensi')->textInput() ?>

    <?= $form->field($model, 'no_sertifikat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
