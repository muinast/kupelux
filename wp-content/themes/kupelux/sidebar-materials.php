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
<div id="right_column" class="col-xs-12 col-sm-3 column">

    <section id="breadcum-2" class="column_box block">
        <div class="block_content">
            <div class="lnk">
                <a class="btn btn-default button_large" href="#" title="">
                    <?php
                    $cats = wp_get_post_categories( $post->ID );
                    $cat_title = get_the_category_by_ID( $cats[0] );
                    echo($cat_title);
                    ?>
                </a>
            </div>
        </div>
    </section>

    <section id="layered_block_left" class="column_box block">

        <div id="materials-sidebar" class="block_content">
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <span>ДЛЯ ШКАФОВ-КУПЕ</span>
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
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <span>ДЛЯ КУХНИ</span>
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
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <span>ОСНОВНОЕ</span>
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
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <span>ИЗОБРАЖЕНИЯ</span>
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
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <span>ФАСАДЫ</span>
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
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <span>ФУРНИТУРА</span>
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
            </div>
        </div>
    </section>
    
</div>