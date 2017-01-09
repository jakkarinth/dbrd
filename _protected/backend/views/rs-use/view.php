<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RsUse */

$this->title = $model->reid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-use-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->reid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->reid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'reid',
            're_inter',
            're_tname',
            're_ename',
            're_end',
            're_start',
            're_date',
            're_area',
            'abstract_up',
            'abstract_uc',
            'abstract_ut',
            'abstract_ua',
            'abstract_us',
            'abstract_uo',
            'abstract_ute',
            're_test',
        ],
    ]) ?>

</div>
