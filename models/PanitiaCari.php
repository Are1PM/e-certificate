<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Panitia;

/**
 * PanitiaCari represents the model behind the search form of `app\models\Panitia`.
 */
class PanitiaCari extends Panitia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['panitia_id'], 'integer'],
            [['panitia_nama', 'panitia_email', 'panitia_no_hp', 'panitia_web'], 'safe'],
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
        $query = Panitia::find();

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
            'panitia_id' => $this->panitia_id,
        ]);

        $query->andFilterWhere(['like', 'panitia_nama', $this->panitia_nama])
            ->andFilterWhere(['like', 'panitia_email', $this->panitia_email])
            ->andFilterWhere(['like', 'panitia_no_hp', $this->panitia_no_hp])
            ->andFilterWhere(['like', 'panitia_web', $this->panitia_web]);

        return $dataProvider;
    }
}
