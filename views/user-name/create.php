<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserName */

$this->title = 'Create User Name';
$this->params['breadcrumbs'][] = ['label' => 'User Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
