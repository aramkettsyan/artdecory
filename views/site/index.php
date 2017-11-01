<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$tabs_js = <<< JS
      $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      }) 
        
JS;

$slider1_js = <<< JS
      $('.wallpaper-slider').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 5,
      arrows: true,
      prevArrow: '<img src="/img/main/tab/slider/arrow-l.png" alt="" class="wallpaper-slider-arrow arrow-left text-left">',
      nextArrow: '<img src="/img/main/tab/slider/arrow-r.png" alt="" class="wallpaper-slider-arrow arrow-right text-right">',
      
      //для адаптивной верстки
      responsive: [
        {
          breakpoint: 1300, 
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 980, 
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600, 
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
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
JS;

$slider2_js = <<< JS
      $('.fresco-slider').slick({
        infinite: true,
      slidesToShow: 5,
      slidesToScroll: 5,
      arrows: true,
      prevArrow: '<img src="/img/main/tab/slider/arrow-l.png" alt="" class="fresco-slider-arrow arrow-left text-left">',
      nextArrow: '<img src="/img/main/tab/slider/arrow-r.png" alt="" class="fresco-slider-arrow arrow-right text-right">',
      
      //для адаптивной верстки
      responsive: [
        {
          breakpoint: 1300, 
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 980, 
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600, 
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
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
JS;

$slider3_js = <<< JS
      $('.mirror-slider').slick({
        infinite: true,
      slidesToShow: 5,
      slidesToScroll: 5,
      arrows: true,
      prevArrow: '<img src="/img/main/tab/slider/arrow-l.png" alt="" class="mirror-slider-arrow arrow-left text-left">',
      nextArrow: '<img src="/img/main/tab/slider/arrow-r.png" alt="" class="mirror-slider-arrow arrow-right text-right">',
      
      //для адаптивной верстки
      responsive: [
        {
          breakpoint: 1300, 
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 980, 
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600, 
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
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
JS;

$this->registerJs($tabs_js);
$this->registerJs($slider1_js);
$this->registerJs($slider2_js);
$this->registerJs($slider3_js);
?>
<div class="row caption text-center">
    <div class="col-xs-12 minusmargin">
        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-l">

        <h2 class="product">Каталог продукции</h2>
        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-r">
    </div>
</div><!-- /caption /row-->
<div class="row picture">
    <div class="col-sm-4 col-xs-12 text-center">
        <a href="" ><img class="catalog" src="/img/main/center/head/Wallpaper.png" alt=""></a>
        <img src="/img/main/center/decor-line-small.png" alt="">
        <p class="sign">Обои</p>
    </div>
    <div class="col-sm-4 col-xs-12 text-center">
        <a href="" ><img class="catalog morewidth" src="/img/main/center/head/fresco.png" alt=""></a>
        <img src="/img/main/center/decor-line-small.png" alt="">
        <p class="sign">Фрески</p>
    </div>
    <div class="col-sm-4 col-xs-12 text-center">
        <a href=""  ><img class="catalog" src="/img/main/center/head/mirror.png" alt=""></a>
        <img src="/img/main/center/decor-line-small.png" alt="">
        <p class="sign">Рамы для зеркал </p>
    </div>
</div>

<div class="row text-center">
    <div class="col-sm-12">
        <img src="/img/main/shadow-up.png" alt="" class="shadow-up">
    </div>
</div>
<div class="row main-text">
    <div class="col-sm-12">
        <p class=" text-justify">
            Если перед вами встал непростой вопрос подбора высококачественных обоев, уникальной фрески или эксклюзивной рамы для зеркала для дома или квартиры, а времени на утомительные походы по магазинам совсем нет? Лучшее решение – это наш интернет-магазин недорогих качественных элементов декора в Москве.</p><br>
        <p class=" text-justify">
            Со страниц нашего обширного электронного каталога вы всегда сможете быстро и выгодно подобрать и приобрести все то, что придаст вашему интерьеру неповторимый законченный облик, а ваше жилье заиграет новыми, прекрасными красками!</p><br>
        <p class=" text-justify">
            В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал. Большой каталог с удобной системой поиска поможет не заблудиться в многообразии выбора. Перед покупкой вы можете ознакомиться с фотографиями товара в интерьере и их подробным описанием.</p><br>
        <p class=" text-justify">
            Наш ассортимент значительно шире, чем перечень и описания выложенных на сайте коллекций. Поэтому если Вы не нашли здесь образца, точно соответствующего вашим замыслам и идеям, просто позвоните нам: наверняка мы сможем найти то, о чем вы мечтаете!
        </p>
    </div>
</div> <!-- /text -->
<div class="row text-center">
    <div class="col-sm-12">
        <img src="/img/main/shadow-down.png" alt="" class="shadow-up">
    </div>
</div>
<div class="row caption">
    <div class="col-xs-12 minusmarginWhyWe">
        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-l">
        <h2 class="product">Наши преимущества</h2>
        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-r">
    </div>
</div>
<div class="row advantages">
    <div class="col-sm-2 col-xs-6 text-center">
        <img src="/img/main/advantages/1.png" alt="" class="text-center adv-img">
        <img src="/img/main/advantages/line.png" alt="" class="text-center adv-line">
        <div class="col-xs-12 text-center advantages-texts">Низкие<br> цены</div>
    </div>
    <div class="col-sm-2 col-xs-6 text-center">
        <img src="/img/main/advantages/2.png" alt="" class="text-center adv-img">
        <img src="/img/main/advantages/line.png" alt="" class="text-center adv-line">
        <p class="text-center advantages-texts">Широкий<br> ассортимент</p>
    </div>
    <div class="col-sm-2 col-xs-6 text-center">
        <img src="/img/main/advantages/3.png" alt="" class="text-center adv-img">
        <img src="/img/main/advantages/line.png" alt="" class="text-center adv-line">
        <p class="text-center advantages-texts">Гарантия<br> качества</p>
    </div>
    <div class="col-sm-2 col-xs-6 text-center">
        <img src="/img/main/advantages/4.png" alt="" class="text-center adv-img">
        <img src="/img/main/advantages/line.png" alt="" class="text-center adv-line">
        <p class="text-center advantages-texts">Безопасная<br> online-оплата</p>
    </div>
    <div class="col-sm-2 col-xs-6 text-center">
        <img src="/img/main/advantages/5.png" alt="" class="text-center adv-img">
        <img src="/img/main/advantages/line.png" alt="" class="text-center adv-line">
        <p class="text-center advantages-texts">Дизайнерские<br> коллекции</p>
    </div>
    <div class="col-sm-2 col-xs-6 text-center">
        <img src="/img/main/advantages/6.png" alt="" class="text-center adv-img">
        <img src="/img/main/advantages/line.png" alt="" class="text-center adv-line">
        <p class="text-center advantages-texts">Доставка<br> до двери</p>
    </div>
</div>

<div class="row text-center">
    <div class="col-sm-12">
        <img src="/img/main/shadow-up.png" alt="" class="shadow-up">
    </div>
</div>
<div class="row main-text">
    <div class="col-sm-12">
        <p class=" text-justify">
            В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал. Большой каталог с удобной системой поиска поможет не заблудиться в многообразии выбора. Перед покупкой вы можете ознакомиться с фотографиями товара в интерьере и их подробным описанием.</p><br>
        <p class=" text-justify">
            Наш ассортимент значительно шире, чем перечень и описания выложенных на сайте коллекций. Поэтому если Вы не нашли здесь образца, точно соответствующего вашим замыслам и идеям, просто позвоните нам: наверняка мы сможем найти то, о чем вы мечтаете!</p><br>
        <p class=" text-justify">
            Доставка осуществляется курьером по Москве и Московской области, а также транспортными компаниями по всей России. На всю продукцию распространяется гарантия производителя. На выбор предлагается несколько вариантов оплаты.</p><br>
    </div>
</div> <!-- /text -->


<img src="/img/cart/line-grey.png" class="main-grey-line-up" alt="">
<img src="/img/main/center/decor-line-big.png" class="tab-line text-center line-big" alt="">
<div class="tab"><!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active "><a class="tab-btn" href="#new" aria-controls="new" role="tab" data-toggle="tab">Новинки</a><img src="/img/main/line-search.png" alt="" class="nav-tabs-line-img"></li>
        <li role="presentation" ><a class="tab-btn " href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Популярное</a><img src="/img/main/line-search.png" alt="" class="nav-tabs-line-img"></li>
        <li role="presentation" ><a class="tab-btn" href="#stock" aria-controls="stock" role="tab" data-toggle="tab">Акции</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="new"> <!-- first panel -->
            <div class="tab-box">
                <div class="row caption">
                    <div class="col-sm-12">
                        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-l">
                        <h2 class="product">Обои</h2>
                        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-r">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="wallpaper-slider"> <!-- first slider -->
                        <div class="wallpaper-slider-item text-center">
                            <img src="/img/catalog/items/picture-1.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="wallpaper-slider-item text-center">
                            <img src="/img/catalog/items/picture-2.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="wallpaper-slider-item text-center">
                            <img src="/img/catalog/items/picture-3.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="wallpaper-slider-item text-center">
                            <img src="/img/catalog/items/picture-4.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="wallpaper-slider-item text-center">
                            <img src="/img/catalog/items/picture-1.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="wallpaper-slider-item text-center">
                            <img src="/img/catalog/items/picture-2.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                    </div> <!-- /first slider -->
                </div>

                <div class="row caption">
                    <div class="col-sm-12 plasmargintop">
                        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-l">
                        <h2 class="product">Фрески</h2>
                        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-r">
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="fresco-slider"> <!-- first slider -->
                        <div class="fresco-slider-item text-center">
                            <img src="/img/catalog/items/picture-1.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="fresco-slider-item text-center">
                            <img src="/img/catalog/items/picture-2.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="fresco-slider-item text-center">
                            <img src="/img/catalog/items/picture-3.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="fresco-slider-item text-center">
                            <img src="/img/catalog/items/picture-3.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="fresco-slider-item text-center">
                            <img src="/img/catalog/items/picture-4.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="fresco-slider-item text-center">
                            <img src="/img/catalog/items/picture-1.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                    </div><!-- /second slider -->
                </div>
                <div class="row caption">
                    <div class="col-sm-12 plasmargintop">
                        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-l">
                        <h2 class="product">Рамы для зеркал</h2>
                        <img src="/img/main/center/decor-line.png" alt="" class="dec-line-r">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mirror-slider"> <!-- first slider -->
                        <div class="mirror-slider-item text-center">
                            <img src="/img/catalog/items/picture-1.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="mirror-slider-item text-center">
                            <img src="/img/catalog/items/picture-2.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="mirror-slider-item text-center">
                            <img src="/img/catalog/items/picture-3.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="mirror-slider-item text-center">
                            <img src="/img/catalog/items/picture-4.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="mirror-slider-item text-center">
                            <img src="/img/catalog/items/picture-1.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>

                        <div class="mirror-slider-item text-center">
                            <img src="/img/catalog/items/picture-2.png" class="slider-product" alt="">
                            <p class="about">Обои Limonta Violetta <br>GM90502</p>
                            <img src="/img/main/advantages/line.png" class="slider-img" alt="">
                            <p class="price">Цена: <b>4 200 руб.</b></p>
                        </div>
                    </div>
                </div><!-- /end slider -->
                <div class="row text-center">
                    <div class="col-sm-12 shadow-marginminus">
                        <img src="/img/main/center/shadow.png" class="shadow-bottom" alt="">
                    </div>
                </div>
            </div><!-- tab-box -->
        </div><!-- /first panel -->


        <div role="tabpanel" class="tab-pane" id="popular">...</div>
        <div role="tabpanel" class="tab-pane" id="stock">...</div>
    </div>
</div><!-- /Nav tabs -->
<img src="/img/main/center/decor-line-big.png" class="line-after text-center line-big" alt="" style="height: 2px;">
<img src="/img/cart/line-grey.png" class="main-grey-line-down" alt="">

<div class="row main-text-end">
    <div class="col-sm-12">
        <p class=" text-justify">
            В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал. Большой каталог с удобной системой поиска поможет не заблудиться в многообразии выбора. Перед покупкой вы можете ознакомиться с фотографиями товара в интерьере и их подробным описанием.
        <p class=" text-justify">
            Наш ассортимент значительно шире, чем перечень и описания выложенных на сайте коллекций. Поэтому если Вы не нашли здесь образца, точно соответствующего вашим замыслам и идеям, просто позвоните нам: наверняка мы сможем найти то, о чем вы мечтаете!</p><br>
        <p class=" text-justify">
            Доставка осуществляется курьером по Москве и Московской области, а также транспортными компаниями по всей России. На всю продукцию распространяется гарантия производителя. На выбор предлагается несколько вариантов оплаты.</p><br>
    </div>
</div> <!-- /text -->
<div class="row">
    <div class="col-sm-12">
        <img src="/img/main/center/shadow.png" alt="" class="shadow-bottom-end">
    </div>
</div> <!-- /col-sm-8 -->