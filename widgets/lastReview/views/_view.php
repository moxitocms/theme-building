<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 5:28 PM
 */

use pantera\content\models\ContentPage;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */
?>
<div class="review-block">
    <div class="media-body">
        <div class="media-heading">
            <strong>
                <?= $model->title ?>
            </strong>
        </div>
        <div class="time-created">
            <?= Yii::$app->formatter->asDate($model->created_at, 'dd.MM.YYYY') ?>
        </div>
        <?php if ($model->body) : ?>
            <div class="review-body">
                <?php echo $model->body; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
