<?php

use kop\y2sp\ScrollPager;
use pantera\leads\widgets\form\LeadForm;
use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\widgets\ListView;
use yii\web\JsExpression;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
$this->title = 'Отзывы наших клиентов';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1 class="title-home">
    <?= $this->title ?>
</h1>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'itemView' => '_view',
    'options' => [
        'class' => 'row',
    ],
    'itemOptions' => [
        'class' => 'col-md-6',
    ],
    'pager' => [
        'class' => ScrollPager::class,
        'item' => '.review-block',
        'triggerText' => 'ПОКАЗАТЬ ЕЩЕ',
        'noneLeftText' => '',
        'enabledExtensions' => [
            ScrollPager::EXTENSION_TRIGGER,
            ScrollPager::EXTENSION_SPINNER,
            ScrollPager::EXTENSION_NONE_LEFT,
            ScrollPager::EXTENSION_PAGING,
        ],
        'triggerTemplate' => '<div class="ias-trigger" style="text-align: center; cursor: pointer;">
                                <a class="btn btn-primary btn-lg">{text}</a>
                            </div>',
        'eventOnRendered' => new JsExpression('function(){initReviewReadMore();}'),
    ]
]) ?>
<section class="review-form-wrapper">
<?= LeadForm::widget([
    'mode' => LeadForm::MODE_INLINE,
    'key' => 'review',
]) ?>
</section>
