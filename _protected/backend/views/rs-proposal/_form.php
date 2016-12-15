<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsProposal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-proposal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_leader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_fiscal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_budget')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_campus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_start')->textInput() ?>

    <?= $form->field($model, 'p_end')->textInput() ?>

    <?= $form->field($model, 'p_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_grade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_sequence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_result')->textInput() ?>

    <?= $form->field($model, 'p_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'p_weakness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_id')->textInput() ?>

    <?= $form->field($model, 'rs_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rs_atyear')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pro_group')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
