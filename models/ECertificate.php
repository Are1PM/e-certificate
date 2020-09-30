<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peserta_has_webinar".
 *
 * @property int $peserta_id
 * @property int $webinar_id
 * @property string $waktu_daftar
 * @property string $waktu_presensi
 * @property string $no_sertifikat
 *
 * @property Peserta $peserta
 * @property Webinar $webinar
 */
class ECertificate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peserta_has_webinar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['peserta_id', 'webinar_id', 'waktu_daftar', 'waktu_presensi', 'no_sertifikat'], 'required'],
            [['peserta_id', 'webinar_id'], 'integer'],
            [['waktu_daftar', 'waktu_presensi'], 'safe'],
            [['no_sertifikat'], 'string', 'max' => 145],
            [['peserta_id'], 'unique'],
            [['peserta_id'], 'exist', 'skipOnError' => true, 'targetClass' => Peserta::className(), 'targetAttribute' => ['peserta_id' => 'peserta_id']],
            [['webinar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Webinar::className(), 'targetAttribute' => ['webinar_id' => 'webinar_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'peserta_id' => 'Peserta ID',
            'webinar_id' => 'Webinar ID',
            'waktu_daftar' => 'Waktu Daftar',
            'waktu_presensi' => 'Waktu Presensi',
            'no_sertifikat' => 'No Sertifikat',
        ];
    }

    /**
     * Gets query for [[Peserta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeserta()
    {
        return $this->hasOne(Peserta::className(), ['peserta_id' => 'peserta_id']);
    }

    /**
     * Gets query for [[Webinar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWebinar()
    {
        return $this->hasOne(Webinar::className(), ['webinar_id' => 'webinar_id']);
    }
}
