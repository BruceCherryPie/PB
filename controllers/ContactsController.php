<?php


namespace app\controllers;


use app\models\Contact;
use yii\web\Controller;

class ContactsController extends Controller
{
 public function actionIndex()
 {
     $contacts = Contact::find()->all();
     return $this->render('index',compact('contacts'));
 }
}