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
<?php get_template_part('widget', 'sidebar-info'); ?>

<!-- Center -->
<div id="center_column" class="center_column col-xs-12 col-sm-9 clearfix posts" style="padding-top: 55px; padding-left: 30px; padding-right: 30px;">



        <?php $loop = new WP_Query( array( 'cat' => '4', 'orderby' => 'title', 'order' => 'ASC') );
        $count = 0;
        $total = $loop->found_posts;

        while ( $loop->have_posts() ) : $loop->the_post();
            $count++;
            ?>
    <ul class="row grid" style="opacity: 1; <?php if ($count < $total) { echo("border-bottom: 1px solid gainsboro;") ; ?><?php } ?>">
        <h5>
            <a class="product_link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h5>
        <p style="margin-top: 5px;">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="lnk_more_cat" style="float: right;"><i class="icon-plus-sign"></i> Подробнее</a>
        </p>
    </ul>
        <?php endwhile;  ?>



</div>

</div>

<!-- Right -->


</div>
</div>
</div>