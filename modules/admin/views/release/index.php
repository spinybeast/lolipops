<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Releases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="release-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Release', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'header' => 'Img',
                'value' => function($data) { return $data->getUploadUrl('cover'); },
                'format' => ['image', ['width' => 100]],
            ],
            'title',
            'description:html',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
