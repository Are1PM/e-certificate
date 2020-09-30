<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Webinar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="webinar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'webinar_waktu')->textInput() ?>

    <?= $form->field($model, 'webinar_judul')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'panitia_id')->textInput() ?>

    <?= $form->field($model, 'tema_id')->textInput() ?>

    <?= $form->field($model, 'narasumber_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
