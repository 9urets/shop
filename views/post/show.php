<?php //$this->title = 'Одна статья'; ?>
<?php $this->beginBlock('block1'); ?><!--передача данных из вида в шаблон-->
    <h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>
    <h1>Show, Action!</h1>

    <button class="btn btn-success" id="btn">Click me...</button>

<?php
echo '<pre>';
echo print_r($cats)?>
<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']);
//$this->registerJs("$('.container').append('<p>SHOW!!!</p>')", \yii\web\View::POS_LOAD);
//$this->registerCss('.container{background: #ccc;}');
$js = <<<JS
    $('#btn').click(function(e) {
        $.ajax({
            url:'view.php?r-post/index',
            data:{test:'123'},
            type:'POST',
            success: function(res) {
              console.log(res);
            },
            error:function() {
              alert('Error!');
            }
        });
    });
JS;
$this->registerJs($js);
?>

