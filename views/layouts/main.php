<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;



/**
 * isHome
 */
$controller = Yii::$app->controller;
$default_controller = Yii::$app->defaultRoute;
$isHome = (($controller->id === $default_controller) && ($controller->action->id === $controller->defaultAction)) ? true : false;
$current_module = Yii::$app->controller->module->id;

AppAsset::register($this);

$auth_js = <<< JS
   var popoverTemplate = ['<div class="authWrapper popover">',
                                '<div class="arrow"></div>',
                                '<div class="popover-content">',                                    
                                '</div>',
                            '</div>'].join('');
  
  	var content = ['<div class="auth-popover__heading">Войти</div>',
                   '<div class="auth-popover__content">',
                   '<input type="text" placeholder="E-Mail">',
                   '<input type="password" placeholder="Пароль">',
                   '<div class="auth-popover__links">',
                   '<a href="/lost-password">Забыли пароль?</a> <img class="line-tab" src="/img/main/line-search.png" alt=""> <a href="/auth/default/signup">Регистрация</a> ',
                   '</div>',
                   '<div class="auth-popover__button">',
                   '<button>Войти</button>',
                   '</div>',
                   '</div>',].join('');


    $('body').popover({
        selector: '[rel=auth]',
        trigger: 'click',
      	content : content,
        template: popoverTemplate,
        placement: "left",
        html: true
    });     
JS;

$feedback_js = <<< JS
   var popoverTemplateSecond = ['<div class="feedbackWrapper popover">',
                                '<div class="arrow"></div>',
                                '<div class="popover-content">',                                    
                                '</div>',
                            '</div>'].join('');
  
  	var contentSecond = ['<div class="feedback-popover__heading">Форма обратной связи</div>',
                   '<div class="feedback-popover__content">',
                   '<input type="text" placeholder="Имя" class="feedback-name">',
                   '<input type="text" placeholder="E-Mail" class="feedback-email">',
                   '<input type="text" placeholder="Телефон" class="feedback-phone">',
                   '<textarea placeholder="Сообщение"></textarea>',
                   '<div class="feedback-text">Нажимая кнопку "Отправить" я соглашаюсь с <a href="#">политикой обработки персональных данных</a></span>',
                   '<div class="feedback-captcha">',
                   '<div class="feedback-captcha__image"><img src="/img/captcha.png"></div>',
                   '<div class="feedback-captcha__text"><input type="text" placeholder="Код проверки"></div>',
                   '</div>',
                   '<div class="feedback-button">',
                   '<button>отправить</button>',
                   '</div>',
                   '</div>',].join('');

    $(".feedback-popover").click(function() {
            $(this).popover({
                trigger: 'click',
                content : contentSecond,
                template: popoverTemplateSecond,
                placement: "top",
                html: true
            }).popover('toggle');
    });
JS;

$cart_js = <<< JS
   var popoverTemplateThree = ['<div class="cartWrapper popover">',
                                '<div class="arrow"></div>',
                                '<div class="popover-content">',                                    
                                '</div>',
                            '</div>'].join('');
  
  	var contentThree = ['<div class="cart-popover__heading">Ваша корзина</div>',
                   '<div class="cart-popover__content">',
        '<div class="cart-content-item">',
                   '<div class="cart-content-item__image">',
                   '<div class="cart-content-item-image__img" style="background-image:url(/img/catalog/items/picture-3.png)"></div>',
                   '</div>',
                   '<div class="cart-content-item__input"><input type="text" value="8"></div>',
                   '<div class="cart-content-item__details">',
                   '<div class="cart-content-item-details__name">Обои Wallpaper GM0123</div>',
                   '<div class="cart-content-item-details__price">2 800 Р</div>',
                   '</div>',
                   '<div class="cart-content-item__delete"><a href="#"><img src="/img/delete-2.png"></a></div>',
        '</div>',
        '<div class="cart-content-item">',
                   '<div class="cart-content-item__image">',
                   '<div class="cart-content-item-image__img" style="background-image:url(/img/catalog/items/picture-4.png)"></div>',
                   '</div>',
                   '<div class="cart-content-item__input"><input type="text" value="2"></div>',
                   '<div class="cart-content-item__details">',
                   '<div class="cart-content-item-details__name">Обои Wallpaper GM0123</div>',
                   '<div class="cart-content-item-details__price">2 800 Р</div>',
                   '</div>',
                   '<div class="cart-content-item__delete"><a href="#"><img src="/img/delete-2.png"></a></div>',
                   '</div>',
         '</div>',
         '<div class="cart-content__total">Общая сумма: 4000 Р.</div>',
         '<div class="cart-content__submit">',
         '<a href="/cart">в корзину</a>',
         '</div>',
                   '</div>',].join('');

    $(".cart-popover").click(function() {
            $(this).popover({
                trigger: 'click',
                content : contentThree,
                template: popoverTemplateThree,
                placement: "left",
                html: true
            }).popover('toggle');
    });
JS;

$kwicks = <<< JS
        $().ready(function() {
                $('.kwicks').kwicks({
                    maxSize : '35%',
                    behavior: 'menu',
                    spacing: 0
                });
            });
JS;

$this->registerJs($auth_js);
$this->registerJs($feedback_js);
$this->registerJs($cart_js);
$this->registerJs($kwicks);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?php
    /**
     * @var menuItems
     */
    $menuItems = [
        ['Главная', Url::to(['/site/index'])],
        ['Скидки и акции', Url::to(['/site/promotion'])],
        ['Галерея интерьеров', Url::to(['/site/gallery'])],
        ['Статьи', Url::to(['/site/article'])],
        ['Оплата и доставка', Url::to(['/site/payment'])],
        ['Контакты', Url::to(['/site/contacts'])],
        /*
          ['Личный кабинет', Url::to(['/profile'])],
          ['Регистрация', Url::to(['/auth/default/signup'])],
          ['Корзина', Url::to(['/cart'])]
         *
         */
    ]
    ?>
    <div class="container-fluid">
        <div class="row columns">
            <div class="left-col col-md-2 col-sm-3">
                <div class="main-nav">
                    <nav class="navbar navbar-default nav-box">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <?php
                                $isHome ?
                                    Html::img('/img/main/main-logo.png') :
                                    Html::a(Html::img('/img/main/main-logo.png'), ['/'])
                                ?>
                                <a class="navbar-brand col-xs-12" href="/">
                                    <img src="/img/main/main-logo.png">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar">
                                    <li><p class="phone">+7(945)761-61-68</p></li>
                                    <li><p class="phone">+7(945)761-61-68</p></li>
                                    <li><p class="info email">info@artdecori.ru</p></li>
                                    <form class="navbar-form navbar-left box" role="search">
                                        <img src="/img/main/line-search.png" alt="" class="line-search">
                                        <div class="form-group">
                                            <input type="text" class="form-control nav-search" placeholder="Найти товар">
                                        </div>
                                        <button type="submit" class="btn btn-default fa fa-search nav-search-btn"></button>
                                    </form>
                                    <li><img src="/img/main/line.png" alt="" class="left-col__line"></li>
                                    <?php foreach ($menuItems as list($title, $href)): ?>
                                        <li <?php if ($href == $_SERVER['REQUEST_URI']): echo 'class="active"';
                                        endif;
                                        ?>><a href="<?= $href ?>" class="text-uppercase nav-link"><?= $title ?></a></li>
                                    <?php endforeach; ?>

                                    <li><img src="/img/main/line.png" class="left-col__line-2" alt=""></li>
                                    <li>
                                        <div class="row left-col__address">
                                            <div class="col-xs-offset-4 col-sm-offset-0 col-sm-1 col-xs-1 check">
                                                <img src="/img/main/main-check.png" alt="">
                                            </div>
                                            <div class="col-sm-10 col-xs-6 info left-col__addressmargin">
                                                <p class="info-text text-left">Россия,   г.Москва<br> Севастопольский<br> пр-т д.10, корп.4</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="lest-col__socialitems">
                                        <a href="#" class="social"><img src="/img/main/social/insta.png" alt=""></a>
                                        <a href="#" class="social"><img src="/img/main/social/fb.png" alt=""></a>
                                        <a href="#" class="social"><img src="/img/main/social/vk.png" alt=""></a>
                                        <a href="#" class="social"><img src="/img/main/social/ok.png" alt=""></a>
                                        <a href="#" class="social"><img src="/img/main/social/twit.png" alt=""></a>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /main-nav -->
            </div> <!-- /col-lg-2 /navbar -->

            <div class="center col-sm-offset-3 col-md-offset-2 col-md-8 col-sm-8">

                <img src="/img/main/bg-left-sh.png" class="left-shadow" alt="">
                <?php if ((Yii::$app->request->getUrl() != '/site/gallery' & '/product/wallpaper')): ?>
                    <div class="row center-row visible-lg visible-md">
                        <ul class='kwicks kwicks-horizontal'>
                            <li id='panel-1'>
                                <div class="col-sm-12 col-xs-6 center-banner">
                                    <a href="/catalog">
                                        <img src="/img/main/bg-header-1.png" class="center-banner-img" alt="">
                                        <span class="text-uppercase center-banner-nav">Обои</span>
                                    </a>
                                </div>
                            </li>

                            <li id='panel-2'>
                                <div class="col-sm-12 col-xs-6 center-banner">
                                    <a href="/catalog">
                                        <img src="/img/main/bg-header-2.png" class="center-banner-img" alt="">
                                        <span class="text-uppercase center-banner-nav">зеркала</span>
                                    </a>
                                </div>
                            </li>

                            <li id='panel-3'>
                                <div class="col-sm-12 col-xs-6 center-banner">
                                    <a href="/catalog">
                                        <img src="/img/main/bg-header-3.png" class="center-banner-img" alt="">
                                        <span class="text-uppercase center-banner-nav">рамы</span>
                                    </a>
                                </div>
                            </li>

                            <li id='panel-4'>
                                <div class="col-sm-12 col-xs-6 center-banner">
                                    <a href="/catalog">
                                        <img src="/img/main/bg-header-4.png" class="center-banner-img" alt="">
                                        <span class="text-uppercase center-banner-nav">фрески</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /banner /row-->

                    <!-- Banner responsive -->
                    <div class="row center-row hidden-lg hidden-md">
                        <div class="col-sm-12 col-xs-6 center-banner">
                            <a href="/catalog">
                                <img src="/img/main/bg-header-1.png" class="center-banner-img" alt="">
                                <span class="text-uppercase center-banner-nav">Обои</span>
                            </a>
                        </div>

                        <div class="col-sm-12 col-xs-6 center-banner">
                            <a href="/catalog">
                                <img src="/img/main/bg-header-2.png" class="center-banner-img" alt="">
                                <span class="text-uppercase center-banner-nav">зеркала</span>
                            </a>
                        </div>
                        <div class="col-sm-12 col-xs-6 center-banner">
                            <a href="/catalog">
                                <img src="/img/main/bg-header-3.png" class="center-banner-img" alt="">
                                <span class="text-uppercase center-banner-nav">рамы</span>
                            </a>
                        </div>

                        <div class="col-sm-12 col-xs-6 center-banner">
                            <a href="/catalog">
                                <img src="/img/main/bg-header-4.png" class="center-banner-img" alt="">
                                <span class="text-uppercase center-banner-nav">фрески</span>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <img src="/img/main/center/shadow.png" alt="" class="shadow-top">
                        </div>
                    </div>
                <?php endif; ?>

                <?= $content ?>
            </div>
            <div class="right col-md-2">
                <div class="right-link rl-1">
                    <?= Html::a(Html::img('/img/main/Backet.png') . '<span class="cart-counter">2</span>', '#', ['class' => 'right-link__item cart-popover']) ?>
                </div>

                <div class="right-link rl-2">
                    <?= Html::a(Html::img('/img/main/Login.png'), '#', ['class' => 'right-link__item link-item__login auth-popover', 'rel' => 'auth']) ?>
                </div>


                <div class="toTop">&nbsp;
                </div>

            </div>
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="footer col-md-10 col-xs-12">
<!--                            --><?//= app\modules\helper\widgets\FooterLine::widget(); ?>

                            <div class="footer-box">
                                <div class="row">
                                    <div class="col-md-6 col-xs-4">
                                        <img src="/img/main/line-search.png" alt="" class="footer-box-line">
                                        <button class="footer-box-feedback text-left feedback-popover" rel="feedback_button">Обратная связь <i class="fa  fa-envelope envelope"></i></button>
                                    </div>
                                    <div class="col-md-6 col-xs-8 footer-box-info">
                                        <div class="row">
                                            <div class="pull-right footer-links">
                                                <img src="/img/main/line-search.png" class="footer-linkst__line">
                                                <a href="/helper/client/viewed" class="footer-links__link">
                                                    <img src="/img/main/footer/eye.png" class="footer-box-img"> Просмотренные <span></span>
                                                </a>
                                                <img src="/img/main/line-search.png" class="footer-linkst__line">
                                                <a href="/helper/client/compare" class="footer-links__link">
                                                    <img src="/img/main/footer/stat.png" class="footer-box-img"> Сравнение <span></span>
                                                </a>
                                                <img src="/img/main/line-search.png" class="footer-linkst__line">
                                                <a href="/helper/client/favorite" class="footer-links__link">
                                                    <img src="/img/main/footer/star.png" class="footer-box-img"> Избранное <span></span>
                                                </a>
                                                <img src="/img/main/line-search.png" class="footer-linkst__line">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div> <!-- /row -->
    </div>
    </div>
    <?php $this->endBody() ?>

    </body>
    </html>
<?php $this->endPage() ?>