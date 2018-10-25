<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DbInf */

$this->title = 'Create Db Inf';
$this->params['breadcrumbs'][] = ['label' => 'Db Infs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="db-inf-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
