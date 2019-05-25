<?php

namespace frontend\widgets\mainCatalog;

use common\modules\catalog\models\CatalogCategory;
use yii\base\Widget;
use yii\data\ArrayDataProvider;

class MainCatalog extends Widget
{
    public $root = null;
    /* @var bool Флаг указывает что заголовок должен быть через h1 */
    public $titleAsH1 = false;
    /* @var bool Флаг что нужно вывесли плиткой только первый уровень */
    public $onlyFirstLevel = false;

    public function run()
    {
        parent::run();
        $root = $this->root ?? CatalogCategory::find()->roots()->one();
        $items = [];
        $content = '';
        if ($this->onlyFirstLevel) {
            $dataProvider = new ArrayDataProvider([
                'allModels' => $root->children,
                'pagination' => false,
            ]);
            $content = $this->render('_tab', [
                'model' => $root,
                'dataProvider' => $dataProvider,
            ]);
        } else {
            foreach ($root->children as $category) {
                $dataProvider = new ArrayDataProvider([
                    'models' => $category->children,
                    'totalCount' => count($category->children),
                    'pagination' => false,
                ]);
                if ($dataProvider->totalCount === 0) {
                    continue;
                }
                $items[] = [
                    'label' => $category->name,
                    'content' => $this->render('_tab', [
                        'model' => $category,
                        'dataProvider' => $dataProvider,
                    ]),
                ];
            }
        }
        return $this->render('index', [
            'items' => $items,
            'content' => $content,
            'titleAsH1' => $this->titleAsH1,
            'onlyFirstLevel' => $this->onlyFirstLevel,
        ]);
    }
}
