<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsJournal */

$this->title = 'Create Rs Journal';
$this->params['breadcrumbs'][] = ['label' => 'Rs Journals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-journal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
