<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsPatentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-patents-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'a_pname') ?>

    <?= $form->field($model, 'rsid') ?>

    <?= $form->field($model, 'rid') ?>

    <?= $form->field($model, 'a_num') ?>

    <?php // echo $form->field($model, 'a number') ?>

    <?php // echo $form->field($model, 'a_start') ?>

    <?php // echo $form->field($model, 'a_date') ?>

    <?php // echo $form->field($model, 'a_end') ?>

    <?php // echo $form->field($model, 'a_status') ?>

    <?php // echo $form->field($model, 'ref_p') ?>

    <?php // echo $form->field($model, 'ref_pi') ?>

    <?php // echo $form->field($model, 'withs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
