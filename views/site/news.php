<?php
use app\models\News;

/* @var $this yii\web\View */
/** @var $latestNews News[] */
$this->title = 'News Archives'
?>
<div class="site-news">
    <?php /** @var News[] $news */
    if (!empty($news)) { ?>
        <div class="latest-news">
            <p class="news-header text-center text-uppercase">
                <b><?= $this->title ?></b>
            </p>
            <?php foreach ($news as $item) { ?>
                <div class="news-item">
                    <p class="created-at">
                        <b class="text-uppercase"><?= date('F j, Y', strtotime($item->created_at)) ?></b>
                    </p>
                    <p class="title"><?= $item->title ?></p>
                    <div><?= $item->text ?></div>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_sharing_toolbox"></div>
                </div>
                <hr>
            <?php } ?>
        </div>
    <?php } ?>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53a7fb127dfe5898" async="async"></script>
