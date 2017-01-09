<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsJournal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-journal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'j_nation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_type')->textInput() ?>

    <?= $form->field($model, 'j_rname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_ename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_start')->textInput() ?>

    <?= $form->field($model, 'j_end')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_issue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'j_page')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dataj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'impact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'citation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_in')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_ap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_co')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_con')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_sc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_fp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_di')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'abstract_pi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
