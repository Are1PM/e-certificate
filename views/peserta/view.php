<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = $model->peserta_nama;
$this->params['breadcrumbs'][] = ['label' => 'Pesertas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$guest = Yii::$app->user->isGuest;
\yii\web\YiiAsset::register($this);
?>
<div class="peserta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!$guest) : ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->peserta_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->peserta_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif; ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'peserta_id',
            'peserta_nama',
            [
                'attribute' => 'peserta_no_hp',
                'visible' => !$guest
            ],
            'peserta_email:email',
            'peserta_instansi',
        ],
    ]) ?>

</div>