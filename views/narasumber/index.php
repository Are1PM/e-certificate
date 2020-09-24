<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NarasumberCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Narasumbers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="narasumber-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Narasumber', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'narasumber_id',
            'narasumber_nama',
            'narasumber_no_hp',
            'narasumber_email:email',
            'narasumber_bidang_ilmu',
            //'narasumber_profil:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
