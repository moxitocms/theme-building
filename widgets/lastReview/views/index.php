<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 5:22 PM
 */

use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ListView;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
?>
<div class="content-block content-block--gray">
    <div class="title-home">Отзывы наших клиентов</div>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'itemView' => '_view',
        'itemOptions' => [
            'class' => 'col-md-12 col-lg-6',
        ],
        'options' => [
            'class' => 'row',
        ],
    ]); ?>
    <div class="text-center">
        <?= Html::a('СМОТРЕТЬ ВСЕ ОТЗЫВЫ', ['/reviews'], [
            'class' => 'btn btn-primary btn-lg',
        ]) ?>
    </div>
</div>