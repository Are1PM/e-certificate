<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ECertificate */

$this->title = $model->peserta_id;
$this->params['breadcrumbs'][] = ['label' => 'E Certificates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ecertificate-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'peserta_id',
                'value' => function ($model) {
                    $model->peserta;
                },
            ],
            [
                'attribute' => 'webinar_id',
                'value' => function ($model) {
                    $model->webinar->webinar_judul;
                },
            ],
            'waktu_daftar',
            'waktu_presensi',
            'no_sertifikat',
        ],
    ]) ?>

</div>