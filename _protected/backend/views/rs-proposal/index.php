<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RsProposalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลข้อเสนอโครงการ Proposal';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-proposal-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อเสนอโครงการ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pid',
            'p_name',
            'p_name_en',
            'rs_leader',
            'rs_team',
            // 'p_fiscal',
            // 'p_budget',
            // 'p_campus',
            // 'p_start',
            // 'p_end',
            // 'p_type',
            // 'p_grade',
            // 'p_sequence',
            // 'p_result',
            // 'p_reason:ntext',
            // 'p_weakness',
            // 'project_id',
            // 'rs_year',
            // 'rs_atyear',
            // 'pro_group',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
