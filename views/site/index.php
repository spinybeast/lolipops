<?php
use app\models\News;
use app\models\Video;

/* @var $this yii\web\View */
/** @var $latestNews News[] */
/** @var $video Video */
$this->title = 'ILLIDIANCE'
?>
<div class="site-index">
        <?php
        if (!empty($video)) { ?>
            <div class="video">
                <iframe width="560" height="315" src="<?= $video->link ?>" frameborder="0" allowfullscreen></iframe>
                <div class="description">
                    <?= $video->description ?>
                </div>
            </div>
        <?php } ?>
</div>
