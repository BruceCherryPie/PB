<?php


namespace app\models;


use yii\db\ActiveRecord;

class Statuses extends ActiveRecord
{
    public static function tableName()
    {
        return 'statuses';
    }
}