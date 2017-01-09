<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RsSecretSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rs Secrets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-secret-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rs Secret', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'secret_name',
            'rsid',
            'rid',
            'secret_num',
            // 'secret_number',
            // 'secret_start',
            // 'secret_date',
            // 'secret_status',
            // 'ref_secret',
            // 'withs',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
