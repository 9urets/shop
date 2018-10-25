<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<?php $form=ActiveForm::begin(['options' => ['id' => 'logForm'] ]);?>
<?= $form->field($model, 'email' )->label("E-mail");?>
<?= $form->field($model, 'password' )->label("Пароль")->passwordInput();?>
<?= Html::SubmitButton('Отправить', ['class' => 'btn btn-success']);?>
<?php ActiveForm::end();?>
