<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 4:06 PM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\widgets\ListView;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $dataProvider ActiveDataProvider */
?>
<?= ListView::widget([
    'summary' => false,
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
    'options' => [
        'class' => 'row',
    ],
    'itemOptions' => [
        'class' => 'col-md-6 col-lg-4',
    ],
]) ?>
