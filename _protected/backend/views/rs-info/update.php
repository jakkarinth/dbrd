<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RsInfo */

$this->title = 'แก้ไขข้อมูลนักวิจัย ID : ' . $model->rid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rid, 'url' => ['view', 'id' => $model->rid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-info-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
