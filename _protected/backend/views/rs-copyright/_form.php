<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsCopyright */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-copyright-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rsid')->textInput() ?>

    <?= $form->field($model, 'rrid')->textInput() ?>

    <?= $form->field($model, 'pnum')->textInput() ?>

    <?= $form->field($model, 'pnumber')->textInput() ?>

    <?= $form->field($model, 'pstart')->textInput() ?>

    <?= $form->field($model, 'pdate')->textInput() ?>

    <?= $form->field($model, 'pend')->textInput() ?>

    <?= $form->field($model, 'pstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ref_ps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ref_pis')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
