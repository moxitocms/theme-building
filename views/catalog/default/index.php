<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 4:44 PM
 */

use frontend\widgets\cityList\CityList;
use frontend\widgets\mainCatalog\MainCatalog;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;
use common\modules\catalog\models\CatalogCategory;

/* @var $this View */
$this->params['breadcrumbs'][] = $this->title;
?>
<?= MainCatalog::widget([
    'root' => CatalogCategory::findOne(54),
    'titleAsH1' => true,
    'onlyFirstLevel' => true,
]) ?>
