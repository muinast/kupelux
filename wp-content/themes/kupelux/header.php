<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Kupe Lux
 * @since Kupe Lux 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css" type="text/css" media="all">

    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jssor.slider.min.js"></script>
</head>

<body id="index" class="index lang_ru">
<div id="page" class="clearfix">
<div class="page_wrapper_1 clearfix">


<header id="header" class="container">
<div id="header_right">
<a id="header_logo" href="#" title="KupeLux">
    <h1><span>K</span>upe<span>L</span>ux</h1>
</a>

<section id="header_user" class="blockuserinfo-cart header-box">
    <div id="shopping_cart">
        <a href="#">
            <i class="opancart icon-caret-down"></i>
            <span class="shopping_cart_title"></span>
            <span class="ajax_cart_quantity" style="display: none;">0</span>

            <span class="ajax_cart_no_product">(пусто)</span>
        </a>
    </div>
</section>

<div id="menu-wrap" class="clearfix desktop">
    <div id="menu-trigger" style="display: none;">Categories<i class="menu-icon icon-plus-sign-alt"></i></div>
    <ul id="menu-custom">
        <li>
            <a href="#">ГЛАВНАЯ</a>
        </li>
        <li>
            <a href="#">ШКАФЫ-КУПЕ</a>
        </li>
        <li class="hasSub">
            <a href="#">ФОТО-КАТАЛОГ</a>
            <ul>
                <li>
                    <a href="#">ШКАФЫ-КУПЕ</a>
                </li>
                <li>
                    <a href="#">ПРИХОЖИЕ</a>
                </li>
                <li>
                    <a href="#">КУХНИ</a>
                </li>
                <li>
                    <a href="#">ГОРКИ</a>
                </li>
                <li>
                    <a href="#">ОФИСНАЯ МЕБЕЛЬ</a>
                </li>
            </ul>
        </li>
        <li class="hasSub">
            <a href="#">МАТЕРИАЛЫ</a>
            <ul>
                <li class="hasSub">
                    <a href="#">ДЛЯ ШКАФОВ-КУПЕ</a>
                    <ul>
                        <li>
                            <a href="#">ФОТОПЕЧАТЬ</a>
                        </li>
                        <li>
                            <a href="#">ЛАКОМАТ</a>
                        </li>
                        <li>
                            <a href="#">ЛАКОБЕЛЬ</a>
                        </li>
                        <li>
                            <a href="#">ПЕСКОСТРУЙ</a>
                        </li>
                        <li>
                            <a href="#">ЦВЕТА КРАШЕННОГО СТЕКЛА</a>
                        </li>
                        <li>
                            <a href="#">СИСТЕМА "СЕНАТОР"</a>
                        </li>
                        <li>
                            <a href="#">СИСТЕМА "КОМАНДОР"</a>
                        </li>
                        <li>
                            <a href="#">ПРОФИЛЯ</a>
                        </li>
                    </ul>
                </li>
                <li class="hasSub">
                    <a href="#">ДЛЯ КУХНИ</a>
                    <ul>
                        <li>
                            <a href="#">СКИНАЛИ ИЗ СТЕКЛА</a>
                        </li>
                        <li>
                            <a href="#">ПОСТФОРМИНГ "СКИФ"</a>
                        </li>
                        <li>
                            <a href="#">СТЕНОВЫЕ ПАНЕЛИ "СКИФ"</a>
                        </li>
                        <li>
                            <a href="#">КАМЕННЫЕ СТОЛЕШНИЦЫ</a>
                        </li>
                        <li>
                            <a href="#">ПОСТФОРМИНГ "GETALIT"</a>
                        </li>
                        <li>
                            <a href="#">ПОСТФОРМИНГ "RESOPAL"</a>
                        </li>
                    </ul>
                </li>
                <li class="hasSub">
                    <a href="#">ОСНОВНОЕ</a>
                    <ul>
                        <li>
                            <a href="#">ЦВЕТА ДСП "KRONOPOL"</a>
                        </li>
                        <li>
                            <a href="#">ЦВЕТА ДСП "KRONOUKRAINE"</a>
                        </li>
                        <li>
                            <a href="#">ЦВЕТА ДСП "EGGER"</a>
                        </li>
                        <li>
                            <a href="#">ЦВЕТА ДВП ЛАМИНИРОВАННГО</a>
                        </li>
                        <li>
                            <a href="#">КРОМКА ПВХ "POLKEMIC"</a>
                        </li>
                        <li>
                            <a href="#">БАМБУК ИНТЕК</a>
                        </li>
                        <li>
                            <a href="#">БАМБУК ПРЕСТИЖ</a>
                        </li>
                        <li>
                            <a href="#">ВИНИЛ ПРЕСТИЖ</a>
                        </li>
                        <li>
                            <a href="#">РОТАНГ ИНТЕК</a>
                        </li>
                        <li>
                            <a href="#">НАТУРАЛЬНЫЕ ОБОИ ИНТЕК</a>
                        </li>
                    </ul>
                </li>
                <li class="hasSub">
                    <a href="#">ИЗОБРАЖЕНИЯ</a>
                    <ul>
                        <li>
                            <a href="#">ДЛЯ СКИНАЛИ</a>
                        </li>
                        <li>
                            <a href="#">ДЛЯ ФОТОПЕЧАТИ</a>
                        </li>
                        <li>
                            <a href="#">ДЛЯ ПЕСКОСТРУЯ</a>
                        </li>
                    </ul>
                </li>
                <li class="hasSub">
                    <a href="#">ФАСАДЫ</a>
                    <ul>
                        <li>
                            <a href="#">МДФ КРАШЕННЫЕ</a>
                        </li>
                        <li>
                            <a href="#">МДФ ПЛЕНОЧНЫЕ</a>
                        </li>
                        <li>
                            <a href="#">МДФ РАМОЧНЫЕ</a>
                        </li>
                        <li>
                            <a href="#">ПЛАСТИКОВЫЕ "ARPA"</a>
                        </li>
                        <li>
                            <a href="#">ПЛАСТИКОВЫЕ "ABET"</a>
                        </li>
                        <li>
                            <a href="#">3D ФРЕЗЕРОВКА</a>
                        </li>
                        <li>
                            <a href="#">АЛЮМИНИЕВЫЕ ПРОФИЛЯ</a>
                        </li>
                    </ul>
                </li>
                <li class="hasSub">
                    <a href="#">ФУРНИТУРА</a>
                    <ul>
                        <li>
                            <a href="#">РУЧКИ ДЛЯ МЕБЕЛИ</a>
                        </li>
                        <li>
                            <a href="#">МЕБЕЛЬНЫЕ ОПОРЫ</a>
                        </li>
                        <li>
                            <a href="#">КУХОННЫЕ АКСЕССУАРЫ</a>
                        </li>
                        <li>
                            <a href="#">НАПОЛНЕНИЕ ДЛЯ ШКАФОВ</a>
                        </li>
                        <li>
                            <a href="#">ДЕРЖАТЕЛИ</a>
                        </li>
                        <li>
                            <a href="#">ФУРНИТУРА "BLUM"</a>
                        </li>
                        <li>
                            <a href="#">ФУРНИТУРА "HAFELE"</a>
                        </li>
                        <li>
                            <a href="#">ФУРНИТУРА "HETTICH"</a>
                        </li>
                        <li>
                            <a href="#">ФУРНИТУРА (РАЗНОЕ)</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="hasSub">
            <a href="#">ИНФОРМАЦИЯ</a>
            <ul>
                <li>
                    <a href="#">АКЦИИ, СКИДКИ, БОНУСЫ</a>
                </li>
                <li>
                    <a href="#">ВОПРОС-ОТВЕТ</a>
                </li>
                <li>
                    <a href="#">ОТЗЫВЫ О НАС</a>
                </li>
                <li>
                    <a href="#">ПРОЦЕСС ЗАКАЗА</a>
                </li>
                <li>
                    <a href="#">УСТАНОВКА И ГАРАНТИЯ</a>
                </li>
                <li>
                    <a href="#">СПРАВОЧНИК ТЕРМИНОВ</a>
                </li>
                <li>
                    <a href="#">МЫ В СОЦСЕТЯХ</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">НОВОСТИ</a>
        </li>
        <li>
            <a href="#">КОНТАКТЫ</a>
        </li>
    </ul>
</div>