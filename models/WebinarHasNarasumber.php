<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "webinar_has_narasumber".
 *
 * @property int $webinar_id
 * @property int $narasumber_id
 * @property string $judul
 *
 * @property Webinar $webinar
 * @property Narasumber $narasumber
 */
class WebinarHasNarasumber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'webinar_has_narasumber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['webinar_id', 'narasumber_id', 'judul'], 'required'],
            [['webinar_id', 'narasumber_id'], 'integer'],
            [['judul'], 'string'],
            [['webinar_id', 'narasumber_id'], 'unique', 'targetAttribute' => ['webinar_id', 'narasumber_id']],
            [['webinar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Webinar::className(), 'targetAttribute' => ['webinar_id' => 'webinar_id']],
            [['narasumber_id'], 'exist', 'skipOnError' => true, 'targetClass' => Narasumber::className(), 'targetAttribute' => ['narasumber_id' => 'narasumber_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'webinar_id' => 'Webinar ID',
            'narasumber_id' => 'Narasumber ID',
            'judul' => 'Judul',
        ];
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

    /**
     * Gets query for [[Narasumber]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNarasumber()
    {
        return $this->hasOne(Narasumber::className(), ['narasumber_id' => 'narasumber_id']);
    }
}
