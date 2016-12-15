<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RsProposal */

$this->title = $model->pid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Proposals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-proposal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pid], [
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
            'pid',
            'p_name',
            'p_name_en',
            'rs_leader',
            'rs_team',
            'p_fiscal',
            'p_budget',
            'p_campus',
            'p_start',
            'p_end',
            'p_type',
            'p_grade',
            'p_sequence',
            'p_result',
            'p_reason:ntext',
            'p_weakness',
            'project_id',
            'rs_year',
            'rs_atyear',
            'pro_group',
        ],
    ]) ?>

</div>
