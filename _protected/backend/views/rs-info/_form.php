<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rid')->textInput() ?>

    <?= $form->field($model, 'r_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_fname_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_lname_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_lname_th')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_lname_th')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_date')->textInput() ?>

    <?= $form->field($model, 'r_month')->textInput() ?>

    <?= $form->field($model, 'r_yaer')->textInput() ?>

    <?= $form->field($model, 'r_personal')->textInput() ?>

    <?= $form->field($model, 'r_picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_postal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_nrct')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_administ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r_dept_id')->textInput() ?>

    <?= $form->field($model, 'r_fac_id')->textInput() ?>

    <?= $form->field($model, 'r_cmp_id')->textInput() ?>

    <?= $form->field($model, 'r_Aeducation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'r_Meducation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'r_Beducation')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'r_experience')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'r_expert')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'r_type')->textInput() ?>

    <?= $form->field($model, 'r_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
