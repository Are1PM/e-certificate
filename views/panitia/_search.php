<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PanitiaCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panitia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'panitia_id') ?>

    <?= $form->field($model, 'panitia_nama') ?>

    <?= $form->field($model, 'panitia_email') ?>

    <?= $form->field($model, 'panitia_no_hp') ?>

    <?= $form->field($model, 'panitia_web') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
