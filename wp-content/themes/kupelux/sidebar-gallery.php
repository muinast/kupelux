<?php
/**
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
        <div class="block_content">
            <?php wp_nav_menu('menu=gallery'); ?>
        </div>
    </section>

</div>