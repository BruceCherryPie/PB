<?php


namespace app\models;


use yii\db\ActiveRecord;

class Contacts extends ActiveRecord
{
    public function attributeLabels()
    {
    return[
        'fio'=>'ФИО',
        'email'=>'Электронная почта',
        'phone'=>'Телефон',
        'company'=>'Место работы',
        'birthdate'=>'Дата рождения',
        'status'=>'Статус'
    ];
    }
    public function rules()
    {
        return [
            [['fio','phone'],'required']
        ];
    }

}