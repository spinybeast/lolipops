<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use rmrevin\yii\fontawesome\FA;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->id . ' | ' . $this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Админка Lollipops ' . FA::icon('star'),
        'brandUrl' => Url::to('/admin'),
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => [
            ['label' => FA::icon('newspaper-o') . ' Новости', 'url' => ['/admin/news']],
            ['label' => FA::icon('music') . ' Концерты', 'url' => ['/admin/concert']],
            ['label' => FA::icon('youtube-play') . ' Видео', 'url' => ['/admin/video']],
            ['label' => FA::icon('floppy-o') . ' Релизы', 'url' => ['/admin/release']],
            Yii::$app->user->isGuest ?
                ['label' => FA::icon('sign-in') . ' Авторизация', 'url' => ['/login']] :
                [
                    'label' => FA::icon('sign-out') . ' Выход (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
            ['label' => 'Открыть сайт', 'url' => Url::home(), 'linkOptions' => ['target' => '_blank']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink' => [
                'label' => 'Home',
                'url' => Url::to('/admin')
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->id . ' ' . date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
