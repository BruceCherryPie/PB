<?php


namespace app\models;


use yii\db\ActiveRecord;

class Phones extends ActiveRecord
{
    public static function tableName()
    {
        return 'phones';
    }
}