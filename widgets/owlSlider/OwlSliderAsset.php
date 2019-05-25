<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/28/18
 * Time: 5:30 PM
 */

namespace frontend\widgets\owlSlider;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class OwlSliderAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $js = [
        'js/script.js',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}
