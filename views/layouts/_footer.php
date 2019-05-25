<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:34 AM
 */

use pantera\content\widgets\block\Block;
use yii\web\View;

/* @var $this View */
?>
<footer>
    <div class="footer-1">
        <div class="container">
            <div class="row no-gutter">
                <div class="col-md-3">
                    <div class="footer-menu">
                        <div class="footer-menu__title" data-toggle="collapse" data-target="#fm1">
                            РАЗДЕЛЫ
                            <div class="icon">
                                <img src="/images/svg/chevron.svg" alt="">
                            </div>
                        </div>
                        <div id="fm1" class="collapse-holder collapse">
                            <?= Block::widget([
                                'position' => 'footerMenu',
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <div class="footer-menu__title" data-toggle="collapse" data-target="#fm2">
                            НАШИ УСЛУГИ
                            <div class="icon">
                                <img src="/images/svg/chevron.svg" alt="">
                            </div>
                        </div>
                        <div id="fm2" class="collapse-holder collapse">
                            <?= Block::widget([
                                'position' => 'footerService',
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <div class="footer-menu__title" data-toggle="collapse" data-target="#fm3">
                            РЕЖИМ РАБОТЫ
                            <div class="icon">
                                <img src="/images/svg/chevron.svg" alt="">
                            </div>
                        </div>
                        <div id="fm3" class="collapse-holder collapse">
                            <?= Block::widget([
                                'position' => 'footerSchedule',
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-menu">
                        <div class="footer-menu__title" data-toggle="collapse" data-target="#fm4">
                            КОНТАКТЫ
                            <div class="icon">
                                <img src="/images/svg/chevron.svg" alt="">
                            </div>
                        </div>
                        <div id="fm4" class="collapse-holder collapse">
                            <?= Block::widget([
                                'position' => 'footerContact',
                            ]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="footer">
                <div>
                    <?= Block::widget([
                        'position' => 'copyrightLeft',
                    ]) ?>
                </div>
                <div>
                    <?= Block::widget([
                        'position' => 'copyrightCenter',
                    ]) ?>
                </div>
                <div>
                    <?= Block::widget([
                        'position' => 'copyrightRight',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</footer>
