<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form=ActiveForm::begin(['options' => ['id' => 'regForm'] ]);?>
<?= $form->field($log, 'username' )->label("Имя");?>
<?= $form->field($log, 'email' )->input("E-mail");?>
<?= $form->field($log, 'password' )->label("Пароль")->passwordInput();?>
<?= Html::SubmitButton('Зарегестрироваться', ['class' => 'btn btn-success']);?>
<?php ActiveForm::end();?>
