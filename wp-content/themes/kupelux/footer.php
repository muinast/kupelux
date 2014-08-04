<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Kupe Lux
 * @since Kupe Lux 1.0
 */
?>
<div class="page_wrapper_3 clearfix">
    <footer id="footer" class="container">
        <div class="row modules">

            <section class="block blockcms_footer col-sm-2">
                <h4 class="toggle">Информация<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content clearfix">
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/information/sales" title="Акции и скидки">Акции и скидки</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/information/answers" title="Вопрос-ответ">Вопрос-ответ</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/information/reviews" title="Отзывы о нас">Отзывы о нас</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/information/order" title="Процесс заказа">Процесс заказа</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/information/warranty" title="Установка и гарантия">Установка и
                            гарантия</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/information/handbook" title="Справочник терминов">Справочник
                            терминов</a>
                    </li>
                </ul>
            </section>

            <section class="block blockcms_footer col-sm-2">
                <h4 class="toggle">Категории<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content clearfix">
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/gallery/wardrobes/" title="Шкафы-купе">Шкафы-купе</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/gallery/room/" title="Прихожие">Прихожие</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/gallery/kitchen/" title="Кухни">Кухни</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/gallery/hill/" title="Горки">Горки</a>
                    </li>
                    <li class="first_item">
                        <a href="<?php echo home_url(); ?>/gallery/office/" title="Офисная мебель">Офисная
                            мебель</a>
                    </li>
                </ul>
            </section>

            <section class="block blockcms_footer col-sm-2">
                <h4 class="toggle">Материалы<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content clearfix">
                    <li class="first_item">
                        <a href="#" title="Для шкафов-купе">Для шкафов-купе</a>
                    </li>
                    <li class="first_item">
                        <a href="#" title="Для кухни">Для кухни</a>
                    </li>
                    <li class="first_item">
                        <a href="#" title="Основные">Основные</a>
                    </li>
                    <li class="first_item">
                        <a href="#" title="Изображения">Изображения</a>
                    </li>
                    <li class="first_item">
                        <a href="#" title="Фасады">Фасады</a>
                    </li>
                    <li class="first_item">
                        <a href="#" title="Фурнитура">Фурнитура</a>
                    </li>
                </ul>
            </section>

            <section class="block blocksocial col-sm-2">
                <h4>Мы в соцсетях<i class="icon-plus-sign"></i></h4>
                <ul class="list-footer toggle_content">
                    <li class="facebook"><a href="http://vk.com/">ВКонтакте</a></li>
                    <li class="facebook"><a href="http://facebook.com/">Facebook</a></li>
                    <li class="twitter"><a href="http://twitter.com/">Twitter</a></li>
                </ul>
            </section>

            <section class="block blockcontactinfos col-sm-4">
                <h4>Свяжитесь с нами<i class="icon-plus-sign"></i></h4>
                <ul class="toggle_content">
                    <li class="contact-tel">VEL: (029) 658-60-10 <span
                            style="padding-left: 41px;">Skype: <a
                                href="skype:kupelux.by?call">kupelux.by</a></span></li>
                    <li class="contact-tel">MTC: (029) 708-60-10 <span style="padding-left: 40px;">Email: <a
                                href="mailto:info@kupelux.by">info@kupelux.by</a></span></li>
                    <br>
                    <li>© 2014 ИП Шумихин А.Н. (УНП: 191045665)</li>
                    <li style="font-size: smaller;">
                        Разработка: <a href="mailto:mmuinast@ya.ru">Муйнаст Максим</a>.
                        Работает на <a target="_blank" href="http://ru.wordpress.org/">WordPress</a>™
                    </li>

                </ul>
            </section>



        </div>
    </footer>

    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function () {
            var widget_id = 'BSWaTatotU';
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        })();</script>

    <!-- {/literal} END JIVOSITE CODE -->
</div>
</body>
</html>