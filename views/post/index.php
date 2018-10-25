<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $f= ActiveForm::begin(['options' => ['enctype' => 'multipart/from-data'] ])?><!--['class' => 'form-horizontal'] ]-->
<?= $f->field($model, 'file')->fileInput();?>
<?= Html::submitButton("Отправить");?>
<?php ActiveForm::end()?>