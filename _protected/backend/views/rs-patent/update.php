<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RsPatent */

$this->title = 'Update Rs Patent: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rs Patents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-patent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
