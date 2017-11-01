<?php
$this->title = "Контакты";
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<ul class="breadcrumb margin">
    <li><a href="///home/kognitiv/NetBeansProjects/artdecory">Главная</a></li>
    <li><?= $this->title ?></li>
</ul>
<div class="row caption">
    <div class="col-xs-12 overlay">
        <img src="img/main/center/decor-line.png" alt="" class="dec-line-l">
        <h2 class="product"><?=$this->title?></h2>
        <img src="img/main/center/decor-line.png" alt="" class="dec-line-r">
    </div>
</div>
<div class="contacts-heading">
    Пункт самовывоза
</div>
<div class="col-sm-6">
    <div class="contacts">
        <div class="contacts-value">
            <p><img src="/img/contacts/icons/Address.png"> Москва, Севастопольский проспект д.10, корп.4</p>
        </div>
    </div>

    <div class="contacts">
        <div class="contacts-text time">
            <img src="/img/contacts/icons/Time.png"> Время работы:
        </div>

        <div class="contacts-value">
            <p>Пн-Чт: 10.00 - 19.00</p>
            <p>Пт-Сб: 10.00 - 18.00</p>
            <p>Воскресенье: выходной</p>
        </div>
    </div>

    <div class="contacts">
        <div class="contacts-text phone">
            <img src="/img/contacts/icons/Phone.png"> Телефон / факс:
        </div>

        <div class="contacts-value">
            <p>+7 (495) 761-61-68</p>
            <p>+7 (926) 163-77-88</p>
        </div>
    </div>

    <div class="contacts">
        <div class="contacts-text">
            <img src="/img/contacts/icons/WhatsApp.png"> Viber/WhatsApp:
        </div>

        <div class="contacts-value">
            <p>+7 (926) 163-77-88</p>
        </div>
    </div>

    <div class="contacts">
        <div class="contacts-text">
            <img src="/img/contacts/icons/Email.png"> E-mail:
        </div>

        <div class="contacts-text">
            info@artdecori.ru
        </div>
    </div>
</div>

<div class="col-sm-6">
    <img src="/img/contacts/Scheme.png" class="img-responsive">
</div>

<div class="col-xs-12 order-line-grey">
    <img src="/img/line-grey-up.png">
</div>

<div class="contacts-heading">
    На карте
</div>

<div class="map">
    <iframe src="https://yandex.ru/map-widget/v1/-/CBUvqWFvkB" width="100%" height="400" frameborder="0"></iframe>
</div>

<div class="col-xs-12 order-line-grey">
    <img src="/img/cart/line-grey.png">
</div>

<div class="contacts-heading">
    Реквизиты
</div>

<div class="col-xs-12 contacts-bottom-text">
    ИП Сайфиев Денис Витальевич, ИНН 262507138652, ОГРНИП 312265110700369, ОАО АКБ "АВАНГАРД"
    г.МОСКВА, р/с 40802810500030013455, к/с 30101810000000000201, БИК 044525201
</div>