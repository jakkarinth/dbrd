<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RsJournal */

$this->title = 'Update Rs Journal: ' . $model->jid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Journals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jid, 'url' => ['view', 'id' => $model->jid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-journal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
