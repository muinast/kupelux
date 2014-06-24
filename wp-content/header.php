<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage 24portal
 * @since 24portal 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/press.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/text.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/grid.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/layout.css" rel="stylesheet">
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div class="container_16">

<!-- header -->
<div class="grid_16 header alpha omega">
    <a href="<?php echo home_url(); ?>" class="logo">&nbsp;</a>
    <div class="title">
        Юридическая консультация онлайн (495)123-45-67 <span>(звонок бесплатный)</span>
    </div>
    <?php

    if (is_user_logged_in()) { ?>
        <div class="login-box">
            <form action="<?php echo wp_logout_url(); ?>" method="post">
                <span class="field">Добро пожаловать! Вы вошли как - <strong><?php $user = new WP_User( $user_ID ); echo $user->user_login; ?></strong></span>
                <button style="float: right; padding-right: 5px;" name="wp-submit">Выйти</button>
                <input type="hidden" name="redirect_to" value="<?php echo home_url(); ?>">
                <input type="hidden" name="testcookie" value="1">
            </form>
        </div>
    <?php } else { ?>
        <div class="reg-links"><a href="<?php echo home_url(); ?>/wp-login.php?action=lostpassword">Забыли пароль?</a> / <a href="<?php echo home_url(); ?>/wp-login.php?action=register">Регистрация</a></div>
        <div class="login-box">
            <form name="loginform" id="loginform" action="<?php echo home_url(); ?>/wp-login.php" method="post">
                <span class="field">Логин:</span>
                <span class="input"><input type="text" name="log" id="user_login"></span>
                <span class="field">Пароль:</span>
                <span class="input"><input type="password" name="pwd" id="user_pass"></span>
                <button name="wp-submit" id="wp-submit">Войти</button>
                <input type="hidden" name="redirect_to" value="<?php echo home_url(); ?>/wp-admin/">
                <input type="hidden" name="testcookie" value="1">
            </form>
        </div>
    <?php } ?>

</div>

<!-- header end -->

<!-- nav -->

<div class="nav grid_16 alpha omega">
    <ul>
        <li class="first"><a href="<?php echo home_url(); ?>"><span><em>Главная</em></span></a></li>
        <li><a href="<?php echo home_url(); ?>?page_id=88"><span><em>Новости</em></span></a></li>
        <li><a href="<?php echo home_url(); ?>?page_id=121"><span><em>Партнеры</em></span></a></li>
        <li><a href="<?php echo home_url(); ?>?page_id=123"><span><em>Каталог юристов</em></span></a></li>
        <li><a href="<?php echo home_url(); ?>?page_id=125"><span><em>Каталог вопросов</em></span></a></li>
        <li><a href="<?php echo home_url(); ?>?page_id=126"><span><em>Контакты</em></span></a></li>
        <?php if (is_user_logged_in()) { ?>
        <li><a href="<?php echo home_url(); ?>/wp-admin/"><span><em>Личный кабинет</em></span></a></li>
        <?php } ?>
        <li><a href="<?php echo home_url(); ?>?page_id=436"><span><em>ТОП-20</em></span></a></li>
    </ul>
    <?php
        get_search_form();
    ?>
</div>

<!-- nav end -->

<div class="clear"></div>