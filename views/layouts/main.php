<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\News;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Press', 'url' => ['/site/about']],
            ['label' => 'Releases', 'url' => ['/site/about']],
            ['label' => 'Community', 'url' => ['/site/about']],
            ['label' => 'Shop', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <div class="col-md-8">
            <?= $content ?>
        </div>
        <div class="col-md-4">
            <?php /** @var News[] $latestNews */
            $latestNews = News::find()->limit(3)->orderBy('created_at desc')->all();

            if (!empty($latestNews)) { ?>
                <div class="latest-news">
                    <p class="news-header text-center text-uppercase">
                        <b>Latest news</b>
                    </p>
                    <?php foreach ($latestNews as $item) { ?>
                        <div class="news-item" id="<?= $item->id ?>">
                            <p class="created-at">
                                <b class="text-uppercase"><?= date('F j, Y', strtotime($item->created_at)) ?></b>
                            </p>

                            <p class="title"><a href="/news#<?= $item->id ?>"><?= $item->title ?></a></p>
                        </div>
                        <hr>
                    <?php } ?>
                </div>
            <?php } ?>
            <p class="header text-uppercase">
                Facebook
            </p>

            <div class="fb-page fb_iframe_widget" data-href="http://www.facebook.com/illidianceband"
                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                 data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered">
            </div>
            <br><br>

            <p class="header text-uppercase">
                Instagram
            </p>

            <div>
                <iframe src="http://widget.websta.me/in/tommy_shockwave/?r=1&w=3&h=3&b=1&p=5" allowtransparency="true"
                        frameborder="0" scrolling="no" style="border:none;overflow:hidden;height: 315px"></iframe>
                <a href="http://instagram.com/illidianceband" target="_blank">http://instagram.com/illidianceband </a>
            </div>
            <p class="header text-uppercase">
                also check
            </p>
            <a href="http://www.amaranthe.se/fanclub/" target="_blank"><img src="/img/fanclub.jpg" width="301" height="527"
                                                                            alt=""></a>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
