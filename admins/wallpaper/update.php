<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wallpaper */

$this->title = 'Update Wallpaper: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Wallpapers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wallpaper-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
