<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/11/18
 * Time: 5:39 PM
 */

namespace frontend\widgets\categoryList;

use common\modules\catalog\models\CatalogCategory;
use yii\base\Widget;
use yii\data\ArrayDataProvider;
use yii\data\Pagination;

class CategoryList extends Widget
{
    /* @var CatalogCategory[] */
    public $models;
    /* @var string Тип который отображаем */
    public $type = self::TYPE_CATEGORY;
    /* @var false|array Настройки для пейджера */
    public $pagination = false;

    /* @var string Тип для отображения категорий */
    const TYPE_CATEGORY = 'typeCategory';
    /* @var string Тип для отображения портфолио */
    const TYPE_PORTFOLIO = 'typePortfolio';

    public function run()
    {
        parent::run();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $this->models,
            'totalCount' => count($this->models),
            'pagination' => $this->pagination,
        ]);
        if ($this->models) {
            $view = '_view';
            if ($this->type === self::TYPE_PORTFOLIO) {
                $view = '_view-portfolio';
            }
            return $this->render('index', [
                'dataProvider' => $dataProvider,
                'view' => $view,
            ]);
        }
    }
}
