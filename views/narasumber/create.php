<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Narasumber */

$this->title = 'Create Narasumber';
$this->params['breadcrumbs'][] = ['label' => 'Narasumbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="narasumber-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
