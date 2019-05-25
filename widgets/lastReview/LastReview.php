<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 5:21 PM
 */

namespace frontend\widgets\lastReview;

use pantera\content\models\ContentPageSearch;
use yii\base\Widget;

class LastReview extends Widget
{
    public function run()
    {
        parent::run();
        $searchModel = new ContentPageSearch();
        $dataProvider = $searchModel->search('review');
        $dataProvider->query->limit(4);
        $dataProvider->sort = [
            'defaultOrder' => ['created_at' => SORT_DESC],
        ];
        $dataProvider->pagination = false;
        if ($dataProvider->totalCount) {
            return $this->render('index', [
                'dataProvider' => $dataProvider,
            ]);
        }
        return null;
    }
}
