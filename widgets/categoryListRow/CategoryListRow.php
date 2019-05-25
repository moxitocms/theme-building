<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/15/18
 * Time: 9:46 AM
 */

namespace frontend\widgets\categoryListRow;

use common\modules\catalog\models\CatalogCategory;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use function implode;
use function is_null;

class CategoryListRow extends Widget
{
    /* @var CatalogCategory */
    public $model;
    /* @var bool Флаг что нужно отобразить только детей */
    public $showOnlyChildren = true;

    public function run()
    {
        parent::run();
        //Если модель не передали возьмем рутовую
        if (is_null($this->model)) {
            $this->model = CatalogCategory::find()->roots()->one();
        }
        $models = $this->showOnlyChildren ? $this->model->children : $this->model->descendants;
        $categories = ArrayHelper::getColumn($models, function (CatalogCategory $model) {
            $link = Html::a($model->name, $model->present()->getUrl());
            return Html::tag('li', $link, [
                'class' => 'category-row__item',
            ]);
        });
        return $categories ? Html::tag('ul', implode('', $categories), [
            'class' => 'category-row',
        ]) : '';
    }

    public function init()
    {
        parent::init();
        CategoryListRowAsset::register($this->view);
    }
}
