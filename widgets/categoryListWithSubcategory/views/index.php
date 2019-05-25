<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/22/18
 * Time: 1:57 PM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
?>
<div class="row">
    <?php foreach ($model->childrenActive as $category) : ?>
        <div class="col-md-4">
            <div class="category-list">
                <div class="category-list__heading">
                    <a href="<?= $category->present()->getUrl() ?>">
                        <?= $category->name ?>
                    </a>
                </div>
                <div class="category-list__body">
                    <ul>
                        <?php foreach ($category->childrenActive as $childCategory) : ?>
                            <li>
                                <a href="<?= $childCategory->present()->getUrl() ?>">
                                    <?= $childCategory->name ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
