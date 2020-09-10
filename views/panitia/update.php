<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Panitia */

$this->title = 'Update Panitia: ' . $model->panitia_id;
$this->params['breadcrumbs'][] = ['label' => 'Panitias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->panitia_id, 'url' => ['view', 'id' => $model->panitia_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panitia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
