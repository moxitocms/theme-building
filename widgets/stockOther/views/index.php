<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 4:55 PM
 */

use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\widgets\ListView;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
/* @var $id string */
/* @var $title string */
?>
<div class="title-home">
    <?= $title ?>
</div>
<div class="owl-slider carousel" id="<?= $id ?>">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'itemView' => '@app/views/specials/_view',
        'itemOptions' => [
            'class' => 'content-item',
        ],
        'options' => [
            'class' => 'owl-carousel',
        ],
    ]) ?>
</div>
