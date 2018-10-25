<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 31.07.2018
 * Time: 17:21
 */

namespace app\models;


use yii\db\ActiveRecord;

class Information extends ActiveRecord
{
     public static function tableName(){
         return 'db_inf';
     }
}