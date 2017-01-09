<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RsUse */

$this->title = 'Update Rs Use: ' . $model->reid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reid, 'url' => ['view', 'id' => $model->reid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-use-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
