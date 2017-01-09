<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RsCopyright */

$this->title = 'Update Rs Copyright: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rs Copyrights', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rs-copyright-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
