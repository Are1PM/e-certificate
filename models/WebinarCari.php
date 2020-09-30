<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Webinar;

/**
 * WebinarCari represents the model behind the search form of `app\models\Webinar`.
 */
class WebinarCari extends Webinar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['webinar_id', 'panitia_id', 'tema_id', 'narasumber_id'], 'integer'],
            [['webinar_waktu', 'webinar_judul'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Webinar::find();

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
            'webinar_id' => $this->webinar_id,
            'webinar_waktu' => $this->webinar_waktu,
            'panitia_id' => $this->panitia_id,
            'tema_id' => $this->tema_id,
            'narasumber_id' => $this->narasumber_id,
        ]);

        $query->andFilterWhere(['like', 'webinar_judul', $this->webinar_judul]);

        return $dataProvider;
    }
}
