<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsResearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-research-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rs_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_leader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_fiscal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'budget_id')->textInput() ?>

    <?= $form->field($model, 'rs_abstract_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_abstract_th')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_campus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_capital')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_pay1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_pay2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_pay3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'frid')->textInput() ?>

    <?= $form->field($model, 'rs_start')->textInput() ?>

    <?= $form->field($model, 'rs_end')->textInput() ?>

    <?= $form->field($model, 'rs_time')->textInput() ?>

    <?= $form->field($model, 'rs_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_statxt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_final')->textInput() ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <?= $form->field($model, 'project_id')->textInput() ?>

    <?= $form->field($model, 'rs_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_atyear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_nguat1')->textInput() ?>

    <?= $form->field($model, 'rs_nguat2')->textInput() ?>

    <?= $form->field($model, 'rs_nguat3')->textInput() ?>

    <?= $form->field($model, 'rs_kaona')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_knowleadge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_book')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_sum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_cd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_dbook')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
