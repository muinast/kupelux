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

    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" type="text/css" media="all">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lightgallery.css" type="text/css" media="screen" rel="stylesheet">
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

<div class="pluso_wrapper">
    <script type="text/javascript">(function() {
            if (window.pluso)if (typeof window.pluso.start == "function") return;
            if (window.ifpluso==undefined) { window.ifpluso = 1;
                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                var h=d[g]('body')[0];
                h.appendChild(s);
            }})();
    </script>
    <div class="pluso" data-background="transparent" data-options="big,square,line,vertical,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,evernote,email,print" data-user="1727841079"></div>
</div>

<div id="page" class="clearfix">
<div class="page_wrapper_1 clearfix">


<header id="header" class="container">
<div id="header_right">

<a id="header_logo" href="<?php echo home_url(); ?>" title="KupeLux">
    <h1><span>K</span>upe<span>L</span>ux</h1>
</a>

<section id="header_contacts" class="header-box">
    <div class="header_contacts">
        <h4>Звоните нам прямо сейчас!</h4>
        <ul class="toggle_content">
            <li class="contact-tel">MTC: (029) 708-60-10<span style="padding-left: 38px;">Skype: kupelux.by</span></li>
            <li class="contact-tel">VEL: (029) 658-60-10<span style="padding-left: 40px;">E-mail: <a href="mailto:info@kupelux.by">info@kupelux.by</a></span></li>
        </ul>
    </div>
    <style>.jivo-btn {   -webkit-box-sizing: border-box;   -moz-box-sizing: border-box;   box-sizing: border-box;   margin: 0;   text-transform: none;   cursor: pointer;   background-image: none;   display: inline-block;   padding: 6px 12px;   margin-bottom: 0;   font-size: 14px;   font-weight: normal;   line-height: 1.428571429;   text-align: center;   vertical-align: middle;   cursor: pointer;   border: 0px;   border-radius: 4px;   white-space: nowrap;   -webkit-user-select: none;   -moz-user-select: none;   -ms-user-select: none;   -o-user-select: none;   user-select: none;}.jivo-btn:hover {   box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.2), inset 0 0 20px 10px rgba(255,255,255,0.3);   -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.2), inset 0 0 20px 10px rgba(255,255,255,0.3);   -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.2), inset 0 0 20px 10px rgba(255,255,255,0.3);}.jivo-btn.jivo-btn-light:hover{   box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.3), inset 0 0 20px 10px rgba(255,255,255,0.1);   -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.3), inset 0 0 20px 10px rgba(255,255,255,0.1);   -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 2px rgba(0,0,0,0.3), inset 0 0 20px 10px rgba(255,255,255,0.1);}.jivo-btn.jivo-btn-light{   box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 1px rgba(0,0,0,0.3);   -moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 1px rgba(0,0,0,0.3);   -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.3), 0 1px 1px rgba(0,0,0,0.3);}.jivo-btn:active,.jivo-btn.jivo-btn-light:active{   box-shadow: 0 1px 0px rgba(255,255,255,0.4), inset 0 0 15px rgba(0,0,0,0.2);   -moz-box-shadow: 0 1px 0px rgba(255,255,255,0.4), inset 0 0 15px rgba(0,0,0,0.2);   -webkit-box-shadow: 0 1px 0px rgba(255,255,255,0.4), inset 0 0 15px rgba(0,0,0,0.2);   cursor: pointer;}.jivo-btn:active {   outline: 0;   background-image: none;   -webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);   box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);}.jivo-btn-gradient {   background-image: url(//static.jivosite.com/button/white_grad_light.png);   background-repeat: repeat-x;}.jivo-btn-light.jivo-btn-gradient {   background-image: url(//static.jivosite.com/button/white_grad.png);}.jivo-btn-icon {   width:17px;   height: 20px;   background-repeat: no-repeat;   display: inline-block;   vertical-align: middle;   margin-right: 10px;   margin-left: -5px;}.jivo-btn-light {   color: #fff;}..jivo-btn-dark {   color: #222;}</style><!--[if lte IE 7]><style type="text/css">.jivo-btn, .jivo-btn-icon  {   display: inline;}</style><![endif]--><div class="jivo-btn jivo-online-btn jivo-btn-light jivo-btn-gradient" onclick="jivo_api.open();" style="font-family: Arial, Arial;font-size: 17px;background-color: #059d50;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;height: 32px;line-height: 32px;padding: 0 16px 0 16px;font-weight: normal;font-style: normal"><div class="jivo-btn-icon" style="background-image: url(//static.jivosite.com/button/chat_light.png);"></div>Напишите нам, мы в онлайне!</div><div class="jivo-btn jivo-offline-btn jivo-btn-light jivo-btn-gradient" onclick="jivo_api.open();" style="font-family: Arial, Arial;font-size: 17px;background-color: #059d50;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;height: 32px;line-height: 32px;padding: 0 16px 0 16px;display: none;font-weight: normal;font-style: normal"><div class="jivo-btn-icon" style="background-image: url(//static.jivosite.com/button/mail_light.png);"></div>Оставьте сообщение!</div>
</section>

<div id="menu-wrap" class="clearfix desktop">
    <div id="menu-trigger" style="display: none;">Categories<i class="menu-icon icon-plus-sign-alt"></i></div>
    <ul id="menu-custom">
        <li>
            <a href="<?php echo home_url(); ?>">ГЛАВНАЯ</a>
        </li>
        <li>
            <a href="<?php echo home_url(); ?>/photo-catalog/wardrobes/">ШКАФЫ-КУПЕ</a>
        </li>
        <li class="hasSub">
            <a href="<?php echo home_url(); ?>/photo-catalog">ФОТО-КАТАЛОГ</a>
            <ul>
                <li>
                    <a href="<?php echo home_url(); ?>/photo-catalog/wardrobes/">ШКАФЫ-КУПЕ</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/photo-catalog/room/">ПРИХОЖИЕ</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/photo-catalog/kitchen/">КУХНИ</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/photo-catalog/hill/">ГОРКИ</a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/photo-catalog/office/">ОФИСНАЯ МЕБЕЛЬ</a>
                </li>
            </ul>
        </li>
        <li class="hasSub">
            <a href="<?php echo home_url(); ?>/materials/">МАТЕРИАЛЫ</a>
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
            <a href="<?php echo home_url(); ?>/information">ИНФОРМАЦИЯ</a>
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
            <a href="#">СТАТЬИ</a>
        </li>
        <li>
            <a href="#">КОНТАКТЫ</a>
        </li>
    </ul>
</div>