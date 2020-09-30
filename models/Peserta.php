<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peserta".
 *
 * @property int $peserta_id
 * @property string $peserta_nama
 * @property string $peserta_no_hp
 * @property string $peserta_email
 * @property string $peserta_instansi
 *
 * @property PesertaHasWebinar $pesertaHasWebinar
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peserta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peserta_nama', 'peserta_no_hp', 'peserta_email', 'peserta_instansi'], 'required'],
            [['peserta_nama', 'peserta_email', 'peserta_instansi'], 'string', 'max' => 145],
            [['peserta_no_hp'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'peserta_id' => 'Peserta ID',
            'peserta_nama' => 'Nama Peserta',
            'peserta_no_hp' => 'No HP Peserta',
            'peserta_email' => 'Email Peserta',
            'peserta_instansi' => 'Instansi Peserta',
        ];
    }

    /**
     * Gets query for [[PesertaHasWebinar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPesertaHasWebinar()
    {
        return $this->hasOne(PesertaHasWebinar::className(), ['peserta_id' => 'peserta_id']);
    }
}
