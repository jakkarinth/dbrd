<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RsResearch */

$this->title = 'ฟอร์มโครงการวิจัย';
$this->params['breadcrumbs'][] = ['label' => 'Rs Researches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rs-research-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
