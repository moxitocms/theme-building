<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/22/18
 * Time: 1:55 PM
 */

namespace frontend\widgets\categoryListWithSubcategory;

use common\modules\catalog\models\CatalogCategory;
use yii\base\Widget;

class CategoryListWithSubcategory extends Widget
{
    /* @var CatalogCategory */
    public $model;

    public function run()
    {
        parent::run();
        return $this->render('index', [
            'model' => $this->model,
        ]);
    }
}
