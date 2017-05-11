<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\RefBudget;
use backend\models\RsFacResearch;
use backend\models\RsSubject;
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
         <div class="col-md-6">
             <?=
             $form->field($model, 'budget_id')->dropDownList(
                     ArrayHelper::map(RefBudget::find()->all(), 'budget_id', 'budget'), ['prompt' => 'เลือกแหล่งเงิน'])
             ?></div>


         <div class="col-md-6"> <?= $form->field($model, 'rs_abstract_en')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-6"><?= $form->field($model, 'rs_abstract_th')->textInput(['maxlength' => true]) ?></div>

         <div class="col-md-6"><?= $form->field($model, 'rs_campus')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-6"><?= $form->field($model, 'rs_capital')->textInput(['maxlength' => true]) ?></div>


    <div class="col-md-12"><?= $form->field($model, 'rs_class')->checkbox(['value' => "1"]) ?> </div>
         <div class="col-md-4"><?= $form->field($model, 'rs_pay1')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_pay2')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_pay3')->textInput(['maxlength' => true]) ?></div>

         <div class="col-md-6"><?= $form->field($model, 'rs_bank')->dropDownList(['1' => 'เช็ค', '0' => 'บัญชีธนาคาร'],['prompt'=>'เลือกประเภทการจ่ายเงิน']); ?>
            </div>
         <div class="col-md-6"><?=
             $form->field($model, 'frid')->dropDownList(
                     ArrayHelper::map(RsFacResearch::find()->all(), 'frid', 'fname'), ['prompt' => 'เลือกประเภทสาขางานวิจัย'])
             ?></div>

         <div class="col-md-4">
           <?= $form->field($model, 'rs_start')->widget(DatePicker::ClassName(),
             [
             'name' => 'rs_start',
             'options' => ['placeholder' => 'คลิกเลือกวันที่ ...'],
             'pluginOptions' => [
                 'format' => 'yyyy-mm-d',
                 'todayHighlight' => true
             ]
         ]);?>
         </div>

         <div class="col-md-4">
           <?= $form->field($model, 'rs_end')->widget(DatePicker::ClassName(),
             [
             'name' => 'rs_end',
             'options' => ['placeholder' => 'คลิกเลือกวันที ...'],
             'pluginOptions' => [
                 'format' => 'yyyy-mm-d',
                 'todayHighlight' => true
             ]
         ]);?>

           </div>


           <div class="col-md-4">
             <?= $form->field($model, 'rs_time')->widget(DatePicker::ClassName(),
               [
               'name' => 'rs_time',
               'options' => ['placeholder' => 'คลิกเลือกวันที ...'],
               'pluginOptions' => [
                   'format' => 'yyyy-mm-d',
                   'todayHighlight' => true
               ]
           ]);?>

         </div>
         <div class="col-md-12"><br></div>
         <div class="col-md-4">

             <?= $form->field($model, 'rs_final')->widget(DatePicker::ClassName(),
               [
               'name' => 'rs_final',
               'options' => ['placeholder' => 'คลิกเลือกวันที ...'],
               'pluginOptions' => [
                   'format' => 'yyyy-mm-d',
                   'todayHighlight' => true
               ]
           ]);?>
         </div>


         <div class="col-md-4"><?= $form->field($model, 'rs_type')->textInput(['maxlength' => true]) ?></div>
         <div class="col-md-4"><?= $form->field($model, 'rs_status')->textInput(['maxlength' => true]) ?></div>

         <div class="col-md-12"><?= $form->field($model, 'rs_note')->textArea(['maxlength' => true]) ?></div>

         <div class="col-md-12"><?= $form->field($model, 'rs_statxt')->textArea(['maxlength' => true]) ?></div>


         <div class="col-md-6"><?=
             $form->field($model, 'subject_id')->dropDownList(
                     ArrayHelper::map(RsSubject::find()->all(), 'subject_id', 'subject_name'), ['prompt' => 'เลือกกลุ่มสาขางานวิจัย'])
             ?>
                    </div>
         <div class="col-md-6"><?= $form->field($model, 'project_id')->textInput() ?></div>


         <div class="col-md-4"><?= $form->field($model, 'rs_year')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-4"><?= $form->field($model, 'rs_atyear')->textInput(['maxlength' => true]) ?></div>

     <div class="col-md-4"><?= $form->field($model, 'pro_group')->textInput(['maxlength' => true]) ?></div>

    <div class="col-md-4">
      <?= $form->field($model, 'rs_nguat1')->widget(DatePicker::ClassName(),
        [
        'name' => 'rs_nguat1',
        'options' => ['placeholder' => 'คลิกเลือกวันที ...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-d',
            'todayHighlight' => true
        ]
    ]);?>
           </div>
    <div class="col-md-4">
      <?= $form->field($model, 'rs_nguat2')->widget(DatePicker::ClassName(),
        [
        'name' => 'rs_nguat2',
        'options' => ['placeholder' => 'คลิกเลือกวันที ...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-d',
            'todayHighlight' => true
        ]
      ]);?>
            </div>
    <div class="col-md-4">
      <?= $form->field($model, 'rs_nguat3')->widget(DatePicker::ClassName(),
        [
        'name' => 'rs_nguat3',
        'options' => ['placeholder' => 'คลิกเลือกวันที ...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-d',
            'todayHighlight' => true
        ]
      ]);?>
            </div>
     <div class="col-md-12"><br></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_kaona')->textInput(['maxlength' => true]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_knowleadge')->textInput(['maxlength' => true]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_book')->textInput(['maxlength' => true]) ?></div>

    <div class="col-md-4"><?= $form->field($model, 'rs_isbn')->textInput(['maxlength' => true]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_sum')->textInput(['maxlength' => true]) ?></div>
    <div class="col-md-4"><?= $form->field($model, 'rs_cd')->textInput(['maxlength' => true]) ?></div>

    <div class="col-md-4">
      <?= $form->field($model, 'rs_dbook')->widget(DatePicker::ClassName(),
        [
        'name' => 'rs_dbook',
        'options' => ['placeholder' => 'คลิกเลือกวันที ...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-d',
            'todayHighlight' => true
        ]
      ]);?>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>

    <div class="col-md-12"><br></div>

</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่มข้อมูลงานวิจัย' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
