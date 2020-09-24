<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Narasumber;

/**
 * NarasumberCari represents the model behind the search form of `app\models\Narasumber`.
 */
class NarasumberCari extends Narasumber
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['narasumber_id'], 'integer'],
            [['narasumber_nama', 'narasumber_no_hp', 'narasumber_email', 'narasumber_bidang_ilmu', 'narasumber_profil'], 'safe'],
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
        $query = Narasumber::find();

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
            'narasumber_id' => $this->narasumber_id,
        ]);

        $query->andFilterWhere(['like', 'narasumber_nama', $this->narasumber_nama])
            ->andFilterWhere(['like', 'narasumber_no_hp', $this->narasumber_no_hp])
            ->andFilterWhere(['like', 'narasumber_email', $this->narasumber_email])
            ->andFilterWhere(['like', 'narasumber_bidang_ilmu', $this->narasumber_bidang_ilmu])
            ->andFilterWhere(['like', 'narasumber_profil', $this->narasumber_profil]);

        return $dataProvider;
    }
}
