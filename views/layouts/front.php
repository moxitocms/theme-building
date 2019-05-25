<?php

use common\widgets\Alert;
use yii\web\View;
use yii\widgets\Breadcrumbs;

/* @var $this View */
/* @var $content string */
?>
<?php $this->beginContent('@theme/views/layouts/default.php') ?>
	<?= Alert::widget() ?>
	<?= $content ?>
<?php $this->endContent() ?>
