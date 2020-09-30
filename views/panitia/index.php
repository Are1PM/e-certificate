<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PanitiaCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Panitia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panitia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Panitia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => 'No'
            ],
            // 'panitia_id',
            'panitia_nama',
            'panitia_email:email',
            'panitia_no_hp',
            'panitia_web',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Aksi'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>