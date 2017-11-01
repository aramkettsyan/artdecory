<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Wallpaper */

$this->title = 'Create Wallpaper';
$this->params['breadcrumbs'][] = ['label' => 'Wallpapers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wallpaper-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
