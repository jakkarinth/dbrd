<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsCopyrightSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-copyright-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pname') ?>

    <?= $form->field($model, 'rsid') ?>

    <?= $form->field($model, 'rrid') ?>

    <?= $form->field($model, 'pnum') ?>

    <?php // echo $form->field($model, 'pnumber') ?>

    <?php // echo $form->field($model, 'pstart') ?>

    <?php // echo $form->field($model, 'pdate') ?>

    <?php // echo $form->field($model, 'pend') ?>

    <?php // echo $form->field($model, 'pstatus') ?>

    <?php // echo $form->field($model, 'ref_ps') ?>

    <?php // echo $form->field($model, 'ref_pis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
