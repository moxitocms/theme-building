<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 4:27 PM
 */

use pantera\content\models\ContentPage;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */
?>
<a href="<?= $model->getUrl() ?>">
    <?php
    $img = '/images/stub.png';
    if ($model->media && $model->media->issetMedia()) {
        $img = $model->media->image(370, 280, false);
    }
    echo Html::img($img, [
        'class' => 'content-item__image',
    ])
    ?>
    <h4 class="content-item__title">
        <?= $model->title ?>
    </h4>
</a>
