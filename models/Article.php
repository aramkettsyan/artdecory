<?php

namespace app\modules\article\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $preview
 * @property string $content
 * @property string $seo_title
 * @property string $seo_description
 * @property string $seo_keywords
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $publish_at
 */
class Article extends \yii\db\ActiveRecord {

    const INDEX_MAX_ARTICLE = 10; // Максимум статей на одной странице
    const WIDGET_MAX_ARTICLE = 2; // Максимум стстей в виджете

    static $_is_enable = ['Нет', 'Да'];

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'preview'], 'required'],
            [['content'], 'string'],
            [['created_at', 'updated_at', 'is_enable'], 'integer'],
            [['title', 'preview', 'seo_title', 'seo_description', 'seo_keywords'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'preview' => 'Анонс',
            'content' => 'Текст',
            'seo_title' => 'Seo_Title',
            'seo_description' => 'Seo_Description',
            'seo_keywords' => 'Seo_Keywords',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
            'is_enable' => 'Включено',
        ];
    }

    public function beforeSave($insert) {

        if ($this->isNewRecord)
            $this->created_at = time();

        return parent::beforeSave($insert);
    }

}
