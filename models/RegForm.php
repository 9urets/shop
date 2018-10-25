<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 04.08.2018
 * Time: 19:08
 */

namespace app\models;
use yii\db\ActiveRecord;


class RegForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function attributeLabels(){
        return [
            'username'=>'Имя',
            'email'=>'E-mail',
            'password'=>'Пароль'
        ];
    }
    public function rules(){
        return [
            [['username','email','password'], 'required'],
            ['email', 'email'],
            ['email', 'unique'],
            ['password', 'string', 'min'=>5,'max'=>35],
        ];
    }
}