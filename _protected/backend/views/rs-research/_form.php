<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsResearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-research-form">

    <?php $form = ActiveForm::begin(); ?>
 <div class="container">
 
     <div class="row">
         <div class="col-md-12"><?= $form->field($model, 'rs_name')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-12"><?= $form->field($model, 'rs_name_en')->textInput(['maxlength' => true]) ?></div>
            
         <div class="col-md-6"><?= $form->field($model, 'rs_leader')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-6"><?= $form->field($model, 'rs_team')->textInput(['maxlength' => true]) ?></div>

         <div class="col-md-6"><?= $form->field($model, 'rs_fiscal')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-6"><?= $form->field($model, 'budget_id')->textInput() ?></div>
         
         <div class="col-md-6"> <?= $form->field($model, 'rs_abstract_en')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-6"><?= $form->field($model, 'rs_abstract_th')->textInput(['maxlength' => true]) ?></div>
     
         <div class="col-md-6"><?= $form->field($model, 'rs_campus')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-6"><?= $form->field($model, 'rs_capital')->textInput(['maxlength' => true]) ?></div>

    
    <div class="col-md-12"><?= $form->field($model, 'rs_class')->checkbox(['value' => "1"]) ?> </div>
         <div class="col-md-4"><?= $form->field($model, 'rs_pay1')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_pay2')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_pay3')->textInput(['maxlength' => true]) ?></div>

         <div class="col-md-6"><?= $form->field($model, 'rs_bank')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-6"><?= $form->field($model, 'frid')->textInput() ?></div>

         <div class="col-md-4"><?= $form->field($model, 'rs_start')->textInput() ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_end')->textInput() ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_time')->textInput() ?></div>
         
         <div class="col-md-4"><?= $form->field($model, 'rs_final')->textInput() ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_type')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_status')->textInput(['maxlength' => true]) ?></div>

         <div class="col-md-12"><?= $form->field($model, 'rs_note')->textArea(['maxlength' => true]) ?></div>

         <div class="col-md-12"><?= $form->field($model, 'rs_statxt')->textArea(['maxlength' => true]) ?></div>

    
         <div class="col-md-6"><?= $form->field($model, 'subject_id')->textInput() ?></div>
         <div class="col-md-6"><?= $form->field($model, 'project_id')->textInput() ?></div>


         <div class="col-md-4"><?= $form->field($model, 'rs_year')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-4"><?= $form->field($model, 'rs_atyear')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-4"><?= $form->field($model, 'pro_group')->textInput(['maxlength' => true]) ?></div>
         
    <div class="col-md-4"><?= $form->field($model, 'rs_nguat1')->textInput() ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_nguat2')->textInput() ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_nguat3')->textInput() ?></div>
       
    <div class="col-md-4"><?= $form->field($model, 'rs_kaona')->textInput(['maxlength' => true]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_knowleadge')->textInput(['maxlength' => true]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_book')->textInput(['maxlength' => true]) ?></div>
       
    <div class="col-md-4"><?= $form->field($model, 'rs_isbn')->textInput(['maxlength' => true]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_sum')->textInput(['maxlength' => true]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_cd')->textInput(['maxlength' => true]) ?></div>
       
    <div class="col-md-12"><?=
        $form->field($model, 'rs_dbook')->widget(\yii\jui\DatePicker::classname(), [
            //'language' => 'ru',
            'dateFormat' => 'yyyy-MM-dd',
        ])
        ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่มข้อมูลงานวิจัย' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
</div>
