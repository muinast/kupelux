<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <div class="page_wrapper_2 clearfix">
        <div id="columns" class="container">
            <div class="row">

                <!-- Left -->
                <?php get_template_part('widget', 'sidebar-info'); ?>

                <!-- Center -->
                <div id="center_column" class="center_column col-xs-12 col-sm-9 clearfix" style="padding-left: 30px; padding-bottom: 20px;">
                    <h1 style="margin-top: 0; margin-bottom: 0;">
                        <span><?php the_title(); ?></span>
                    </h1>
                    <ul class="row grid" style="opacity: 1;">
                        <p style="margin-top: 5px;">
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </p>
                    </ul>

                </div>

            </div>

            <!-- Right -->


        </div>
    </div>
    </div>

<?php get_footer(); ?>