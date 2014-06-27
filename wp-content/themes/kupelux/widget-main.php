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
?>
<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1170px; height: 470px;">
    <div id="slider" u="slides"
         style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1170px; height: 470px;">
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/1.jpg"/></div>
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/2.jpg"/></div>
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/3.jpg"/></div>
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/4.jpg"/></div>
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/5.jpg"/></div>
    </div>
</div>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jssor.slider.min.js"></script>


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
                {$Duration: 600, $Delay: 50, $Cols: 8, $Rows: 4, $SlideOut: true, $FlyDirection: 4, $Easing: {$Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseOutQuad}, $Opacity: 2},
                {$Duration: 600, $Delay: 80, $Cols: 10, $Opacity: 2},
                {$Duration: 1000, $Cols: 3, $Rows: 2, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $JssorEasing$.$EaseInBounce},
                {$Duration: 1500, $Delay: 60, $Cols: 15, $FlyDirection: 8, $Formation: $JssorSlideshowFormations$.$FormationCircle, $Easing: $JssorEasing$.$EaseInWave, $ScaleVertical: 0.5, $Round: {$Top: 1.5}}
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
                <a href="<?php echo home_url(); ?>/materials" class="item-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/50-home_default.jpg"
                         class="item-img" alt="" width="390" height="390">

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
                <a href="<?php echo home_url(); ?>/information" class="item-link">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/29-home_default.jpg"
                         class="item-img" alt="" width="390" height="390">

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
                <a href="<?php echo home_url(); ?>/information" class="item-link">
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
                                <div class="sale-box"><span class="before"></span><span class="after"></span></div>
                                <div class="product_image"><a href="#" title="" class="product_image"><img
                                            src="<?php bloginfo('stylesheet_directory'); ?>/img/1-home_default.jpg"
                                            alt=""></a>
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

                                <div class="product_content" style="float: right; margin-top: 10px; margin-right: 0;">
                                    <a class="exclusive btn btn-default"
                                       rel="ajax_id_product_8"
                                       href="<?php echo home_url(); ?>/photo-catalog"
                                       title="Добавить в корзину"><span>Перейти в фото-каталог</span></a>
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
                                <h3>Паркет от наших коллег</h3>

                                <h2>Паркет из натуральных материалов</h2>


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
                                <h3>Летнее спецпредложение</h3>

                                <h2>Фурнитура в подарок</h2>

                                <p>При заказе на сумму свыше 3 млн. руб фурнитура бесплатно!</p>
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
                                <h3>Кухни будущего</h3>

                                <h2>Интересные идеи от известных дизайнеров</h2>
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
                                <h3>Мы теперь в соцсетях</h3>

                                <h2>Подписывайтесь и следите за акциями и новостями</h2>
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
                                <h3>Ярмарка-выставка в Обниксе</h3>

                                <h2>Обникс 2014</h2>

                                <p>Самые яркие и свежие идеи от крупнейших производителей мебели РБ!</p>
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
                                <h3>Мостовдрев в упадке</h3>

                                <h2>Модернизация завода привела к банкротству</h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>