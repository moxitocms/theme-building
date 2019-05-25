<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?>
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<div class="content-block content-block--without-padding-top content-block--gray">
    <div class="faq-page">
        <div class="panel-group" id="faq_category" role="tablist" aria-multiselectable="true">
            <?php if ($model->childrenActive) : ?>
            <?php foreach ($model->childrenActive as $category) : ?>
                <div class="panel panel-default">
                    <a class="panel-title" role="button" data-toggle="collapse"
                       data-parent="#faq_category"
                       href="#faq_question_text_<?= $category->id ?>" aria-expanded="true"
                       aria-controls="faq_question_text_<?= $category->id ?>">
                        <div class="panel-heading" role="tab"
                             id="faq_question_<?= $category->id ?>">
                            <?= $category->name ?>
                            <div class="img-faq"></div>
                        </div>
                    </a>
                    <div id="faq_question_text_<?= $category->id ?>"
                         class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="faq_question_<?= $category->id ?>">
                        <div class="panel-body">
                            <div class="editor-content">
                                <?= $category->description ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="row">
                    <div class="empty">
                        Ничего не найдено.
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?= LeadForm::widget([
    'key' => 'question-row',
    'mode' => LeadForm::MODE_INLINE,
]) ?>