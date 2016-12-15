<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsProposalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-proposal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pid') ?>

    <?= $form->field($model, 'p_name') ?>

    <?= $form->field($model, 'p_name_en') ?>

    <?= $form->field($model, 'rs_leader') ?>

    <?= $form->field($model, 'rs_team') ?>

    <?php // echo $form->field($model, 'p_fiscal') ?>

    <?php // echo $form->field($model, 'p_budget') ?>

    <?php // echo $form->field($model, 'p_campus') ?>

    <?php // echo $form->field($model, 'p_start') ?>

    <?php // echo $form->field($model, 'p_end') ?>

    <?php // echo $form->field($model, 'p_type') ?>

    <?php // echo $form->field($model, 'p_grade') ?>

    <?php // echo $form->field($model, 'p_sequence') ?>

    <?php // echo $form->field($model, 'p_result') ?>

    <?php // echo $form->field($model, 'p_reason') ?>

    <?php // echo $form->field($model, 'p_weakness') ?>

    <?php // echo $form->field($model, 'project_id') ?>

    <?php // echo $form->field($model, 'rs_year') ?>

    <?php // echo $form->field($model, 'rs_atyear') ?>

    <?php // echo $form->field($model, 'pro_group') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
