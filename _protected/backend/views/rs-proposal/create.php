<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsProposal */

$this->title = 'สร้างข้อเสนอโครงการวิจัย';
$this->params['breadcrumbs'][] = ['label' => 'Rs Proposals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-proposal-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
