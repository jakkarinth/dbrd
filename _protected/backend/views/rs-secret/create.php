<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsSecret */

$this->title = 'Create Rs Secret';
$this->params['breadcrumbs'][] = ['label' => 'Rs Secrets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-secret-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
