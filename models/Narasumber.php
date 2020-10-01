<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "narasumber".
 *
 * @property int $narasumber_id
 * @property string $narasumber_nama
 * @property string $narasumber_no_hp
 * @property string $narasumber_email
 * @property string $narasumber_bidang_ilmu
 * @property string $narasumber_profil
 *
 * @property WebinarHasNarasumber[] $webinarHasNarasumbers
 * @property Webinar[] $webinars
 */
class Narasumber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'narasumber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['narasumber_nama', 'narasumber_no_hp', 'narasumber_email', 'narasumber_bidang_ilmu', 'narasumber_profil'], 'required'],
            [['narasumber_profil'], 'string'],
            [['narasumber_nama', 'narasumber_email', 'narasumber_bidang_ilmu'], 'string', 'max' => 145],
            [['narasumber_no_hp'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'narasumber_id' => 'Narasumber ID',
            'narasumber_nama' => 'Nama Narasumber',
            'narasumber_no_hp' => 'No HP Narasumber',
            'narasumber_email' => 'Email Narasumber',
            'narasumber_bidang_ilmu' => 'Bidang Ilmu Narasumber',
            'narasumber_profil' => 'Profil Narasumber',
        ];
    }

    /**
     * Gets query for [[WebinarHasNarasumbers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWebinarHasNarasumbers()
    {
        return $this->hasMany(WebinarHasNarasumber::className(), ['narasumber_id' => 'narasumber_id']);
    }

    /**
     * Gets query for [[Webinars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWebinars()
    {
        return $this->hasMany(Webinar::className(), ['webinar_id' => 'webinar_id'])->viaTable('webinar_has_narasumber', ['narasumber_id' => 'narasumber_id']);
    }
}
