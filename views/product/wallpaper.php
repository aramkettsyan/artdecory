<?php
$this->title = "Каталог";

use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php
$slider = <<< JS
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 10000,
      values: [ 3500, 9500 ],
      slide: function( event, ui ) {
        $( "#amount1" ).val($( "#slider-range" ).slider( "values", 0 ));
        $( "#amount2" ).val($( "#slider-range" ).slider( "values", 1 ));
      }
    });
    $( "#amount1" ).val($( "#slider-range" ).slider( "values", 0 ));
    $( "#amount2" ).val($( "#slider-range" ).slider( "values", 1 ));
  } );
JS;

$gallery = <<< JS
      $(document).ready(function(){
      $('.gallery-slider').slick({
        infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      arrows: true,
      prevArrow: '<img src="/img/main/tab/slider/arrow-l.png" alt="" class="gallery-slider-arrow arrow-left text-left catalog-gallery-padding">',
      nextArrow: '<img src="/img/main/tab/slider/arrow-r.png" alt="" class="gallery-slider-arrow arrow-right text-right catalog-gallery-padding">',

      //для адаптивной верстки
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 1100,
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
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
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

$this->registerJs($slider);
$this->registerJs($gallery);
$this->registerJs($fancy);
?>

<div class="inner-bg"></div>

<div class="inner front">
    <div class="inner-left hidden-xs col-xs-3">
        <div class="inner-left__image">
            <a href="#left" class="left-arrow"></a>

            <img src="/img/catalog/items/oboi.png">

            <a href="#right" class="right-arrow"></a>

            <div class="col-xs-12 leftlinemargin">
                <img src="/img/catalog/line-bottom.png">
            </div>


            <div class="col-xs-12 inner-left-image__cat">
                Обои
            </div>
        </div>

        <div class="inner-left__search">
            <form class="" role="search">
                <img src="img/main/line-search.png" alt="" class="line-search">
                <div class="form-group">
                    <input type="text" class="form-control nav-search" placeholder="Найти товар">
                </div>

                <button type="submit" class="btn btn-default fa fa-search nav-search-btn"></button>
            </form>
        </div>

        <div class="col-xs-12 inner-left__line">
            <img src="/img/catalog/line.png">
        </div>

        <div class="inner-left__slider">
            <p>
            <div class="col-xs-12 col-sm-6 col-md-6 pull-left">
                от <input type="text" id="amount1">
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 pull-right">
                до <input type="text" id="amount2">
            </div>
            </p>
            <div class="col-xs-12">
                <div id="slider-range"></div>
            </div>
        </div>

        <form class="inner-left__filter">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <span class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Материал
                            </a>
                        </span>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <input type="checkbox" id="holp1">
                            <label for="holp1">
                                Хлопок
                            </label>

                            <input type="checkbox" id="holp2">
                            <label for="holp2">
                                Хлопок
                            </label>

                            <input type="checkbox" id="holp3">
                            <label for="holp3">
                                Хлопок
                            </label>

                            <input type="checkbox" id="holp4">
                            <label for="holp4">
                                Хлопок
                            </label>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <span class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Рисунок
                            </a>
                        </span>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingHa">
                                        <span class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseHa" aria-expanded="true" aria-controls="collapseHa">
                                                <span class="checkbox-span" onclick="$(this).addClass('active'); $('#holp11').attr('checked', 'checked');$('#holp21').attr('checked', 'checked');$('#holp31').attr('checked', 'checked');$('#holp41').attr('checked', 'checked');">Рисунок №1</span>
                                            </a>
                                        </span>
                                    </div>
                                    <div id="collapseHa" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHa">
                                        <div class="panel-body">
                                            <input type="checkbox" id="holp11">
                                            <label for="holp11">
                                                Рисунок №1 - 1
                                            </label>

                                            <input type="checkbox" id="holp21">
                                            <label for="holp21">
                                                Рисунок №1 - 2
                                            </label>

                                            <input type="checkbox" id="holp31">
                                            <label for="holp31">
                                                Рисунок №1 - 3
                                            </label>

                                            <input type="checkbox" id="holp41">
                                            <label for="holp41">
                                               Рисунок №1 - 4
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="panel-heading" role="tab" id="headingHah">
                                        <span class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseHah" aria-expanded="true" aria-controls="collapseHah">
                                                <span class="checkbox-span" onclick="$(this).addClass('active'); $('#holp12').attr('checked', 'checked');$('#holp22').attr('checked', 'checked');$('#holp32').attr('checked', 'checked');$('#holp42').attr('checked', 'checked');">Рисунок №2</span>
                                            </a>
                                        </span>
                                    </div>
                                    <div id="collapseHah" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingHah">
                                        <div class="panel-body">
                                            <input type="checkbox" id="holp12">
                                            <label for="holp12">
                                                Рисунок №2 - 1
                                            </label>

                                            <input type="checkbox" id="holp22">
                                            <label for="holp22">
                                                Рисунок №2 - 2
                                            </label>

                                            <input type="checkbox" id="holp32">
                                            <label for="holp32">
                                                Рисунок №2 - 3
                                            </label>

                                            <input type="checkbox" id="holp42">
                                            <label for="holp42">
                                               Рисунок №2 - 4
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <span class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Размер
                            </a>
                        </span>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <input type="checkbox" id="razm1">
                            <label for="razm1">
                                Хлопок
                            </label>

                            <input type="checkbox" id="razm2">
                            <label for="razm2">
                                Хлопок
                            </label>

                            <input type="checkbox" id="razm3">
                            <label for="razm3">
                                Хлопок
                            </label>

                            <input type="checkbox" id="razm4">
                            <label for="razm4">
                                Хлопок
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <span class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseColor" aria-expanded="false" aria-controls="collapseColor">
                                Цвет
                            </a>
                        </span>
                        
                        <div class="toltip-filter">
                            Найдено: <span>3</span>
                            <a href="#">Показать</a>
                        </div>
                    </div>
                    <div id="collapseColor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingColor">
                        <div class="panel-body">
                            <input type="checkbox" id="color1">
                            <label for="color1">
                                <span style="background: white;" class="filter-color">&nbsp;</span> Белый
                            </label>

                            <input type="checkbox" id="color2">
                            <label for="color2">
                                <span style="background: red;" class="filter-color">&nbsp;</span> Красный
                            </label>

                            <input type="checkbox" id="color3">
                            <label for="color3">
                                <span style="background: blue;" class="filter-color">&nbsp;</span> Синий
                            </label>

                            <input type="checkbox" id="color4">
                            <label for="color4">
                                <span style="background: green;" class="filter-color">&nbsp;</span> Зелёный
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inner-left-filter__buttons">
                <div class="col-md-6">
                    <input type="reset" value="Очистить">
                </div>

                <div class="col-md-6">
                    <input type="submit" value="Применить">
                </div>
            </div>
        </form>
    </div>

    <div class="inner-right col-sm-offset-3 col-xs-12 col-sm-9">
        <div class="inner-top-bg">
            <img src="/img/catalog/items/oboi-bg.png">
        </div>

        <div class="row">
            <div class="col-sm-12">
                <img src="/img/main/center/shadow.png" alt="" class="shadow-inner-top">
            </div>
        </div>

        <ul class="breadcrumb minusmargin">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Обои</a></li>
            <li>Бумажные обои</li>
        </ul>

        <div class="row caption margintop text-center">
            <div class="col-xs-12">
                <img src="img/main/center/decor-line.png" alt="" class="dec-line-l">
                
                <h2 class="product">Каталог обоев для стен</h2>
                <img src="img/main/center/decor-line.png" alt="" class="dec-line-r">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 inner-right__text catalog">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал. Большой каталог с удобной системой поиска поможет не заблудиться в многообразии выбора. Перед покупкой вы можете ознакомиться с фотографиями товара в интерьере и их подробным описанием.
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 inner-right__filter">
                <div class="col-md-3 text-left">
                    <select>
                        <option>Сортировать по</option>
                    </select>
                </div>

                <div class="col-md-6 text-center">
                    <input type="checkbox" id="popular">
                    <label for="popular" class="products-labels">
                        Популярное
                    </label>

                    <input type="checkbox" id="new">
                    <label for="new" class="products-labels">
                        Новинки
                    </label>

                    <input type="checkbox" id="promotions">
                    <label for="promotions" class="products-labels">
                        Акции
                    </label>
                </div>

                <div class="col-md-3 text-right">
                    <select>
                        <option>Отображать по</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 text-center inner-right__filter-bg">
                <img src="/img/catalog/shadow.png" class="img-responsive">
            </div>
        </div>

        <div class="row products">
            <?php

            foreach ($models as $model) {
                // выводим название организации (пример)
                echo $this->render('_one', ['model' => $model]);
            }

// отображаем постраничную разбивку
            echo LinkPager::widget([
                'pagination' => $pages,
            ]);
            ?>
            <br>
            <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
            </ul>
        </div>

        <!--        <div class="row text-center pagination-bg">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>-->

        <div class="row caption text-center">
            <div class="col-xs-12">
                <img src="img/main/center/decor-line.png" alt="" class="dec-line-l">
                
                <h2 class="product">Галерея интерьеров</h2>
                <img src="img/main/center/decor-line.png" alt="" class="dec-line-r">
            </div>
        </div>

        <div class="row gallery">
            <div class="gallery-slider"> <!-- first slider -->
                <div class="wallpaper-slider-item text-center">
                    <a href="#">
                        <img src="img/catalog/gallery/picture-1.png" class="slider-img" alt="">
                    </a>
                </div>

                <div class="wallpaper-slider-item text-center">
                    <a href="#">
                        <img src="img/catalog/gallery/picture-2.png" class="slider-img" alt="">
                    </a>
                </div>

                <div class="wallpaper-slider-item text-center">
                    <a href="#">
                        <img src="img/catalog/gallery/picture-3.png" class="slider-img" alt="">
                    </a>
                </div>

                <div class="wallpaper-slider-item text-center">
                    <a href="#">
                        <img src="img/catalog/gallery/picture-1.png" class="slider-img" alt="">
                    </a>
                </div>

                <div class="wallpaper-slider-item text-center">
                    <a href="#">
                        <img src="img/catalog/gallery/picture-2.png" class="slider-img" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="row seotext" style="margin-bottom: 7rem;">
            <div class="col-xs-12">
                <p>
                    &nbsp; &nbsp; &nbsp; В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал. Большой каталог с удобной системой поиска поможет не заблудиться в многообразии выбора. Перед покупкой вы можете ознакомиться с фотографиями товара в интерьере и их подробным описанием.
                </p>

                <p>
                    &nbsp; &nbsp; &nbsp; Наш ассортимент значительно шире, чем перечень и описания выложенных на сайте коллекций. Поэтому если Вы не нашли здесь образца, точно соответствующего вашим замыслам и идеям, просто позвоните нам: наверняка мы сможем найти то, о чем вы мечтаете!
                </p>

                <p>
                    &nbsp; &nbsp; &nbsp; Доставка осуществляется курьером по Москве и Московской области, а также транспортными компаниями по всей России. На всю продукцию распространяется гарантия производителя. На выбор предлагается несколько вариантов оплаты.
                <p>
            </div>
        </div>
    </div>
</div>