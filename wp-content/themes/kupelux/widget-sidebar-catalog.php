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

    <section id="layered_block_left" class="column_box block">
        <h3 class="toggle"><span>ФОТО-КАТАЛОГ</span></h3>

        <div class="block_content">
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="#" title="" style="width: 270px">ШКАФЫ-КУПЕ</a>
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="#" title="" style="width: 270px">ПРИХОЖИЕ</a>
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="#" title="" style="width: 270px">КУХНИ</a>
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="#" title="" style="width: 270px">ГОРКИ</a>
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="#" title="" style="width: 270px">ОФИСНАЯ МЕБЕЛЬ</a>
            </div>
        </div>
    </section>

    <section class="column_box block">
        <div class="block_content" style="border-top: 1px solid #d0d0d0; margin-top: 10px;">
            <h4 class="title_block">Расскажите о нас</h4>
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
                })();
            </script>
            <div class="pluso" data-background="transparent"
                 data-options="big,round,multiline,horizontal,nocounter,theme=08"
                 data-services="vkontakte,facebook,twitter,odnoklassniki,google,evernote,yazakladki,googlebookmark,moimir,email,print"></div>

        </div>
    </section>


</div>