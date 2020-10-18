<?php


namespace app\controllers;

use yii\data\ActiveDataProvider;
use app\models\Contacts;
use yii\web\Controller;

class ContactsController extends Controller
{
// public function actionIndex()
// {
//     $contacts = Contacts::find()->all();
//     return $this->render('index',compact('contacts'));
// }
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Contacts::find(),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('index',['dataProvider'=>$dataProvider]);
    }
//    public function actionUpdate($id)
//    {
//        $model = Contacts::findOne($id);
//
//    }
//    public function actionView($id)
//    {
//        $model = Contacts::findOne($id);
//        return $this->render('view',['model'=>$model])
//    }
 public function actionSingle()
 {
     return $this->render('single',compact('contacts'));
 }
// public function actionNew()
// {
//    $dsn = 'mysql:host=localhost;dbname=phonebook';
//        $pdo = new PDO($dsn, 'root','root');
//
//    $fio = $_POST['fio'];
//    $email = $_POST['email'];
//    $phone = $_POST['phone'];
//    $birthdate = $_POST['birthdate'];
//    $company = $_POST['company'];
//    $sql = 'INSERT INTO contacts(fio, email, phone, company, birthdate) VALUES(:fio, :email, :phone, :company, :birthdate)';
//    $query = $pdo->prepare($sql);
//    $query->execute(['fio' => $fio, 'email' => $email, 'phone' => $phone, 'company' => $company, 'birthdate' => $birthdate]);
//    header('Location: /');
// }
}