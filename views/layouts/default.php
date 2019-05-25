<?php


use frontend\themes\building\assets\AppAsset;
use frontend\widgets\megaMenu\MegaMenu;
use frontend\widgets\twigRender\TwigRender;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
$this->beginPage();
if ((Yii::$app->controller->id === 'site' && Yii::$app->controller->action->id === 'error') === false) {
    $this->registerLinkTag([
        'rel' => 'canonical',
        'href' => Url::canonical(),
    ]);
}
$this->registerLinkTag([
    'rel' => 'icon',
    'type' => 'image/x-icon',
    'href' => '/favicon.ico',
]);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        <?= Yii::$app->settings->get('css', 'default') ?>
    </style>
</head>
<body class="page-<?= $_SERVER['REQUEST_URI'] == '/' ? 'front' : str_replace('/', '-', trim($_SERVER['REQUEST_URI'], '/')) ?>">
<?php $this->beginBody() ?>
<?= $this->render('_header') ?>
<?= MegaMenu::widget() ?>
<div class="wrap">
    <?= TwigRender::widget([
        'text' => $content,
    ]) ?>
</div>
<?php
if ($this->beginCache('footer', [
    'enabled' => Yii::$app->settings->get('htmlCache', 'default') === '1',
    'duration' => 60 * 60 * 24,
])) {
    echo $this->render('_footer');
    $this->endCache();
}
?>
<?php $this->endBody() ?>
<?= Yii::$app->settings->get('script', 'default') ?>
</body>
</html>
<?php $this->endPage() ?>
