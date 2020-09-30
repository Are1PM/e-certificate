<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "webinar".
 *
 * @property int $webinar_id
 * @property string $webinar_waktu
 * @property string $webinar_judul
 * @property int $panitia_id
 * @property int $tema_id
 * @property int $narasumber_id
 *
 * @property PesertaHasWebinar[] $pesertaHasWebinars
 * @property Panitia $panitia
 * @property Tema $tema
 * @property WebinarHasNarasumber[] $webinarHasNarasumbers
 * @property Narasumber[] $narasumbers
 */
class Webinar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'webinar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['webinar_waktu', 'webinar_judul', 'panitia_id', 'tema_id', 'narasumber_id'], 'required'],
            [['webinar_waktu'], 'safe'],
            [['webinar_judul'], 'string'],
            [['panitia_id', 'tema_id', 'narasumber_id'], 'integer'],
            [['panitia_id'], 'exist', 'skipOnError' => true, 'targetClass' => Panitia::className(), 'targetAttribute' => ['panitia_id' => 'panitia_id']],
            [['tema_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tema::className(), 'targetAttribute' => ['tema_id' => 'tema_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'webinar_id' => 'Webinar ID',
            'webinar_waktu' => 'Webinar Waktu',
            'webinar_judul' => 'Webinar Judul',
            'panitia_id' => 'Panitia ID',
            'tema_id' => 'Tema ID',
            'narasumber_id' => 'Narasumber ID',
        ];
    }

    /**
     * Gets query for [[PesertaHasWebinars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPesertaHasWebinars()
    {
        return $this->hasMany(PesertaHasWebinar::className(), ['webinar_id' => 'webinar_id']);
    }

    /**
     * Gets query for [[Panitia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPanitia()
    {
        return $this->hasOne(Panitia::className(), ['panitia_id' => 'panitia_id']);
    }

    /**
     * Gets query for [[Tema]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTema()
    {
        return $this->hasOne(Tema::className(), ['tema_id' => 'tema_id']);
    }

    /**
     * Gets query for [[WebinarHasNarasumbers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWebinarHasNarasumbers()
    {
        return $this->hasMany(WebinarHasNarasumber::className(), ['webinar_id' => 'webinar_id']);
    }

    /**
     * Gets query for [[Narasumbers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNarasumbers()
    {
        return $this->hasMany(Narasumber::className(), ['narasumber_id' => 'narasumber_id'])->viaTable('webinar_has_narasumber', ['webinar_id' => 'webinar_id']);
    }
}
