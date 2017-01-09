<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RsUseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rs Uses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-use-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rs Use', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reid',
            're_inter',
            're_tname',
            're_ename',
            're_end',
            // 're_start',
            // 're_date',
            // 're_area',
            // 'abstract_up',
            // 'abstract_uc',
            // 'abstract_ut',
            // 'abstract_ua',
            // 'abstract_us',
            // 'abstract_uo',
            // 'abstract_ute',
            // 're_test',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
