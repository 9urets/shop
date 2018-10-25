<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 28.07.2018
 * Time: 22:06
 */

namespace app\models;
use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return ['name' => 'имя',
                'email'=>'E-mail',
                'text' => 'Текст сообщения'
        ];
    }
    public function rules()
    {
        return [
            [ ['name','email'], 'required'],//3-ий параметр 'message' => 'Заполните поле'
            ['email', 'email'],
           /* ['name', 'string', 'min' => 5, 'tooShort' => 'Мало'],
            ['name', 'string', 'max' => 35, 'tooLong' => 'Много'],*/
            ['name', 'string', 'length' => [2,5] ],
            ['name', 'myRule'],
            ['text', 'trim'],
        ];
    }
    public function myRule($attr){
        if(!in_array($this->$attr, ['Hello', 'World'])){
            $this->addError($attr, 'Ошибка');
        }
    }
}