<?php
use app\models\News;
use app\models\Video;
use \yii\helpers\Html;

/* @var $this yii\web\View */
/** @var $latestNews News[] */
/** @var $video Video */
$this->title = 'Home'
?>
<div class="site-index">

    <?php
    echo Html::img('/img/bannersingle.jpg', ['class' => 'img-responsive']);
    echo Html::tag('br');
    echo Html::tag('br');
    echo Html::img('/img/banner-ontour.jpg', ['class' => 'img-responsive']);
    if (!empty($video)) { ?>
        <p class="header-big text-uppercase" style="margin: 10px">
            Watch now
        </p>
        <div class="video">
            <iframe width="560" height="315" src="<?= $video->link ?>" frameborder="0" allowfullscreen></iframe>
            <div class="description">
                <?= $video->description ?>
            </div>
        </div>
    <?php } ?>
</div>
