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

            <!-- Center -->
            <div id="center_column" class="center_column col-xs-12 col-sm-9 clearfix">


                <h1 style="margin-top: 0;">
                    <span>Шкафы-купе</span>
                </h1>


                <ul id="product_list" class="row grid" style="opacity: 1;">


                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-1 alpha  first_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100141</span>
                            </div>
                            <a href="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kupe11.jpg" class="product_img_link highslide" onclick="return hs.expand(this, galleryOptions)">
                                <img src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kupe11.jpg" alt="Highslide JS">
                            </a>
                        </div>
                    </li>


                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-2  last_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100142</span>
                            </div>
                            <a href="#" class="product_img_link" title="Dolor sit amet conse ctetur">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kupe11.jpg"
                                    alt="" title="">
                            </a>
                        </div>
                    </li>


                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-3 omega  first_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100143</span>
                            </div>
                            <a href="#" class="product_img_link" title="Dolor sit amet conse ctetur">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kupe11.jpg"
                                    alt="" title="">
                            </a>
                        </div>
                    </li>


                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-4 alpha last_line last_item_of_tablet_line ">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 100144</span>
                            </div>
                            <a href="#" class="product_img_link" title="Dolor sit amet conse ctetur">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kupe11.jpg"
                                    alt="" title="">
                            </a>
                        </div>
                    </li>


                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-5 last_line first_item_of_tablet_line last_tablet_line">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 1001415</span>
                            </div>
                            <a href="#" class="product_img_link" title="Dolor sit amet conse ctetur">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kupe11.jpg"
                                    alt="" title="">
                            </a>
                        </div>
                    </li>

                    <li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-5 last_line first_item_of_tablet_line last_tablet_line">
                        <div class="inner_content clearfix">
                            <div class="new-box"><span class="before"></span><span class="after"></span><span
                                    class="new">№ 1001416</span>
                            </div>
                            <a href="#" class="product_img_link" title="Dolor sit amet conse ctetur">
                                <img
                                    src="http://kupelux.loc/wp-content/themes/kupelux/img/gallary/kupe11.jpg"
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