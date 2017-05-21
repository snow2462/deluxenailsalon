<?php
/**
 * The Header for the theme.
 *
 * Displays all of the <head> section and logo, navigation, header widgets
 *
 * @package kale
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>

    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
    <style type="text/css">
        #container2 {
            overflow-x: hidden;
            width: 100%;
            position: relative;
            height: 47vh;
        }

        #main {
            min-height: 100%;
            top: 0;
        }
    </style>
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body id="container2" <?php body_class(); ?>>

<div id="main" class="main-wrapper">
    <div class="container">

        <!-- Header -->
        <div class="header">

            <?php if (is_active_sidebar('header-row-1-left') || is_active_sidebar('header-row-1-right')) { ?>
                <!-- Header Row 1 -->
                <div class="header-row-1">
                    <div class="row">

                        <!-- Widget / Social Menu -->
                        <div class="col-sm-6 header-row-1-left">
                            <?php if (is_active_sidebar('header-row-1-left')) { ?><?php dynamic_sidebar('header-row-1-left'); ?><?php } ?>
                        </div>
                        <!-- /Widget / Social Menu -->

                        <!-- Widget / Top Menu -->
                        <div class="col-sm-6 header-row-1-right">
                            <?php if (is_active_sidebar('header-row-1-right')) { ?><?php dynamic_sidebar('header-row-1-right'); ?><?php } ?>
                        </div>
                        <!-- /Widget / Top Menu -->

                    </div>
                </div>
                <div class="header-row-1-toggle"><i class="fa fa-angle-down"></i></div>
                <!-- /Header Row 1 -->
            <?php } ?>

            <!-- Header Row 2 -->
            <div class="header-row-2">
                <div class="logo">
                    <?php
                    if (kale_get_option('kale_image_logo_show') == 1) {
                        if (function_exists('the_custom_logo')) the_custom_logo();
                    } else {
                        $kale_text_logo = kale_get_option('kale_text_logo');
                        if ($kale_text_logo == '') $kale_text_logo = get_bloginfo('name');
                        ?>
                        <div class="header-logo-text lala"><a
                                    href="<?php echo home_url(); ?>"><?php echo esc_html($kale_text_logo) ?></a></div>
                    <?php } ?>
                </div>
                <?php if (display_header_text()) { ?>
                    <div class="tagline" style="font-size: 30px;"><?php $tagline = get_bloginfo('description');
                        if ($tagline != '') { ?><p><?php echo esc_html($tagline); ?></p><?php } ?></div>
                <?php } ?>
            </div>
            <!-- /Header Row 2 -->


            <!-- Header Row 3 -->
            <div class="header-row-3">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".header-row-3 .navbar-collapse" aria-expanded="false">
                            <span class="sr-only"><?php esc_html_e('Toggle Navigation', 'kale'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Navigation -->
                    <?php
                    $topMenu = array(
                        'menu' => 'TopMenu',
                        'container' => 'div',
                        'container_class' => 'navbar-collapse collapse',
                        'menu_class' => 'nav navbar-nav'
                    );
                    wp_nav_menu($topMenu);
                    ?>
                    <!-- /Navigation -->
                </nav>
            </div>
            <!-- /Header Row 3 -->
        </div>
        <!-- /Header -->
        

        