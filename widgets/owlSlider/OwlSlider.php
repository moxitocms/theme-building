<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/25/18
 * Time: 11:17 AM
 */

namespace frontend\widgets\owlSlider;

use yii\base\Widget;
use yii\web\JsExpression;

class OwlSlider extends Widget
{
    public function init()
    {
        parent::init();
        OwlSliderAsset::register($this->view);
        $this->view->registerJs(new JsExpression('initOwlSlider("' . $this->getId() . '")'));
    }
}
