<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/1/18
 * Time: 12:22 PM
 */

namespace frontend\widgets\videoList;

use common\modules\catalog\models\CatalogCategory;
use yii\base\Widget;
use yii\data\ArrayDataProvider;

class VideoList extends Widget
{
    /* @var CatalogCategory */
    public $category;
    /* @var CatalogCategory[] */
    public $models;

    public function run()
    {
        parent::run();
        if (empty($this->models)) {
            return null;
        }
        $dataProvider = new ArrayDataProvider([
            'allModels' => $this->models,
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function init()
    {
        parent::init();
        if ($this->category && $this->category->childrenActive) {
            $this->models = $this->category->childrenActive;
        }
        VideoListAsset::register($this->view);
    }
}
