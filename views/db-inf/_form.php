<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DbInf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="db-inf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'birthday')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'city')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'education')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'language')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
