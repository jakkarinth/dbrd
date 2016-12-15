<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RsInfo */

$this->title = $model->rid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rid], [
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
