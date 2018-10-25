<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 13.08.2018
 * Time: 18:28
 */

namespace app\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
    public static function tableName(){
        return 'any_file';
    }

}