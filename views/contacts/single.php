<?php

/* @var $this yii\web\View */

$this->title = 'Новый контакт';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Создание контакта</h1>

    </div>
    <table class="table table-striped" style="border: 2px solid lightgrey">
        <tbody>
        <tr>
            <td>ФИО</td>
            <td>Электронная почта</td>
            <td>Номер</td>
            <td>Дата рождения</td>
            <td>Компания</td>
            <td>Статус</td>
        </tr>
        <tr>
            <td><input name ="fio" placeholder="Фамилия Имя"><?= $contact->fio?></input></td>
            <td><input name ="email" placeholder="example1@mail.ru, example2@mail.ru"><?= $contact->email?></input></td>
            <td><input name ="phone" placeholder="+79999999999"><?= $contact->phone?></input></td>
            <td><input name ="birthdate" placeholder="1999-12-31"><?= $contact->birthdate?></input></td>
            <td><input name ="company" placeholder="Company"><?= $contact->company?></input></td>
            <td><input name ="status" ><?= $contact->status?></input></td>
            </td>
        </tr>
        </tbody>
    </table>

    <button action="actionNew" type="submit" name="newContact" class="btn btn-success">Сохранить
    </button>
</div>