<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= $this->title?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><?= Html::a('Главная', '/web/') ?></li>
                <li role="presentation"><?= Html::a('Ссылки', ['post/index']) ?></li>
                <li role="presentation"><?= Html::a('Ссылка', ['post/show']) ?></li>
            </ul>
            <?php if(isset($this->blocks['block1'])){
                echo $this->blocks['block1'];
            } ?>
            <?= $content ?>

        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


