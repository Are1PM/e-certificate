<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ECertificate;

/**
 * ECertificateCari represents the model behind the search form of `app\models\ECertificate`.
 */
class ECertificateCari extends ECertificate
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peserta_id', 'webinar_id'], 'integer'],
            [['waktu_daftar', 'waktu_presensi', 'no_sertifikat'], 'safe'],
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
        $query = ECertificate::find();

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
            'webinar_id' => $this->webinar_id,
            'waktu_daftar' => $this->waktu_daftar,
            'waktu_presensi' => $this->waktu_presensi,
        ]);

        $query->andFilterWhere(['like', 'no_sertifikat', $this->no_sertifikat]);

        return $dataProvider;
    }
}
