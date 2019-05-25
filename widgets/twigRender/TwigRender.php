<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/10/18
 * Time: 1:56 PM
 */

namespace frontend\widgets\twigRender;

use mikehaertl\tmp\File;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class TwigRender extends Widget
{
    /* @var string Строчка которую нужно програть через twig */
    public $text;

    public function run()
    {
        parent::run();
        $file = new File(Html::decode($this->text), '.twig');
        $result = Yii::$app->view->renderFile($file->getFileName());
        return $result;
    }
}
