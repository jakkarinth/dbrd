<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RsPatent */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rs Patents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-patent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'a_aname',
            'rsid',
            'rid',
            'a_num',
            'a number',
            'a_start',
            'a_date',
            'a_end',
            'a_status',
            'ref_p',
            'ref_ai',
            'withs',
        ],
    ]) ?>

</div>
