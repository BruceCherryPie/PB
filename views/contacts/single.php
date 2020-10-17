<?php
/* @var $this yii\web\View */

$this->title = 'Редактирование';
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Редактирование</h1>

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
        <?php
        while ($row = $contacts->fetch(PDO::FETCH_OBJ)){
            echo '<li><b>'.$row->contact.'</b></li>';
        }
        ?>
        </tbody>
    </table>

</div>