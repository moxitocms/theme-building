<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\web\View;
use frontend\widgets\videoList\VideoList;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?>
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<?= VideoList::widget([
    'category' => $model,
]) ?>