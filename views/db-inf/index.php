<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DbInfSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Db Infs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="db-inf-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Db Inf', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'img',
            'name:ntext',
            'birthday:ntext',
            'city:ntext',
            //'education:ntext',
            //'language:ntext',
            //'login',
            //'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
