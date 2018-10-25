<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DbInf */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Db Infs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="db-inf-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'img',
            'name:ntext',
            'birthday:ntext',
            'city:ntext',
            'education:ntext',
            'language:ntext',
            'login',
            'password',
        ],
    ]) ?>

</div>
