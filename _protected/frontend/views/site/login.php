<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', 'เข้าสู่ระบบ');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-lg-5 well bs-component">

        <p><?= Yii::t('app', 'กรุณากรอกชื่อผู้ใช้งานและรหัสผ่านก่อนเข้าสู่ระบบ :') ?></p>

        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?php //-- use email or username field depending on model scenario --// ?>
        <?php if ($model->scenario === 'lwe'): ?>
            <?= $form->field($model, 'email') ?>        
        <?php else: ?>
            <?= $form->field($model, 'username') ?>
        <?php endif ?>

        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div style="color:#999;margin:1em 0">
            <?= Yii::t('app', 'หากลืมรหัสผ่านคุณสามารถรีเซ็ตได้ >>>') ?>
            <?= Html::a(Yii::t('app', 'รีเซ็ตรหัสผ่าน'), ['site/request-password-reset']) ?>.
        </div>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            
        </div>
            <?= Html::a(Yii::t('app', 'สำหรับเจ้าเจ้าที่'), ['backend/site/login']) ?>.
        <?php ActiveForm::end(); ?>

    </div>
  
</div>
