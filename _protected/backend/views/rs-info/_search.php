<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RsInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rs-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rid') ?>

    <?= $form->field($model, 'r_num') ?>

    <?= $form->field($model, 'r_fname_en') ?>

    <?= $form->field($model, 'r_lname_en') ?>

    <?= $form->field($model, 'r_lname_th') ?>

    <?php // echo $form->field($model, 'f_lname_th') ?>

    <?php // echo $form->field($model, 'r_date') ?>

    <?php // echo $form->field($model, 'r_month') ?>

    <?php // echo $form->field($model, 'r_yaer') ?>

    <?php // echo $form->field($model, 'r_personal') ?>

    <?php // echo $form->field($model, 'r_picture') ?>

    <?php // echo $form->field($model, 'r_address') ?>

    <?php // echo $form->field($model, 'r_city') ?>

    <?php // echo $form->field($model, 'r_province') ?>

    <?php // echo $form->field($model, 'r_postal') ?>

    <?php // echo $form->field($model, 'r_tel') ?>

    <?php // echo $form->field($model, 'r_fax') ?>

    <?php // echo $form->field($model, 'r_mobile') ?>

    <?php // echo $form->field($model, 'r_email') ?>

    <?php // echo $form->field($model, 'r_nrct') ?>

    <?php // echo $form->field($model, 'r_position') ?>

    <?php // echo $form->field($model, 'r_administ') ?>

    <?php // echo $form->field($model, 'r_dept_id') ?>

    <?php // echo $form->field($model, 'r_fac_id') ?>

    <?php // echo $form->field($model, 'r_cmp_id') ?>

    <?php // echo $form->field($model, 'r_Aeducation') ?>

    <?php // echo $form->field($model, 'r_Meducation') ?>

    <?php // echo $form->field($model, 'r_Beducation') ?>

    <?php // echo $form->field($model, 'r_experience') ?>

    <?php // echo $form->field($model, 'r_expert') ?>

    <?php // echo $form->field($model, 'r_type') ?>

    <?php // echo $form->field($model, 'r_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
