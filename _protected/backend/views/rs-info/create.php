<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsInfo */

$this->title = 'Create Rs Info';
$this->params['breadcrumbs'][] = ['label' => 'Rs Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
