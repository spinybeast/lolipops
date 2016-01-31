<?php

namespace app\models;

use Yii;
use mongosoft\file\UploadImageBehavior;

/**
 * This is the model class for table "releases".
 *
 * @property integer $id
 * @property string $cover
 * @property string $title
 * @property string $description
 */
class Release extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'releases';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cover', 'title', 'description'], 'required'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
            ['cover', 'image', 'extensions' => 'jpg, jpeg, gif, png', 'checkExtensionByMimeType' => false, 'on' => ['default', 'create', 'update']],
        ];
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => UploadImageBehavior::className(),
                'attribute' => 'cover',
                'scenarios' => ['default', 'create', 'update'],
                'placeholder' => '@webroot/img/releases/no-image.jpg',
                'path' => '@webroot/img/releases/{id}',
                'url' => '@web/img/releases/{id}',
                'thumbs' => [
                    'thumb' => ['width' => 400, 'quality' => 90],
                    'preview' => ['width' => 200, 'height' => 200],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cover' => 'Cover',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
