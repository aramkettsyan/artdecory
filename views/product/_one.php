<?php

use yii\helpers\Html;
?>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
    
    <div style="background-image: url('<?= $model->image ?>')" class="products-item click-link" 
         attr-href="/wallpaper/<?= $model->url ?>">
        <div class="products-item__search">
            <a href="<?= $model->image ?>" id="single_image"><img src="/img/catalog/search.png"></a>
        </div>

        <div class="products-item__bottom">
            <a href="#" class="comparison" onclick="$(this).toggleClass('active')"></a>
            <a href="#" class="star"  onclick="$(this).toggleClass('active')"></a>
        </div>
    </div>


    <div class="products-name">
        <?= Html::a($model->title, ['/wallpaper/' . $model->url]); ?>
        <!--<a href="/catalog/default/product"><?php $model->url ?></a>-->
    </div>

    <div class="products-price">
        Цена: <?= $model->price_rub ?> руб.
    </div>
</div>