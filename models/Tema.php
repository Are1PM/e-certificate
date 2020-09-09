<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tema".
 *
 * @property int $tema_id
 * @property string $tema_nama
 *
 * @property Webinar[] $webinars
 */
class Tema extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tema';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tema_nama'], 'required'],
            [['tema_nama'], 'string', 'max' => 145],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tema_id' => 'Tema ID',
            'tema_nama' => 'Tema Nama',
        ];
    }

    /**
     * Gets query for [[Webinars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWebinars()
    {
        return $this->hasMany(Webinar::className(), ['tema_id' => 'tema_id']);
    }
}
