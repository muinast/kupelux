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
    <!--  --><?php /*if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); */ ?>
    <div id="columns" class="container">
        <div class="row">

            <!-- Left -->
            <?php get_template_part('sidebar', 'gallery'); ?>

            <script src="<?php bloginfo('stylesheet_directory'); ?>/js/lightgallery.min.js"  type="text/javascript"></script>
            <script>
                lightgallery.init();
            </script>

            <!-- Center -->
            <div id="center_column" class="center_column col-xs-12 col-sm-9 clearfix" style="padding-bottom: 20px;">
                <ul class="row grid" style="opacity: 1;">
                    <section id="breadcum-2" class="column_box block single">
                        <div class="block_content">
                            <div class="lnk">
                                <a class="btn btn-default button_large" href="#" title="<?php the_title(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <script type="text/javascript">(function() {
                                        if (window.pluso)if (typeof window.pluso.start == "function") return;
                                        if (window.ifpluso==undefined) { window.ifpluso = 1;
                                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                                            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                                            var h=d[g]('body')[0];
                                            h.appendChild(s);
                                        }})();
                                </script>

                            </div>
                        </div>
                        <div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,nocounter,theme=04" data-services="facebook,vkontakte,twitter,google,odnoklassniki,email,print" data-user="1727841079" style="float: right"></div>
                    </section>
                </ul>
                <ul class="row grid" style="opacity: 1;">
                    <?php echo apply_filters('the_content', $post->post_content); ?>
                </ul>

            </div>

        </div>

        <!-- Right -->


    </div>
</div>
</div>

<?php get_footer(); ?>
