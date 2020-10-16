<?php


namespace app\controllers;


use app\models\Contacts;
use yii\web\Controller;

class ContactsController extends Controller
{
 public function actionIndex()
 {
     $contacts = Contacts::find()->all();
     return $this->render('index',compact('contacts'));
 }
}