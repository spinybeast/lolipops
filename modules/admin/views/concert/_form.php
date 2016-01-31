<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\select2\Select2;
use \yii\helpers\ArrayHelper;
use \app\models\Country;
/* @var $this yii\web\View */
/* @var $model app\models\Concert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="concert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Country::getAll(), 'code', 'name'),
        'options' => ['placeholder' => 'Select a country ...'],
    ]); ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(DatePicker::className(), [
        'options' => ['class' => 'form-control', 'style' => 'width:200px'],
        'dateFormat' => 'yyyy-MM-dd'
    ]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
