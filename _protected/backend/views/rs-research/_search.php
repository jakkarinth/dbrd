<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsResearchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-research-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rsid') ?>

    <?= $form->field($model, 'rs_name') ?>

    <?= $form->field($model, 'rs_name_en') ?>

    <?= $form->field($model, 'rs_leader') ?>

    <?= $form->field($model, 'rs_team') ?>

    <?php // echo $form->field($model, 'rs_fiscal') ?>

    <?php // echo $form->field($model, 'budget_id') ?>

    <?php // echo $form->field($model, 'rs_abstract_en') ?>

    <?php // echo $form->field($model, 'rs_abstract_th') ?>

    <?php // echo $form->field($model, 'rs_campus') ?>

    <?php // echo $form->field($model, 'rs_capital') ?>

    <?php // echo $form->field($model, 'rs_class') ?>

    <?php // echo $form->field($model, 'rs_pay1') ?>

    <?php // echo $form->field($model, 'rs_pay2') ?>

    <?php // echo $form->field($model, 'rs_pay3') ?>

    <?php // echo $form->field($model, 'rs_bank') ?>

    <?php // echo $form->field($model, 'frid') ?>

    <?php // echo $form->field($model, 'rs_start') ?>

    <?php // echo $form->field($model, 'rs_end') ?>

    <?php // echo $form->field($model, 'rs_time') ?>

    <?php // echo $form->field($model, 'rs_type') ?>

    <?php // echo $form->field($model, 'rs_status') ?>

    <?php // echo $form->field($model, 'rs_note') ?>

    <?php // echo $form->field($model, 'rs_statxt') ?>

    <?php // echo $form->field($model, 'rs_final') ?>

    <?php // echo $form->field($model, 'subject_id') ?>

    <?php // echo $form->field($model, 'project_id') ?>

    <?php // echo $form->field($model, 'rs_year') ?>

    <?php // echo $form->field($model, 'rs_atyear') ?>

    <?php // echo $form->field($model, 'pro_group') ?>

    <?php // echo $form->field($model, 'rs_nguat1') ?>

    <?php // echo $form->field($model, 'rs_nguat2') ?>

    <?php // echo $form->field($model, 'rs_nguat3') ?>

    <?php // echo $form->field($model, 'rs_kaona') ?>

    <?php // echo $form->field($model, 'rs_knowleadge') ?>

    <?php // echo $form->field($model, 'rs_book') ?>

    <?php // echo $form->field($model, 'rs_isbn') ?>

    <?php // echo $form->field($model, 'rs_sum') ?>

    <?php // echo $form->field($model, 'rs_cd') ?>

    <?php // echo $form->field($model, 'rs_dbook') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
