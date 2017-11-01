<?php
$this->title = "Каталог";
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
      prevArrow: '<img src="/img/main/tab/slider/arrow-l.png" alt="" class="gallery-slider-arrow arrow-left text-left">',
      nextArrow: '<img src="/img/main/tab/slider/arrow-r.png" alt="" class="gallery-slider-arrow arrow-right text-right">',
      
      //для адаптивной верстки
      responsive: [
        {
          breakpoint: 1300, 
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
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

$this->registerJs($slider);
$this->registerJs($gallery);
?>

<div class="inner-bg"></div>

<div class="inner front">
    <div class="inner-left col-xs-3">
        <div class="inner-left__image">
            <a href="#left" class="left-arrow"></a>

            <img src="/img/catalog/items/oboi.png">

            <a href="#right" class="right-arrow"></a>

            <div class="col-xs-12 inner-left__linemargin">
                <img src="/img/catalog/line-bottom.png">
            </div>

            <div class="col-xs-12 inner-left-image__cat">
                Обои
            </div>
        </div>


        <div class="col-xs-12 inner-left__line gallery">
            <img src="/img/catalog/line.png">
        </div>

        <form class="inner-left__filter filternopadding">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                <span class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ФАБРИКА AQUARELLE
                  </a>
                </span>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                <span class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ФАБРИКА AQUARELLE
                  </a>
                </span>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                <span class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ФАБРИКА AQUARELLE
                  </a>
                </span>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                            <p><a href="#">Коллекция Amira</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="inner-right col-sm-offset-3 col-xs-9">
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
            <li><a href="#">Галерея интерьеров</a></li>
            <li>Обои</li>
        </ul>

        <div class="row caption margintop text-center">
            <div class="col-xs-12">
                <img src="img/main/center/decor-line.png" alt="" class="dec-line-l">

                <h2 class="product">Обои. Галерея интерьеров</h2>
                <img src="img/main/center/decor-line.png" alt="" class="dec-line-r">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 inner-right__text">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал. Большой каталог с удобной системой поиска поможет не заблудиться в многообразии выбора. Перед покупкой вы можете ознакомиться с фотографиями товара в интерьере и их подробным описанием.
            </div>
        </div>

        <div class="row">
            <div class="gallery-item">
                <div class="gallery-item__name">
                    <a href="#">Галерея AQUARELLE AMIRA (Россия)</a>
                </div>

                <div class="gallery-item__image">
                    <img src="/img/gallery/amira-13-piterra.png" class="img-responsive">
                </div>

                <div class="gallery-item__text">
                    В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал.
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item__name">
                    <a href="#">Галерея AQUARELLE AMIRA (Россия)</a>
                </div>

                <div class="gallery-item__image">
                    <img src="/img/gallery/Ornella-photo10_811.png" class="img-responsive">
                </div>

                <div class="gallery-item__text">
                    В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал.
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item__name">
                    <a href="#">Галерея AQUARELLE AMIRA (Россия)</a>
                </div>

                <div class="gallery-item__image">
                    <img src="/img/gallery/DeSomero-12_590.png" class="img-responsive">
                </div>

                <div class="gallery-item__text">
                    В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал.
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-item__name">
                    <a href="#">Галерея AQUARELLE AMIRA (Россия)</a>
                </div>

                <div class="gallery-item__image">
                    <img src="/img/gallery/Aquarelle-Italian-Color-05.png" class="img-responsive">
                </div>

                <div class="gallery-item__text">
                    В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал.
                </div>
            </div>
        </div>

        <div class="row text-center pagination-bg">
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

        <div class="row seotext">
            <div class="col-xs-12">
                <p>
                    &nbsp; &nbsp; &nbsp; В нашем интернет-магазине вы можете купить обои для стен от ведущих мировых производителей, эксклюзивные дизайнерские фрески и неповторимые рамы для зеркал. Большой каталог с удобной системой поиска поможет не заблудиться в многообразии выбора. Перед покупкой вы можете ознакомиться с фотографиями товара в интерьере и их подробным описанием.
                </p>
            </div>
        </div>
    </div>
</div>