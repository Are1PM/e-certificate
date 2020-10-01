<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ECertificateCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'E-Certificates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ecertificate-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create E Certificate', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'peserta_id',
                'value' => function ($model) {
                    $model->peserta->peserta_nama;
                },
            ],
            [
                'attribute' => 'webinar_id',
                'value' => function ($model) {
                    $model->webinar->webinar_judul;
                },
            ],
            'waktu_daftar',
            // 'waktu_presensi',
            'no_sertifikat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>