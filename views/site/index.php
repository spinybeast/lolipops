<?php
use app\models\Concert;
use app\models\Video;
use \yii\helpers\Html;

/* @var $this yii\web\View */
/** @var $concerts Concert[] */
/** @var $video Video */
$this->title = 'Home'
?>
<div class="site-index">

    <?php
//    echo Html::img('/img/bannersingle.jpg', ['class' => 'img-responsive']);
//    echo Html::tag('br');
//    echo Html::tag('br');
//    echo Html::img('/img/banner-ontour.jpg', ['class' => 'img-responsive']);
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
    <?php }
    if (!empty($concerts)) { ?>
        <p class="header-big text-uppercase" style="margin: 10px">
            On tour
        </p>
        <table class="table table-responsive">
            <?php foreach ($concerts as $concert) { ?>
                <tr>
                    <td>
                        <div class="flag flag-<?= $concert->country ?>"></div>
                    </td>
                    <td><?= date('F j, Y (D)', strtotime($concert->date)) ?></td>
                    <td><?= $concert->city ?>, <?= $concert->countryObject ? $concert->countryObject->name : '' ?>
                        <br><?= $concert->place ?>
                    </td>
                    <td><a href="<?= $concert->link ?>" target="_blank">VENUE</a></td>
                </tr>
            <?php } ?>
        </table>
        <?php if ($showArchives) {
            echo Html::a('TOUR ARCHIVES', ['/concerts']);
        }?>
    <?php } ?>

</div>
