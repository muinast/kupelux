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
<!--<div class="breadcrumb">
    <div class="breadcrumb_inset">
        <a class="breadcrumb-home" href="http://livedemo00.template-help.com/prestashop_48520/"
           title="Вернуться на главную"><i class="icon-home"></i></a>
        <span class="navigation-pipe">&gt;</span>
        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=3&amp;controller=category&amp;id_lang=3"
           title="Carpet">Carpet</a><span class="navigation-pipe">&gt;</span>Lorem ipsum dolor sit amet
    </div>
</div>-->
<div class="row">

<!-- Left -->
<?php get_template_part('widget', 'sidebar-info'); ?>

<!-- Center -->
<div id="center_column" class="center_column col-xs-12 col-sm-9 clearfix">


<h1>
        <span>
			Lorem ipsum dolor sit amet<strong class="category-product-count"> 12 товаров.
            </strong>
           </span>
</h1>

<div class="row_category clearfix">
    <!-- Category image -->
    <div class="align_center category_image ">
        <img src="http://livedemo00.template-help.com/prestashop_48520/img/c/6-category_default.jpg"
             alt="Lorem ipsum dolor sit amet" title="Lorem ipsum dolor sit amet" id="categoryImage">
    </div>

    <div class="cat_desc clearfix" id="category_description_short"><p>It is vitally important to build strong and
            reliable relationship with the client and this is a cornerstone of our philosophy. We are trying to do our
            best in making your presence at our store more comfortable and pleasant. Considering our huge experience we
            improve our servicing, products' quality, implement new technologies and of course care about environmental
            part of our job. We are glad to welcome you at our store and sincerely hope that we will satisfy your...&nbsp;<span
                onclick="$('#category_description_short').hide(); $('#category_description_full').show();"
                class="lnk_more_cat"><i class="icon-plus-sign"></i> Больше</span></p></div>
    <div class="cat_desc clearfix" id="category_description_full" style="display:none"><p>It is vitally important to
            build strong and reliable relationship with the client and this is a cornerstone of our philosophy. We are
            trying to do our best in making your presence at our store more comfortable and pleasant. Considering our
            huge experience we improve our servicing, products' quality, implement new technologies and of course care
            about environmental part of our job. We are glad to welcome you at our store and sincerely hope that we will
            satisfy your needs. There is no surprise that flooring industry is all about strong traditions, premium
            quality and perfect servicing. You should know that we work closely with Wood Flooring Association to ensure
            the products that our clients receive from us will suit their requirements perfectly.</p><span
            onclick="$('#category_description_short').show(); $('#category_description_full').hide();"
            class="lnk_more_cat close_cat"><i class="icon-minus-sign"></i> Hide</span></div>

</div>

<div class="sortPagiBar shop_box_row shop_box_row clearfix">


    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function () {
            if ($('#layered_form').length == 0) {
                $('.selectProductSort').change(function () {
                    var requestSortProducts = 'http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=6&controller=category&id_lang=3&id_lang=3';
                    var splitData = $(this).val().split(':');
                    document.location.href = requestSortProducts + ((requestSortProducts.indexOf('?') < 0) ? '?' : '&') + 'orderby=' + splitData[0] + '&orderway=' + splitData[1];
                });
            }
        });
        //]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function () {
            $('#productsSortForm .selectProductSort, .nb_item').uniform();
        });
        //]]>
    </script>
    <ul class="product_view clearfix hidden-xs">
        <li id="product_view_grid" class="current"><i class="icon-th-large"></i></li>
        <li id="product_view_list" class=""><i class="icon-th-list"></i></li>
    </ul>
    <form id="productsSortForm"
          action="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=6&amp;controller=category&amp;id_lang=3&amp;id_lang=3"
          class="nbrItemPage productsSortForm">
        <label for="selectPrductSort1">Сортировать по</label>

        <div class="selector" id="uniform-selectPrductSort1" style="width: 300px;"><span
                style="width: 290px; -webkit-user-select: none;">--</span><select id="selectPrductSort1"
                                                                                  class="selectProductSort" onchange="">
                <option value="position:asc" selected="selected">--</option>
                <option value="price:asc">Цена, по возрастанию</option>
                <option value="price:desc">Цена, по убыванию</option>
                <option value="name:asc">По названию товара, от А до Я</option>
                <option value="name:desc">По названию товара, от Я до А</option>
                <option value="quantity:desc">По наличию</option>
                <option value="reference:asc">Артикул, по возрастанию</option>
                <option value="reference:desc">Артикул, по возрастанию</option>
            </select></div>

    </form>
    <!-- /Sort products -->


    <!-- nbr product/page -->
    <form
        action="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=6&amp;controller=category&amp;id_lang=3"
        method="get" class="nbrItemPage nbr_page">

        <label for="nb_item">Показать:</label>
        <input type="hidden" name="id_lang" value="3">
        <input type="hidden" name="id_category" value="6">
        <input type="hidden" name="controller" value="category">

        <div class="selector" id="uniform-nb_item" style="width: 99px;"><span
                style="width: 89px; -webkit-user-select: none;">6</span><select name="n" id="nb_item"
                                                                                class="js-nb_item nb_item" onchange="">
                <option value="6" selected="selected">6</option>
                <option value="10">10</option>
                <option value="20">20</option>
            </select></div>


    </form>
    <!-- /nbr product/page -->

</div>

<!-- Products list -->


<!-- Products list -->


<!-- Products list -->


<ul id="product_list" class="row grid" style="opacity: 1;">


<li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-1 alpha  first_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span class="new">Новый!</span>
        </div>
        <div class="sale-box"><span class="before"></span><span class="after"></span><span
                class="on_sale">Распродажа!</span></div>
        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=1&amp;controller=product&amp;id_lang=3"
           class="product_img_link" title="Dolor sit amet conse ctetur">
            <img src="http://livedemo00.template-help.com/prestashop_48520/img/p/1/1-home_default.jpg"
                 alt="Dolor sit amet conse ctetur" title="Dolor sit amet conse ctetur">
        </a>

        <div class="center_block">
            <div class="product_flags clearfix">

                                <span class="availability title_shop">В наличии
                </span> <span class="online_only title_shop">Только онлайн!</span>
            </div>
            <div class="clear"></div>
            <h5>
                <a class="product_link"
                   href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=1&amp;controller=product&amp;id_lang=3"
                   title="Dolor sit amet conse ctetur">Dolor sit amet conse...</a></h5>

            <p class="product_desc">It is vitally important to build strong and reliable relationship with the client
                and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our
                store more comfortable and pleasant. Considering our huge experience we improve our servicing, products'
                quality, implement new technologies and of course care about environmental part of our job.</p>

            <p class="product_desc mob">It is vitally important to build strong and reliable relationship with the
                client and...</p>

            <p class="product_desc mob2">It is vitally important to build strong and reliable relationship with the
                client and this is a cornerstone of our philosophy. We are trying to do our best in making your...</p>
        </div>
        <div class="right_block">
            <span class="discount title_shop">Цена снижена!</span> <span class="price">$103.12</span>

            <p class="compare checkbox choices-thin clearfix hidden-xs">

            <div class="checker" id="uniform-comparator_item_1"><span><input type="checkbox" class="comparator"
                                                                             id="comparator_item_1"
                                                                             value="comparator_item_1"
                                                                             autocomplete="off"></span></div>
            <label for="comparator_item_1">Выбрать для сравнения</label></p>
            <div class="clear noneclass"></div>
            <a class="ajax_add_to_cart_button btn btn-default exclusive btn_add_cart" rel="ajax_id_product_1"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart&amp;add=1&amp;id_product=1&amp;token=213cce55976f5986362d66382011efe4"
               title="В корзину">
                <span>В корзину</span>
            </a>

            <a class="btn btn-default button"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=1&amp;controller=product&amp;id_lang=3"
               title="Подробнее">Подробнее</a>
        </div>
    </div>
</li>


<li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-2  last_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span class="new">Новый!</span>
        </div>
        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=2&amp;controller=product&amp;id_lang=3"
           class="product_img_link" title="Duis aute irure dolor">
            <img src="http://livedemo00.template-help.com/prestashop_48520/img/p/8/8-home_default.jpg"
                 alt="Duis aute irure dolor" title="Duis aute irure dolor">
        </a>

        <div class="center_block">
            <div class="product_flags clearfix">

                                <span class="availability title_shop">В наличии
                </span>
            </div>
            <div class="clear"></div>
            <h5>
                <a class="product_link"
                   href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=2&amp;controller=product&amp;id_lang=3"
                   title="Duis aute irure dolor">Duis aute irure dolor</a></h5>

            <p class="product_desc">It is vitally important to build strong and reliable relationship with the client
                and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our
                store more comfortable and pleasant. Considering our huge experience we improve our servicing, products'
                quality, implement new technologies and of course care about environmental part of our job.</p>

            <p class="product_desc mob">It is vitally important to build strong and reliable relationship with the
                client and...</p>

            <p class="product_desc mob2">It is vitally important to build strong and reliable relationship with the
                client and this is a cornerstone of our philosophy. We are trying to do our best in making your...</p>
        </div>
        <div class="right_block">
            <span class="price">$80.60</span>

            <p class="compare checkbox choices-thin clearfix hidden-xs">

            <div class="checker" id="uniform-comparator_item_2"><span><input type="checkbox" class="comparator"
                                                                             id="comparator_item_2"
                                                                             value="comparator_item_2"
                                                                             autocomplete="off"></span></div>
            <label for="comparator_item_2">Выбрать для сравнения</label></p>
            <div class="clear noneclass"></div>
            <a class="ajax_add_to_cart_button btn btn-default exclusive btn_add_cart" rel="ajax_id_product_2"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart&amp;add=1&amp;id_product=2&amp;token=213cce55976f5986362d66382011efe4"
               title="В корзину">
                <span>В корзину</span>
            </a>

            <a class="btn btn-default button"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=2&amp;controller=product&amp;id_lang=3"
               title="Подробнее">Подробнее</a>
        </div>
    </div>
</li>


<li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-3 omega  first_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span class="new">Новый!</span>
        </div>
        <div class="sale-box"><span class="before"></span><span class="after"></span><span
                class="on_sale">Распродажа!</span></div>
        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=3&amp;controller=product&amp;id_lang=3"
           class="product_img_link" title="Reprehenderit in voluptates">
            <img src="http://livedemo00.template-help.com/prestashop_48520/img/p/1/5/15-home_default.jpg"
                 alt="Reprehenderit in voluptates" title="Reprehenderit in voluptates">
        </a>

        <div class="center_block">
            <div class="product_flags clearfix">

                                <span class="availability title_shop">В наличии
                </span> <span class="online_only title_shop">Только онлайн!</span>
            </div>
            <div class="clear"></div>
            <h5>
                <a class="product_link"
                   href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=3&amp;controller=product&amp;id_lang=3"
                   title="Reprehenderit in voluptates">Reprehenderit in...</a></h5>

            <p class="product_desc">It is vitally important to build strong and reliable relationship with the client
                and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our
                store more comfortable and pleasant. Considering our huge experience we improve our servicing, products'
                quality, implement new technologies and of course care about environmental part of our job.</p>

            <p class="product_desc mob">It is vitally important to build strong and reliable relationship with the
                client and...</p>

            <p class="product_desc mob2">It is vitally important to build strong and reliable relationship with the
                client and this is a cornerstone of our philosophy. We are trying to do our best in making your...</p>
        </div>
        <div class="right_block">
            <span class="discount title_shop">Цена снижена!</span> <span class="price">$92.64</span>

            <p class="compare checkbox choices-thin clearfix hidden-xs">

            <div class="checker" id="uniform-comparator_item_3"><span><input type="checkbox" class="comparator"
                                                                             id="comparator_item_3"
                                                                             value="comparator_item_3"
                                                                             autocomplete="off"></span></div>
            <label for="comparator_item_3">Выбрать для сравнения</label></p>
            <div class="clear noneclass"></div>
            <a class="ajax_add_to_cart_button btn btn-default exclusive btn_add_cart" rel="ajax_id_product_3"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart&amp;add=1&amp;id_product=3&amp;token=213cce55976f5986362d66382011efe4"
               title="В корзину">
                <span>В корзину</span>
            </a>

            <a class="btn btn-default button"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=3&amp;controller=product&amp;id_lang=3"
               title="Подробнее">Подробнее</a>
        </div>
    </div>
</li>


<li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-4 alpha last_line last_item_of_tablet_line ">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span class="new">Новый!</span>
        </div>
        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=4&amp;controller=product&amp;id_lang=3"
           class="product_img_link" title="Vvelit esse cillum dolore">
            <img src="http://livedemo00.template-help.com/prestashop_48520/img/p/2/2/22-home_default.jpg"
                 alt="Vvelit esse cillum dolore" title="Vvelit esse cillum dolore">
        </a>

        <div class="center_block">
            <div class="product_flags clearfix">

                                <span class="availability title_shop">В наличии
                </span>
            </div>
            <div class="clear"></div>
            <h5>
                <a class="product_link"
                   href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=4&amp;controller=product&amp;id_lang=3"
                   title="Vvelit esse cillum dolore">Vvelit esse cillum dolore</a></h5>

            <p class="product_desc">It is vitally important to build strong and reliable relationship with the client
                and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our
                store more comfortable and pleasant. Considering our huge experience we improve our servicing, products'
                quality, implement new technologies and of course care about environmental part of our job.</p>

            <p class="product_desc mob">It is vitally important to build strong and reliable relationship with the
                client and...</p>

            <p class="product_desc mob2">It is vitally important to build strong and reliable relationship with the
                client and this is a cornerstone of our philosophy. We are trying to do our best in making your...</p>
        </div>
        <div class="right_block">
            <span class="price">$120.75</span>

            <p class="compare checkbox choices-thin clearfix hidden-xs">

            <div class="checker" id="uniform-comparator_item_4"><span><input type="checkbox" class="comparator"
                                                                             id="comparator_item_4"
                                                                             value="comparator_item_4"
                                                                             autocomplete="off"></span></div>
            <label for="comparator_item_4">Выбрать для сравнения</label></p>
            <div class="clear noneclass"></div>
            <a class="ajax_add_to_cart_button btn btn-default exclusive btn_add_cart" rel="ajax_id_product_4"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart&amp;add=1&amp;id_product=4&amp;token=213cce55976f5986362d66382011efe4"
               title="В корзину">
                <span>В корзину</span>
            </a>

            <a class="btn btn-default button"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=4&amp;controller=product&amp;id_lang=3"
               title="Подробнее">Подробнее</a>
        </div>
    </div>
</li>


<li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-5 last_line first_item_of_tablet_line last_tablet_line">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span class="new">Новый!</span>
        </div>
        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=5&amp;controller=product&amp;id_lang=3"
           class="product_img_link" title="Excepteur sint occaecat">
            <img src="http://livedemo00.template-help.com/prestashop_48520/img/p/2/9/29-home_default.jpg"
                 alt="Excepteur sint occaecat" title="Excepteur sint occaecat">
        </a>

        <div class="center_block">
            <div class="product_flags clearfix">

                                <span class="availability title_shop">В наличии
                </span>
            </div>
            <div class="clear"></div>
            <h5>
                <a class="product_link"
                   href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=5&amp;controller=product&amp;id_lang=3"
                   title="Excepteur sint occaecat">Excepteur sint occaecat</a></h5>

            <p class="product_desc">It is vitally important to build strong and reliable relationship with the client
                and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our
                store more comfortable and pleasant. Considering our huge experience we improve our servicing, products'
                quality, implement new technologies and of course care about environmental part of our job.</p>

            <p class="product_desc mob">It is vitally important to build strong and reliable relationship with the
                client and...</p>

            <p class="product_desc mob2">It is vitally important to build strong and reliable relationship with the
                client and this is a cornerstone of our philosophy. We are trying to do our best in making your...</p>
        </div>
        <div class="right_block">
            <span class="price">$135.15</span>

            <p class="compare checkbox choices-thin clearfix hidden-xs">

            <div class="checker" id="uniform-comparator_item_5"><span><input type="checkbox" class="comparator"
                                                                             id="comparator_item_5"
                                                                             value="comparator_item_5"
                                                                             autocomplete="off"></span></div>
            <label for="comparator_item_5">Выбрать для сравнения</label></p>
            <div class="clear noneclass"></div>
            <a class="ajax_add_to_cart_button btn btn-default exclusive btn_add_cart" rel="ajax_id_product_5"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart&amp;add=1&amp;id_product=5&amp;token=213cce55976f5986362d66382011efe4"
               title="В корзину">
                <span>В корзину</span>
            </a>

            <a class="btn btn-default button"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=5&amp;controller=product&amp;id_lang=3"
               title="Подробнее">Подробнее</a>
        </div>
    </div>
</li>


<li class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 num-6 omega last_line last_item_of_tablet_line last_tablet_line">
    <div class="inner_content clearfix">
        <div class="new-box"><span class="before"></span><span class="after"></span><span class="new">Новый!</span>
        </div>
        <a href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=6&amp;controller=product&amp;id_lang=3"
           class="product_img_link" title="Cupidatat non proident">
            <img src="http://livedemo00.template-help.com/prestashop_48520/img/p/3/6/36-home_default.jpg"
                 alt="Cupidatat non proident" title="Cupidatat non proident">
        </a>

        <div class="center_block">
            <div class="product_flags clearfix">

                                <span class="availability title_shop">В наличии
                </span>
            </div>
            <div class="clear"></div>
            <h5>
                <a class="product_link"
                   href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=6&amp;controller=product&amp;id_lang=3"
                   title="Cupidatat non proident">Cupidatat non proident</a></h5>

            <p class="product_desc">It is vitally important to build strong and reliable relationship with the client
                and this is a cornerstone of our philosophy. We are trying to do our best in making your presence at our
                store more comfortable and pleasant. Considering our huge experience we improve our servicing, products'
                quality, implement new technologies and of course care about environmental part of our job.</p>

            <p class="product_desc mob">It is vitally important to build strong and reliable relationship with the
                client and...</p>

            <p class="product_desc mob2">It is vitally important to build strong and reliable relationship with the
                client and this is a cornerstone of our philosophy. We are trying to do our best in making your...</p>
        </div>
        <div class="right_block">
            <span class="price">$115.25</span>

            <p class="compare checkbox choices-thin clearfix hidden-xs">

            <div class="checker" id="uniform-comparator_item_6"><span><input type="checkbox" class="comparator"
                                                                             id="comparator_item_6"
                                                                             value="comparator_item_6"
                                                                             autocomplete="off"></span></div>
            <label for="comparator_item_6">Выбрать для сравнения</label></p>
            <div class="clear noneclass"></div>
            <a class="ajax_add_to_cart_button btn btn-default exclusive btn_add_cart" rel="ajax_id_product_6"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=cart&amp;add=1&amp;id_product=6&amp;token=213cce55976f5986362d66382011efe4"
               title="В корзину">
                <span>В корзину</span>
            </a>

            <a class="btn btn-default button"
               href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_product=6&amp;controller=product&amp;id_lang=3"
               title="Подробнее">Подробнее</a>
        </div>
    </div>
</li>

</ul>


<div class="bottom_pagination shop_box_row  clearfix">

    <script type="text/javascript">
        // <![CDATA[
        var min_item = "Выберите по крайней мере один товар";
        var max_item = "Нельзя добавить больше чем 2 товаров для сравнения";

        //]]>
    </script>
    <form class="form_compare hidden-xs" method="post"
          action="http://livedemo00.template-help.com/prestashop_48520/index.php?controller=products-comparison"
          onsubmit="true">
        <p>
            <input type="submit" id="bt_compare_bottom" class="button btn btn-default" value="Сравнить">
            <input type="hidden" name="compare_product_list" class="compare_product_list" value="">
        </p>
    </form>


    <!-- Pagination -->

    <div id="pagination_bottom" class="pagination">
        <ul class="pagination">
            <li id="pagination_previous" class="disabled"><span class="button">Назад</span></li>
            <li class="current pag-top"><span class="button">1</span></li>
            <li class="pag-top"><a class="button"
                                   href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=6&amp;controller=category&amp;id_lang=3#/page-2">2</a>
            </li>
            <li id="pagination_next" class="pagination_next"><a class="button"
                                                                href="http://livedemo00.template-help.com/prestashop_48520/index.php?id_category=6&amp;controller=category&amp;id_lang=3#/page-2">Далее</a>
            </li>
        </ul>

    </div>
    <!-- /Pagination -->

</div>

</div>

<!-- Right -->


</div>
</div>
</div>