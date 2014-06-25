<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage Kupe Lux
 * @since Kupe Lux 1.0
 */

get_header();
?>


    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1170px; height: 390px;">
        <div id="slider" u="slides"
             style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1170px; height: 390px;">
            <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-1-07-56.jpg"/></div>
            <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-2-08-07.jpg"/></div>
            <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slide-3-08-20.jpg"/></div>
        </div>
    </div>

    <script>
        $(document).ready(function ($) {
            jQuery(document).ready(function ($) {
                //Define an array of slideshow transition code
                var _SlideshowTransitions = [
                    {$Duration: 400, $Delay: 100, $Rows: 7, $Clip: 4, $Formation: $JssorSlideshowFormations$.$FormationStraight},
                    {$Duration: 1000, $Cols: 3, $Rows: 2, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $JssorEasing$.$EaseInBounce},
                    {$Duration: 1000, $Cols: 8, $Clip: 1, $Move: true},
                    {$Duration: 500, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationZigZag, $Assembly: 260, $Easing: $JssorEasing$.$EaseInQuad},
                    {$Duration: 600, $Delay: 80, $Cols: 10, $Opacity: 2},
                    {$Duration: 1500, $Delay: 60, $Cols: 15, $FlyDirection: 8, $Formation: $JssorSlideshowFormations$.$FormationCircle, $Easing: $JssorEasing$.$EaseInWave, $ScaleVertical: 0.5, $Round: {$Top: 1.5}},
                    {$Duration: 600, $Delay: 50, $Cols: 8, $Rows: 4, $SlideOut: true, $FlyDirection: 4, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad}, $Opacity: 2}
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
                    <a href="#" class="item-link">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/64dbf4d01977796a15853ba402930d69.jpg"
                             class="item-img" alt="">

                        <div class="item-html">
                            <h3>ТОЛЬКО ЛУЧШИЕ МАТЕРИАЛЫ</h3>

                            <h2>Индивидуальный подход к каждому нашему клиенту</h2>

                            <br><br><br><br>

                            <span><b>Перейти в каталог материалов</b></span>
                        </div>
                    </a>
                </div>
            </li>
            <li class="htmlcontent-item  num-2">
                <div>
                    <a href="#" class="item-link">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/923a551bac55a5267866cb95462acbf6.jpg"
                             class="item-img" alt="">

                        <div class="item-html">
                            <h3>Бонусная программа Скидок</h3>

                            <h2>Спецпредложения по низким ценам!</h2>

                            <p style="margin-bottom: 25px">
                                - Сезонные скидки и акции<br>
                                - Скидки при повторном заказе<br>
                                - Бонусная программа<br>
                                <b>ТОЛЬКО ЛУЧШИЕ ПРЕДЛОЖЕНИЯ ДЛЯ ВАС</b>
                            </p>

                            <span><b>Узнать больше...</b></span>
                        </div>
                    </a>
                </div>
            </li>
            <li class="htmlcontent-item  num-3">
                <div>
                    <a href="#" class="item-link">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/224dafb96e52172b00cfc40f28385667.jpg"
                             class="item-img" alt="">

                        <div class="item-html">
                            <h3>Наши приемущества</h3>

                            <h2>Мы предлагаем:</h2>

                            <p style="margin-bottom: 17px">
                                - Быстрые скори изготовления<br>
                                - Любые размеры, цвет, дизайн и фурнитура<br>
                                - Гарантия на всю мебель - 2 года<br>
                                - Установка в удобное для Вас время<br>
                                - Услуги дизайнера, обмер, доставка и установка (по Минску) - бесплатно
                            </p>
                            <span><b>Узнать больше...</b></span>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    </div>
    </header>
    </div>
    <div class="page_wrapper_2 clearfix">
    <div id="columns" class="container">
    <div class="row">


    <div id="center_column" class="center_column col-xs-12 col-sm-12 clearfix">

    <div id="featured-products_block_center" class="main_page_products block">
    <h4><span>Наши последние работы</span></h4>
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
                        src="<?php bloginfo('stylesheet_directory'); ?>/img/1-home_default.jpg"
                        alt="Dolor sit amet conse ctetur"></a>
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
                        src="<?php bloginfo('stylesheet_directory'); ?>/img/8-home_default.jpg"
                        alt="Duis aute irure dolor"></a></div>
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
                        src="<?php bloginfo('stylesheet_directory'); ?>/img/22-home_default.jpg"
                        alt="Vvelit esse cillum dolore"></a>
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
                        src="<?php bloginfo('stylesheet_directory'); ?>/img/29-home_default.jpg"
                        alt="Excepteur sint occaecat"></a>
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
                        src="<?php bloginfo('stylesheet_directory'); ?>/img/36-home_default.jpg"
                        alt="Cupidatat non proident"></a>
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
                        src="<?php bloginfo('stylesheet_directory'); ?>/img/43-home_default.jpg"
                        alt="Sit amet conse ctetur"></a>
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
                        src="<?php bloginfo('stylesheet_directory'); ?>/img/50-home_default.jpg"
                        alt="Sunt in culpa qui officia"></a>
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
                                <img
                                    src="<?php bloginfo('stylesheet_directory'); ?>/img/525ea9301f8587287e1f9b1a142968e4.jpg"
                                    class="item-img" alt="">

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
                                <img
                                    src="<?php bloginfo('stylesheet_directory'); ?>/img/dae0537a295af141aa53acb076597e95.jpg"
                                    class="item-img" alt="">

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
                                <img
                                    src="<?php bloginfo('stylesheet_directory'); ?>/img/f004c6bffb414ab28eff80bbe1678880.jpg"
                                    class="item-img" alt="">

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
                                <img
                                    src="<?php bloginfo('stylesheet_directory'); ?>/img/f7b65232c961b5c5979b2c39378ae301.jpg"
                                    class="item-img" alt="">

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
                                <img
                                    src="<?php bloginfo('stylesheet_directory'); ?>/img/1f733ec427f7d5201180e32734c5ca57.jpg"
                                    class="item-img" alt="">

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
                                <img
                                    src="<?php bloginfo('stylesheet_directory'); ?>/img/656d21b618127d191e7bac5d1c799410.jpg"
                                    class="item-img" alt="">

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

<?php
get_footer();
