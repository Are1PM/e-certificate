<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "panitia".
 *
 * @property int $panitia_id
 * @property string $panitia_nama
 * @property string $panitia_email
 * @property string $panitia_no_hp
 * @property string $panitia_web
 *
 * @property Webinar[] $webinars
 */
class Panitia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'panitia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['panitia_nama', 'panitia_email', 'panitia_no_hp', 'panitia_web'], 'required'],
            [['panitia_nama', 'panitia_email', 'panitia_web'], 'string', 'max' => 145],
            [['panitia_no_hp'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'panitia_id' => 'Panitia ID',
            'panitia_nama' => 'Panitia Nama',
            'panitia_email' => 'Panitia Email',
            'panitia_no_hp' => 'Panitia No Hp',
            'panitia_web' => 'Panitia Web',
        ];
    }

    /**
     * Gets query for [[Webinars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWebinars()
    {
        return $this->hasMany(Webinar::className(), ['panitia_id' => 'panitia_id']);
    }
}
