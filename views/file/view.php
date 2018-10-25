<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $f= ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']])?>
<?= $f->field($mod, 'file[]')->fileInput(['multiple' => true]);?>

<?= Html::submitButton('Submit', ['class' => 'btn btn-success']);?>
<?php ActiveForm::end()?>
<img src="../../web/photo/php.txt" width="200px" height="300px">
