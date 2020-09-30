<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ECertificate */

$this->title = 'Create E Certificate';
$this->params['breadcrumbs'][] = ['label' => 'E Certificates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ecertificate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
