<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RsJournal */

$this->title = $model->jid;
$this->params['breadcrumbs'][] = ['label' => 'Rs Journals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-journal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->jid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->jid], [
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
            'jid',
            'j_nation',
            'j_type',
            'j_rname',
            'j_ename',
            'j_name',
            'j_start',
            'j_end',
            'j_year',
            'j_issue',
            'j_page',
            'dataj',
            'impact',
            'citation',
            'abstract_in',
            'abstract_ap',
            'abstract_co',
            'abstract_con',
            'abstract_sc',
            'abstract_fp',
            'abstract_di',
            'abstract_pi',
        ],
    ]) ?>

</div>
