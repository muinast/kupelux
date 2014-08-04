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

<div class="pluso_wrapper">
    <script type="text/javascript">(function () {
            if (window.pluso)if (typeof window.pluso.start == "function") return;
            if (window.ifpluso == undefined) {
                window.ifpluso = 1;
                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript';
                s.charset = 'UTF-8';
                s.async = true;
                s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                var h = d[g]('body')[0];
                h.appendChild(s);
            }
        })();</script>
    <div class="pluso" data-background="transparent" data-options="big,square,line,vertical,nocounter,theme=04"
         data-services="facebook,vkontakte,twitter,google,odnoklassniki,email,print" data-user="1727841079"></div>
</div>


<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1170px; height: 470px;">
    <div id="slider" u="slides"
         style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1170px; height: 470px;">
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/2.jpg"/></div>
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/3.jpg"/></div>
        <div><img u="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/slider/1.jpg"/></div>
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
                {$Duration:600,$Delay:50,$Cols:8,$Rows:4,$FlyDirection:1,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:513,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
                {$Duration: 1000, $Cols: 3, $Rows: 2, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $JssorEasing$.$EaseInBounce},
                {$Duration:600,$Delay:100,$Cols:10,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2},
                {$Duration: 500, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationZigZag, $Assembly: 260, $Easing: $JssorEasing$.$EaseInQuad},
                {$Duration:1200,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$SlideOut:true,$FlyDirection:9,$Assembly:260,$Easing:{$Left:$JssorEasing$.$EaseInJump,$Top:$JssorEasing$.$EaseInJump,$Clip:$JssorEasing$.$EaseSwing},$ScaleHorizontal:0.3,$ScaleVertical:0.3,$Round:{$Left:0.8,$Top:0.8}},
                {$Duration:600,$Delay:50,$Cols:8,$Rows:4,$FlyDirection:1,$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:513,$Easing:{$Left:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
                {$Duration:600,$Delay:50,$Cols:8,$Rows:4,$FlyDirection:8,$Easing:{$Top:$JssorEasing$.$EaseInCubic,$Opacity:$JssorEasing$.$EaseOutQuad},$Opacity:2},
                {$Duration: 500, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $Formation: $JssorSlideshowFormations$.$FormationZigZag, $Assembly: 260, $Easing: $JssorEasing$.$EaseInQuad},
                {$Duration:600,$Delay:30,$Cols:8,$Rows:4,$FlyDirection:6,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Easing:{$Left:$JssorEasing$.$EaseInQuart,$Top:$JssorEasing$.$EaseInQuart,$Opacity:$JssorEasing$.$EaseLinear},$Opacity:2},
                {$Duration:600,$Delay:100,$Cols:10,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Opacity:2}
            ];
            var options = {
                $AutoPlay: true,
                $PauseOnHover: 0,
                $UISearchMode: 0,
                $ShowLink: false,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: _SlideshowTransitions,
                    $TransitionsOrder: 1,
                    $AutoPlayInterval: 1500
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
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/50-home_default.jpg"
                         class="item-img" alt="" width="390" height="390">

                    <div class="item-html">
                        <h3>ТОЛЬКО ЛУЧШИЕ МАТЕРИАЛЫ</h3>

                        <h2>Индивидуальный подход к каждому нашему клиенту</h2>

                        <span style="margin-top: 93px;"><b>Перейти в каталог материалов</b></span>
                    </div>
                </a>
            </div>
        </li>
        <li class="htmlcontent-item  num-2">
            <div>
                <a href="<?php echo home_url(); ?>/information/sales" class="item-link">
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
                <a href="<?php echo home_url(); ?>/information/warranty" class="item-link">
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
                                        class="new">Шкаф-купе</span></div>
                                <div class="sale-box"><span class="before"></span><span class="after"></span><span
                                        class="on_sale">№ W0945</span></div>
                                <div class="product_image"><a href="<?php echo home_url(); ?>/gallery/wardrobes/" title="" class="product_image"><img
                                            src="<?php echo home_url();?>/wp-content/uploads/2014/07/kupe1.jpg"
                                            alt="" width="270" height="270"></a>
                                </div>
                            </div>
                        </li>
                        <li class="ajax_block_product col-xs-12 col-sm-6 col-md-3   last_item_of_tablet_line ">
                            <div class="inner_content clearfix">
                                <div class="new-box"><span class="before"></span><span class="after"></span><span
                                        class="new">Шкаф-купе</span></div>
                                <div class="sale-box"><span class="before"></span><span class="after"></span><span
                                        class="on_sale">№ W0946</span></div>
                                <div class="product_image"><a href="<?php echo home_url(); ?>/gallery/wardrobes/" title="" class="product_image"><img
                                            src="<?php echo home_url();?>/wp-content/uploads/2014/07/kupe2.jpg"
                                            alt="" width="270" height="270"></a>
                                </div>
                            </div>
                        </li>
                        <li class="ajax_block_product col-xs-12 col-sm-6 col-md-3   first_item_of_tablet_line ">
                            <div class="inner_content clearfix">
                                <div class="new-box"><span class="before"></span><span class="after"></span><span
                                        class="new">Шкаф-купе</span></div>
                                <div class="sale-box"><span class="before"></span><span class="after"></span><span
                                        class="on_sale">№ W0947</span></div>
                                <div class="product_image"><a href="<?php echo home_url(); ?>/gallery/wardrobes/" title="" class="product_image"><img
                                            src="<?php echo home_url();?>/wp-content/uploads/2014/07/kupe3.jpg"
                                            alt="" width="270" height="270"></a>
                                </div>
                            </div>
                        </li>
                        <li class="ajax_block_product col-xs-12 col-sm-6 col-md-3 last_item_of_line  last_item_of_tablet_line ">
                            <div class="inner_content clearfix">
                                <div class="new-box"><span class="before"></span><span class="after"></span><span
                                        class="new">Шкаф-купе</span></div>
                                <div class="sale-box"><span class="before"></span><span class="after"></span><span
                                        class="on_sale">№ W0948</span></div>
                                <div class="product_image"><a href="<?php echo home_url(); ?>/gallery/wardrobes/" title="" class="product_image"><img
                                            src="<?php echo home_url();?>/wp-content/uploads/2014/07/kupe4.jpg"
                                            alt="" width="270" height="270"></a>
                                </div>
                            </div>
                        </li>


                        <li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  first_item_of_line  last_line first_item_of_tablet_line ">
                            <div class="inner_content clearfix">
                                <div class="new-box"><span class="before"></span><span class="after"></span><span
                                        class="new">Офис-меб.</span></div>
                                <div class="sale-box"><span class="before"></span><span class="after"></span><span
                                        class="on_sale">№ OF148</span></div>
                                <div class="product_image"><a href="<?php echo home_url(); ?>/gallery/office/" title="" class="product_image"><img
                                            src="<?php echo home_url();?>/wp-content/uploads/2014/07/office016.jpg"
                                            alt="" width="270" height="270"></a>
                                </div>
                            </div>
                        </li>
                        <li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last_line last_item_of_tablet_line ">
                            <div class="inner_content clearfix">
                                <div class="new-box"><span class="before"></span><span class="after"></span><span
                                        class="new">Кухня</span></div>
                                <div class="sale-box"><span class="before"></span><span class="after"></span><span
                                        class="on_sale">№ K6522</span></div>
                                <div class="product_image"><a href="<?php echo home_url(); ?>/gallery/kitchen/" title="" class="product_image"><img
                                            src="<?php echo home_url();?>/wp-content/uploads/2014/07/kuhni55.jpg"
                                            alt="" width="270" height="270"></a>
                                </div>
                            </div>
                        </li>
                        <li class="ajax_block_product col-xs-12 col-sm-6 col-md-3  last_line first_item_of_tablet_line last_tablet_line">
                            <div class="inner_content clearfix">
                                <div class="new-box"><span class="before"></span><span class="after"></span><span
                                        class="new">Горка</span></div>
                                <div class="sale-box"><span class="before"></span><span class="after"></span><span
                                        class="on_sale">№ H4522</span></div>
                                <div class="product_image"><a href="<?php echo home_url(); ?>/gallery/hill/" title="" class="product_image"><img
                                            src="<?php echo home_url();?>/wp-content/uploads/2014/07/gorka5.jpg"
                                            alt="" width="270" height="270"></a>
                                </div>
                            </div>
                        </li>
                        <li class="ajax_block_product col-xs-12 col-sm-6 col-md-3 last_item_of_line last_line last_item_of_tablet_line last_tablet_line">
                            <div class="inner_content clearfix">
                                <div class="new-box"><span class="before"></span><span class="after"></span><span
                                        class="new">Прихожая</span></div>
                                <div class="sale-box"><span class="before"></span><span class="after"></span><span
                                        class="on_sale">№ R1455</span></div>
                                <div class="product_image"><a href="<?php echo home_url(); ?>/gallery/room/" title="" class="product_image"><img
                                            src="<?php echo home_url();?>/wp-content/uploads/2014/07/room011.jpg"
                                            alt="" width="270" height="270"></a>
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
                        <a href="#"
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
                        <a href="#"
                           class="item-link">
                            <img
                                src="<?php bloginfo('stylesheet_directory'); ?>/img/dae0537a295af141aa53acb076597e95.jpg"
                                class="item-img" alt="">

                            <div class="item-html">
                                <h3>Спецпредложение</h3>

                                <h2>Фурнитура в подарок</h2>

                                <p>При заказе на сумму свыше 3 млн. руб вы получаете фурнитуру совершенно бесплатно!</p>
                            </div>
                        </a>
                    </li>
                    <li class="htmlcontent-item num-3">
                        <a href="#"
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
                    <li class="htmlcontent-item num-4 social">
                        <a href="http://facebook.com/" class="item-link" target="_blank">
                            <img
                                src="<?php bloginfo('stylesheet_directory'); ?>/img/social/common.png"
                                class="item-img" alt="">

                            <div class="item-html">
                                <h3>Мы на Facebook</h3>

                                <h2>Присоединяйтесь к нашей группе на FACEBOOK</h2>
                            </div>
                        </a>
                    </li>
                    <li class="htmlcontent-item num-5 social">
                        <a href="http://twitter.com/"
                           class="item-link" target="_blank">
                            <img
                                src="<?php bloginfo('stylesheet_directory'); ?>/img/social/common-2.png"
                                class="item-img" alt="">

                            <div class="item-html">
                                <h3>Мы в Twitter</h3>

                                <h2>Следите за событиями в TWITTER</h2>
                            </div>
                        </a>
                    </li>
                    <li class="htmlcontent-item num-6 social">
                        <a href="http://vk.com/"
                           class="item-link" target="_blank">
                            <img
                                src="<?php bloginfo('stylesheet_directory'); ?>/img/social/common.png"
                                class="item-img" alt="">

                            <div class="item-html">
                                <h3>Мы в ВКонтакте</h3>

                                <h2>Присоединяйтесь к нашей группе в ВКОНТАКТЕ</h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>