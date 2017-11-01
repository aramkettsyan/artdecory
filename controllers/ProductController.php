<?php

namespace app\controllers;

use app\models\Wallpaper;
use yii\data\Pagination;

class ProductController extends \yii\web\Controller
{
    public function actionWallpaper()
    {

        $query = Wallpaper::find();
        // делаем копию выборки
        $countQuery = clone $query;
        // подключаем класс Pagination, выводим по 10 пунктов на страницу
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 32]);
        // приводим параметры в ссылке к ЧПУ
        $pages->pageSizeParam = false;
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        // Передаем данные в представление
        return $this->render('wallpaper', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

}
