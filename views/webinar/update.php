<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Webinar */

$this->title = 'Update Webinar: ' . $model->webinar_id;
$this->params['breadcrumbs'][] = ['label' => 'Webinars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->webinar_id, 'url' => ['view', 'id' => $model->webinar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="webinar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
