<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WallpaperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wallpapers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wallpaper-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wallpaper', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'parent_id',
            'title',
            'sku',
            // 'collection',
            // 'material_id',
            // 'country_id',
            // 'factory_id',
            // 'purpose_id',
            // 'color_id',
            // 'image_id',
            // 'sort_id',
            // 'width',
            // 'length',
            // 'podgon',
            // 'price_rub',
            // 'price_usd',
            // 'price_eur',
            // 'url:url',
            // 'image',
            // 'content:ntext',
            // 'seo_title',
            // 'seo_description',
            // 'seo_keywords',
            // 'is_enable',
            // 'is_new',
            // 'is_popular',
            // 'is_discount',
            // 'created_at',
            // 'updated_at',
            // 'href',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
