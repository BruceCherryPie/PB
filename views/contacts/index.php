<?php

/* @var $this yii\web\View */

$this->title = 'Список контактов';
use yii\grid\GridView
?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Список контактов</h1>

    </div>

        <?PHP
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns'=>[
            'fio',
            'phone',
            'email',
            'company',
            'birthdate',
            'status',
            ['class' => 'yii\grid\ActionColumn']
            ]
        ]);
        ?>


<!--        --><?php //foreach ($contacts as $contact): {
//
//        }?>
<!--        <tr>-->
<!--            <td>--><?//= $contact->fio?><!--</td>-->
<!--            <td>--><?//= $contact->email?><!--</td>-->
<!--            <td>--><?//= $contact->phone?><!--</td>-->
<!--            <td>--><?//= Yii::$app->formatter->asDate($contact->birthdate)?><!--</td>-->
<!--            <td>--><?//= $contact->company?><!--</td>-->
<!--            <td>--><?//= $contact->status?><!--</td>-->
<!--            <td><a class="glyphicon glyphicon-eye-open" href="--><?//= \yii\helpers\Url::to(['contacts/single', 'id' => $contact->id]) ?><!--"></a></td>-->
<!--        </tr>-->
<!--        --><?php //endforeach;?>
        </tbody>
    </table>

</div>
