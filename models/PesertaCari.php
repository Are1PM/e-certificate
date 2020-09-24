<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Peserta;

/**
 * PesertaCari represents the model behind the search form of `app\models\Peserta`.
 */
class PesertaCari extends Peserta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peserta_id'], 'integer'],
            [['peserta_nama', 'peserta_no_hp', 'peserta_email', 'peserta_instansi'], 'safe'],
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
        $query = Peserta::find();

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
            'peserta_id' => $this->peserta_id,
        ]);

        $query->andFilterWhere(['like', 'peserta_nama', $this->peserta_nama])
            ->andFilterWhere(['like', 'peserta_no_hp', $this->peserta_no_hp])
            ->andFilterWhere(['like', 'peserta_email', $this->peserta_email])
            ->andFilterWhere(['like', 'peserta_instansi', $this->peserta_instansi]);

        return $dataProvider;
    }
}
