<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Panitia */

$this->title = 'Create Panitia';
$this->params['breadcrumbs'][] = ['label' => 'Panitias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panitia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
