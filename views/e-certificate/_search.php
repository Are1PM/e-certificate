<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ECertificateCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ecertificate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'peserta_id') ?>

    <?= $form->field($model, 'webinar_id') ?>

    <?= $form->field($model, 'waktu_daftar') ?>

    <?= $form->field($model, 'waktu_presensi') ?>

    <?= $form->field($model, 'no_sertifikat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
