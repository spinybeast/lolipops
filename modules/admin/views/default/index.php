<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use rmrevin\yii\fontawesome\FA;
$this->title = 'Админка';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>
        <p class="lead">Добро пожаловать в админку</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2><?= FA::icon('newspaper-o') ?> Новости</h2>

                <p>Создавать и редактировать новости сайта для отображения на странице /news</p>

                <p><a class="btn btn-primary" href="<?= Url::to(['/admin/news'])?>">Начать &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2><?= FA::icon('music') ?> Концерты</h2>

                <p>Добавлять и редактировать концерты для отображения на главной странице</p>

                <p><a class="btn btn-primary" href="<?= Url::to(['/admin/concert'])?>">Начать &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2><?= FA::icon('youtube-play') ?> Видео</h2>

                <p>Вставка видео на главной странице и описания к нему</p>

                <p><a class="btn btn-primary" href="<?= Url::to(['/admin/video'])?>">Начать &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2><?= FA::icon('floppy-o') ?> Релизы</h2>

                <p>Добавление и редактирование вышедших релизов для отображения на странице /releases</p>

                <p><a class="btn btn-primary" href="<?= Url::to(['/admin/release'])?>">Начать &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
