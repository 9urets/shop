<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "db_inf".
 *
 * @property int $id
 * @property string $img
 * @property string $name
 * @property string $birthday
 * @property string $city
 * @property string $education
 * @property string $language
 * @property string $login
 * @property string $password
 */
class DbInf extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'db_inf';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'birthday', 'city', 'education', 'language'], 'string'],
            [['img', 'login', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'name' => 'Name',
            'birthday' => 'Birthday',
            'city' => 'City',
            'education' => 'Education',
            'language' => 'Language',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }
}
