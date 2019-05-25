<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 5:16 PM
 */

use pantera\content\models\ContentPage;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */
?>
<div class="review-block">
<?php if ($model->media && $model->media->issetMedia()) : ?>
    <a href="<?= $model->media->image(1040, 740, false) ?>" data-fancybox="reviews">
        <img style="max-width: 100%" src="<?= $model->media->image(570, 370, false) ?>">
    </a>
<?php endif; ?>
</div>
