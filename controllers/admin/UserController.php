<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 24.07.2018
 * Time: 16:31
 */
namespace app\controllers\admin;
use app\controllers\AppController;
class UserController extends AppController
{
 public function actionIndex(){
     return $this->render('index');
 }
}