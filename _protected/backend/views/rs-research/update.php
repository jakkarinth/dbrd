<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RsResearch */

$this->title = 'Update Rs Research: ' . $model->rsid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Researches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rsid, 'url' => ['view', 'id' => $model->rsid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-research-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
