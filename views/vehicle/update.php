<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vehicle */

$this->title = 'Update Vehicle: ' . $model->vehice_id;
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vehice_id, 'url' => ['view', 'id' => $model->vehice_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
