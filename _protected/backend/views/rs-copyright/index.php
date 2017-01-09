<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RsCopyrightSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rs Copyrights';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-copyright-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rs Copyright', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pname',
            'rsid',
            'rrid',
            'pnum',
            // 'pnumber',
            // 'pstart',
            // 'pdate',
            // 'pend',
            // 'pstatus',
            // 'ref_ps',
            // 'ref_pis',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
