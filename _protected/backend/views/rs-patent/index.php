<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RsPatentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rs Patents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-patent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rs Patent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'a_aname',
            'rsid',
            'rid',
            'a_num',
            // 'a number',
            // 'a_start',
            // 'a_date',
            // 'a_end',
            // 'a_status',
            // 'ref_p',
            // 'ref_ai',
            // 'withs',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
