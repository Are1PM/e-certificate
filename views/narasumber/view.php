<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Narasumber */

$this->title = $model->narasumber_id;
$this->params['breadcrumbs'][] = ['label' => 'Narasumbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="narasumber-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->narasumber_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->narasumber_id], [
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
            'narasumber_id',
            'narasumber_nama',
            'narasumber_no_hp',
            'narasumber_email:email',
            'narasumber_bidang_ilmu',
            'narasumber_profil:ntext',
        ],
    ]) ?>

</div>
