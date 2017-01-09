<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsSecret */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-secret-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'secret_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rsid')->textInput() ?>

    <?= $form->field($model, 'rid')->textInput() ?>

    <?= $form->field($model, 'secret_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secret_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secret_start')->textInput() ?>

    <?= $form->field($model, 'secret_date')->textInput() ?>

    <?= $form->field($model, 'secret_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ref_secret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'withs')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
