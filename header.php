<?php

/**
 *The Header.
 *
 * This is the template that displays the <head> section
 *
 * @package Wordpress
 * @subpackage Tega_Games
 * @since Tega_Games 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tega Chuks |Games & levels Design Portfolio </title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <?php wp_head(); ?>
</head>

<body>
    <div class="container-fluid tega-games">
        <div class="row site-row">
            <header class="col-12 mx-auto">
                <div id="navWrapper" class="col-12 nav-container">
                    <nav id="nav" role="navigation">
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php echo esc_html(get_bloginfo('name')); ?>
                            </a>
                        </h1>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-menu',
                            'menu_id' => 'menu'
                        ));
                        ?>
                    </nav>
                    <div class="show-mobile">
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php echo esc_html(get_bloginfo('name')); ?>
                            </a>
                        </h1>
                        <div id="mobileMenu" class="hamburger-menu">
                            <a href="#" id="menuButton" class="menuButton">
                                <span class="menuText">
                                    <b>menu</b>
                                </span>
                            </a>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'mobile-menu',
                                'menu_class' => 'sub-menu',
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </header>