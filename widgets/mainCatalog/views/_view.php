<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 4:26 PM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $index integer */

$hasImage = $model->media && $model->media->issetMedia();

?><div class="catalog-block<?= $hasImage ? ' with-image' : ' no-image' ?>">
    <div class="caption">
        <div class="num">
            <?= str_pad($index + 1, 2, 0, STR_PAD_LEFT) ?>
        </div>
        <div class="title-block-img">
            <?= Html::a($model->name, $model->present()->getUrl()) ?>
        </div>
    </div>
    <?php if ($hasImage): ?>
    <div class="media-top">
        <div class="block-img">
            <a href="<?= $model->present()->getUrl() ?>">
                <?= Html::img($model->media->image(340, 276, false), ['alt'=>$model->name]); ?>
            </a>
        </div>
    </div>
    <?php endif; ?>
</div>
