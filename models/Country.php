<?php

namespace app\models;

use yii;
use yii\base\Model;
use yii\helpers\Json;

class Country extends Model
{
    public $code;
    public $name;

    public static $list = [];

    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['code', 'name'], 'string'],
            [['code', 'name'], 'safe'],
        ];
    }

    public static function getAll()
    {
        if (empty(self::$list)) {
            if ($file = file_get_contents(Yii::$app->basePath . '/web/data/countries.json')) {
                $list = Json::decode($file);
                if (!empty($list['countries'])){
                    foreach ($list['countries'] as $data) {
                        $country = new Country();
                        $country->load(['Country' => $data]);
                        self::$list[$data['code']] = $country;
                    }
                }
            }
        }

        return self::$list;
    }

    public static function findByCode($code)
    {
        $list = self::getAll();
        return $list[$code];
    }
}