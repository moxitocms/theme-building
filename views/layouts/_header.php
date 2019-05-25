<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:33 AM
 */

use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;
use pantera\content\widgets\block\Block;

/* @var $this View */
?>
<header>
    <div class="container">
        <div class="top-panel">
            <?php if (0): ?>
            <span class="top-panel__low-vision" title="Версия сайта для слабовидящих">
                <a rel="nofollow" class="top-panel__low-vision-toggle">Версия сайта для слабовидящих</a>
                <a rel="nofollow" class="top-panel__low-vision-toggle top-panel__low-vision-toggle_back">Обычная версия сайта</a>
            </span>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-2 col-lg-3 top-panel__col-logo">
                    <a href="/">
                        <img src="/images/logo.png" alt="КСДВ" id="logo" />
                    </a>
                </div>
                <div class="col-md-8 col-lg-6 top-panel__col-contacts">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="top-panel__label">Главный офис г. Хабаровск</div>
                            <div class="top-panel__phone">+7 (4212) 24-24-01
                                <?= LeadForm::widget([
                                    'key' => 'callMe',
                                    'text' => '<i class="fa fa-phone"></i>',
                                    'options' => [
                                        'class' => '',
                                    ],
                                ]) ?>
                            </div>
                            <div class="top-panel__address"><a href="/contacts">ул. Промышленная, 20б</a></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="top-panel__label">Бесплатная консультация</div>
                            <div class="top-panel__phone">+7 (914) 159-24-01
                                <?= LeadForm::widget([
                                    'key' => 'callMe',
                                    'text' => '<i class="fa fa-phone"></i>',
                                    'options' => [
                                        'class' => '',
                                    ],
                                ]) ?>
                            </div>
                            <div class="top-panel__address"><a href="/contacts">ks-dv@list.ru</a></div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="top-panel__instagram">
                                <div class="top-panel__label">Новости и информация<span class="hidden-md"> в нашем Instagram!</span></div>
                                <div class="top-panel__instagram-link"><a href="https://www.instagram.com/ksdv_stroy_khv/" target="_blank"><i class="fa fa-instagram"></i>ksdv_stroy_khv</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-lg-3 top-panel__col-buttons">
                    <div class="top-panel__buttons">
                        <?= LeadForm::widget([
                            'key' => 'question',
                            'text' => 'Задать вопрос',
                            'options' => [
                                'class' => 'btn btn-default btn-block text-uppercase',
                            ],
                        ]) ?>
                        <a class="btn-primary btn btn-block text-uppercase" href="/zapis-online" style="margin-top: 10px;">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="wsmobileheader clearfix">
    <div class="container">
        <div class="wsmobileheader__holder">
            <a id="wsnavtoggle">
                <div class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </div>
            </a>
            <div class="logo">
                <a href="/">
                    <img src="/images/logo.svg" height="30" style="margin-top: 10px; margin-left: -40px;" alt=""/>
                </a>
            </div>
            <div class="mobile-contacts">
                <a class="mobile-contacts__item" href="tel:+74212242401">+7 (4212) 24-24-01</a>
                <a class="mobile-contacts__item" href="tel:+79141592401">+7 (914) 159-24-01</a>
            </div>
        </div>
    </div>
</div>
