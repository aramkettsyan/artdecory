<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wallpaper */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Wallpapers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wallpaper-view">

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
            'category_id',
            'parent_id',
            'title',
            'sku',
            'collection',
            'material_id',
            'country_id',
            'factory_id',
            'purpose_id',
            'color_id',
            'image_id',
            'sort_id',
            'width',
            'length',
            'podgon',
            'price_rub',
            'price_usd',
            'price_eur',
            'url:url',
            'image',
            'content:ntext',
            'seo_title',
            'seo_description',
            'seo_keywords',
            'is_enable',
            'is_new',
            'is_popular',
            'is_discount',
            'created_at',
            'updated_at',
            'href',
        ],
    ]) ?>

</div>
