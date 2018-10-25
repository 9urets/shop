<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DbInfSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="db-inf-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'birthday') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'login') ?>

    <?php // echo $form->field($model, 'password') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
