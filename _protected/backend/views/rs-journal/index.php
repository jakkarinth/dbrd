<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RsJournalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rs Journals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-journal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rs Journal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jid',
            'j_nation',
            'j_type',
            'j_rname',
            'j_ename',
            // 'j_name',
            // 'j_start',
            // 'j_end',
            // 'j_year',
            // 'j_issue',
            // 'j_page',
            // 'dataj',
            // 'impact',
            // 'citation',
            // 'abstract_in',
            // 'abstract_ap',
            // 'abstract_co',
            // 'abstract_con',
            // 'abstract_sc',
            // 'abstract_fp',
            // 'abstract_di',
            // 'abstract_pi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
