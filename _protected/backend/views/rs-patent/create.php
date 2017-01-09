<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsPatent */

$this->title = 'Create Rs Patent';
$this->params['breadcrumbs'][] = ['label' => 'Rs Patents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-patent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
