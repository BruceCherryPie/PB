<?php
use yii\widgets\DetailView;

?>
    <h2>Просмотр</h2>
<?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'fio',
        'email',
        'phone',
        'company',
        'birthdate',
        'status',
    ],
]);