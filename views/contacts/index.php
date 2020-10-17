<?php

/* @var $this yii\web\View */

$this->title = 'Список контактов';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Список контактов</h1>

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

        <?php foreach ($contacts as $contact) ?>
        <tr>
            <td><?= $contact->fio?></td>
            <td></td>
            <td></td>
            <td>
                <?= $contact->birthdate?>
            </td>
            <td>

            </td>
            <td>
                <?= $contact->status?>
            </td>
        </tr>
        </tbody>
    </table>



</div>
