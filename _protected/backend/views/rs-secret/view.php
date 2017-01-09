<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RsSecret */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rs Secrets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-secret-view">

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
            'secret_name',
            'rsid',
            'rid',
            'secret_num',
            'secret_number',
            'secret_start',
            'secret_date',
            'secret_status',
            'ref_secret',
            'withs',
        ],
    ]) ?>

</div>
