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
<div class="page_wrapper_2 clearfix">
    <div id="columns" class="container">
        <div class="row">

            <!-- Left -->
            <?php get_template_part('widget', 'sidebar-catalog'); ?>

            <script src="<?php bloginfo('stylesheet_directory'); ?>/js/lightgallery.min.js"  type="text/javascript"></script>
            <script>
                lightgallery.init();
            </script>

            <!-- Center -->
            <div id="center_column" class="center_column col-xs-12 col-sm-9 clearfix">


                <h1 style="margin-top: 0;">
                    <span>Кухни</span>
                </h1>

                <ul id="product_list" class="row grid" style="opacity: 1;">


                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-1 first_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100141</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen01.jpg"
                               class="product_img_link"
                               rel="lightgallery[flowers]">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen01.jpg" alt="Highslide JS">
                            </a>
                        </div>
                    </li>

                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-2 omega">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100143</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen06.jpg"
                               class="product_img_link"
                               title="Dolor sit amet conse ctetur"
                               rel="lightgallery[flowers]">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen06.jpg"
                                    alt="" title="">
                            </a>
                        </div>
                    </li>

                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-3 last_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100143</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen03.jpg"
                               class="product_img_link"
                               title="Dolor sit amet conse ctetur"
                               rel="lightgallery[flowers]">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen03.jpg"
                                    alt="" title="">
                            </a>
                        </div>
                    </li>



                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-1 first_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100141</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen04.jpg"
                               class="product_img_link"
                               rel="lightgallery[flowers]">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen04.jpg" alt="Highslide JS">
                            </a>
                        </div>
                    </li>


                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-2">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100142</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen05.jpg"
                               class="product_img_link"
                               rel="lightgallery[flowers]">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen05.jpg" alt="">
                            </a>
                        </div>
                    </li>

                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-3  last_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100142</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen02.jpg"
                               class="product_img_link"
                               rel="lightgallery[flowers]">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen02.jpg" alt="">
                            </a>
                        </div>
                    </li>



                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-1 first_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100141</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen07.jpg"
                               class="product_img_link"
                               rel="lightgallery[flowers]">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen07.jpg" alt="Highslide JS">
                            </a>
                        </div>
                    </li>

                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-2">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100141</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen10.jpg"
                               class="product_img_link"
                               rel="lightgallery[flowers]">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen10.jpg" alt="Highslide JS">
                            </a>
                        </div>
                    </li>

                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-1 first_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100143</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen12.jpg"
                               class="product_img_link"
                               title="Dolor sit amet conse ctetur"
                               rel="lightgallery[flowers]">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen12.jpg"
                                    alt="" title="">
                            </a>
                        </div>
                    </li>

                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-3  last_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100142</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen11.jpg"
                               class="product_img_link"
                               rel="lightgallery[flowers]">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen11.jpg" alt="">
                            </a>
                        </div>
                    </li>




                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-2 ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100142</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen08.jpg"
                               class="product_img_link"
                               rel="lightgallery[flowers]">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen08.jpg" alt="">
                            </a>
                        </div>
                    </li>


                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-3 last_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100143</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen09.jpg"
                               class="product_img_link"
                               title="Dolor sit amet conse ctetur"
                               rel="lightgallery[flowers]">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kitchen/kitchen09.jpg"
                                    alt="" title="">
                            </a>
                        </div>
                    </li>

                </ul>



            </div>

            <!-- Right -->


        </div>
    </div>
</div>