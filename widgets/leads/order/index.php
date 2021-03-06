<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/24/18
 * Time: 1:33 PM
 */

use frontend\widgets\leads\order\LeadOrder;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model LeadOrder */
/* @var $key string */
$this->title = 'Записаться';

$form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]);

echo $form->field($model, 'name')->textInput([
    'placeholder' => $model->getAttributeLabel('name'),
])->label(false);

echo $form->field($model, 'phone')->widget(MaskedInput::class, [
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => $model->getAttributeLabel('phone'),
        'class' => 'form-control',
    ],
])->label(false);

echo $form->field($model, 'email')->textInput([
    'type' => 'email',
    'placeholder' => $model->getAttributeLabel('email'),
])->label(false);

echo Html::activeHiddenInput($model, 'detail');

echo Html::submitButton(Html::tag('span', 'Записаться', [
    'class' => 'ladda-label',
]), [
    'class' => 'btn btn-primary ladda-button',
    'data' => [
        'style' => 'zoom-in'
    ],
]);

ActiveForm::end();
