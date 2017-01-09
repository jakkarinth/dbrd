<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsCopyright */

$this->title = 'Create Rs Copyright';
$this->params['breadcrumbs'][] = ['label' => 'Rs Copyrights', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-copyright-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
