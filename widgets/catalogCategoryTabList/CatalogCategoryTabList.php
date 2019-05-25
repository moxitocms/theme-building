<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/23/18
 * Time: 11:52 AM
 */

namespace frontend\widgets\catalogCategoryTabList;

use common\modules\catalog\models\CatalogCategory;
use frontend\widgets\categoryListRow\CategoryListRow;
use frontend\widgets\categoryListWithSubcategory\CategoryListWithSubcategory;
use yii\base\Widget;
use yii\bootstrap\Nav;
use yii\helpers\Html;

class CatalogCategoryTabList extends Widget
{
    /* @var CatalogCategory
     * Активная в данный момент категория
     * нужно чтобы пометить активной категорию в списке
     */
    public $category;
    /* @var bool */
    public $alternativeStyle = false;

    public function run()
    {
        parent::run();
        $root = $this->category->present()->getRootCategory();
        $activeCategory = null;
        $items = [];
        foreach ($root->childrenActive as $category) {
            $isActive = $this->category->isChildOf($category) || $this->category->id === $category->id;
            $activeCategory = $isActive ? $category : $activeCategory;
            $items[] = [
                'label' => $category->name,
                'url' => $category->present()->getUrl(),
                'active' => $isActive,
            ];
        }
        $result = Nav::widget([
            'items' => $items,
            'options' => [
                'class' => 'nav nav-tabs tabs-bp-sm',
            ],
        ]);
        if ($activeCategory) {
            if ($this->alternativeStyle) {
                $result .= CategoryListWithSubcategory::widget([
                    'model' => $activeCategory,
                ]);
            } else {
                $result .= CategoryListRow::widget([
                    'model' => $activeCategory,
                ]);
            }
        }
        return $result;
    }
}
