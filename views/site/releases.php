<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Release;

$this->title = 'Releases';
?>
<div class="site-releases">
    <?php /** @var Release[] $releases */
    if (!empty($releases)) { ?>
        <div class="latest-news">
            <p class="news-header text-center text-uppercase">
                <b><?= $this->title ?></b>
            </p>
            <?php foreach ($releases as $item) { ?>
                <div class="releases-item">
                    <div class="col-md-4"><?=Html::img($item->getUploadUrl('cover'), ['class' => 'img-responsive'])?></div>
                    <div class="col-md-8"><p class="title"><?= $item->title ?></p>
                        <div><?= $item->description ?></div>
                    </div>
                </div>
                <div class="clear"  style="clear: both;" ></div>
                <hr>
            <?php } ?>
        </div>
    <?php } ?>
</div>
