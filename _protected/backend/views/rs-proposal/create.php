<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsProposal */

$this->title = 'Create Rs Proposal';
$this->params['breadcrumbs'][] = ['label' => 'Rs Proposals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-proposal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
