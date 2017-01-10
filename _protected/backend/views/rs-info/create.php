<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsInfo */

$this->title = 'ฟอร์มข้อมูลนักวิจัย';
$this->params['breadcrumbs'][] = ['label' => 'Rs Infos', 'url' => ['index']];

?>
<div class="rs-info-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
