<?php

namespace app\controllers;

use app\models\Concert;
use app\models\Release;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\News;
use app\models\Video;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index',[
            'video' => Video::find()->one(),
            'concerts' => Concert::find()->where(['>=', 'date', date('Y-m-d')])->orderBy('date desc')->all(),
            'showArchives' => Concert::find()->where(['<=', 'date', date('Y-m-d')])->count() > 0
        ]);
    }

    public function actionConcerts()
    {
        return $this->render('concerts',[
            'concerts' => Concert::find()->orderBy('date desc')->all(),
        ]);
    }

    public function actionNews()
    {
        return $this->render('news', [
            'news' => News::find()->orderBy('created_at desc')->all(),
        ]);
    }

    public function actionPress()
    {
        return $this->render('press');
    }

    public function actionReleases()
    {
        return $this->render('releases', [
            'releases' => Release::find()->all(),
        ]);
    }

    public function actionCommunity()
    {
        return $this->render('community');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionShop()
    {
        return $this->render('shop');
    }

}
