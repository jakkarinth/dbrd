<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RsResearch */

$this->title = $model->rsid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Researches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-research-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rsid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rsid], [
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
            'rsid',
            'rs_name',
            'rs_name_en',
            'rs_leader',
            'rs_team',
            'rs_fiscal',
            'budget_id',
            'rs_abstract_en',
            'rs_abstract_th',
            'rs_campus',
            'rs_capital',
            'rs_class',
            'rs_pay1',
            'rs_pay2',
            'rs_pay3',
            'rs_bank',
            'frid',
            'rs_start',
            'rs_end',
            'rs_time',
            'rs_type',
            'rs_status',
            'rs_note',
            'rs_statxt',
            'rs_final',
            'subject_id',
            'project_id',
            'rs_year',
            'rs_atyear',
            'pro_group',
            'rs_nguat1',
            'rs_nguat2',
            'rs_nguat3',
            'rs_kaona',
            'rs_knowleadge',
            'rs_book',
            'rs_isbn',
            'rs_sum',
            'rs_cd',
            'rs_dbook',
        ],
    ]) ?>

</div>
