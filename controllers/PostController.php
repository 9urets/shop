<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 25.07.2018
 * Time: 15:36
 */

namespace app\controllers;
use app\models\Information;
use Yii;
use app\models\TestForm;
class PostController extends AppController
{
    public $layout = 'basic';
    public function beforeAction($action)
    {
        if($action->id == 'index'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex(){
       /* if(Yii::$app->request->isAjax){
            $this->debug(Yii::$app->request->post());
            return 'test';
        }*/
        $this->view->title = "Статьи";
        $model = new TestForm();

        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('test', compact('model'));
    }
    public function actionShow(){
        $this->view->title = "Одна статья";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевики...']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы...']);

        //$cats = Information::find()->all();
        //// запрос вида - SELECT * FROM db_inf
        // (Information - это модель к которой мы обращаемя, она обычно называется как название таблицы,
        // но можно зделать как я сейчас)

        //$cats = Information::find()->orderBy(['id' => SORT_DESC])->all();//метод orderBy - отвечает за сортировку
        //['id' => SORT_DESC] - сортировка по id в обратном порядке
        //$cats = Information::find()->asArray()->all();//если хочу получить данные ввиде массива, а не объекта
        //$cats = Information::find()->asArray()->where('id=2')->all();
        //$cats = Information::find()->asArray()->where(['id' => 2])->all();
        //$cats = Information::find()->asArray()->where(['like', 'birthday', '98'])->all();
        //'like'-оператор позволяет найти все строки где в колонке birthday будет идти последовательно 98
        //$cats = Information::find()->asArray()->where(['<-','id', 2])->all();
        //найдет все поля где id меньше 2
        //$cats = Information::find()->asArray()->count();
        //$cats = Information::findOne(['birthday' => 1998]);
        $cats = Information::findAll(['birthday' => 1998]);

        return $this->render('show', compact('cats'));
    }

    public function actionTest(){
        if(isset($_POST['submit'])) {
        print_r($_POST);
        die();
            /* if (!empty($_POST['login']) and !empty($_POST['password'])) {
                 $login = $_POST['login'];
                 $password = $_POST['password'];
                 $headers = "Content-Type:text/html; charset=utf-8 \r\n";
                 $headers .= "From: yurij.radchuk@mail.ru";
                 $headers .= "Reply to yurij.radchuk@mail.ru";
                 mail("yurij.radchuk@mail.ru", "Test", "$login \n $password", $headers);
                 //print_r($_POST);
                 echo "<div id='succes'>Сообщение успешно отправленно</div>";
             } else {
                 echo "<div id='error'>Проверьте введенные данные</div>";
             }*/
         }
        return $this->render('test');
    }

}