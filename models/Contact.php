<?php


namespace app\models;


use yii\db\ActiveRecord;

class Contact extends ActiveRecord
{
    public static function tableName()
    {
        return 'contacts';
    }
    public function getCompanys()
    {
        return $this->hasMany(Companys::class, ['contact_id'=> 'id'] );
    }
    public function getEmails()
    {
        return $this->hasMany(Emails::class, ['contact_id'=> 'id'] );
    }
    public function getPhones()
    {
        return $this->hasMany(Phones::class, ['contact_id'=> 'id'] );
    }
    public function getStatuses()
    {
        return $this->hasMany(Statuses::class, ['contact_id'=> 'id'] );
    }
}