<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 04.08.2018
 * Time: 0:46
 */

namespace app\models;
use yii\base\Model;


class FileForm extends Model
{
    public $file;
    public function rules(){
        return [
            [['file'], 'file', 'maxFiles' => 4],
        ];
    }
    public function upload(){
        if ($this->validate()) {
            foreach ($this->file as $manyFile){
                $manyFile->saveAs('photo/' . $manyFile->baseName . '.' . $manyFile->extension);
            }
            return true;
        } else {
            return false;
        }
    }

}