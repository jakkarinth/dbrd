<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RsCopyright */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rs Copyrights', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-copyright-view">

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
            'pname',
            'rsid',
            'rrid',
            'pnum',
            'pnumber',
            'pstart',
            'pdate',
            'pend',
            'pstatus',
            'ref_ps',
            'ref_pis',
        ],
    ]) ?>

</div>
