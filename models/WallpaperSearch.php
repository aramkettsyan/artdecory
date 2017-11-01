<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wallpaper;

/**
 * WallpapSearch represents the model behind the search form about `app\models\Wallpap`.
 */
class WallpaperSearch extends Wallpaper
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'width', 'length', 'podgon', 'is_enable', 'is_new', 'is_popular', 'is_discount', 'created_at', 'updated_at'], 'integer'],
            [['category_id', 'title', 'sku', 'collection', 'material_id', 'country_id', 'factory_id', 'purpose_id', 'color_id', 'image_id', 'sort_id', 'url', 'image', 'content', 'seo_title', 'seo_description', 'seo_keywords', 'href'], 'safe'],
            [['price_rub', 'price_usd', 'price_eur'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Wallpaper::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'width' => $this->width,
            'length' => $this->length,
            'podgon' => $this->podgon,
            'price_rub' => $this->price_rub,
            'price_usd' => $this->price_usd,
            'price_eur' => $this->price_eur,
            'is_enable' => $this->is_enable,
            'is_new' => $this->is_new,
            'is_popular' => $this->is_popular,
            'is_discount' => $this->is_discount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'category_id', $this->category_id])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'sku', $this->sku])
            ->andFilterWhere(['like', 'collection', $this->collection])
            ->andFilterWhere(['like', 'material_id', $this->material_id])
            ->andFilterWhere(['like', 'country_id', $this->country_id])
            ->andFilterWhere(['like', 'factory_id', $this->factory_id])
            ->andFilterWhere(['like', 'purpose_id', $this->purpose_id])
            ->andFilterWhere(['like', 'color_id', $this->color_id])
            ->andFilterWhere(['like', 'image_id', $this->image_id])
            ->andFilterWhere(['like', 'sort_id', $this->sort_id])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_description', $this->seo_description])
            ->andFilterWhere(['like', 'seo_keywords', $this->seo_keywords])
            ->andFilterWhere(['like', 'href', $this->href]);

        return $dataProvider;
    }
}
