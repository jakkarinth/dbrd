<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsUseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-use-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'reid') ?>

    <?= $form->field($model, 're_inter') ?>

    <?= $form->field($model, 're_tname') ?>

    <?= $form->field($model, 're_ename') ?>

    <?= $form->field($model, 're_end') ?>

    <?php // echo $form->field($model, 're_start') ?>

    <?php // echo $form->field($model, 're_date') ?>

    <?php // echo $form->field($model, 're_area') ?>

    <?php // echo $form->field($model, 'abstract_up') ?>

    <?php // echo $form->field($model, 'abstract_uc') ?>

    <?php // echo $form->field($model, 'abstract_ut') ?>

    <?php // echo $form->field($model, 'abstract_ua') ?>

    <?php // echo $form->field($model, 'abstract_us') ?>

    <?php // echo $form->field($model, 'abstract_uo') ?>

    <?php // echo $form->field($model, 'abstract_ute') ?>

    <?php // echo $form->field($model, 're_test') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
