<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RsInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'จัดการข้อมูลนักวิจัย';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-info-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เพิ่มข้อมูลนักวิจัย', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rid',
            'r_num',
            'r_fname_en',
            'r_lname_en',
            'r_lname_th',
            // 'f_lname_th',
            // 'r_date',
            // 'r_month',
            // 'r_yaer',
            // 'r_personal',
            // 'r_picture',
            // 'r_address',
            // 'r_city',
            // 'r_province',
            // 'r_postal',
            // 'r_tel',
            // 'r_fax',
            // 'r_mobile',
            // 'r_email:email',
            // 'r_nrct',
            // 'r_position',
            // 'r_administ',
            // 'r_dept_id',
            // 'r_fac_id',
            // 'r_cmp_id',
            // 'r_Aeducation:ntext',
            // 'r_Meducation:ntext',
            // 'r_Beducation:ntext',
            // 'r_experience:ntext',
            // 'r_expert:ntext',
            // 'r_type',
            // 'r_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
