<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 08.08.2018
 * Time: 20:23
 */

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }
    public function rules()
    {
        return [
            [['last_name','first_name','username'], 'required'],
            [['last_name', 'first_name'], 'string', 'max'=>50],
            [['username'], 'string', 'max' => 50],
            [['password', 'auth_key', 'access_token'], 'string', 'max' => 32],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }
}