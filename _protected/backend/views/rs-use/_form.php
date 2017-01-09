<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsUse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-use-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reid')->textInput() ?>

    <?= $form->field($model, 're_inter')->textInput() ?>

    <?= $form->field($model, 're_tname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 're_ename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 're_end')->textInput() ?>

    <?= $form->field($model, 're_start')->textInput() ?>

    <?= $form->field($model, 're_date')->textInput() ?>

    <?= $form->field($model, 're_area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_up')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_uc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_ut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_us')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_uo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_ute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 're_test')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
