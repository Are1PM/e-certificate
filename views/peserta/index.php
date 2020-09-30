<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PesertaCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peserta';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= !Yii::$app->user->isGuest ? Html::a('Create Peserta', ['create'], ['class' => 'btn btn-success']) : "" ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => "{count} dari total {totalCount} data",
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No'
            ],

            // 'peserta_id',
            'peserta_nama',
            'peserta_no_hp',
            'peserta_email:email',
            'peserta_instansi',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>