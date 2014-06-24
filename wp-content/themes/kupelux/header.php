<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
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

<section id="languages_block_top" class="header-box header-button">
    <div id="countries_2">
        <p class="selected_language icon_wrapp">
            <b>Language</b>
            <strong><span class="first_language"></span>Russian</strong>
            <em> ru</em>
            <i class="arrow_header_top icon-angle-down"></i>
        </p>
        <ul id="first-languages" class="countries_ul list_header">
            <li>
                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_lang=1"
                   title="English (English)">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/1.jpg" alt="en" width="26" height="16"><span><span class="firstWord"> (English)</span>English</span>
                </a>
            </li>
            <li>
                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_lang=2"
                   title="Deutsch (German)">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/2.jpg" alt="de" width="26" height="16"><span><span class="firstWord"> (German)</span>Deutsch</span>
                </a>
            </li>
            <li class="selected">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/3.jpg" alt="ru" width="26" height="16"><span><span class="firstWord"></span>Russian</span>
            </li>
            <li>
                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_lang=4"
                   title="Español (Spanish)">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/4.jpg" alt="es" width="26" height="16"><span><span class="firstWord"> (Spanish)</span>Español</span>
                </a>
            </li>
            <li>
                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_lang=5"
                   title="Français (French)">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/5.jpg" alt="fr" width="26" height="16"><span><span class="firstWord"> (French)</span>Français</span>
                </a>
            </li>
        </ul>
    </div>
</section>
<!--<script type="text/javascript">
    $(document).ready(function () {
        $('#countries_2 .countries_ul li span').each(function () {
            var h = $(this).html();
            var index = h.indexOf(' ');
            if (index == -1) {
                index = h.length;
            }
            $(this).html('<span class="firstWord">' + h.substring(index, h.length) + '</span>' + h.substring(0, index));
        });
    });


    $(document).ready(function () {
        $('#languages_block_top .selected_language strong').each(function () {
            var h = $(this).html();
            var index = h.indexOf(' ');
            if (index == -1) {
                index = h.length;
            }
            $(this).html('<span class="first_language">' + h.substring(index, h.length) + '</span>' + h.substring(0, index));
        });
    });

</script>-->

<section id="currencies_block_top" class="header-box header-button">
    <form id="setCurrency" action="./Flooring_files/Flooring.htm" method="post">
        <p class="inner-carrencies icon_wrapp">
            <input type="hidden" name="id_currency" id="id_currency" value="">
            <input type="hidden" name="SubmitCurrency" value="">
            <b>Валюта</b>
            <strong>
                USD
            </strong>
            <em>$ </em>
            <i class="arrow_header_top icon-angle-down"></i>
        </p>
        <ul id="first-currencies" class="currencies_ul list_header">
            <li class="selected">
                <span>$</span>Dollar
            </li>
            <li>
                <a href="javascript:setCurrency(2);" title="Euro" rel="nofollow"><span>€</span>Euro</a>
            </li>
        </ul>
    </form>
</section>


<section id="search_block_top" class="header-box">
    <form method="get" action="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=search"
          id="searchbox">
        <p>
            <label for="search_query_top">Поиск</label>
            <input type="hidden" name="controller" value="search">
            <input type="hidden" name="orderby" value="position">
            <input type="hidden" name="orderway" value="desc">
            <input class="search_query ac_input" type="text" id="search_query_top" name="search_query" value=""
                   autocomplete="off">
            <a href="javascript:document.getElementById('searchbox').submit();"><i
                    class="icon-search"></i><span>Поиск</span></a>
        </p>
    </form>
</section>
<!--<script type="text/javascript">
    // <![CDATA[
    function tryToCloseInstantSearch() {
        if ($('#old_center_column').length > 0) {
            $('#center_column').remove();
            $('#old_center_column').attr('id', 'center_column');
            $('body').removeClass('instant_search');
            $('#slider .nivo-main-image').trigger('mouseout');
            $('#center_column').show();
            return false;
        }
    }

    instantSearchQueries = new Array();
    function stopInstantSearchQueries() {
        for (i = 0; i < instantSearchQueries.length; i++) {
            instantSearchQueries[i].abort();
        }
        instantSearchQueries = new Array();
    }

    $("#search_query_top").keyup(function () {
        if ($(this).val().length > 0) {
            stopInstantSearchQueries();
            instantSearchQuery = $.ajax({
                url: 'http://livedemo00.template-help.com/prestashop_48520/index.php?controller=search',
                data: {
                    instantSearch: 1,
                    id_lang: 3,
                    q: $(this).val()
                },
                dataType: 'html',
                type: 'POST',
                success: function (data) {
                    if ($("#search_query_top").val().length > 0) {
                        tryToCloseInstantSearch();
                        $('#center_column').attr('id', 'old_center_column');
                        $('#old_center_column').after('<div id="center_column" class="instant ' + $('#old_center_column').attr('class') + '">' + data + '</div>');
                        $('#center_column').find('ul#product_list').removeClass('grid').addClass('list');
                        $('body').addClass('instant_search');
                        $('#old_center_column').hide();
                        // Button override
                        ajaxCart.overrideButtonsInThePage();
                        $('#slider .nivo-main-image').trigger('mouseenter');
                        $("#instant_search_results a.close-search").click(function () {
                            $("#search_query_top").val('');
                            $('body').removeClass('instant_search');
                            $('#slider .nivo-main-image').trigger('mouseout');
                            return tryToCloseInstantSearch();
                        });
                        return false;
                    }
                    else
                        tryToCloseInstantSearch();
                }
            });
            instantSearchQueries.push(instantSearchQuery);
        }
        else
            tryToCloseInstantSearch();
    });
    // ]]>
</script>
<script type="text/javascript">
    // <![CDATA[
    $('document').ready(function () {
        $("#search_query_top")
            .autocomplete(
            'http://livedemo00.template-help.com/prestashop_48520/index.php?controller=search', {
                minChars: 3,
                max: 10,
                width: 300,
                selectFirst: false,
                scroll: false,
                dataType: "json",
                formatItem: function (data, i, max, value, term) {
                    return value;
                },
                parse: function (data) {
                    var mytab = new Array();
                    for (var i = 0; i < data.length; i++)
                        mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
                    return mytab;
                },
                extraParams: {
                    ajaxSearch: 1,
                    id_lang: 3
                }
            }
        )
            .result(function (event, data, formatted) {
                $('#search_query_top').val(data.pname);
                document.location.href = data.product_link;
            })
    });
    // ]]>
</script>
-->

<section class="blockuserinfo header-box">
    <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=my-account"
       class="login"><span><i class="icon-lock"></i><b>Вход</b></span></a>
</section>
<section id="your_account"><a
        href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=my-account"
        title="Просмотреть мою учетную запись покупателя" rel="nofollow">Ваша учетная запись</a></section>
<section id="header_user" class="blockuserinfo-cart header-box">
    <div id="shopping_cart">
        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=order"
           title="Просмотреть мою корзину" rel="nofollow">
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
        <li class="hasSub"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=3&controller=category&id_lang=3">Carpet</a>
            <ul>
                <li>
                    <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=6&controller=category&id_lang=3">Lorem
                        ipsum dolor sit amet</a></li>
                <li class="hasSub"><a
                        href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=7&controller=category&id_lang=3">Conse
                        ctetur adipisicing</a>
                    <ul>
                        <li>
                            <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=9&controller=category&id_lang=3">Sit
                                amet conse</a></li>
                        <li>
                            <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=15&controller=category&id_lang=3">Magna
                                aliqua</a></li>
                        <li>
                            <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=16&controller=category&id_lang=3">Aliquaenim
                                sed do</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=8&controller=category&id_lang=3">Elit
                        sed do eiusmod tempor</a></li>
                <li>
                    <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=12&controller=category&id_lang=3">Incididunt
                        ut labore</a></li>
                <li>
                    <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=13&controller=category&id_lang=3">Et
                        dolore magna aliqua</a></li>
                <li>
                    <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=14&controller=category&id_lang=3">Ut
                        enim ad minim veniam</a></li>
            </ul>
        </li>
        <li>
            <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=4&controller=category&id_lang=3">Hardwood</a>
        </li>
        <li>
            <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=5&controller=category&id_lang=3">Ceramic</a>
        </li>
        <li>
            <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=10&controller=category&id_lang=3">Stone</a>
        </li>
        <li>
            <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=17&controller=category&id_lang=3">Laminate</a>
        </li>
    </ul>
</div>
<!--<script type="text/javascript">
    $(document).ready(function () {
        $('#menu-custom li:has(ul)').addClass('hasSub');
    });
</script>-->
<!--<script type="text/javascript">
    var CUSTOMIZE_TEXTFIELD = 1;
    var img_dir = 'http://livedemo00.template-help.com/prestashop_48520/themes/theme915/img/';

    var customizationIdMessage = 'Модификация №';
    var removingLinkText = 'удалить товар из корзины';
    var freeShippingTranslation = 'Бесплатная доставка!';
    var addedSuccessfully = 'Your product has been successfully added to your cart!';
    var freeProductTranslation = 'Бесплатно!';
    var delete_txt = 'Удалить';
    var ajaxcart_allowed = 1;
    var generated_date = 1403605991;
</script>-->

<section id="cart_block" class="block column_box exclusive">
    <h4><span>Корзина</span><i class="column_icon_toggle icon-plus-sign"></i></h4>

    <div class="block_content toggle_content">

        <div id="cart_block_summary" class="collapsed">
            <span class="ajax_cart_quantity" style="display: none;">0</span>
            <span class="ajax_cart_product_txt_s" style="display: none;">товары</span>
            <span class="ajax_cart_product_txt" style="display: none;">товар</span>
            <span class="ajax_cart_total" style="display: none;">$0.00</span>
            <span class="ajax_cart_no_product" style="display: inline-block; overflow: hidden;">(пусто)</span>
        </div>

        <div id="cart_block_list" class="expanded">
            <p class="cart_no_products" id="cart_block_no_products">Нет товаров</p>
            <table id="vouchers" style="display: none;">
                <tbody>
                </tbody>
            </table>
            <div class="cart-prices" style="display: none;">
                <div class="cart-prices-block">
                    <span id="cart_block_shipping_cost" class="price ajax_cart_shipping_cost">$0.00</span>
                    <span>Доставка</span>
                </div>
                <div class="cart-prices-block">
                    <span id="cart_block_total" class="price ajax_block_cart_total">$0.00</span>
                    <span>Итого</span>
                </div>
            </div>
            <p id="cart-buttons" class="" style="display: none;">
                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=order"
                   class="button_mini btn btn-default" title="Посмотреть корзину" rel="nofollow">Корзина</a> <a
                    href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=order"
                    id="button_order_cart" class="exclusive btn btn-default" title="Оформление заказа" rel="nofollow">Оформление
                    заказа</a>
            </p>
        </div>
    </div>
</section>

<div id="slider1_container"  style="position: relative; top: 0px; left: 0px; width: 1170px; height: 390px;">
    <div id="slider" u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1170px; height: 390px;">
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-1-07-56.jpg" /></div>
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-2-08-07.jpg" /></div>
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-3-08-20.jpg" /></div>
    </div>
</div>

<script>
    $(document).ready(function ($) {
        jQuery(document).ready(function ($) {
            //Define an array of slideshow transition code
            var _SlideshowTransitions = [
                {$Duration:400,$Delay:100,$Rows:7,$Clip:4,$Formation:$JssorSlideshowFormations$.$FormationStraight},
                {$Duration:1000,$Cols:3,$Rows:2,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$JssorEasing$.$EaseInBounce},
                {$Duration:1000,$Cols:8,$Clip:1,$Move:true},
                {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:$JssorEasing$.$EaseInQuad},
                {$Duration:600,$Delay:80,$Cols:10,$Opacity:2},
                {$Duration:1500,$Delay:60,$Cols:15,$FlyDirection:8,$Formation:$JssorSlideshowFormations$.$FormationCircle,$Easing:$JssorEasing$.$EaseInWave,$ScaleVertical:0.5,$Round:{$Top:1.5}},
                {$Duration:600,$Delay:50,$Cols:8,$Rows:4,$SlideOut:true,$FlyDirection:4,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2}
            ];
            var options = {
                $AutoPlay: true,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: _SlideshowTransitions,
                    $TransitionsOrder: 1,
                    $ShowLink: true
                }
            };
            var jssor_slider1 = new $JssorSlider$('slider1_container', options);
        });
    });
</script>

<div id="htmlcontent_top">
    <ul class="htmlcontent-home ">
        <li class="htmlcontent-item  num-1">
            <div>
                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=3&controller=category"
                   class="item-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/64dbf4d01977796a15853ba402930d69.jpg" class="item-img" alt="">

                    <div class="item-html">
                        <h3>Special Offer</h3>

                        <h2>Lorem ipsum dolor sit amet conse ctetur adipisici</h2>

                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <span><b>View all collections</b></span>
                    </div>
                </a>
            </div>
        </li>
        <li class="htmlcontent-item  num-2">
            <div>
                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=4&controller=category"
                   class="item-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/923a551bac55a5267866cb95462acbf6.jpg" class="item-img" alt="">

                    <div class="item-html">
                        <h3>Special Offer</h3>

                        <h2>Duis aute irure dolor in reprehe nderitnulla</h2>

                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <span><b>View all collections</b></span>
                    </div>
                </a>
            </div>
        </li>
        <li class="htmlcontent-item  num-3">
            <div>
                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=5&controller=category"
                   class="item-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/224dafb96e52172b00cfc40f28385667.jpg" class="item-img" alt="">

                    <div class="item-html">
                        <h3>Special Offer</h3>

                        <h2>Voluptate velit esse cillum dolore in reprehender</h2>

                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                            incididunt.</p>
                        <span><b>View all collections</b></span>
                    </div>
                </a>
            </div>
        </li>
    </ul>
</div>

<section class="header-box blockpermanentlinks-header">
    <ul id="header_links" class="hidden-xs">
        <li id="header_link_contact"><a class="header_links_contact"
                                        href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=contact"
                                        title="Контакты">Контакты</a></li>
        <li id="header_link_sitemap"><a class="header_links_sitemap"
                                        href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=sitemap"
                                        title="Карта сайта">Карта сайта</a></li>
    </ul>
    <div class="mobile-link-top header-button visible-xs">
        <h4 class="icon_wrapp">
            <span class="title-hed"></span><i class="arrow_header_top_menu arrow_header_top icon-reorder"></i>
        </h4>
        <ul id="mobilelink" class="list_header">
            <li id="header_link_contact"><a class="header_links_contact"
                                            href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=contact"
                                            title="Контакты">Контакты</a></li>
            <li id="header_link_sitemap"><a class="header_links_sitemap"
                                            href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=sitemap"
                                            title="Карта сайта">Карта сайта</a></li>
        </ul>
    </div>
</section>

</div>
</header>
</div>
<div class="page_wrapper_2 clearfix">
<div id="columns" class="container">
<div class="row">


<div id="center_column" class="center_column col-xs-12 col-sm-12 clearfix">

<div id="featured-products_block_center" class="main_page_products block">
<h4><span>Избранные товары</span></h4>
<ul class="row">
<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  first_item_of_line   first_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span
                class="new">Новые</span></div>
        <div class="sale-box"><span class="before"></span><span class="after"></span><span
                class="on_sale">Sale!</span></div>
        <div class="product_image"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=1&controller=product&id_lang=3"
                title="Dolor sit amet conse ctetur" class="product_image"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/img/1-home_default.jpg" alt="Dolor sit amet conse ctetur"></a>
        </div>
        <h5><a class="product_link"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=1&controller=product&id_lang=3"
               title="Dolor sit amet conse ctetur">Dolor sit amet conse ctetur</a></h5>

        <p class="product_desc"> It is vitally important to build strong and...</p>

        <p class="price_container">
            <span class="price price-new">$103.12</span>
            <span class="price-old">$108.55</span>
        </p>

        <div class="product_content">
            <a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart"
               rel="ajax_id_product_1"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart?qty=1&id_product=1&token=213cce55976f5986362d66382011efe4&add"
               title="Добавить в корзину"><span>Добавить в корзину</span></a>
        </div>
    </div>
</li>
<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3   last_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span
                class="new">Новые</span></div>
        <div class="product_image"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=2&controller=product&id_lang=3"
                title="Duis aute irure dolor" class="product_image"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/img/8-home_default.jpg" alt="Duis aute irure dolor"></a></div>
        <h5><a class="product_link"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=2&controller=product&id_lang=3"
               title="Duis aute irure dolor">Duis aute irure dolor</a></h5>

        <p class="product_desc"> It is vitally important to build strong and...</p>

        <p class="price_container">
            <span class="price">$80.60</span>
        </p>

        <div class="product_content">
            <a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart"
               rel="ajax_id_product_2"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart?qty=1&id_product=2&token=213cce55976f5986362d66382011efe4&add"
               title="Добавить в корзину"><span>Добавить в корзину</span></a>
        </div>
    </div>
</li>
<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3   first_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span
                class="new">Новые</span></div>
        <div class="sale-box"><span class="before"></span><span class="after"></span><span
                class="on_sale">Sale!</span></div>
        <div class="product_image"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=3&controller=product&id_lang=3"
                title="Reprehenderit in voluptates" class="product_image"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/img/15-home_default.jpg"
                    alt="Reprehenderit in voluptates"></a></div>
        <h5><a class="product_link"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=3&controller=product&id_lang=3"
               title="Reprehenderit in voluptates">Reprehenderit in voluptates</a></h5>

        <p class="product_desc"> It is vitally important to build strong and...</p>

        <p class="price_container">
            <span class="price price-new">$92.64</span>
            <span class="price-old">$100.70</span>
        </p>

        <div class="product_content">
            <a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart"
               rel="ajax_id_product_3"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart?qty=1&id_product=3&token=213cce55976f5986362d66382011efe4&add"
               title="Добавить в корзину"><span>Добавить в корзину</span></a>
        </div>
    </div>
</li>
<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3 last_item_of_line  last_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span
                class="new">Новые</span></div>
        <div class="product_image"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=4&controller=product&id_lang=3"
                title="Vvelit esse cillum dolore" class="product_image"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/img/22-home_default.jpg" alt="Vvelit esse cillum dolore"></a>
        </div>
        <h5><a class="product_link"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=4&controller=product&id_lang=3"
               title="Vvelit esse cillum dolore">Vvelit esse cillum dolore</a></h5>

        <p class="product_desc"> It is vitally important to build strong and...</p>

        <p class="price_container">
            <span class="price">$120.75</span>
        </p>

        <div class="product_content">
            <a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart"
               rel="ajax_id_product_4"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart?qty=1&id_product=4&token=213cce55976f5986362d66382011efe4&add"
               title="Добавить в корзину"><span>Добавить в корзину</span></a>
        </div>
    </div>
</li>
<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  first_item_of_line  last_line first_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span
                class="new">Новые</span></div>
        <div class="product_image"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=5&controller=product&id_lang=3"
                title="Excepteur sint occaecat" class="product_image"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/img/29-home_default.jpg" alt="Excepteur sint occaecat"></a>
        </div>
        <h5><a class="product_link"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=5&controller=product&id_lang=3"
               title="Excepteur sint occaecat">Excepteur sint occaecat</a></h5>

        <p class="product_desc"> It is vitally important to build strong and...</p>

        <p class="price_container">
            <span class="price">$135.15</span>
        </p>

        <div class="product_content">
            <a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart"
               rel="ajax_id_product_5"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart?qty=1&id_product=5&token=213cce55976f5986362d66382011efe4&add"
               title="Добавить в корзину"><span>Добавить в корзину</span></a>
        </div>
    </div>
</li>
<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last_line last_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span
                class="new">Новые</span></div>
        <div class="product_image"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=6&controller=product&id_lang=3"
                title="Cupidatat non proident" class="product_image"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/img/36-home_default.jpg" alt="Cupidatat non proident"></a>
        </div>
        <h5><a class="product_link"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=6&controller=product&id_lang=3"
               title="Cupidatat non proident">Cupidatat non proident</a></h5>

        <p class="product_desc"> It is vitally important to build strong and...</p>

        <p class="price_container">
            <span class="price">$115.25</span>
        </p>

        <div class="product_content">
            <a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart"
               rel="ajax_id_product_6"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart?qty=1&id_product=6&token=213cce55976f5986362d66382011efe4&add"
               title="Добавить в корзину"><span>Добавить в корзину</span></a>
        </div>
    </div>
</li>
<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last_line first_item_of_tablet_line last_tablet_line">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span
                class="new">Новые</span></div>
        <div class="product_image"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=7&controller=product&id_lang=3"
                title="Sit amet conse ctetur" class="product_image"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/img/43-home_default.jpg" alt="Sit amet conse ctetur"></a>
        </div>
        <h5><a class="product_link"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=7&controller=product&id_lang=3"
               title="Sit amet conse ctetur">Sit amet conse ctetur</a></h5>

        <p class="product_desc"> It is vitally important to build strong and...</p>

        <p class="price_container">
            <span class="price">$135.80</span>
        </p>

        <div class="product_content">
            <a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart"
               rel="ajax_id_product_7"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart?qty=1&id_product=7&token=213cce55976f5986362d66382011efe4&add"
               title="Добавить в корзину"><span>Добавить в корзину</span></a>
        </div>
    </div>
</li>
<li class="ajax_block_product col-xs-12 col-sm-6 col-md-3 last_item_of_line last_line last_item_of_tablet_line last_tablet_line">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span
                class="new">Новые</span></div>
        <div class="sale-box"><span class="before"></span><span class="after"></span><span
                class="on_sale">Sale!</span></div>
        <div class="product_image"><a
                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=8&controller=product&id_lang=3"
                title="Sunt in culpa qui officia" class="product_image"><img
                    src="<?php bloginfo('stylesheet_directory'); ?>/img/50-home_default.jpg" alt="Sunt in culpa qui officia"></a>
        </div>
        <h5><a class="product_link"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=8&controller=product&id_lang=3"
               title="Sunt in culpa qui officia">Sunt in culpa qui officia</a></h5>

        <p class="product_desc"> It is vitally important to build strong and...</p>

        <p class="price_container">
            <span class="price price-new">$95.52</span>
            <span class="price-old">$108.55</span>
        </p>

        <div class="product_content">
            <a class="exclusive btn btn-default ajax_add_to_cart_button btn_add_cart"
               rel="ajax_id_product_8"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart?qty=1&id_product=8&token=213cce55976f5986362d66382011efe4&add"
               title="Добавить в корзину"><span>Добавить в корзину</span></a>
        </div>
    </div>
</li>
</ul>
</div>

</div>
</div>
</div>
</div>
<div id="page_wrapper_4">
    <div class="container">
        <div class="row">
            <div id="htmlcontent_home">
                <ul class="htmlcontent-home clearfix">
                    <li class="htmlcontent-item num-1">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=3&controller=category"
                           class="item-link">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/525ea9301f8587287e1f9b1a142968e4.jpg" class="item-img" alt="">

                            <div class="item-html">
                                <h3>Special Offer</h3>

                                <h2>Lorem ipsum dolor sit amet con</h2>

                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labor.</p>
                            </div>
                        </a>
                    </li>
                    <li class="htmlcontent-item num-2">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=4&controller=category"
                           class="item-link">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/dae0537a295af141aa53acb076597e95.jpg" class="item-img" alt="">

                            <div class="item-html">
                                <h3>Special Offer</h3>

                                <h2>Cillum dolore eu fugiat </h2>

                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labor.</p>
                            </div>
                        </a>
                    </li>
                    <li class="htmlcontent-item num-3">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=5&controller=category"
                           class="item-link">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/f004c6bffb414ab28eff80bbe1678880.jpg" class="item-img" alt="">

                            <div class="item-html">
                                <h3>Special Offer</h3>

                                <h2>Cillum dolore eu fugiat </h2>

                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labor.</p>
                            </div>
                        </a>
                    </li>
                    <li class="htmlcontent-item num-4">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=6&controller=category"
                           class="item-link">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/f7b65232c961b5c5979b2c39378ae301.jpg" class="item-img" alt="">

                            <div class="item-html">
                                <h3>Special Offer</h3>

                                <h2>Voluptate velit esse magna </h2>

                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labor.</p>
                            </div>
                        </a>
                    </li>
                    <li class="htmlcontent-item num-5">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=7&controller=category"
                           class="item-link">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/1f733ec427f7d5201180e32734c5ca57.jpg" class="item-img" alt="">

                            <div class="item-html">
                                <h3>Special Offer</h3>

                                <h2>Dolore eu fugiat nulla pariatur</h2>

                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labor.</p>
                            </div>
                        </a>
                    </li>
                    <li class="htmlcontent-item num-6">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=8&controller=category"
                           class="item-link">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/656d21b618127d191e7bac5d1c799410.jpg" class="item-img" alt="">

                            <div class="item-html">
                                <h3>Special Offer</h3>

                                <h2>Excepteur sint occ aecat </h2>

                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labor.</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>


<div class="page_wrapper_3 clearfix">
    <footer id="footer" class="container">
        <div class="row modules">

            <section class="col-sm-2 block block_category_footer">
                <h4>Категории<i class="icon-plus-sign"></i></h4>
                <ul class="toggle_content list-footer tree dhtml">
                    <li class="category_3">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=3&controller=category&id_lang=3"
                           title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Carpet</a>
                        <ul style="display: none;">
                            <li class="category_6">
                                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=6&controller=category&id_lang=3"
                                   title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Lorem
                                    ipsum dolor sit amet</a>
                            </li>
                            <li class="category_7">
                                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=7&controller=category&id_lang=3"
                                   title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Conse
                                    ctetur adipisicing</a>
                                <ul style="display: none;">
                                    <li class="category_9">
                                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=9&controller=category&id_lang=3"
                                           title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Sit
                                            amet conse</a>
                                    </li>
                                    <li class="category_15">
                                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=15&controller=category&id_lang=3"
                                           title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Magna
                                            aliqua</a>
                                    </li>
                                    <li class="category_16 last">
                                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=16&controller=category&id_lang=3"
                                           title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Aliquaenim
                                            sed do</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="category_8">
                                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=8&controller=category&id_lang=3"
                                   title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Elit
                                    sed do eiusmod tempor</a>
                            </li>
                            <li class="category_12">
                                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=12&controller=category&id_lang=3"
                                   title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Incididunt
                                    ut labore</a>
                            </li>
                            <li class="category_13">
                                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=13&controller=category&id_lang=3"
                                   title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Et
                                    dolore magna aliqua</a>
                            </li>
                            <li class="category_14 last">
                                <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=14&controller=category&id_lang=3"
                                   title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Ut
                                    enim ad minim veniam</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category_4">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=4&controller=category&id_lang=3"
                           title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Hardwood</a>
                    </li>
                    <li class="category_5">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=5&controller=category&id_lang=3"
                           title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Ceramic</a>
                    </li>
                    <li class="category_10">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=10&controller=category&id_lang=3"
                           title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Stone</a>
                    </li>
                    <li class="category_17 last">
                        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=17&controller=category&id_lang=3"
                           title="It is vitally important to build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our store more comfortable and pleasant. Considering our huge experience we improve our servicing, products&#39; quality, implement new technologies and of course care about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure the products that our clients receive from us will suit their requirements perfectly.">Laminate</a>
                    </li>
                </ul>
            </section>


            <section class="block blockcms_footer col-sm-2">
                <h4 class="toggle">Информация<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content clearfix">
                    <li class="first_item"><a
                            href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=prices-drop"
                            title="Скидки">Скидки</a></li>
                    <li class="item"><a
                            href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=new-products"
                            title="Новые товары">Новые товары</a></li>
                    <li class="item"><a
                            href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=best-sales"
                            title="Популярные товары">Популярные товары</a></li>
                    <li class="item"><a
                            href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=stores"
                            title="Наши магазины">Наши магазины</a></li>
                    <li class="item"><a
                            href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=contact"
                            title="Свяжитесь с нами">Свяжитесь с нами</a></li>
                    <li class="item"><a
                            href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_cms=6&controller=cms&id_lang=3"
                            title="Страница конфигурации">Страница конфигурации</a></li>
                    <li><a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=sitemap"
                           title="карта сайта">Карта сайта</a></li>
                </ul>
            </section>
            <section class="bottom_footer">© 2014 Работает на <a target="_blank" href="http://www.prestashop.com/">PrestaShop</a>™
            </section>

            <section class="block blockmyaccountfooter col-sm-2">
                <h4>Моя учетная запись<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content clearfix">
                    <li><a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=history"
                           title="Мои заказы" rel="nofollow">Мои заказы</a></li>
                    <li><a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=order-follow"
                           title="Список моих возвратов товара" rel="nofollow">Мои возвраты покупок</a></li>
                    <li><a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=order-slip"
                           title="Мои кредитные квитанции" rel="nofollow">Мои кредитные квитанции</a></li>
                    <li><a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=addresses"
                           title="Мои адреса" rel="nofollow">Мои адреса</a></li>
                    <li><a href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=identity"
                           title="Управление моей личной информацией" rel="nofollow">Моя личная информация</a></li>
                </ul>
            </section>

            <section class="block blocksocial col-sm-2">
                <h4>Подпишитесь на наши обновления<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content">
                    <li class="facebook"><a href="http://facebook.com/">Facebook</a></li>
                    <li class="twitter"><a href="http://twitter.com/">Twitter</a></li>
                    <li class="rss"><a href="http://www.prestashop.com/blog/feed/">RSS</a></li>
                </ul>
            </section>

            <section class="block blockcontactinfos col-sm-4">
                <h4>Свяжитесь с нами<i class="icon-plus-sign"></i></h4>
                <ul class="toggle_content">
                    <li>My Company</li>
                    <li class="contact-address">4578 Marmora Road, Glasgow D04 89GR</li>
                    <li class="contact-tel">Тел.: 1(234) 567-9842</li>
                    <li>Email: <a href="mailto:%69%6e%66%6f@%64%65%6d%6f%6c%69%6e%6b.%6f%72%67">info@demolink.org</a>
                    </li>
                </ul>
            </section>
        </div>
    </footer>
</div>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/img/ga(1).js"></script>


</body>
</html>