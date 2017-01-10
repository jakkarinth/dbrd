<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\RefDepartment;
use backend\models\RefFac;
use backend\models\RefUniv;


/* @var $this yii\web\View */
/* @var $model backend\models\RsInfo */

$this->title = 'รายละเอียดข้อมูลนักวิจัย ID : '.$model->rid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-info-view">


    <p>
        <?= Html::a('แก้ไข', ['update', 'id' => $model->rid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('ลบ', ['delete', 'id' => $model->rid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลนักวิจัยท่านนี้',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rid',
            'r_num',
            'r_fname_en',
            'r_lname_en',
            'r_lname_th',
            'f_lname_th',
            'r_date',
            'r_month',
            'r_yaer',
            'r_personal',
            'r_picture',
            'r_address',
            'r_city',
            'r_province',
            'r_postal',
            'r_tel',
            'r_fax',
            'r_mobile',
            'r_email:email',
            'r_nrct',
            'r_position',
            'r_administ',
            'r_dept_id',
            'r_fac_id',
            'r_cmp_id',
            'r_Aeducation:ntext',
            'r_Meducation:ntext',
            'r_Beducation:ntext',
            'r_experience:ntext',
            'r_expert:ntext',
            'r_type',
            'r_status',
        ],
    ]) ?>

</div>
