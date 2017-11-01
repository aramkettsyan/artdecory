<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "___wallpaper".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $parent_id
 * @property string $title
 * @property string $sku
 * @property string $collection
 * @property string $material_id
 * @property string $country_id
 * @property string $factory_id
 * @property string $purpose_id
 * @property string $color_id
 * @property string $image_id
 * @property integer $width
 * @property integer $length
 * @property integer $podgon
 * @property double $price_rub
 * @property double $price_usd
 * @property double $price_eur
 * @property string $url
 * @property string $image
 * @property string $content
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property integer $is_enable
 * @property integer $is_new
 * @property integer $is_popular
 * @property integer $is_discount
 * @property integer $created_at
 * @property integer $updated_at
 */
class Wallpaper extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'wallpaper';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['parent_id', 'width', 'length', 'podgon', 'is_enable', 'is_new', 'is_popular', 'is_discount', 'created_at', 'updated_at'], 'integer'],
            [['title', 'sku', 'url'], 'required'],
            [['price_rub', 'price_usd', 'price_eur'], 'number'],
            [['content'], 'string'],
            [['category_id', 'title', 'sku', 'collection', 'material_id', 'country_id', 'factory_id', 'purpose_id', 'color_id', 'image_id', 'sort_id', 'url', 'image', 'seo_title', 'seo_description', 'seo_keywords'], 'string', 'max' => 255],
            [['url'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'category_id' => 'Категория',
            'parent_id' => 'Связанный товар',
            'title' => 'Заголовок',
            'sku' => 'Артикул',
            'collection' => 'Коллекция',
            'material_id' => 'Материал',
            'country_id' => 'Страна',
            'factory_id' => 'Фабрика',
            'purpose_id' => 'Назначение',
            'color_id' => 'Цвет',
            'image_id' => 'Расцветка',
            'width' => 'Ширина',
            'length' => 'Длина',
            'podgon' => 'Подгон',
            'price_rub' => 'Цена в рублях',
            'price_usd' => 'Цена в долларах',
            'price_eur' => 'Цена в евро',
            'url' => 'Урл',
            'image' => 'Изображение',
            'content' => 'Содержание',
            'seo_title' => 'Seo Title',
            'seo_description' => 'Seo Description',
            'seo_keywords' => 'Seo Keywords',
            'is_enable' => 'Статус',
            'is_new' => 'Новый',
            'is_popular' => 'Популярный',
            'is_discount' => 'Скидка',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function checkUrl($url) {

        $wallpapers = self::find()->where(['href' => $url])->one();

        return $wallpapers ? true : false;

    }

}
