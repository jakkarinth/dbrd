<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsJournalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-journal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jid') ?>

    <?= $form->field($model, 'j_nation') ?>

    <?= $form->field($model, 'j_type') ?>

    <?= $form->field($model, 'j_rname') ?>

    <?= $form->field($model, 'j_ename') ?>

    <?php // echo $form->field($model, 'j_name') ?>

    <?php // echo $form->field($model, 'j_start') ?>

    <?php // echo $form->field($model, 'j_end') ?>

    <?php // echo $form->field($model, 'j_year') ?>

    <?php // echo $form->field($model, 'j_issue') ?>

    <?php // echo $form->field($model, 'j_page') ?>

    <?php // echo $form->field($model, 'dataj') ?>

    <?php // echo $form->field($model, 'impact') ?>

    <?php // echo $form->field($model, 'citation') ?>

    <?php // echo $form->field($model, 'abstract_in') ?>

    <?php // echo $form->field($model, 'abstract_ap') ?>

    <?php // echo $form->field($model, 'abstract_co') ?>

    <?php // echo $form->field($model, 'abstract_con') ?>

    <?php // echo $form->field($model, 'abstract_sc') ?>

    <?php // echo $form->field($model, 'abstract_fp') ?>

    <?php // echo $form->field($model, 'abstract_di') ?>

    <?php // echo $form->field($model, 'abstract_pi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
