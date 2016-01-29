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
            <div class="col-lg-4">
                <h2>Новости <?= FA::icon('newspaper-o') ?></h2>

                <p>Создавать и редактировать новости сайта</p>

                <p><a class="btn btn-primary" href="<?= Url::to(['/admin/news'])?>">Начать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Концерты <?= FA::icon('music') ?></h2>

                <p>Добавлять и редактировать концерты</p>

                <p><a class="btn btn-primary" href="<?= Url::to(['/admin/concert'])?>">Начать &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Видео <?= FA::icon('youtube-play') ?></h2>

                <p>Вставка видео на главной странице</p>

                <p><a class="btn btn-primary" href="<?= Url::to(['/admin/video'])?>">Начать &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
