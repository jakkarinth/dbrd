<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsUse */

$this->title = 'Create Rs Use';
$this->params['breadcrumbs'][] = ['label' => 'Rs Uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-use-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
