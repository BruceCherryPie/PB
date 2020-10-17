<?php


namespace app\models;


use yii\db\ActiveRecord;

class Companys extends ActiveRecord
{
    public static function tableName()
    {
        return 'companys';
    }
}