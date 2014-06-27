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
                <a class="btn btn-default button_large" href="<?php echo home_url(); ?>/photo-catalog/wardrobes/" title="" style="width: 270px">ШКАФЫ-КУПЕ</a>
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="<?php echo home_url(); ?>/photo-catalog/room/" title="" style="width: 270px">ПРИХОЖИЕ</a>
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="<?php echo home_url(); ?>/photo-catalog/kitchen/" title="" style="width: 270px">КУХНИ</a>
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="<?php echo home_url(); ?>/photo-catalog/hill/" title="" style="width: 270px">ГОРКИ</a>
            </div>
            <div class="lnk" style="width: 270px; margin-bottom: 1px;">
                <a class="btn btn-default button_large" href="<?php echo home_url(); ?>/photo-catalog/office/" title="" style="width: 270px">ОФИСНАЯ МЕБЕЛЬ</a>
            </div>
        </div>
    </section>
    
</div>