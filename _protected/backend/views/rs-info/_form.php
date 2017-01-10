<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\RefDepartment;
use backend\models\RefFac;
use backend\models\RefUniv;



/* @var $this yii\web\View */
/* @var $model backend\models\RsInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12"><?= $form->field($model, 'rid')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'r_num')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'r_fname_en')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'r_lname_en')->textInput(['maxlength' => true]) ?></div>
            
            <div class="col-md-4"><?= $form->field($model, 'r_nrct')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'r_lname_th')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-4"><?= $form->field($model, 'f_lname_th')->textInput(['maxlength' => true]) ?></div>
            
            <div class="col-md-3"><?= $form->field($model, 'r_date')->textInput() ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_month')->textInput() ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_yaer')->textInput() ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_picture')->textInput(['maxlength' => true]) ?></div>
    
            <div class="col-md-3"><?= $form->field($model, 'r_address')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_city')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_province')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_postal')->textInput(['maxlength' => true]) ?></div>
            
            <div class="col-md-3"><?= $form->field($model, 'r_tel')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_fax')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_mobile')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_email')->textInput(['maxlength' => true]) ?></div>
            
            <div class="col-md-3"><?= $form->field($model, 'r_position')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_administ')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-3"><?=
                $form->field($model, 'r_dept_id')->dropDownList(
                        ArrayHelper::map(RefDepartment::find()->all(), 'r_dept_id', 'dept_name'), ['prompt' => 'เลือกสาขา'])
                ?></div>
     
            <div class="col-md-3"><?=
                $form->field($model, 'r_fac_id')->dropDownList(
                        ArrayHelper::map(RefFac::find()->all(), 'r_fac_id', 'fac_name'), ['prompt' => 'เลือกคณะ'])
                ?></div>
            
            <div class="col-md-3"><?= $form->field($model, 'r_cmp_id')->dropDownList(['1' => 'นครราชสีมา', '2' => 'สุรินทร์'],['prompt'=>'เลือกวิทยาเขต']); ?></div>
            
            <div class="col-md-3"><?= $form->field($model, 'r_Aeducation')->textarea(['rows' => 3]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_Meducation')->textarea(['rows' => 3]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_Beducation')->textarea(['rows' => 3]) ?></div>
            
            <div class="col-md-3"><?= $form->field($model, 'r_experience')->textarea(['rows' => 6]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_expert')->textarea(['rows' => 6]) ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_type')->dropDownList(['1' => 'สายวิชาการ', '0' => 'สายสนับสนุน'],['prompt'=>'เลือกสถานะนักวิจัย']); ?></div>
            <div class="col-md-3"><?= $form->field($model, 'r_status')->dropDownList(['1' => 'ภายใน', '0' => 'ภายนอก'],['prompt'=>'เลือกสถานะนักวิจัย']); ?></div>
        </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่มข้อมูลนักวิจัย' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
