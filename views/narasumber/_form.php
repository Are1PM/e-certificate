<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Narasumber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="narasumber-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'narasumber_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'narasumber_no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'narasumber_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'narasumber_bidang_ilmu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'narasumber_profil')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
