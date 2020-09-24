<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NarasumberCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="narasumber-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'narasumber_id') ?>

    <?= $form->field($model, 'narasumber_nama') ?>

    <?= $form->field($model, 'narasumber_no_hp') ?>

    <?= $form->field($model, 'narasumber_email') ?>

    <?= $form->field($model, 'narasumber_bidang_ilmu') ?>

    <?php // echo $form->field($model, 'narasumber_profil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
