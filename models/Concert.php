<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "concerts".
 *
 * @property integer $id
 * @property string $country
 * @property string $city
 * @property string $place
 * @property string $date
 * @property string $link
 */
class Concert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'concerts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'city', 'place'], 'required'],
            [['place'], 'string'],
            [['date'], 'safe'],
            [['country', 'city', 'link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'city' => 'City',
            'place' => 'Place',
            'date' => 'Date',
            'link' => 'Link',
        ];
    }
    public function getCountries()
    {
        return $this->hasMany(Country::className(), ['id' => 'country_id'])
            ->viaTable('{{%post_country_assn}}', ['post_id' => 'id']);
    }
}
