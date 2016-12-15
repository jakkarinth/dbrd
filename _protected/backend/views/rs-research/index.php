<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RsResearchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'โครงการวิจัย';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-research-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูลโครงการวิจัย', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rsid',
            'rs_name',
            'rs_name_en',
            'rs_leader',
            'rs_team',
            // 'rs_fiscal',
            // 'budget_id',
            // 'rs_abstract_en',
            // 'rs_abstract_th',
            // 'rs_campus',
            // 'rs_capital',
            // 'rs_class',
            // 'rs_pay1',
            // 'rs_pay2',
            // 'rs_pay3',
            // 'rs_bank',
            // 'frid',
            // 'rs_start',
            // 'rs_end',
            // 'rs_time',
            // 'rs_type',
            // 'rs_status',
            // 'rs_note',
            // 'rs_statxt',
            // 'rs_final',
            // 'subject_id',
            // 'project_id',
            // 'rs_year',
            // 'rs_atyear',
            // 'pro_group',
            // 'rs_nguat1',
            // 'rs_nguat2',
            // 'rs_nguat3',
            // 'rs_kaona',
            // 'rs_knowleadge',
            // 'rs_book',
            // 'rs_isbn',
            // 'rs_sum',
            // 'rs_cd',
            // 'rs_dbook',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
