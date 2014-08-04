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
    <title><?php wp_title('|', true, 'right'); ?>шкафы-купе на заказ купить в Минске, мебель кухни на заказ в Минске</title>
    <meta charset="<?php bloginfo('charset'); ?>">

    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" type="text/css"
          media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" type="text/css" media="all">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lightgallery.css" type="text/css"
          media="screen" rel="stylesheet">
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('a[href="#"]').click(function () {
                return false;
            });
        });
    </script>

</head>

<body id="index" class="index lang_ru">

<div id="page" class="clearfix">
<div class="page_wrapper_1 clearfix">


<header id="header" class="container">
<div id="header_right">

<a id="header_logo" href="<?php echo home_url(); ?>" title="KupeLux">
    <h1><span>K</span>upe<span>L</span>ux</h1>
    <span style=" position: relative;top: -25px;left: -5px;">ШКАФЫ-КУПЕ / КУХНИ / МЕБЕЛЬ НА ЗАКАЗ </span>
</a>

<section id="header_contacts" class="header-box">
    <div class="header_contacts">
        <ul class="toggle_content">
            <li class="contact-tel">
                <h4>
                    <span style="color: white; padding-right: 6px">VEL: </span> (029) 658-60-10<span style="padding-left: 10px;">
                        <span style="color: white;">E-mail: </span><a href="mailto:info@kupelux.by">info@kupelux.by</a>
                    </span>
                </h4>
            </li>
            <li class="contact-tel">
                <h4>
                    <span style="color: white;">MTC: </span> (029) 708-60-10<span style="padding-left: 14px;"><span style="color: white;">Skype: </span><a href="skype:kupelux.by?call"> kupelux.by</a></span>
                </h4>
            </li>
        </ul>
    </div>
</section>

<section id="header_sales" class="header-box">
    <div class="header_contacts" style="">
        <ul class="toggle_content">
            <li class="contact-tel">
                <h4>
                    СКИДКИ <b>10 - 30%</b> - ДО <b>31</b> АВГУСТА
                </h4>
            </li>
            <li class="contact-info">
                <h4>
                    <a href="<?php echo home_url(); ?>/information/sales/">КАК ПОЛУЧИТЬ СКИДКУ</a>
                </h4>
            </li>
        </ul>
    </div>
</section>

<section id="search_block_top" class="header-box">
    <form method="get" action="" id="searchbox">
        <p>
            <label for="search_query_top">Поиск</label>
            <input class="search_query ac_input" type="text" id="search_query_top" name="search_query" value="" autocomplete="off" placeholder="Поиск...">
            <a href="#"><i class="icon-search"></i><span>Поиск</span></a>
        </p>
    </form>
</section>

<div id="menu-wrap" class="clearfix desktop">
<div id="menu-trigger" style="display: none;">Categories<i class="menu-icon icon-plus-sign-alt"></i></div>
<ul id="menu-custom">
<li>
    <a href="<?php echo home_url(); ?>">ГЛАВНАЯ</a>
</li>
<li>
    <a href="<?php echo home_url(); ?>/gallery/wardrobes/">ШКАФЫ-КУПЕ</a>
</li>
<li class="hasSub">
    <a>ФОТО-КАТАЛОГ</a>
    <ul>
        <?php
        $defaults = array(
            'menu'            => 'gallery',
            'container'       => 'ul',
            'menu_class'      => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<li>%3$s</li>',
        );
        wp_nav_menu($defaults); ?>
    </ul>
</li>
<li class="hasSub">
    <a>МАТЕРИАЛЫ</a>
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
                    <a href="#">ЦВЕТА ДВП ЛАМИНИР-ГО</a>
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
    <a>ИНФОРМАЦИЯ</a>
    <ul>
        <?php
        $defaults = array(
            'menu'            => 'information',
            'container'       => 'ul',
            'menu_class'      => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<li>%3$s</li>',
        );
        wp_nav_menu($defaults); ?>
    </ul>
</li>
</ul>
</div>