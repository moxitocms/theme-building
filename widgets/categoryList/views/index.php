<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/2/18
 * Time: 1:28 PM
 */

use yii\data\ArrayDataProvider;
use yii\web\View;
use yii\widgets\ListView;

/* @var $this View */
/* @var $dataProvider ArrayDataProvider */
/* @var $view string */
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'itemView' => $view,
    'options' => [
        'class' => 'category-list',
    ],
    'itemOptions' => [
        'class' => 'category-item',
    ],
]);
