<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Narasumber */

$this->title = 'Update Narasumber: ' . $model->narasumber_id;
$this->params['breadcrumbs'][] = ['label' => 'Narasumbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->narasumber_id, 'url' => ['view', 'id' => $model->narasumber_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="narasumber-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
