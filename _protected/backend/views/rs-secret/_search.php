<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsSecretSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-secret-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'secret_name') ?>

    <?= $form->field($model, 'rsid') ?>

    <?= $form->field($model, 'rid') ?>

    <?= $form->field($model, 'secret_num') ?>

    <?php // echo $form->field($model, 'secret_number') ?>

    <?php // echo $form->field($model, 'secret_start') ?>

    <?php // echo $form->field($model, 'secret_date') ?>

    <?php // echo $form->field($model, 'secret_status') ?>

    <?php // echo $form->field($model, 'ref_secret') ?>

    <?php // echo $form->field($model, 'withs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
