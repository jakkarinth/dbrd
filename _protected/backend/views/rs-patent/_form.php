<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsPatent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-patent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a_aname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rsid')->textInput() ?>

    <?= $form->field($model, 'rid')->textInput() ?>

    <?= $form->field($model, 'a_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_start')->textInput() ?>

    <?= $form->field($model, 'a_date')->textInput() ?>

    <?= $form->field($model, 'a_end')->textInput() ?>

    <?= $form->field($model, 'a_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ref_p')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ref_ai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'withs')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
