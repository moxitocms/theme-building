<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 4:46 PM
 */

namespace frontend\widgets\stockOther;

use frontend\widgets\owlSlider\OwlSlider;
use pantera\content\models\ContentPage;
use pantera\content\models\ContentPageSearch;

class StockOther extends OwlSlider
{
    /* @var ContentPage */
    public $model;
    public $title = 'Другие акции';

    public function run()
    {
        parent::run();
        $searchModel = new ContentPageSearch();
        $dataProvider = $searchModel->search('stock');
        if ($this->model) {
            $dataProvider->query->andWhere(['!=', ContentPage::tableName() . '.id', $this->model->id]);
        }
        if ($dataProvider->totalCount) {
            return $this->render('index', [
                'dataProvider' => $dataProvider,
                'id' => $this->getId(),
                'title' => $this->title,
            ]);
        }
    }
}
