<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use \rmrevin\yii\fontawesome\FA;
$this->title = 'Contact';
?>
<div class="site-contact">
    <p class="text-uppercase"><b>General Management:</b></p>

    <p>Dmitry &laquo;Xyrohn&raquo; Shkurin</p>
    <p><?= FA::icon('envelope')->size(FA::SIZE_2X)?> <a href="mailto:xyrohn@gmail.com">xyrohn@gmail.com</a></p>

    <p><?= FA::icon('vk')->size(FA::SIZE_2X)?> <a href="http://vk.com/xyrohn">http://vk.com/xyrohn</a></p>
    <p><?= FA::icon('facebook')->size(FA::SIZE_2X)?> <a href="https://www.facebook.com/dmitry.shkurin.50">https://www.facebook.com/dmitry.shkurin.50</a></p>

    <br><br>
    <p class="text-uppercase"><b>Site support</b></p>
    <p><?= FA::icon('envelope')->size(FA::SIZE_2X)?> <a href="mailto:spiny.beast@gmail.com">spiny.beast@gmail.com</a></p>
</div>