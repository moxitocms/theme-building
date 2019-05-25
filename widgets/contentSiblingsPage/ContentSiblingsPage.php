<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/8/18
 * Time: 10:45 AM
 */

namespace frontend\widgets\contentSiblingsPage;

use pantera\content\models\ContentPage;
use const SORT_ASC;
use yii\base\Widget;
use const SORT_DESC;

class ContentSiblingsPage extends Widget
{
    /* @var ContentPage */
    public $model;

    public function run()
    {
        parent::run();
        $prev = ContentPage::find()
            ->isActive()
            ->andWhere(['=', ContentPage::tableName() . '.type_id', $this->model->type_id])
            ->andWhere(['<', ContentPage::tableName() . '.id', $this->model->id])
            ->orderBy([ContentPage::tableName() . '.id' => SORT_DESC])
            ->one();
        $next = ContentPage::find()
            ->isActive()
            ->andWhere(['=', ContentPage::tableName() . '.type_id', $this->model->type_id])
            ->andWhere(['>', ContentPage::tableName() . '.id', $this->model->id])
            ->orderBy([ContentPage::tableName() . '.id' => SORT_ASC])
            ->one();
        return $this->render('index', [
            'prev' => $prev,
            'next' => $next,
        ]);
    }
}
