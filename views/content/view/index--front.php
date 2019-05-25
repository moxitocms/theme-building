<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\mainCatalog\MainCatalog;
use frontend\widgets\portfolioSlider\PortfolioSlider;
use frontend\widgets\stockOther\StockOther;
use pantera\content\models\ContentPage;
use pantera\content\widgets\block\Block;
use pantera\content\widgets\slider\Slider;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

$this->context->layout = '//front';

/* @var $this View */
/* @var $model ContentPage */
/** @noinspection PhpUndefinedFieldInspection */
?>
<div class="content-block content-block--slider">
    <div class="container">
        <?= Slider::widget([
            'pluginOptions' => [
                'dots' => true,
                'autoplay' => true,
                'animateIn' => false,
                'animateOut' => false,
                'autoplayHoverPause' => true,
            ],
        ]) ?>
    </div>
</div>

<div class="content-block content-block--main-catalog">
    <div class="container">
        <?= MainCatalog::widget([
            'root' => CatalogCategory::findOne(54),
            'onlyFirstLevel' => true,
        ]) ?>
    </div>
</div>

<div class="content-block content-block--video">
    <div class="container">
        <div class="title-home">Видео</div>
        <div class="front-page-video-holder">
            <?= Block::widget([
                'position' => 'front-video',
            ]) ?>
        </div>
    </div>
</div>

<?php if ($model->body || $model->seo->h1): ?>
    <div class="content-block content-block--frontpage-content">
        <div class="container">
            <?php if ($model->seo->h1) : ?>
                <h1 class="title-home">
                    <?= $model->seo->h1 ?>
                </h1>
            <?php endif; ?>
            <?php if ($model->body) : ?>
                <div class="editor-content">
                    <?= $model->body ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
