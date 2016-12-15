<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RsProposal */

$this->title = 'Update Rs Proposal: ' . $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Proposals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pid, 'url' => ['view', 'id' => $model->pid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-proposal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
