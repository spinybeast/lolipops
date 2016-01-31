<?php

/* @var $this yii\web\View */

$this->title = 'Tour archives';

if (!empty($concerts)) {
    $actual = $past = [];
    foreach ($concerts as $concert) {
        if ($concert->isActual()) {
            $actual[] = $concert;
        } else {
            $past[] = $concert;
        }
    }?>
    <p class="header-big text-uppercase" style="margin: 10px">
        On tour
    </p>
    <table class="table-responsive">
        <?php foreach ($actual as $concert) { ?>
            <tr>
                <td>
                    <div class="flag flag-<?= $concert->country ?>"></div>
                </td>
                <td><?= date('F j, Y', strtotime($concert->date)) ?></td>
                <td><?= $concert->city ?>, <?= $concert->countryObject ? $concert->countryObject->name : '' ?>
                    <br><?= $concert->place ?>
                </td>
                <td><a href="<?= $concert->link ?>" target="_blank">VENUE</a></td>
            </tr>
        <?php } ?>
    </table>
    <p class="header-big text-uppercase" style="margin: 10px">
        Past concerts
    </p>
    <table class="table-responsive past">
        <?php foreach ($past as $concert) { ?>
            <tr>
                <td>
                    <div class="flag flag-<?= $concert->country ?>"></div>
                </td>
                <td><?= date('F j, Y', strtotime($concert->date)) ?></td>
                <td><?= $concert->city ?>, <?= $concert->countryObject ? $concert->countryObject->name : '' ?>
                    <br><?= $concert->place ?>
                </td>
                <?php /*<td><a href="<?= $concert->link ?>" target="_blank">VENUE</a></td> */ ?>
            </tr>
        <?php } ?>
    </table>

<?php } ?>