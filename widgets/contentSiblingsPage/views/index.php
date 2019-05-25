<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/8/18
 * Time: 10:46 AM
 */

use pantera\content\models\ContentPage;
use yii\web\View;

/* @var $this View */
/* @var $prev ContentPage */
/* @var $next ContentPage */
?>
<div class="next-back-news">
    <?php if ($prev) : ?>
        <div class="back-news">
            <?php if ($prev->media && $prev->media->issetMedia()) : ?>
                <div class="img-back-news">
                    <img src="<?= $prev->media->image(60, 60, false) ?>">
                </div>
            <?php endif; ?>
            <div class="title-back-news">
                <?= $prev->title ?>
                <p>
                    <a href="<?= $prev->getUrl() ?>">
                        <ico>&laquo;</ico>
                        Предыдущая новость
                    </a>
                </p>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($next) : ?>
        <div class="next-news">
            <?php if ($next->media && $next->media->issetMedia()) : ?>
                <div class="img-next-news">
                    <img src="<?= $next->media->image(60, 60, false) ?>">
                </div>
            <?php endif; ?>
            <div class="title-next-news">
                <?= $next->title ?>
                <p>
                    <a href="<?= $next->getUrl() ?>">
                        Следующая новость
                        <ico>&raquo;</ico>
                    </a>
                </p>
            </div>
        </div>
    <?php endif; ?>
</div>
