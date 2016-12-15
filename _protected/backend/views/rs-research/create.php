<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsResearch */

$this->title = 'Create Rs Research';
$this->params['breadcrumbs'][] = ['label' => 'Rs Researches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-research-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
