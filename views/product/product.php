<?php
$this->title = "Продукт";

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$gallery = <<< JS
      $(document).ready(function(){
      $('.gallery-slider').slick({
        infinite: true,
      slidesToShow: 4,
      slidesToScroll: 3,
      arrows: true,
      prevArrow: '<img src="/img/main/tab/slider/arrow-l.png" alt="" class="gallery-slider-arrow arrow-left text-left">',
      nextArrow: '<img src="/img/main/tab/slider/arrow-r.png" alt="" class="gallery-slider-arrow arrow-right text-right">',

      //для адаптивной верстки
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 780,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 340,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }

  ]
      });
    });

JS;

$fancy = <<< JS
   $(document).ready(function() { 
        $("a#single_image").fancybox({
            'transitionIn' : 'none',
            'transitionOut' : 'none',
            'titlePosition' : 'over',
            'speedIn': '0',
            'speedOut': '0',
            'transitionIn': 'elastic',
            'transitionOut'	: 'elastic'
        });
   });
JS;

$this->registerJs($gallery);
$this->registerJs($fancy);
?>

<div class="inner-bg"></div>

<div class="inner front">
    <div class="inner-left hidden-xs col-xs-3">
        <div class="inner-left__promo">
            <div class="inner-left-promo__heading">
                <p>АКЦИЯ</p>
                <p>этого месяца</p>
            </div>

            <div class="inner-left-promo__text">
                <p>Обои от 50 рублей</p>
                <p>Фреска от 100 рублей</p>
                <p>Рама от 200 рублей</p>
                <p>Обои от 100 рублей</p>
                <p>Фреска от 100 рублей</p>
            </div>

            <div class="inner-left-promo__button">
                <a href="#">&nbsp;</a>
            </div>
        </div>

        <div class="inner-left__back">
            <a href="#">&nbsp;</a>
        </div>

        <div class="col-xs-12 inner-left__line product">
            <img src="/img/catalog/line.png">
        </div>

        <div class="inner-left__heading">
            ВСЯ КОЛЛЕКЦИЯ
        </div>

        <div class="inner-left__collection">
            <?php for ($i = 1; $i < 4; $i++): ?>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/1.png">
                </a>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/2.png">
                </a>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/3.png">
                </a>
            <?php endfor; ?>
        </div>

        <div class="col-xs-12 product-arrow-down">
            <img src="/img/product/arrow-down.png">
        </div>

        <div class="inner-left__heading">
            Компаньоны
        </div>

        <div class="inner-left__collection">
            <?php for ($i = 1; $i < 2; $i++): ?>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/1.png">
                </a>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/2.png">
                </a>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/3.png">
                </a>
            <?php endfor; ?>
        </div>

        <div class="col-xs-12 product-arrow-down">
            <img src="/img/product/arrow-down.png">
        </div>

        <div class="inner-left__heading">
            В интерьере
        </div>

        <div class="inner-left__collection">
            <?php for ($i = 1; $i < 4; $i++): ?>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/1.png">
                </a>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/2.png">
                </a>
                <a href="#" class="col-md-4 col-xs-6 ">
                    <img src="/img/product/items/3.png">
                </a>
            <?php endfor; ?>
        </div>

        <div class="col-xs-12 product-arrow-down">
            <img src="/img/product/arrow-down.png">
        </div>
    </div>

    <div class="inner-right col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-9">
        <div class="inner-top-bg">
            <img src="/img/catalog/items/oboi-bg.png" class="img-responsive">
        </div>

        <div class="row">
            <div class="col-sm-12">
                <img src="/img/main/center/shadow.png" alt="" class="shadow-inner-top">
            </div>
        </div>

        <ul class="breadcrumb minusmargin">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Обои</a></li>
            <li><?= $model->url ?></li>
        </ul>

        <div class="row caption margintop text-center">
            <div class="col-xs-12">
                <img src="/img/main/center/decor-line.png" alt="" class="dec-line-l">
                
                <h2 class="product"><?= $model->title ?></h2>
                <img src="/img/main/center/decor-line.png" alt="" class="dec-line-r">
                <span class="col-xs-12 inner-right__articul"><?= $model->sku ?></span>
            </div>
        </div>

        <div class="row product-padding">
            <div class="col-xs-12 col-sm-12 col-md-5 inner-right-product__image">
                <a href="<?= $model->image ?>" id="single_image" onclick="$('body').scrollTop(300)"><img src="<?= $model->image ?>" class="img-responsive"></a>
            </div>

            <div class="col-xs-10 col-sm-12 col-md-7 inner-right-product-info">
                <div class="col-sm-7 product-info-left">
                    <span class="inner-right-product-info__heading">
                        Характеристики:
                    </span>

                    <p><strong><u>Материал:</u></strong> <?= $model->material_id ?></p>
                    <p><strong><u>Рисунок:</u></strong> <?= $model->image_id ?></p>
                    <p><strong><u>Помещение:</u></strong> <?= $model->purpose_id ?></p>
                    <p><strong><u>Фабрика:</u></strong> <?= $model->factory_id ?></p>
                    <p><strong><u>Коллекция:</u></strong> <?= $model->collection ?></p>
                    <p><strong><u>Страна:</u></strong> <?= $model->country_id ?></p>
                    <p><strong><u>Ширина рулона:</u></strong> <?= $model->width ?></p>
                    <p><strong><u>Длина рулона:</u></strong> <?= $model->length ?></p>
                    <p><strong><u>Подгон в рулоне:</u></strong> <?= $model->podgon ?></p>
                    <p><strong><u>Цвет:</u></strong> <?= $model->color_id ?></p>
                </div>

                <div class="col-sm-5 padding-right-0">
                    <span class="product-price"><?= $model->price_rub ?> руб.</span>

                    <div class="product-count">
                        <span>Кол-во:</span>
                        <div class="product-count__controls">
                            <input type="submit" value="-">
                            <input type="text" value="1">
                            <input type="submit" value="+">
                        </div>
                    </div>

                    <div class="product-count">
                        <span>Доставка:</span>
                        <div class="product-count__controls">
                            <select>
                                <option value="Самовывоз">Самовывоз</option>
                            </select>
                        </div>
                    </div>

                    <div class="product-total">
                        <span class="product-total__text">Итого:</span>
                        <span class="product-total__value">41 800 руб.</span>
                    </div>

                    <div class="col-xs-12 text-center product-wantsale">
                        <a href="#">Хочу скидку!!!</a>
                    </div>

                    <div class="product-buy">
                        <button>купить</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 inner-right__text">
                В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал. Большой каталог с удобной системой поиска поможет не заблудиться в многообразии выбора. Перед покупкой вы можете ознакомиться с фотографиями товара в интерьере и их подробным описанием.
            </div>
        </div>

        <div class="row caption text-center">
            <div class="col-xs-12">
                <img src="/img/main/center/decor-line.png" alt="" class="dec-line-l">
                
                <h2 class="product">Похожие товары</h2>
                <img src="/img/main/center/decor-line.png" alt="" class="dec-line-r">
            </div>
        </div>

        <div class="row gallery">
            <div class="gallery-slider padding"> <!-- first slider -->
                <div class="wallpaper-slider-item text-center">
                    <div>
                        <img src="/img/catalog/items/picture-1.png" class="gallery-slider-img" alt="">

                        <div class="gallery-slider__name">
                            <a href="#">Обои Limonta</a>
                        </div>

                        <div class="gallery-slider__price">
                            Цена: 4 200 руб.
                        </div>
                    </div>
                </div>

                <div class="wallpaper-slider-item text-center">
                    <div>
                        <img src="/img/catalog/items/picture-2.png" class="gallery-slider-img" alt="">

                        <div class="gallery-slider__name">
                            <a href="#">Обои Limonta</a>
                        </div>

                        <div class="gallery-slider__price">
                            Цена: 4 200 руб.
                        </div>
                    </div>
                </div>

                <div class="wallpaper-slider-item text-center">
                    <div>
                        <img src="/img/catalog/items/picture-3.png" class="gallery-slider-img" alt="">

                        <div class="gallery-slider__name">
                            <a href="#">Обои Limonta</a>
                        </div>

                        <div class="gallery-slider__price">
                            Цена: 4 200 руб.
                        </div>
                    </div>
                </div>

                <div class="wallpaper-slider-item text-center">
                    <div>
                        <img src="/img/catalog/items/picture-4.png" class="gallery-slider-img" alt="">

                        <div class="gallery-slider__name">
                            <a href="#">Обои Limonta</a>
                        </div>

                        <div class="gallery-slider__price">
                            Цена: 4 200 руб.
                        </div>
                    </div>
                </div>

                <div class="wallpaper-slider-item text-center">
                    <div>
                        <img src="/img/catalog/items/picture-1.png" class="gallery-slider-img" alt="">

                        <div class="gallery-slider__name">
                            <a href="#">Обои Limonta</a>
                        </div>

                        <div class="gallery-slider__price">
                            Цена: 4 200 руб.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>