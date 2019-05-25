<?php

namespace frontend\widgets\svgWrapper;

use Yii;
use yii\base\ErrorException;
use yii\base\InvalidConfigException;
use yii\base\Widget;
use function simplexml_load_file;

class SvgWrapper extends Widget
{

    /* @var null|string $path Ппуть до svg файла */
    public $path;
    /* @var int|null Кастомная ширина картинки */
    public $width;
    /* @var int|null Кастомная высота картинки */
    public $height;
    /* @var null|string $path Абсолютный путь до svg файла */
    private $fullPath;

    public function run()
    {
        parent::run();
        $xml = simplexml_load_file($this->fullPath);
        if ($this->width && $this->height) {
            $xml->attributes()->width = $this->width;
            $xml->attributes()->height = $this->height;
        }
        return $xml->asXML();
    }

    public function init()
    {
        if (empty($this->path)) {
            throw new InvalidConfigException();
        }
        //Получаем полный абсолютный путь до файла
        $this->fullPath = Yii::getAlias('@app/web' . $this->path);
        //Проверяем что файл сушествует если его нету выкидываем исключение
        if (file_exists($this->fullPath) === false) {
            throw new ErrorException("file " . $this->path . " not exist");
        }
        parent::init();
    }
}
