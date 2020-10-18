<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$form = ActiveForm::begin(['layout' => 'horizontal'])?>
<?= $form->field($model, 'fio') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'phone') ?>
<?= $form->field($model, 'company') ?>
<?= $form->field($model, 'birthdate') ?>
<?= $form->field($model, 'status') ?>

    <div class="form-group">
        <div class="col-lg-offset-5 col-lg-7">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>