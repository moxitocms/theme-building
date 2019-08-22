<?php

use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Онлайн-заявка';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="title-home">
    <?= $this->title ?>
</h1>

<?= LeadForm::widget([
    'key' => 'calculator',
    'mode' => LeadForm::MODE_INLINE,
]) ?>
