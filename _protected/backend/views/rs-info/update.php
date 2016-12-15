<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RsInfo */

$this->title = 'Update Rs Info: ' . $model->rid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rid, 'url' => ['view', 'id' => $model->rid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
