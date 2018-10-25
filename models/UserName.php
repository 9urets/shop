<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $username
 * @property string $access_token
 * @property string $auth_key
 */
class UserName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'first_name', 'last_name', 'username'], 'required'],
            [['password', 'access_token', 'auth_key'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 255],
            [['first_name', 'last_name', 'username'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'password' => 'Password',
            'email' => 'Email',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'access_token' => 'Access Token',
            'auth_key' => 'Auth Key',
        ];
    }
}
