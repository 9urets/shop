<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 03.08.2018
 * Time: 21:21
 */

namespace app\controllers;
use app\models\FileForm;
use app\models\RegForm;
use app\models\LogForm;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use app\models\Article;
class FileController extends AppController
{
    protected function findModel($id){
        if($model = Article::findOne($id) !==null){
            return$model;
        }else{
            throw new NotFoundHttpException('The request page does note exist');
        }
    }

    public function actionView(){
        $mod = new FileForm();

        if(Yii::$app->request->isPost){
            $mod->file = UploadedFile::getInstances($mod, 'file');
            if ($mod->upload()) {
                Yii::$app->session->setFlash('success', 'Все ОК!');
            }
        }
        return $this->render('view', compact('mod'));
    }


    public function actionSign(){
        $log = new RegForm();
        if($log->load(Yii::$app->request->post())) {
            if ($log->save()) {
                Yii::$app->session->setFlash('success', 'Вы успешно зарегестрированны!');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('sign', ['log' => $log]);
    }

  /*  public function actionLogin(){
        $model = new LogForm();
        if($model->load(Yii::$app->request->post())){
            $sign_in = LogForm::find()->asArray()->where(['email' => $model['email']])->all();
            if($sign_in[0]['email']==$model['email'] && $sign_in[0]['password']==$model['password']){
                Yii::$app->session->setFlash('success', 'Авторизация прошла успешно');
                Yii::$app->session->setFlash('id', $sign_in[0]['id']);
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Проверите введенные данные');
            }
        }

        return $this->render('login', compact('model'));
    }

    public function actionFilm(){
        return $this->render('film');
    }*/

}