<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="maincontainer">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                    <div class="navbar-header">    
                        <?php if (!Yii::$app->admin->isGuest) { ?>
                            <?php echo Html::a('Admin panel', \yii\helpers\Url::to(['admins/index']), ['class' => 'navbar-brand']) ?>
                        <?php } ?>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">

                            <?php if (Yii::$app->admin->isGuest) { ?>
                                <li class=""><?php echo Html::a('Login', \yii\helpers\Url::to(['admins/login']), ['class' => '']) ?></li>
                            <?php } else { ?>
                                <li class="<?= Yii::$app->controller->action->id === 'index' ? 'active' : '' ?>"><?php echo Html::a('Главная', \yii\helpers\Url::to(['admins/index']), ['class' => '']) ?></li>
                                <li class="<?= Yii::$app->controller->action->id === 'wallpapers' ? 'active' : '' ?>"><?php echo Html::a('Обои', \yii\helpers\Url::to(['admins/wallpaper']), ['class' => '']) ?></li>
                                <li class=""><?php echo Html::a('Выйти', \yii\helpers\Url::to(['admins/logout']), ['class' => '']) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <?= $content ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
