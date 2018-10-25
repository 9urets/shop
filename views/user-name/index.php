<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserNameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Names';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-name-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Name', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'password',
            'email:email',
            'first_name',
            'last_name',
            //'username',
            //'access_token',
            //'auth_key',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
