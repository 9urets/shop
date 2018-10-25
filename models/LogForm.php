<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 05.08.2018
 * Time: 14:07
 */

namespace app\models;


use yii\db\ActiveRecord;

class LogForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function attributeLabels(){
        return [
            'email'=>'E-mail',
            'password'=>'Пароль'
        ];
    }

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['email', 'unique'],
        ];
    }
}