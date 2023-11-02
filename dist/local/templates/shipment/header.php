<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die();?>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
/* @var $APPLICATION */
use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH."/style.css");
$asset->addCss("https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $APPLICATION->ShowHead();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel();?></div>
<header>
    <div class="top-menu">
        <div class="container d-flex justify-content-between">
            <nav class="burger-menu navbar navbar-expand-lg navbar-light">
                <button class="burger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/menu.svg" alt>
                </button>
            </nav>
            <ul class="top-menu__left">
                <li>
                    <a href="/about">О компании</a>
                </li>
                <li>
                    <a href="/services">Услуги</a>
                </li>
                <li>
                    <a href="/shipment">Отгрузки</a>
                </li>
                <li>
                    <a href="/delivery">Доставка и оплата</a>
                </li>
                <li>
                    <a href="/contacts">Контакты</a>
                </li>
            </ul>
            <ul class="top-menu__right">
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/map-pin.svg" alt="Ваш город">Ваш город: <a href="#">Уфа</a>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/shopping-cart.svg" alt="Корзина"><span></span>Корзина: <a href="#">12 позиций</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="middle-menu">
            <div class="middle-menu__logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/Logo.svg" alt="Спецметалл Трейд">
                <span>Комлексные поставки <br> металлопроката по РФ</span>
            </div>
            <div class="middle-menu__email">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/at-sign.svg" alt="@">
                <a href="mailto:info@smetall_trade">
                    info@smetall_trade
                </a>
            </div>
            <div class="middle-menu__feedback">
                <div class="middle-menu__feedback-phones">
                    <a href="tel:8 (347) 225-10-20">8 (347) 225-10-20</a>
                    <a href="tel:8 (800) 551-12-08">8 (800) 551-12-08</a>
                </div>
                <button class="middle-menu__feedback-button">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/phone.svg" alt="Заказать звонок">
                    Заказать звонок
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bottom-menu">
            <ul>
                <li>
                    <a href="#">Трубный прокат</a>
                </li>
                <li>
                    <a href="#">Нержавеющий прокат</a>
                </li>
                <li>
                    <a href="#">Листовой прокат</a>
                </li>
                <li>
                    <a href="#">Цветной прокат</a>
                </li>
                <li>
                    <a href="#">Металлопрокат</a>
                </li>
                <li>
                    <a href="#">Спецстали</a>
                </li>
                <li>
                    <a href="#">Спецпредложение</a>
                </li>
            </ul>
        </div>
    </div>
</header>